<?php

namespace App\Http\Controllers\Reservation;

use App\Http\Controllers\Controller;
use App\Mail\AcceptRequestEmail;
use App\Mail\RejectRequestEmail;
use App\Models\Account\User;
use App\Models\maqar\Provider;
use App\Models\maqar\Service;
use App\Models\maqar\workspace;
use App\Models\maqar\workspaceOffer;
use App\Models\Maqar\WorkspaceType;
use App\Models\reservation\order;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Reservation\Reservation;
use App\Models\Reservation\state as Mystate;

use App\Models\File\file;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class ReservationController extends Controller
{
    public function reservationCheck(Request $request)
    {
        $services = $request->input('services');
        $dateStart = $request->input('dateStart');
        $timeStart = $request->timeStart;
        $repeatDuration = $request->input('repeatDuration');
        $selectedServicesop = $request->input('servises');
        $workspaceOffer = workspaceOffer::find($request->workspaceOffer_id);
        $workspace = Workspace::find($workspaceOffer->workspace_id);
        $provider = Provider::find($workspace->provider_id);
        $firstWorkDay = $provider->startWorkDay;
        $lastWorkDay = $provider->endWorkDay; // استبدل هذا باليوم الأخير لفترة الدوام
        $checkAllowed = (($provider->endWorkHour - intval($timeStart)) >= intval($request->input('repeatDuration'))) ? true : false;
        $images = File::where('target_id', $workspaceOffer->Workspace->id)
            ->where('type', 'workspace')
            ->get();
        if (!$checkAllowed) {
            $isBooked = 2;
            return view('site.workspaceDetiles', compact('workspaceOffer', 'isBooked', 'images'));
        }
        if (auth()->check()) {
            if (!empty($dateStart) && !empty($timeStart)) {
                $dateTimeStart = Carbon::createFromFormat('Y-m-d H:i', $dateStart . ' ' . $timeStart . ':00');
                if ($request->duration == 'hour') {
                    $dateTimeEnd = $dateTimeStart->copy()->addHours($repeatDuration);
                } elseif ($request->duration == 'day') {
                    $dateTimeEnd = $dateTimeStart->copy()->addDays($repeatDuration);
                    $dateTimeEnd = $dateTimeEnd->copy()->setTimeFromTimeString($provider->endWorkHour);
                } elseif ($request->duration == 'week') {
                    $dateTimeEnd = $dateTimeStart->copy()->addWeeks($repeatDuration);
                    $dateTimeEnd = $dateTimeEnd->copy()->setTimeFromTimeString($provider->endWorkHour);
                } elseif ($request->duration == 'month') {
                    $dateTimeEnd = $dateTimeStart->copy()->addMonths($repeatDuration);
                    $dateTimeEnd = $dateTimeEnd->copy()->setTimeFromTimeString($provider->endWorkHour);
                }
                $reservations = DB::table('reservations')
                    ->where('workspaceoffer_id', $request->workspaceOffer_id)
                    ->where(function ($query) use ($dateTimeStart, $dateTimeEnd) {
                        $query->where(function ($query) use ($dateTimeStart, $dateTimeEnd) {
                            $query->where('start_date', '>=', $dateTimeStart)
                                ->where('start_date', '<=', $dateTimeEnd);
                        })->orWhere(function ($query) use ($dateTimeStart, $dateTimeEnd) {
                            $query->where('end_date', '>=', $dateTimeStart)
                                ->where('end_date', '<=', $dateTimeEnd);
                        })->orWhere(function ($query) use ($dateTimeStart, $dateTimeEnd) {
                            $query->where('start_date', '<=', $dateTimeStart)
                                ->where('end_date', '>=', $dateTimeEnd);
                        });
                    })
                    ->where(function ($query) {
                        $query->where('state_id', '!=', 4)
                            ->orWhere('state_id', 5);
                    })
                    ->get();
                $count = $reservations->count();
                if ($reservations->count() > 0) {
                    // المساحة محجوزة خلال الفترة المحددة
                    if ($workspaceOffer->workspace->workspaceType_id == 2 && $count < $workspaceOffer->workspace->maxPeople) {
                        // عدد الأفراد الحاجزين أقل من maxPeople
                        $repeatDuration = floatval($request->repeatDuration);
                        $offerPrice = floatval($workspaceOffer->price);
                        $totalOfferPrice = $offerPrice * $repeatDuration;

                        $reservation = Reservation::create([
                            'user_id' => Auth()->id(),
                            'workspaceoffer_id' => $request->workspaceOffer_id,
                            'state_id' => 1,
                            'start_date' => $dateTimeStart,
                            'end_date' => $dateTimeEnd,
                            'officPrice' => doubleval($totalOfferPrice)
                        ]);

                        $selectedServices = $request->input('servises');
                        if (!empty($selectedServices)) {
                            foreach ($selectedServices as $serviceId) {
                                $service = Service::find($serviceId);
                                Order::create([
                                    'service_id' => $serviceId,
                                    'reservation_id' => $reservation->id,
                                    'price' => $service->price,
                                ]);
                            }
                        }

                        $isBooked = 1;
                        return Redirect::route('offer.showDetials', ['name' => $workspace->name, 'id' => $reservation->id]);
                    } else {
                        // عدد الأفراد الحاجزين أكبر من أو يساوي maxPeople
                        $isBooked = 5;
                        return view('site.workspaceDetiles', compact('workspaceOffer', 'isBooked', 'images'));
                    }
                    // $isBooked = 0;
                    // return view('site.workspaceDetiles', compact('workspaceOffer', 'isBooked', 'images'));
                } else {
                    // المساحة غير محجوزة خلال الفترة المحددة
                    $repeatDuration = floatval($request->repeatDuration);
                    $Offer = workspaceOffer::where('id', $request->workspaceOffer_id)->first();
                    $offerPrice = floatval($Offer->price);
                    $totalOfferPrice = $offerPrice * $repeatDuration;
                    $reservation = Reservation::create([
                        'user_id' => Auth()->id(),
                        'workspaceoffer_id' => $request->workspaceOffer_id,
                        'state_id' => 1,
                        'start_date' => $dateTimeStart,
                        'end_date' => $dateTimeEnd,
                        'officPrice' => doubleval($totalOfferPrice)
                    ]);
                    $selectedServicesop = $request->input('servises');
                    if (!empty($selectedServicesop)) {
                        foreach ($selectedServicesop as $serviceId) {
                            $service = Service::find($serviceId);
                            order::create([
                                'service_id' => $serviceId,
                                'reservation_id' => $reservation->id,
                                'price' => $service->price,
                            ]);
                        }
                    }
                    $isBooked = 1;
                    return Redirect::route('offer.showDetials', ['name' => $workspace->name, 'id' => $reservation->id]);
                }
            }
        } else {
            return view('site/account/signin');
        }
    }
    public function Reservations()
    {
        $provider = Provider::where('user_id', auth()->user()->id)->first();
        $workspaces = workspace::where('provider_id', $provider);
        if ($provider) {
            $reservations = Reservation::whereIn('workspaceoffer_id', function ($query) use ($provider) {
                $query->select('id')
                    ->from('workspace_offers')
                    ->whereIn('workspace_id', function ($query) use ($provider) {
                        $query->select('id')
                            ->from('workspaces')
                            ->where('provider_id', $provider->id);
                    });
            })->latest()->paginate(10);


            $states = Mystate::all();
            return view('tenant.booking.index', compact('reservations', 'states'));
        } else {
            // المزود غير موجود
        }
    }
    public function ReservationView($site, $id)
    {
        $reservation = Reservation::find($id);

        return view('tenant.booking.view', compact('reservation'));
    }
    public function Reservationconfirm($site, $id)
    {
        $reservation = Reservation::find($id);
        // dd($reservation);
        $user = User::find($reservation->user_id);
        $reservation->state_id = 3;
        $reservation->save();
        $email = new AcceptRequestEmail($user->email, "تم قبول  حجزك بنجاح", 'قبول طلب الحجز', $reservation);
        Mail::to($user->email)->send($email);
        return redirect()->back()->with('done', 'تم تاكيد الحجز بنجاح');
    }
    public function ReservationReject(Request $request)
    {
        $reservation = Reservation::find($request->id);
        // dd($reservation);
        $user = User::find($reservation->user_id);
        $reservation->state_id = 5;
        $reservation->save();
        $email = new RejectRequestEmail($user->email, $request->reply, $reservation);
        Mail::to($user->email)->send($email);
        return redirect()->back()->with('reject', 'تم رفض الحجز بنجاح');
    }

    public function showDetials($name, $id)
    {
        $reservation = reservation::findOrFail($id);
        $images = File::where('target_id', $reservation->workspaceOffer->Workspace->id)
            ->where('type', 'workspace')
            ->get();
        return view('client.booking.checkout', compact('reservation', 'name', 'images'));
    }
    public function checkout(Request $request)
    {
        $rules = [
            'voucher' => 'required|file|mimes:jpeg,png,jpg|max:2048',
        ];

        $messages = [
            'voucher.required' =>  'يجب ادخال السند',
            'voucher.mimes' =>  'يجب ادخال صورة او ملف pdf',
            'voucher.max' =>  'حجم الصورة كبيرة',


        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('voucher')) {
            $voucher = $request->file('voucher');
            $currentDate = Carbon::now()->format('Ymd_His');
            $newImageName = $currentDate . '_' . $voucher->getClientOriginalName();
            $voucher->storeAs('voucher', $newImageName, 'public');
            $reservation = Reservation::find($request->reservation_id);
            if ($reservation) {
                $reservation->state_id = 2;
                $reservation->voucher = $newImageName;
                $reservation->save();
                return view('client.booking.underReview');
            }
        }
    }
    public function cansel(Request $request)
    {
        $reservation = Reservation::find($request->reservation_id);
        if ($reservation) {
            $reservation->state_id = 4;
            $reservation->save();
            return view('client.booking.cancel');
        }
    }
    public function myReservations()
    {
        // $reservations = Reservation::where('user_id', auth()->user()->id)->paginate(10);
        $reservations = Reservation::where('user_id', auth()->user()->id)
            ->latest() // يجيب الحجوزات الأحدث أولاً
            ->paginate(10);
        return view('client.booking.myReservations', compact('reservations'));
    }
    public function search()
    {
        $reservations = Reservation::where('user_id', auth()->user()->id)
            ->latest() // يجيب الحجوزات الأحدث أولاً
            ->paginate(10);
        return view('client.booking.myReservations', compact('reservations'));
    }
}
