@extends('layouts.platform')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">تفاصيل الرسالة</li>
                    <li class="breadcrumb-item ">الرسائل</li>
                    <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
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
                                                <img src="{{ asset('site/img/ill/casual-life-3d-white-envelope-with-blue-letter-inside.png') }}"
                                                    alt="Profile" class="mb-3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="card">
                                            <div class="card-body pt-3">
                                                <!-- Bordered Tabs -->
                                                <div class="">
                                                    <div class=" profile-overview" id="profile-overview">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-4 label ">الاسم</div>
                                                            <div class="col-lg-9 col-md-8">{{ $record->name }}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-4 label">الايميل</div>
                                                            <div class="col-lg-9 col-md-8">{{ $record->email }}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-4 label "> عنوان الرسالة</div>
                                                            <div class="col-lg-9 col-md-8">{{ $record->subject }}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-4 label ">الرسالة</div>
                                                            <div class="col-lg-9 col-md-8">{{ $record->message }} </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <a type="button" class=" btn-dasMain" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal_1">ارسال رد</a>
                                                            <a class="btn-dasSecond"
                                                                href="{{ route('platform.messages') }}">رجوع</a>
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
            <div dir="rtl" class="modal fade" id="exampleModal_1" tabindex="-1" aria-labelledby="exampleModalLabel_1"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel_1">ارسال رد</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('messages.sendreplay') }}">
                                <!-- Use the message ID to display relevant message content -->
                                <textarea type="text" class="form-control" name="reply"></textarea>
                        </div>
                        <div class="modal-footer justify-content-start">

                            @csrf
                            <input type="hidden" name="email" value="{{ $record->email }}">
                            <button type="submit" class="btn-dasMain">ارسال</button>
                            <button type="button" class="btn-dasSecond" data-bs-dismiss="modal">رجوع</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </main>
@endsection
