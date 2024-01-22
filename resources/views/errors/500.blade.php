@extends('layouts.site')
@section('content')
    <div class="centered-container">
        <div class="image-container ">
            <img class="w-75 pt-5" src="{{ asset('site/img/ill/3d-casual-life-chatgpt-robot-sad.png') }}" alt="Image">
        </div>
        <h1>500</h1>
        <h4>{{ $message }}</h4>
        <a href="{{ route('home') }}">الرجوع الى الرئيسيه</a>
    </div>
@endsection
