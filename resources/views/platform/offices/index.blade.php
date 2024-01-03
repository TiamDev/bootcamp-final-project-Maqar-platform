@extends('layouts.platform')
@section('content')
<main id="main" class="main" >
  <div class="pagetitle">
    <h1>المكاتب</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">المكاتب</li>
        <li class="breadcrumb-item"><a href="{{route('platform.dashboard')}}">الرئيسية</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
<div class="row" dir="rtl">
  <div class="col-lg-3">
    <div class="mycontainer">
      <div class="mycard">
          <div class="card__border">
              <img src="{{asset('admin/img/office-company/sanad.jpg')}}" alt="card image" class="card__img">
          </div>
          <h3 class="card__name">حاضنة سند</h3>
          <span class="card__profession">حضرموت - المكلا -الديس<i class="bi bi-geo-fill"></i></span>
          <p class="">عضو</p>
          <div class="card__social" id="card-social">
              <div class="card__social-control">
                  <!-- Card social -->
                  <ul class="card__social-list2" dir="rtl">
                      <a href="{{route('platform.offices.view')}}" target="_blank" class="card__social-link  "data-bs-toggle="tooltip" data-bs-placement="top" title="تفاصيل المكتب">
                          <i class="bi bi-link" style="  margin-bottom: -3px; "></i>  
                      </a>
                      <a href="{{route('platform.offices.block')}}" target="_blank" class="card__social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="حضر المكتب">
                          <i class="bi bi-x-octagon "style="margin-bottom: -3px; "></i>
                      </a>
                  </ul>
              </div>
          </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="mycontainer">
      <div class="mycard">
          <div class="card__border">
              <img src="{{asset('admin/img/office-company/ragmi.jpg')}}" alt="card image" class="card__img">
          </div>
          <h3 class="card__name">حاضنة الأعمال الرقمية</h3>
          <span class="card__profession">حضرموت - المكلا -الديس<i class="bi bi-geo-fill"></i></span>
          <p class="">عضو</p>
          <div class="card__social" id="card-social">
              <div class="card__social-control">
                  <!-- Card social -->
                  <ul class="card__social-list2" dir="rtl">
                      <a href="{{route('platform.offices.view')}}" target="_blank" class="card__social-link  "data-bs-toggle="tooltip" data-bs-placement="top" title="تفاصيل المكتب">
                          <i class="bi bi-link" style="  margin-bottom: -3px; "></i>  
                      </a>
                      <a href="{{route('platform.offices.block')}}" target="_blank" class="card__social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="حضر المكتب">
                          <i class="bi bi-x-octagon "style="margin-bottom: -3px; "></i>
                      </a>
                  </ul>
              </div>
          </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="mycontainer">
      <div class="mycard">
          <div class="card__border">
              <img src="{{asset('admin/img/office-company/malath.jpg')}}" alt="card image" class="card__img">
          </div>
          <h3 class="card__name">حاضنة ملاذ الاعمال</h3>
          <span class="card__profession">حضرموت - الشحر -الستين<i class="bi bi-geo-fill"></i></span>
          <p class="">عضو</p>
          <div class="card__social" id="card-social">
              <div class="card__social-control">
                  <!-- Card social -->
                  <ul class="card__social-list2" dir="rtl">
                      <a href="{{route('platform.offices.view')}}" target="_blank" class="card__social-link  "data-bs-toggle="tooltip" data-bs-placement="top" title="تفاصيل المكتب">
                          <i class="bi bi-link" style="  margin-bottom: -3px; "></i>  
                      </a>
                      <a href="{{route('platform.offices.block')}}" target="_blank" class="card__social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="حضر المكتب">
                          <i class="bi bi-x-octagon "style="margin-bottom: -3px; "></i>
                      </a>
                  </ul>
              </div>
          </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="mycontainer">
      <div class="mycard">
          <div class="card__border">
              <img src="{{asset('admin/img/office-company/sanad.jpg')}}" alt="card image" class="card__img">
          </div>
          <h3 class="card__name">حاضنة سند</h3>
          <span class="card__profession">حضرموت - المكلا -الديس<i class="bi bi-geo-fill"></i></span>
          <p class="">عضو</p>
          <div class="card__social" id="card-social">
              <div class="card__social-control">
                  <!-- Card social -->
                  <ul class="card__social-list2" dir="rtl">
                      <a href="{{route('platform.offices.view')}}" target="_blank" class="card__social-link  "data-bs-toggle="tooltip" data-bs-placement="top" title="تفاصيل المكتب">
                          <i class="bi bi-link" style="  margin-bottom: -3px; "></i>  
                      </a>
                      <a href="{{route('platform.offices.block')}}" target="_blank" class="card__social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="حضر المكتب">
                          <i class="bi bi-x-octagon "style="margin-bottom: -3px; "></i>
                      </a>
                  </ul>
              </div>
          </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="mycontainer">
      <div class="mycard">
          <div class="card__border">
              <img src="{{asset('admin/img/office-company/sanad.jpg')}}" alt="card image" class="card__img">
          </div>
          <h3 class="card__name">حاضنة سند</h3>
          <span class="card__profession">حضرموت - المكلا -الديس<i class="bi bi-geo-fill"></i></span>
          <p class="">عضو</p>
          <div class="card__social" id="card-social">
              <div class="card__social-control">
                  <!-- Card social -->
                  <ul class="card__social-list2" dir="rtl">
                      <a href="{{route('platform.offices.view')}}" target="_blank" class="card__social-link  "data-bs-toggle="tooltip" data-bs-placement="top" title="تفاصيل المكتب">
                          <i class="bi bi-link" style="  margin-bottom: -3px; "></i>  
                      </a>
                      <a href="{{route('platform.offices.block')}}" target="_blank" class="card__social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="حضر المكتب">
                          <i class="bi bi-x-octagon "style="margin-bottom: -3px; "></i>
                      </a>
                  </ul>
              </div>
          </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="mycontainer">
      <div class="mycard">
          <div class="card__border">
              <img src="{{asset('admin/img/office-company/sanad.jpg')}}" alt="card image" class="card__img">
          </div>
          <h3 class="card__name">حاضنة سند</h3>
          <span class="card__profession">حضرموت - المكلا -منطقة بلقيس<i class="bi bi-geo-fill"></i></span>
          <p class="">عضو</p>
          <div class="card__social" id="card-social">
              <div class="card__social-control">
                  <!-- Card social -->
                  <ul class="card__social-list2" dir="rtl">
                      <a href="{{route('platform.offices.view')}}" target="_blank" class="card__social-link  "data-bs-toggle="tooltip" data-bs-placement="top" title="تفاصيل المكتب">
                          <i class="bi bi-link" style="  margin-bottom: -3px; "></i>  
                      </a>
                      <a href="{{route('platform.offices.block')}}" target="_blank" class="card__social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="حضر المكتب">
                          <i class="bi bi-x-octagon "style="margin-bottom: -3px; "></i>
                      </a>
                  </ul>
              </div>
          </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="mycontainer">
      <div class="mycard">
          <div class="card__border">
              <img src="{{asset('admin/img/logo.png')}}" alt="card image" class="card__img">
          </div>
          <h3 class="card__name"> Sixteen Stars</h3>
          <span class="card__profession">حضرموت - المكلا -فوة<i class="bi bi-geo-fill"></i></span>
          <p class="">جديد</p>
          <div class="card__social" id="card-social">
              <div class="card__social-control">
                  <!-- Card social -->
                  <ul class="card__social-list2" dir="rtl">
                      <a href="{{route('platform.offices.view')}}" target="_blank" class="card__social-link  "data-bs-toggle="tooltip" data-bs-placement="top" title="تفاصيل المكتب">
                          <i class="bi bi-link" style="  margin-bottom: -3px; "></i>  
                      </a>
                      <a href="{{route('platform.offices.block')}}" target="_blank" class="card__social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="حضر المكتب">
                          <i class="bi bi-x-octagon "style="margin-bottom: -3px; "></i>
                      </a>
                  </ul>
              </div>
          </div>
      </div>
    </div>
  </div>

</div>
</main>


@endsection