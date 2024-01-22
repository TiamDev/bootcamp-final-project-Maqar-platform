@extends('layouts.platform')
@section('content')
    <main id="main">

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">فواتيري</li>
                    <li class="breadcrumb-item"><a href="{{ route('client.dashboard') }}">الرئيسية</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="dashboard">
            <div class="row" dir="rtl">
                <div class="col-xxl-12 col-md-6">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $reservation->id }} فاتورة <span>|
                                    {{ $reservation->state->title }}</span></h5>
                            <div class="row">
                                <div class="col-112">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center ms-4">
                                            <i class="bi bi-cash"></i>
                                        </div>
                                        <div class="ps-3 ">
                                            <h6><a href="{{ route('tenant.site', ['site' => $reservation->workspaceoffer->workspace->provider->name]) }}"
                                                    class="link-details" title="تفاصيل المكتب">
                                                    {{ $reservation->workspaceoffer->workspace->provider->title }}
                                                </a>
                                            </h6>
                                            </span>
                                            <span class="text-success small pt-1 ">
                                                تاريخ البداية :<span>{{ $reservation->start_date }}</span> |
                                                تاريخ النهاية :<span>{{ $reservation->end_date }}</span>

                                            </span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <section class=" p-4" dir="rtl">
                                    <table class="table" id="invoice">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="bg-total">#</th>
                                                <th scope="col" class="w-75 bg-total">اسم الخدمة</th>
                                                <th scope="col" class="bg-total">السعر
                                                    ({{ $reservation->workspaceOffer->workspace->provider->currency }})</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $totalPrice = floatval($reservation->officPrice);
                                                $counter = 1;
                                            @endphp

                                            <tr>
                                                <th scope="row">{{ $counter }}</th>
                                                <td>{{ $reservation->workspaceOffer->workspace->title }}</td>
                                                <td>{{ $reservation->officPrice }}</td>
                                            </tr>
                                            @foreach ($reservation->orders as $order)
                                                <tr>
                                                    <th scope="row">{{ ++$counter }}</th>
                                                    <td>{{ $order->service->name }}</td>
                                                    <td>{{ $order->service->price }}</td>
                                                </tr>
                                                @php
                                                    $totalPrice += floatval($order->service->price);
                                                @endphp
                                            @endforeach


                                        </tbody>
                                        <tfoot class="total">
                                            <th colspan="2 " class="fs-5 bg-total">الاجمالي</th>
                                            <th class="darkColor bg-total fs-4">{{ $totalPrice }}
                                                {{ $reservation->workspaceOffer->workspace->provider->currency }}</th>
                                        </tfoot>
                                    </table>
                                    <div>
                                        @if ($reservation->state->id == 3)
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M20.3 6.3l-10 10c-.4.4-1 .4-1.4 0l-4-4c-.4-.4-.4-1 0-1.4l1.4-1.4c.4-.4 1-.4 1.4 0L10 13.6l8.3-8.3c.4-.4 1-.4 1.4 0l1.4 1.4c.5.4.5 1 0 1.3z"
                                                        fill="#53ad90" />
                                                </svg>
                                                <span class="mainColor">تم قبول السند ودفع المبلغ</span>
                                            </div>
                                        @endif
                                        <a href="{{ route('client.invoice') }}" class="btn-dasMain">رجوع</a>
                                    </div>
                                </section>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </main>
@endsection
