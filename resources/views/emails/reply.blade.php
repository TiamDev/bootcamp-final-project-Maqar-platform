@extends('layouts.front')
@section('content')
    <div class="card card-login" dir="rtl">
        <div class="card-body">
            <div class="text-center">
                <img src="{{ asset('admin/img/logo.png') }}" width="200" alt="">
                <h5 class="card-title"></h5>
            </div>
            <div class="text-center">
                <h3 class="tx-center"></h3>
                <p style="text-align:center; font-size:20px "> {{ $reply }} </p>
                <br>
                <p>
                    اطيب التحيات
                </p>
                <p> فريق منصة مقر
                </p>
                <a href="{{ route('home') }}"
                    style="
                    color: #015657; !important;
                    display:block;
                    margin: 10px 5px;
                    text-decoration: none;
                    font-size:20px;
                    border: none;">الرجوع
                    الى الرئيسية<i class="bi bi-arrow-left-short "></i>
                </a>
            </div>

        </div>
    </div>
    </div>
@endsection
