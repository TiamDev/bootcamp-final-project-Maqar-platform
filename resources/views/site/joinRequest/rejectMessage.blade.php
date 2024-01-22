@extends('layouts.front')
@section('content')
    <div class="container img-box-container">
        <div class="background-images">
            <div class="">
                <img src="{{ asset('site/img/ill/3d-casual-life-office-building.png') }}" alt="Background Image 1">
            </div>
            <div class="">

                <img src="{{ asset('site/img/ill/3d-casual-life-office-chairs-board-table-laptops.png') }}" width="320"
                    alt="Background Image 2">
            </div>
        </div>
        <div class="card card-login" dir="rtl">
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ asset('admin/img/logo.png') }}" width="200" alt="">
                    <h5 class="card-title"></h5>
                </div>
                <div class="text-center">
                    <h3 class="tx-center"></h3>
                    <p class="tx-center">تم رفض طلب الانضمام لمنصة مقر ارجو مراجعة الايميل</p>
                    <a href="{{ route('home') }}" class="btn-dashMain">الرجوع الى الرئيسية<i
                            class="bi bi-arrow-left-short "></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
    </main><!-- End #main -->
@endsection
