@extends('layouts.platform')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">عرض المساحة</li>
                    <li class="breadcrumb-item "><a href="{{ route('workspaces') }}">المساحات</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('tenant.dashboard') }}">الرئيسية</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="  ">
            <div class="row">
                <div class="col">
                    <div class=" " dir="rtl">
                        <div class="">
                            <section class="section profile">
                                <div class="row">
                                    <div class="col-xl-5">
                                        <div class="card">
                                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                                <!-- Slides with indicators -->
                                                <div id="carouselExampleIndicators" class="carousel slide"
                                                    data-bs-ride="carousel">
                                                    <div class="carousel-indicators">
                                                        @foreach ($images as $key => $image)
                                                            <button type="button"
                                                                data-bs-target="#carouselExampleIndicators"
                                                                data-bs-slide-to="{{ $key }}"
                                                                class="{{ $key == 0 ? 'active' : '' }}" aria-current="true"
                                                                aria-label="Slide 1"></button>
                                                        @endforeach
                                                    </div>
                                                    <div class="carousel-inner">
                                                        @foreach ($images as $key => $image)
                                                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                                <img style="height: 500px"
                                                                    src="{{ asset('storage/images/' . $image->path) }}"
                                                                    class="d-block w-100 img-spase"
                                                                    alt="Slide {{ $key + 1 }}">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <button class="carousel-control-prev" type="button"
                                                        data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button"
                                                        data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div><!-- End Slides with indicators -->
                                                {{-- <h2>{{ $Workspace->title }}</h2> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7">
                                        <div class="card">
                                            <div class="card-body pt-3">
                                                <!-- Bordered Tabs -->
                                                <div class="">

                                                    <div class=" profile-overview" id="profile-overview">
                                                        <h4 class="card-title">بيانات المساحة</h4>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="row">
                                                                    <div class="col-lg-5 col-md-4 label "> الاسم </div>
                                                                    <div class="col-lg-7 col-md-8">{{ $Workspace->title }}
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-lg-5 col-md-4 label">النوع</div>
                                                                    <div class="col-lg-7 col-md-8">
                                                                        {{ $Workspace->workspaceType->label }} </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-lg-5 col-md-4 label">المساحة</div>
                                                                    <div class="col-lg-7 col-md-8">
                                                                        {{ $Workspace->area }} متر مربع</div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-5 col-md-4 label">عدد الافراد</div>
                                                                    <div class="col-lg-7 col-md-8">
                                                                        {{ $Workspace->maxPeople }}</div>
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="row">
                                                                    <div class="col-lg-5 col-md-4 label">الاسم بالانجليزي
                                                                    </div>
                                                                    <div class="col-lg-7 col-md-8">{{ $Workspace->name }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-5 col-md-4 label">فترات الحجز</div>
                                                                    <div class="col-lg-7 col-md-8">
                                                                        <ul class="myul">
                                                                            @foreach ($Workspace->workspaceOffers as $workspaceOffer)
                                                                                <li>
                                                                                    {{ $workspaceOffer->workspaceDuration->title }}
                                                                                    <span class="price-offer-detiales">
                                                                                        {{ $workspaceOffer->price }}</span>
                                                                                </li>
                                                                            @endforeach

                                                                        </ul>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-4 label">الوصف</div>
                                                            <div class="col-lg-10 col-md-8">
                                                                {{ $Workspace->workspaceType->description }} </div>
                                                        </div>
                                                        <a href="{{ route('workspaces') }}"
                                                            class="btn-dasMain">رجوع</i></a>
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
        </div>
    </main>
@endsection
