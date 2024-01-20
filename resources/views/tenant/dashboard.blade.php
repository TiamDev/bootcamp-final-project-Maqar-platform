@extends('layouts.platform')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">لوحة التحكم </li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        @php
            $user = auth()->user();
            $count = 1;
        @endphp

        <section class="dash-section">

            <div class=" dash-box ">
                <div class="row">
                    <div class="col-8 my-auto">
                        <p class="mainColor pe-3 fs-4">اهلا <span>{{ $user->name }} </span></p>
                        <h1>دعنا نجد مساحة العمل المناسبة لك .</h1>
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('site/img/ill/3d-casual-life-online-video-conference-in-office.png') }}"
                            class="" style="margin-top:-60px ;width:100%" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="main-container">
                <div class="cards" dir="rtl">
                    <div class="card-home card-1">
                        <div class="card__icon"><i class="bi bi-grid"></i></div>
                        <p class="card__exit"><i class="bi bi-x"></i></p>
                        <h2 class="card__title">عدد المساحات
                        </h2>
                        <p class="card__apply">{{ }} </p>

                        {{-- <p class="card__apply">
                                <a class="card__link" href="#">احجز الان <i class="fas fa-arrow-right"></i></a>
                            </p> --}}
                    </div>
                    <div class="card-home card-2">
                        <div class="card__icon"><i class="bi bi-grid"></i></div>
                        <p class="card__exit"><i class="bi bi-x"></i></p>
                        <h2 class="card__title">عدد الحجوزات
                        </h2>
                        <p class="card__apply">{{ }} </p>

                        {{-- <p class="card__apply">
                              <a class="card__link" href="#">احجز الان <i class="fas fa-arrow-right"></i></a>
                          </p> --}}
                    </div>

                </div>
            </div>
        </section>


    </main>
    {{-- <main id="main" class="main"> --}}
@endsection
