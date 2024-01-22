@extends('layouts.site')
@section('content')
    <div class="centered-container">
        <div class="image-container ">
            <img class="w-75" src="{{ asset('site/img/ill/3d-casual-life-chatgpt-robot-sad.png') }}" alt="Image">
        </div>
        <h1>404</h1>
        <h5>الصفحة غير موجودة<h5>
                <a href="{{ route('home') }}">الرجوع الى الرئيسيه</a>
    </div>
@endsection
