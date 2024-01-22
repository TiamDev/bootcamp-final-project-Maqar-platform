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
        @endphp
        <section class="dash-section">
            <div class=" dash-box ">
                <div class="row">
                    <div class="col-8 my-auto">
                        <h1>مدير المنصة</h1>
                        <p class="mainColor pe-3 fs-4">اهلا <span>{{ $user->name }} </span></p>
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('site/img/ill/3d-casual-life-happy-man-and-website-window-in-laptop.png') }}"
                            class="" style="margin-top:-70px ;width:85%" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="main-container">
                <div class="cards" dir="rtl">
                    <div class="card-home2 card-1">
                        <div class="card__icon"><i class="bi bi-grid"></i></div>
                        <h2 class="card__title"> المقار
                        </h2>
                        <p class="card__apply2 ">{{ $providersCount }} </p>
                    </div>
                    <div class="card-home2 card-3">
                        <div class="card__icon"><i class="bi bi-people"></i></div>
                        <h2 class="card__title"> المستخدمين
                        </h2>
                        <p class="card__apply2 ">{{ $userCount }} </p>
                    </div>
                    <div class="card-home2 card-2">
                        <div class="card__icon"><i class="bi bi-bookmark-check"></i></div>
                        <h2 class="card__title"> الحجوزات في المنصة
                        </h2>
                        <p class="card__apply2">{{ $reservationCount }}</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
