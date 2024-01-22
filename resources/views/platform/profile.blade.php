@extends('layouts.platform')
@section('content')
    <main id="main" class="main">
        @php
            $rolelabel = $user->roles()->first()->label;
            $roleName = $user->roles()->first()->name;
        @endphp
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">الملف الشخصي </li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section  ">
            <div class="row">
                <div class="col">
                    <div class=" px-5" dir="rtl">
                        <div class="">
                            <section class="section profile">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="card">
                                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                                <img src="{{ asset('site/img/ill/3d-casual-life-surfing-the-web.png') }}"
                                                    alt="Profile">
                                                <h2>{{ $user->name }}</h2>
                                                <h3>{{ $rolelabel }}</h3>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="card">
                                            <div class="card-body pt-3">
                                                <h4 class="card-title">الحساب التعريفي</h4>
                                                <!-- Bordered Tabs -->
                                                <ul class="nav nav-tabs nav-tabs-bordered">
                                                    <li class="nav-item">
                                                        <button class="nav-link active" data-bs-toggle="tab"
                                                            data-bs-target="#profile-overview">بيانات الحساب</button>
                                                    </li>
                                                    <li class="nav-item">
                                                        <button class="nav-link" data-bs-toggle="tab"
                                                            data-bs-target="#profile-edit">تعديل بياناتي</button>
                                                    </li>
                                                </ul>
                                                <div class="tab-content pt-2">
                                                    <div class="tab-pane fade show active profile-overview"
                                                        id="profile-overview">
                                                        {{-- <h5 class="card-title">Profile Details</h5> --}}
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-4 label ">الاسم</div>
                                                            <div class="col-lg-9 col-md-8">{{ $user->name }}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-4 label">رقم الهاتف</div>
                                                            <div class="col-lg-9 col-md-8">{{ $user->phone }}</div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-4 label">الايميل</div>
                                                            <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                                                        </div>

                                                    </div>

                                                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                                        <!-- Profile Edit Form -->
                                                        <form action="{{ route('profile.update') }}" method="POST">
                                                            @csrf
                                                            <div class="row mb-3">
                                                                <label for="fullName"
                                                                    class="col-md-4 col-lg-3 col-form-label">الاسم</label>
                                                                <div class="col-md-8 col-lg-9">
                                                                    <input name="name" type="text"
                                                                        class="form-control" id="fullName"
                                                                        value="{{ $user->name }}">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="Phone"
                                                                    class="col-md-4 col-lg-3 col-form-label">رقم
                                                                    الهاتف</label>
                                                                <div class="col-md-8 col-lg-9">
                                                                    <input name="phone" type="text"
                                                                        class="form-control" id="Phone"
                                                                        value="{{ $user->phone }}">
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label for="Email"
                                                                    class="col-md-4 col-lg-3 col-form-label">الايميل</label>
                                                                <div class="col-md-8 col-lg-9">
                                                                    <input name="email" type="email"
                                                                        class="form-control" id="Email"
                                                                        value="{{ $user->email }}">
                                                                </div>
                                                            </div>

                                                            <div class="text-center">
                                                                <button type="submit" class="btn-dasMain">حفظ
                                                                    التغيرات</button>
                                                            </div>
                                                        </form><!-- End Profile Edit Form -->
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
    </main>
@endsection
