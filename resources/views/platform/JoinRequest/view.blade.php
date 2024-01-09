@extends('layouts.platform')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>عرض</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">عرض </li>
                    <li class="breadcrumb-item ">طلبات الانضمام</li>
                    <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section  ">
            <div class="row">
                <div class="col">
                    <div class="card px-5" dir="rtl">
                        <div class="card-body">
                            <h3 class="card-title">الحساب التعريفي</h3>

                            <section class="section profile">
                                <div class="row">
                                    <div class="col-xl-8">

                                        <div class="card">
                                            <div class="card-body pt-3">
                                                <!-- Bordered Tabs -->
                                                <div class="tpt-2">
                                                    <div class=" profile-overview" id="profile-overview">

                                                        <h5 class="card-title">تفاصيل {{ $viewModel->provider->title }}</h5>
                                                        @if (session('success'))
                                                            <div class="alert alert-success">
                                                                {{ session('success') }}
                                                            </div>
                                                        @endif
                                                        @if (session('error'))
                                                            <div class="alert alert-danger">
                                                                {{ session('error') }}
                                                            </div>
                                                        @endif
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 label "> الاسم المالك </div>
                                                            <div class="col-lg-8 col-md-8">{{ $viewModel->user->name }}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 label ">رقم الهوية</div>
                                                            <div class="col-lg-8 col-md-8">
                                                                {{ $viewModel->provider->identity_NO }}
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 label">المحافظة</div>
                                                            <div class="col-lg-8 col-md-8">
                                                                {{ $viewModel->governorate->name }}
                                                            </div>
                                                        </div>



                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 label">المديرية</div>
                                                            <div class="col-lg-8 col-md-8">
                                                                {{ $viewModel->directorate->name }} </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 label">العنوان</div>
                                                            <div class="col-lg-8 col-md-8">
                                                                {{ $viewModel->provider->address }} </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 label">رقم الهاتف/مالك الشركة
                                                            </div>
                                                            <div class="col-lg-8 col-md-8">{{ $viewModel->user->phone }}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 label">رقم الهاتف/الشركة</div>
                                                            <div class="col-lg-8 col-md-8">
                                                                {{ $viewModel->provider->phone }}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 label">الايميل/المالك</div>
                                                            <div class="col-lg-8 col-md-8">
                                                                {{ $viewModel->user->email }}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 label">الايميل/الشركة</div>
                                                            <div class="col-lg-8 col-md-8">
                                                                {{ $viewModel->provider->email }}</div>
                                                        </div>
                                                        <div class="row">
                                                            <form
                                                                action="{{ route('platform.joinRequest.confirm', ['name' => $viewModel->provider->name]) }}"
                                                                method="post">
                                                                @csrf
                                                                <button type="submit" class="btn-dasSecond">قبول</button>
                                                            </form>
                                                            <a href="#" class="btn-dasMain" data-toggle="modal"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">رفض</a>
                                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h1 class="modal-title fs-5"
                                                                                id="exampleModalLabel">
                                                                                سبب الرفض </h1>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <form method="post"
                                                                            action="{{ route('platform.joinRequest.reject', ['name' => $viewModel->provider->name]) }}">
                                                                            @csrf
                                                                            <div class="modal-body mainColor">

                                                                                <textarea class="form-control" name="rejectMessage" id="" cols="30" rows="10" required name="message"
                                                                                    placeholder="ادخل سبب الرفض ..."></textarea>
                                                                                <!-- Use the message ID to display relevant message content -->
                                                                            </div>
                                                                            <div class="modal-footer justify-content-start">

                                                                                <button type="submit"
                                                                                    class="btn-dasMain">ارسال</button>
                                                                                <button type="button" class="btn-dasSecond"
                                                                                    data-bs-dismiss="modal">الغاء</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- End Bordered Tabs -->

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-4">

                                        <div class="card">
                                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                                                <img src="{{ asset('admin/img/office-company/sanad.jpg') }}" alt="Profile"
                                                    class="rounded-circle">
                                                <h2>اسم الشركة</h2>
                                                <h3>{{ $viewModel->provider->title }}</h3>
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
