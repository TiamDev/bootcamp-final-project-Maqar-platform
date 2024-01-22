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
        @foreach ($reservations as $reservation)
            <div class="dashboard">
                <div class="row" dir="rtl">
                    <div class="col-xxl-12 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title"> {{ $reservation->id }} فاتورة <span>|
                                        {{ $reservation->state->title }}</span></h5>
                                <div class="row">
                                    <div class="col-11">
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center ms-4">
                                                <i class="bi bi-cash"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6> {{ $reservation->workspaceoffer->workspace->provider->title }}</h6>
                                                <span
                                                    class="text-success small pt-1 fw-bold">{{ $reservation->workspaceoffer->workspace->title }}</span>
                                                <span class="text-muted small pt-2 ps-1"></span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="col-1 ">
                                            <a href="{{ route('client.invoice.view', ['id' => $reservation->id]) }}"
                                                class=" fs-4"><i class="bi bi-link"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
        @include('common.pagination', ['paginator' => $reservations])

    </main>
@endsection
