<?php

namespace App\Http\Controllers\Reservation;

use App\Http\Controllers\Controller;
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
use Illuminate\Support\Facades\Redirect;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class ReservationController extends Controller
{
    public function reservationCheck(Request $request)
    {
        // $rules = [
        //     'dateStart' => 'required',
        //     'dateEnd' => 'required',
        //     'repeatDuration' => 'required',
        // ];
        // $messages = [
        //     'dateStart.required' => ' .الحقل مطلوب',
        //     'dateEnd.required' => ' .الحقل مطلوب',
        //     'repeatDuration.required' => ' .الحقل مطلوب',

        // ];
        // $validator = Validator::make($request->all(), $rules, $messages);
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        // dd($request);
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
                if ($reservations->count() > 0) {
                    // المساحة محجوزة خلال الفترة المحددة
                    $isBooked = 0;
                    return view('site.workspaceDetiles', compact('workspaceOffer', 'isBooked', 'images'));
                } else {
                    // المساحة غير محجوزة خلال الفترة المحددة
                    $repeatDuration = floatval($request->repeatDuration);
                    $Offer = workspaceOffer::where('id', $request->workspaceOffer_id)->first();
                    $offerPrice = floatval($Offer->price);
                    $totalOfferPrice = $offerPrice * $repeatDuration;
                    $reservation = Reservation::create([
                        'user_id' => Auth()->id(), // قم بتعيين قيمة user_id هنا
                        'workspaceoffer_id' => $request->workspaceOffer_id, // قم بتعيين قيمة workspaceoffer_id هنا
                        'state_id' => 1, // قم بتعيين قيمة state_id هنا
                        //'voucher_id' => 4, // قم بتعيين قيمة voucher_id هنا
                        'start_date' => $dateTimeStart, // قم بتعيين قيمة start_date هنا
                        'end_date' => $dateTimeEnd, // قم بتعيين قيمة end_date هنا
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
                    // return view('client.booking.checkout', compact('reservation'));
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
            })->get();
            $states = Mystate::all();
            return view('tenant.booking.index', compact('reservations', 'states'));
        } else {
            // المزود غير موجود
        }
    }
    public function ReservationView()
    {
        return view('tenant.booking.view');
    }
    public function ReservationReject()
    {
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
            'voucher' => 'required',
        ];

        $messages = [
            'voucher.required' =>  'يجب ادخال السند',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $reservation = Reservation::find($request->reservation_id);
        if ($reservation) {
            $reservation->state_id = 2;
            $reservation->voucher = $request->voucher;
            $reservation->save();
            return view('client.booking.underReview');
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
            ->latest() // يجلب الحجوزات الأحدث أولاً
            ->paginate(10);
        return view('client.booking.myReservations', compact('reservations'));
    }
}
