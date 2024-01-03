@extends('layouts.platform')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>لوحة التحكم</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">لوحة التحكم </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


<section class="dash-section">
  
      <div class=" dash-box ">
        <div class="row">  
          <div class="col-8 my-auto">
            <p class="mainColor pe-3 fs-4">اهلا <span>فاطمة </span></p>
            <h1>دعنا نجد مساحة العمل المناسبة لك .</h1>
          </div>
          <div class="col-4">
            <img src="{{asset('site/img/ill/3d-casual-life-online-video-conference-in-office.png')}}" class="" style="margin-top:-60px ;width:100%" alt="">
          </div>
        </div>
      </div>
</section>


<section>
  <!-- 

GRADIENT BANNER DESIGN BY SIMON LURWER ON DRIBBBLE:
https://dribbble.com/shots/14101951-Banners

-->
<div class="main-container">
  {{-- <div class="heading">
    <h1 class="heading__title">Gradient Banner Cards</h1>
    <p class="heading__credits"><a class="heading__link" target="_blank" href="https://dribbble.com/sl">Design by Simon Lurwer on Dribbble</a></p>
  </div> --}}

  <div class="cards" dir="rtl">
    <div class="card-home card-1">
      <div class="card__icon"><i class="bi bi-grid"></i></div>
      <p class="card__exit"><i class="bi bi-x"></i></p>
      <h2 class="card__title">مكتب خاص
      </h2>
      <p>مكتب مفروش ومجهّز بالكامل.</p>
      
      <p class="card__apply">
        <a class="card__link" href="#">احجز الان <i class="fas fa-arrow-right"></i></a>
      </p>
    </div>
    <div class="card-home card-2">
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <p class="card__exit"><i class="fas fa-times"></i></p>
      <h2 class="card__title">مكتب مشترك</h2>
      <p class="card__apply">
        <a class="card__link" href="#">احجز الان <i class="fas fa-arrow-right"></i></a>
      </p>
    </div>
    <div class="card-home card-3">
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <p class="card__exit"><i class="fas fa-times"></i></p>
      <h2 class="card__title">غرف إجتماعات</h2>
      <p class="card__apply">
        <a class="card__link" href="#">احجز الان <i class="fas fa-arrow-right"></i></a>
      </p>
    </div>
    {{-- <div class="card-home card-4">
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <p class="card__exit"><i class="fas fa-times"></i></p>
      <h2 class="card__title">Quis nostrud exercitation ullamco laboris nisi.</h2>
      <p class="card__apply">
        <a class="card__link" href="#">احجز الان <i class="fas fa-arrow-right"></i></a>
      </p>
    </div>
    <div class="card-home card-5">
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <p class="card__exit"><i class="fas fa-times"></i></p>
      <h2 class="card__title">Ut aliquip ex ea commodo consequat. Duis aute irure dolor.</h2>
      <p class="card__apply">
        <a class="card__link" href="#">احجز الان <i class="fas fa-arrow-right"></i></a>
      </p>
    </div>
    <div class="card-home card-1">
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <p class="card__exit"><i class="fas fa-times"></i></p>
      <h2 class="card__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
      <p class="card__apply">
        <a class="card__link" href="#">احجز الان <i class="fas fa-arrow-right"></i></a>
      </p>
    </div> --}}
  </div>
</div>
</section>



  <main id="main" class="main">
@endsection