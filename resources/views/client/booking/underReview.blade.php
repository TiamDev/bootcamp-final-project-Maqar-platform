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
                    <img class="ps-4" src="{{ asset('site/img/ill/3d-casual-life-workspace-with-computer-desktop.png') }} "
                        alt="صورة">
                    <h4>اهلا {{ $user->name }}</h4>
                    <p>تم استلام طلبك بنجاح ,سيتم الرد عليك في اقرب وقت ممكن عبر البريد الالكتروني الذي قدمته يمكنك مراجعه
                        حالة الحجز من خلال <a href="{{ route('client.myReservations') }}">الحجوزات </a> ايضا.</p>
                    <a href="{{ route('client.dashboard') }}"> <i class="bi bi-arrow-left"></i>
                        الرجوع الى لوحة التحكم</a>
                </div>
            </div>
        </div>
    </main><!-- End #main -->

    </body>

    </html>
@endsection
