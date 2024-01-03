@extends('layouts.platform')
@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1> عرض المساحات</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">عرض المساحة</li>
        <li class="breadcrumb-item "><a href="{{route('tenant.spaces')}}">المساحات</a></li>
        <li class="breadcrumb-item"><a href="{{route('tenant.dashboard')}}">الرئيسية</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section  ">
    <div class="row">
      <div class="col">
        <div class="card px-5" dir="rtl">
          <div class="card-body pt-5">
            {{-- <h3 class="card-title"> المساحة</h3> --}}
            <section class="section profile">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                      <!-- Slides with indicators -->
                      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{asset('site/img/office/pexels-max-rahubovskiy-7534232.jpg')}}"
                              class="d-block w-100 img-spase" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('site/img/office/pexels-max-rahubovskiy-7534231.jpg')}}"
                              class="d-block w-100 img-spase" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('site/img/office/pexels-max-rahubovskiy-7534232.jpg')}}"
                              class="d-block w-100 img-spase" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                          data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                          data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div><!-- End Slides with indicators -->
                      <h2> مكتب 1</h2>
                      {{-- <h3>حاضنة سند</h3> --}}
                    </div>
                  </div>
                </div>
                <div class="col-xl-7">
                  <div class="card">
                    <div class="card-body pt-3">
                      <!-- Bordered Tabs -->
                      <div class="tpt-2">
                        <div class=" profile-overview" id="profile-overview">
                          <h5 class="card-title">بيانات المساحة</h5>
                          <div class="row">
                            <div class="col-lg-3 col-md-4 label "> الاسم </div>
                            <div class="col-lg-9 col-md-8"> مكتب 1</div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3 col-md-4 label">رمزها</div>
                            <div class="col-lg-9 col-md-8">1248</div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3 col-md-4 label">النوع</div>
                            <div class="col-lg-9 col-md-8"> مكتب خاص </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3 col-md-4 label">عدد الافراد</div>
                            <div class="col-lg-9 col-md-8"> 5</div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3 col-md-4 label">مدة الحجز</div>
                            <div class="col-lg-9 col-md-8">
                              <ul class="myul">
                                <li> شهري</li>
                                <li> اسبوعي</li>
                              </ul>
                            </div>
                          </div>
                          <a href="{{route('tenant.spaces.edit')}}" class="btn-dasMain">تعديل</i></a>
                          <a href="{{route('tenant.spaces.delete')}}" class="btn-dasSecond">حذف</i></a>
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