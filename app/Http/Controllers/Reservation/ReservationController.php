<?php

namespace App\Http\Controllers\Reservation;

use App\Http\Controllers\Controller;
use App\Models\maqar\Service;
use App\Models\maqar\workspaceOffer;
use App\Models\reservation\order;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Reservation\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        // استمرار المنطق اللازم لحفظ البيانات ومعالجتها
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        $services = $request->input('services');
        $dateStart = $request->input('dateStart');
        $timeStart = $request->timeStart;

        // $timeStart = 8 . ':00';

        // dd($timeStart);
        $repeatDuration = $request->input('repeatDuration');
        dd($request);
        $selectedServicesop = $request->input('servises');
        if (auth()->check()) {
            if (!empty($dateStart) && !empty($timeStart)) {
                $dateTimeStart = Carbon::createFromFormat('Y-m-d H:i', $dateStart . ' ' . $timeStart . ':00');
                if ($request->duration == 'hour') {
                    $dateTimeEnd = $dateTimeStart->copy()->addHours($repeatDuration);
                } elseif ($request->duration == 'day') {
                    $dateTimeEnd = $dateTimeStart->copy()->addDays($repeatDuration);
                } elseif ($request->duration == 'week') {
                    $dateTimeEnd = $dateTimeStart->copy()->addWeeks($repeatDuration);
                } elseif ($request->duration == 'month') {
                    $dateTimeEnd = $dateTimeStart->copy()->addMonths($repeatDuration);
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
                    ->get();
                if ($reservations->count() > 0) {
                    // المساحة محجوزة خلال الفترة المحددة
                    return redirect()->route('offer.details')->withErrors(['error' => 'الفترة محجوزة ارجو اختيار فترة اخرى ']);
                    // اتخذ الإجراء المناسب هنا
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
                        'officPrice' => floatval($totalOfferPrice)
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
                    // return " غير محجوزة";
                    $response = [
                        'success' => true,
                        'message' => 'تم التحقق من البيانات بنجاح'
                    ];

                    return response()->json($response);
                }
                // استخدم $dateTimeStart كما تحتاج
            } else {
                // إعطاء رسالة خطأ أو التعامل مع حالة القيم الغير صحيحة
            }


            // $timestamp = $dateTimeStart->timestamp;
            // $booking = 1;

        } else {
            return view('site/account/signin');
        }
    }
    public function reservationCheck2()
    {
        $response = [
            'success' => false,
            'message' => 'تم التحقق من البيانات 000'
        ];
    }
}
