@extends('layouts.platform')
@section('content')
    <main id="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">حجوزاتي</li>
                    <li class="breadcrumb-item"><a href="{{ route('client.dashboard') }}">الرئيسية</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        @foreach ($reservations as $reservation)
            <div class="dashboard">
                <div class="row" dir="rtl">
                    <div class="col-xxl-12 col-md-6">
                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title"> {{ $reservation->id }} حجز <span>|
                                        {{ substr($reservation->start_date, 0, 10) }}</span>
                                    <span class="">|
                                        فترة بال{{ $reservation->workspaceOffer->workspaceDuration->title }}</span>
                                </h5>
                                <div class="row">
                                    <div class="col-10">
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center ms-4">
                                                <i class="bi bi-puzzle-fill"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>مقر {{ $reservation->workspaceOffer->workspace->provider->title }}
                                                    - {{ $reservation->workspaceOffer->workspace->title }} </h6>

                                                <span
                                                    class="text-secondary  pt-1 pe-1 fw-bold">{{ $reservation->state->title }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($reservation->state->id == 1)
                                        <div class="col-2">
                                            <div class="row">
                                                <div class="col-12 ">
                                                    <a href="{{ route('offer.showDetials', ['name' => $reservation->workspaceOffer->workspace->name, 'id' => $reservation->id]) }}"
                                                        class=""> تاكيد </a>|
                                                    <form class="d-inline-block"
                                                        action="{{ route('offer.cansel', ['name' => $reservation->workspaceOffer->workspace->name]) }}"
                                                        method="post">
                                                        @csrf
                                                        <input type="hidden" name="reservation_id"
                                                            value="{{ $reservation->id }}">
                                                        <button type="submit" class="cancel-btn">إلغاء</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

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
