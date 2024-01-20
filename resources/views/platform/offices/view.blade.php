@extends('layouts.platform')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">تفاصيل المقر</li>
                    <li class="breadcrumb-item "><a href="{{ route('platform.provider') }}">مقار</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('platform.dashboard') }}">الرئيسية</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col">
                    <div class=" px-5" dir="rtl">
                        <div class="">
                            <section class="section profile">
                                <div class="row">
                                    <div class="col-xl-8">
                                        <div class="card">
                                            <div class="card-body pt-3">
                                                <!-- Bordered Tabs -->
                                                <div class="tpt-2">
                                                    <div class=" profile-overview" id="profile-overview">
                                                        <h4 class="card-title">تفاصيل المقر</h4>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-4 label "> الاسم </div>
                                                            <div class="col-lg-9 col-md-8">{{ $provider->title }}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-4 label "> الاسم(بالانجليزي)
                                                            </div>
                                                            <div class="col-lg-9 col-md-8">{{ $provider->name }}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-4 label">العنوان</div>
                                                            <div class="col-lg-9 col-md-8">
                                                                {{ $provider->directorate->governorate->name }} -
                                                                {{ $provider->directorate->name }} -
                                                                {{ $provider->address }}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-4 label">رقم الهاتف</div>
                                                            <div class="col-lg-9 col-md-8"> {{ $provider->phone }}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-4 label">الايميل</div>
                                                            <div class="col-lg-9 col-md-8">{{ $provider->email }}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-4 label mb-3">السجل التجاري</div>
                                                            <div class="col-12 "><img
                                                                    src="{{ asset('storage/tradeDocument/' . $provider->tradeDocument) }}"
                                                                    alt="Profile" class="w-100"></div>
                                                        </div>
                                                    </div>
                                                </div><!-- End Bordered Tabs -->
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-4">
                                        <div class="card">
                                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                                <img src="{{ asset('storage/logo/' . $provider->logo) }}" alt="Profile"
                                                    class="rounded-circle mb-3">
                                                <h2>اسم المكتب</h2>
                                                <h3>{{ $provider->title }}</h3>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body pt-3">
                                                <!-- Bordered Tabs -->
                                                <div class="tpt-2">
                                                    <div class=" profile-overview" id="profile-overview">
                                                        <h5 class="card-title">تفاصيل المالك</h5>
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 label "> الاسم </div>
                                                            <div class="col-lg-8 col-md-8">{{ $user->name }}</div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 label">رقم </div>
                                                            <div class="col-lg-8 col-md-8"> {{ $user->phone }}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-6 label "> رقم الهوية </div>
                                                            <div class="col-lg-8 col-md-6">{{ $provider->identity_NO }}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 label">الايميل</div>
                                                            <div class="col-lg-8 col-md-8">{{ $user->email }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- End Bordered Tabs -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
