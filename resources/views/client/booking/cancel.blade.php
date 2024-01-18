@extends('layouts.platform')
@section('content')
    <main id="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"> رسالة </li>
                    <li class="breadcrumb-item"><a href="{{ route('client.dashboard') }}">الرئيسية</a></li>
                </ol>
            </nav>
            <div class="container img-box-container">
                @php
                    $user = auth()->user();
                @endphp
                <div class="card custom-card">
                    <img class="ps-4" src="{{ asset('site/img/ill/3d-casual-life-office-composition.png') }} "
                        alt="صورة">
                    {{-- <h2>اهلا {{ $user->name }}</h2> --}}
                    <h5>تم الغاء الحجز بنجاح</h5>
                    <a href="{{ route('client.dashboard') }}"> <i class="bi bi-arrow-left"></i>
                        الرجوع الى لوحة التحكم</a>
                </div>
            </div>
        </div>
    </main><!-- End #main -->

    </body>

    </html>
@endsection
