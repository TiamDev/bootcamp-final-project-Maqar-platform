@extends('layouts.platform')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">المساحات</li>
                    <li class="breadcrumb-item"><a href="{{ route('platform.dashboard') }}">الرئيسية</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="row" dir="rtl">
            @foreach ($providers as $provider)
                <div class="col-lg-3">
                    <div class="mycontainer">
                        <div class="mycard">
                            <div class="card__border">
                                <img src="{{ asset('storage/logo/' . $provider->logo) }}" alt="card image"
                                    class="card__img">
                            </div>
                            <h3 class="card__name">{{ $provider->title }}</h3>
                            <span class="card__profession">{{ $provider->directorate->governorate->name }} -
                                {{ $provider->directorate->name }}<i class="bi bi-geo-fill"></i></span>
                            <p class="">عضو</p>
                            <div class="card__social" id="card-social">
                                <div class="card__social-control">
                                    <!-- Card social -->
                                    <ul class="card__social-list2" dir="rtl">
                                        <a href="{{ route('platform.view', ['name' => $provider->name]) }}"
                                            class="card__social-link  "data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="تفاصيل المكتب">
                                            <i class="bi bi-link" style="  margin-bottom: -3px; "></i>
                                        </a>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
        @include('common.pagination', ['paginator' => $providers])

    </main>
@endsection
