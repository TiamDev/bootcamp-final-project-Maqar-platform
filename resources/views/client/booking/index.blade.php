@extends('layouts.platform')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>ادارة المحتوى</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">ادارة المحتوى</li>
                    <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section dir="rtl">
            <div class="container mt-5">
                <div class="search-box ">
                    <form action="" method="post">
                        <div class="row  justify-content-center align-items-center">
                            <div class="col-lg-2 col-sm-4">
                                <div class="form-floating search-form">
                                    <select class="form-select period-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option value="1">المكلا -الديس</option>
                                        <option value="1">المكلا -فوة</option>
                                        <option value="2">غيل باوزير -الستين</option>
                                        <option value="3">غيل باوزير - التقوى</option>
                                        <option value="4">عدن -الشارع الجديد </option>

                                    </select>
                                    <label for="floatingSelect">الموقع:</label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4">
                                <div class="form-floating search-form ">
                                    <select class="form-select period-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option value="1">مكتب خاص </option>
                                        <option value="2">مكتب مشترك </option>
                                        <option value="3"> غرفة إجتماعات </option>
                                    </select>
                                    <label for="floatingSelect">نوع المساحة:</label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4">
                                <div class="form-floating search-form">
                                    <select class="form-select period-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option value="1"> شهر </option>
                                        <option value="2"> اسبوع </option>
                                        <option value="3"> يوم </option>
                                        <option value="4"> ساعة </option>
                                    </select>
                                    <label for="floatingSelect">الفترات :</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-4">
                                <div class="form-floating search-form">
                                    <input type="texl" class="form-control" id="floatingInput"
                                        placeholder="name@example.com" fdprocessedid="rq0wub">
                                    <label for="floatingInput" class="float-end"> المدة الزمنية</label>
                                </div>
                            </div>

                            <div class="col-lg-2 col-sm-4">
                                <div class="form-floating search-form">
                                    <input type="date" class="form-control" fdprocessedid="rq0wub">
                                    <label for="floatingInput" class="float-end">تارخ البداية</label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4">
                                <div class="form-floating search-form">
                                    <input type="number" class="form-control" fdprocessedid="rq0wub">
                                    <label for="floatingInput" class="float-end"> عدد الافراد</label>
                                </div>
                            </div>

                            <div class="col-lg-1 col-sm-12">
                                <button type="button" class=" search-box-btn w-100">بحث</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </section>

        <!-- search end -->

        <div class="container " data-aos="fade-up" dir="rtl">
            <div class="row gy-4" data-aos="fade-left">
                <!-- offer card -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card offer-box">
                        <img src="{{ asset('site/img/office/pexels-flo-dahm-699459.jpg') }}" class="img-fluid offer-img"
                            alt="">
                        <div class="pricing-box " dir="ltr">
                            <div class="row ">

                                <div class="col-2">
                                    {{-- <a href="{{route('client.spsces.view')}}" class=" fs-4"><i class="bi bi-link"></i></a> --}}
                                    <a type="button" class="pt-1" data-bs-toggle="modal" data-bs-target="#largeModal">
                                        <i class="bi bi-link fs-4"></i>
                                    </a>
                                    <div class="modal fade" id="largeModal" tabindex="-1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header" dir="rtl">
                                                    <h5 class="modal-title">تفاصيل المساحة</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="section-popup ">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class=" px-5">
                                                                    <div class="">
                                                                        {{-- <h3 class="card-title"> المساحة</h3> --}}
                                                                        <section class="section profile">
                                                                            <div class="row">
                                                                                <div class="col-xl-12">
                                                                                    <div class="card">
                                                                                        <div
                                                                                            class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                                                                            <!-- Slides with indicators -->
                                                                                            <div id="carouselExampleIndicators"
                                                                                                class="carousel slide"
                                                                                                data-bs-ride="carousel">
                                                                                                <div
                                                                                                    class="carousel-indicators">
                                                                                                    <button type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators"
                                                                                                        data-bs-slide-to="0"
                                                                                                        class="active"
                                                                                                        aria-current="true"
                                                                                                        aria-label="Slide 1"></button>
                                                                                                    <button type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators"
                                                                                                        data-bs-slide-to="1"
                                                                                                        aria-label="Slide 2"></button>
                                                                                                    <button type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators"
                                                                                                        data-bs-slide-to="2"
                                                                                                        aria-label="Slide 3"></button>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="carousel-inner">
                                                                                                    <div
                                                                                                        class="carousel-item active">
                                                                                                        <img src="{{ asset('site/img/office/pexels-max-rahubovskiy-7534232.jpg') }}"
                                                                                                            class="d-block w-100 img-spase"
                                                                                                            alt="...">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="carousel-item">
                                                                                                        <img src="{{ asset('site/img/office/pexels-max-rahubovskiy-7534231.jpg') }}"
                                                                                                            class="d-block w-100 img-spase"
                                                                                                            alt="...">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="carousel-item">
                                                                                                        <img src="{{ asset('site/img/office/pexels-max-rahubovskiy-7534232.jpg') }}"
                                                                                                            class="d-block w-100 img-spase"
                                                                                                            alt="...">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <button
                                                                                                    class="carousel-control-prev"
                                                                                                    type="button"
                                                                                                    data-bs-target="#carouselExampleIndicators"
                                                                                                    data-bs-slide="prev">
                                                                                                    <span
                                                                                                        class="carousel-control-prev-icon"
                                                                                                        aria-hidden="true"></span>
                                                                                                    <span
                                                                                                        class="visually-hidden">Previous</span>
                                                                                                </button>
                                                                                                <button
                                                                                                    class="carousel-control-next"
                                                                                                    type="button"
                                                                                                    data-bs-target="#carouselExampleIndicators"
                                                                                                    data-bs-slide="next">
                                                                                                    <span
                                                                                                        class="carousel-control-next-icon"
                                                                                                        aria-hidden="true"></span>
                                                                                                    <span
                                                                                                        class="visually-hidden">Next</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <!-- End Slides with indicators -->
                                                                                            <h2> مكتب 1</h2>
                                                                                            {{-- <h3>حاضنة سند</h3> --}}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-12">
                                                                                    <div class="card">
                                                                                        <div class="card-body pt-3"
                                                                                            dir="rtl">
                                                                                            <!-- Bordered Tabs -->
                                                                                            <div class="tpt-2">
                                                                                                <div class=" profile-overview"
                                                                                                    id="profile-overview">
                                                                                                    <div class="row">
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-4 label ">
                                                                                                            الاسم </div>
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-8">
                                                                                                            مكتب 1</div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-4 label">
                                                                                                            النوع</div>
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-8">
                                                                                                            مكتب خاص </div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-4 label">
                                                                                                            عدد الافراد
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-8">
                                                                                                            5</div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-4 label">
                                                                                                            مدة الحجز</div>
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-8">
                                                                                                            <ul
                                                                                                                class="myul ">
                                                                                                                <li>(25000
                                                                                                                    ري) شهري
                                                                                                                </li>
                                                                                                                <li>(5000
                                                                                                                    ري)
                                                                                                                    اسبوعي
                                                                                                                </li>
                                                                                                            </ul>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Large Modal-->
                                </div>
                                <div class="col-10">
                                    <h4 class="pt-2"> حاضنة سند- مكتب 1 </h4>
                                </div>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="">
                                        <p class="m-0">الدور الاول مطل على الخور </p>
                                        <a href=" {{ route('tenant.home') }}" class=" more-info"><small>لمعرفة المزيد عن
                                                المكتب</small></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 text-end">
                                <a href=" {{ route('client.checkout') }}" class="btn-dasMain">احجز الآن</a>
                            </div>
                            <div class="col-4 d-flex align-items-center">
                                <p class="offer-price"><span class="px-1">11000</span>ري</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- offer card -->
                <!-- offer card -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card offer-box">
                        <img src="{{ asset('site/img/office/pexels-flo-dahm-699459.jpg') }}" class="img-fluid offer-img"
                            alt="">
                        <div class="pricing-box " dir="ltr">
                            <div class="row ">

                                <div class="col-2">
                                    {{-- <a href="{{route('client.spsces.view')}}" class=" fs-4"><i class="bi bi-link"></i></a> --}}
                                    <a type="button" class="pt-1" data-bs-toggle="modal"
                                        data-bs-target="#largeModal">
                                        <i class="bi bi-link fs-4"></i>
                                    </a>
                                    <div class="modal fade" id="largeModal" tabindex="-1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header" dir="rtl">
                                                    <h5 class="modal-title">تفاصيل المساحة</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="section-popup ">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class=" px-5">
                                                                    <div class="">
                                                                        {{-- <h3 class="card-title"> المساحة</h3> --}}
                                                                        <section class="section profile">
                                                                            <div class="row">
                                                                                <div class="col-xl-12">
                                                                                    <div class="card">
                                                                                        <div
                                                                                            class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                                                                            <!-- Slides with indicators -->
                                                                                            <div id="carouselExampleIndicators"
                                                                                                class="carousel slide"
                                                                                                data-bs-ride="carousel">
                                                                                                <div
                                                                                                    class="carousel-indicators">
                                                                                                    <button type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators"
                                                                                                        data-bs-slide-to="0"
                                                                                                        class="active"
                                                                                                        aria-current="true"
                                                                                                        aria-label="Slide 1"></button>
                                                                                                    <button type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators"
                                                                                                        data-bs-slide-to="1"
                                                                                                        aria-label="Slide 2"></button>
                                                                                                    <button type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators"
                                                                                                        data-bs-slide-to="2"
                                                                                                        aria-label="Slide 3"></button>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="carousel-inner">
                                                                                                    <div
                                                                                                        class="carousel-item active">
                                                                                                        <img src="{{ asset('site/img/office/pexels-max-rahubovskiy-7534232.jpg') }}"
                                                                                                            class="d-block w-100 img-spase"
                                                                                                            alt="...">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="carousel-item">
                                                                                                        <img src="{{ asset('site/img/office/pexels-max-rahubovskiy-7534231.jpg') }}"
                                                                                                            class="d-block w-100 img-spase"
                                                                                                            alt="...">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="carousel-item">
                                                                                                        <img src="{{ asset('site/img/office/pexels-max-rahubovskiy-7534232.jpg') }}"
                                                                                                            class="d-block w-100 img-spase"
                                                                                                            alt="...">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <button
                                                                                                    class="carousel-control-prev"
                                                                                                    type="button"
                                                                                                    data-bs-target="#carouselExampleIndicators"
                                                                                                    data-bs-slide="prev">
                                                                                                    <span
                                                                                                        class="carousel-control-prev-icon"
                                                                                                        aria-hidden="true"></span>
                                                                                                    <span
                                                                                                        class="visually-hidden">Previous</span>
                                                                                                </button>
                                                                                                <button
                                                                                                    class="carousel-control-next"
                                                                                                    type="button"
                                                                                                    data-bs-target="#carouselExampleIndicators"
                                                                                                    data-bs-slide="next">
                                                                                                    <span
                                                                                                        class="carousel-control-next-icon"
                                                                                                        aria-hidden="true"></span>
                                                                                                    <span
                                                                                                        class="visually-hidden">Next</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <!-- End Slides with indicators -->
                                                                                            <h2> مكتب 1</h2>
                                                                                            {{-- <h3>حاضنة سند</h3> --}}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-12">
                                                                                    <div class="card">
                                                                                        <div class="card-body pt-3"
                                                                                            dir="rtl">
                                                                                            <!-- Bordered Tabs -->
                                                                                            <div class="tpt-2">
                                                                                                <div class=" profile-overview"
                                                                                                    id="profile-overview">
                                                                                                    <div class="row">
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-4 label ">
                                                                                                            الاسم </div>
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-8">
                                                                                                            مكتب 1</div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-4 label">
                                                                                                            النوع</div>
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-8">
                                                                                                            مكتب خاص </div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-4 label">
                                                                                                            عدد الافراد
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-8">
                                                                                                            5</div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-4 label">
                                                                                                            مدة الحجز</div>
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-8">
                                                                                                            <ul
                                                                                                                class="myul ">
                                                                                                                <li>(25000
                                                                                                                    ري) شهري
                                                                                                                </li>
                                                                                                                <li>(5000
                                                                                                                    ري)
                                                                                                                    اسبوعي
                                                                                                                </li>
                                                                                                            </ul>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Large Modal-->
                                </div>
                                <div class="col-10">
                                    <h4 class="pt-2"> حاضنة سند- مكتب 1 </h4>
                                </div>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="">
                                        <p class="m-0">الدور الاول مطل على الخور </p>
                                        <a href=" {{ route('tenant.home') }}" class=" more-info"><small>لمعرفة المزيد عن
                                                المكتب</small></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 text-end">
                                <a href=" {{ route('client.checkout') }}" class="btn-dasMain">احجز الآن</a>
                            </div>
                            <div class="col-4 d-flex align-items-center">
                                <p class="offer-price"><span class="px-1">11000</span>ري</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- offer card -->
                <!-- offer card -->
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card offer-box">
                        <img src="{{ asset('site/img/office/pexels-flo-dahm-699459.jpg') }}" class="img-fluid offer-img"
                            alt="">
                        <div class="pricing-box " dir="ltr">
                            <div class="row ">

                                <div class="col-2">
                                    {{-- <a href="{{route('client.spsces.view')}}" class=" fs-4"><i class="bi bi-link"></i></a> --}}
                                    <a type="button" class="pt-1" data-bs-toggle="modal"
                                        data-bs-target="#largeModal">
                                        <i class="bi bi-link fs-4"></i>
                                    </a>
                                    <div class="modal fade" id="largeModal" tabindex="-1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header" dir="rtl">
                                                    <h5 class="modal-title">تفاصيل المساحة</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="section-popup ">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class=" px-5">
                                                                    <div class="">
                                                                        {{-- <h3 class="card-title"> المساحة</h3> --}}
                                                                        <section class="section profile">
                                                                            <div class="row">
                                                                                <div class="col-xl-12">
                                                                                    <div class="card">
                                                                                        <div
                                                                                            class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                                                                            <!-- Slides with indicators -->
                                                                                            <div id="carouselExampleIndicators"
                                                                                                class="carousel slide"
                                                                                                data-bs-ride="carousel">
                                                                                                <div
                                                                                                    class="carousel-indicators">
                                                                                                    <button type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators"
                                                                                                        data-bs-slide-to="0"
                                                                                                        class="active"
                                                                                                        aria-current="true"
                                                                                                        aria-label="Slide 1"></button>
                                                                                                    <button type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators"
                                                                                                        data-bs-slide-to="1"
                                                                                                        aria-label="Slide 2"></button>
                                                                                                    <button type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators"
                                                                                                        data-bs-slide-to="2"
                                                                                                        aria-label="Slide 3"></button>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="carousel-inner">
                                                                                                    <div
                                                                                                        class="carousel-item active">
                                                                                                        <img src="{{ asset('site/img/office/pexels-max-rahubovskiy-7534232.jpg') }}"
                                                                                                            class="d-block w-100 img-spase"
                                                                                                            alt="...">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="carousel-item">
                                                                                                        <img src="{{ asset('site/img/office/pexels-max-rahubovskiy-7534231.jpg') }}"
                                                                                                            class="d-block w-100 img-spase"
                                                                                                            alt="...">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="carousel-item">
                                                                                                        <img src="{{ asset('site/img/office/pexels-max-rahubovskiy-7534232.jpg') }}"
                                                                                                            class="d-block w-100 img-spase"
                                                                                                            alt="...">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <button
                                                                                                    class="carousel-control-prev"
                                                                                                    type="button"
                                                                                                    data-bs-target="#carouselExampleIndicators"
                                                                                                    data-bs-slide="prev">
                                                                                                    <span
                                                                                                        class="carousel-control-prev-icon"
                                                                                                        aria-hidden="true"></span>
                                                                                                    <span
                                                                                                        class="visually-hidden">Previous</span>
                                                                                                </button>
                                                                                                <button
                                                                                                    class="carousel-control-next"
                                                                                                    type="button"
                                                                                                    data-bs-target="#carouselExampleIndicators"
                                                                                                    data-bs-slide="next">
                                                                                                    <span
                                                                                                        class="carousel-control-next-icon"
                                                                                                        aria-hidden="true"></span>
                                                                                                    <span
                                                                                                        class="visually-hidden">Next</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <!-- End Slides with indicators -->
                                                                                            <h2> مكتب 1</h2>
                                                                                            {{-- <h3>حاضنة سند</h3> --}}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-12">
                                                                                    <div class="card">
                                                                                        <div class="card-body pt-3"
                                                                                            dir="rtl">
                                                                                            <!-- Bordered Tabs -->
                                                                                            <div class="tpt-2">
                                                                                                <div class=" profile-overview"
                                                                                                    id="profile-overview">
                                                                                                    <div class="row">
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-4 label ">
                                                                                                            الاسم </div>
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-8">
                                                                                                            مكتب 1</div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-4 label">
                                                                                                            النوع</div>
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-8">
                                                                                                            مكتب خاص </div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-4 label">
                                                                                                            عدد الافراد
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-8">
                                                                                                            5</div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-4 label">
                                                                                                            مدة الحجز</div>
                                                                                                        <div
                                                                                                            class="col-lg-6 col-md-8">
                                                                                                            <ul
                                                                                                                class="myul ">
                                                                                                                <li>(25000
                                                                                                                    ري) شهري
                                                                                                                </li>
                                                                                                                <li>(5000
                                                                                                                    ري)
                                                                                                                    اسبوعي
                                                                                                                </li>
                                                                                                            </ul>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Large Modal-->
                                </div>
                                <div class="col-10">
                                    <h4 class="pt-2"> حاضنة سند- مكتب 1 </h4>
                                </div>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="">
                                        <p class="m-0">الدور الاول مطل على الخور </p>
                                        <a href=" {{ route('tenant.home') }}" class=" more-info"><small>لمعرفة المزيد عن
                                                المكتب</small></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 text-end">
                                <a href=" {{ route('client.checkout') }}" class="btn-dasMain">احجز الآن</a>
                            </div>
                            <div class="col-4 d-flex align-items-center">
                                <p class="offer-price"><span class="px-1">11000</span>ري</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- offer card -->
            </div>
        </div>
        @include('common.pagination', ['paginator' => $reservations])

    </main>
@endsection
