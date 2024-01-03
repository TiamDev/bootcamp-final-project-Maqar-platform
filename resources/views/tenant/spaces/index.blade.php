@extends('layouts.platform')
@section('content')
<main id="main" class="main" >
  <div class="pagetitle">
    <h1>المساحات</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">المساحات</li>
        <li class="breadcrumb-item"><a href="{{route('tenant.dashboard')}}">الرئيسية</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <div class="card px-3 mx-4"dir="rtl">
    <div class="card-title d-flex justify-content-between">
      <h5 class="w-600">مساحات مكتب سند</h5> 
      <a href="{{route('tenant.spaces.add')}}" class="dash-btn das-show"><i class="bi bi-plus-square"></i></a>
    </a>        
    </div>
  </div>
<div class="row" dir="rtl">

  <div class="col-lg-4">
    <div class="mycontainer">
      <div class="mycard2">
          <div class="card__border2">
              <img src="{{asset('site/img/office/pexels-max-rahubovskiy-7534232.jpg')}}" alt="card image" class="card__img2">
          </div>
          {{-- bi-plus-circle --}}
          <h3 class="card__name">مكتب 1</h3>
          <span class="card__profession">مكتب خاص<i class="bi bi-pin-map-fill"></i></span>
          <div class="card__social" id="card-social">
              <div class="card__social-control">
                  <!-- Card social -->
                  <ul class="card__social-list2" dir="rtl">
                      <a href="{{route('tenant.spaces.view')}}" target="_blank" class="card__social-link  "data-bs-toggle="tooltip" data-bs-placement="top" title="تفاصيل المكتب">
                          <i class="bi bi-link" style="  margin-bottom: -3px; "></i>  
                      </a>
                      <a href="{{route('tenant.spaces.edit')}}" target="_blank" class="card__social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="تعديل المكتب">
                          <i class="bi bi-pencil-square "style="margin-bottom: -3px; "></i>
                      </a>
                      <a href="{{route('tenant.spaces.delete')}}" target="_blank" class="card__social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف المكتب">
                        <i class="bi bi-x-octagon "style="margin-bottom: -3px; "></i>
                    </a>
                  </ul>
              </div>
          </div>
      </div>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="mycontainer">
      <div class="mycard2">
          <div class="card__border2">
              <img src="{{asset('site/img/office/pexels-max-rahubovskiy-7534232.jpg')}}" alt="card image" class="card__img2">
          </div>
          {{-- bi-plus-circle --}}
          <h3 class="card__name">مكتب 1</h3>
          <span class="card__profession">مكتب خاص<i class="bi bi-pin-map-fill"></i></span>
          <div class="card__social" id="card-social">
              <div class="card__social-control">
                  <!-- Card social -->
                  <ul class="card__social-list2" dir="rtl">
                      <a href="{{route('tenant.spaces.view')}}" target="_blank" class="card__social-link  "data-bs-toggle="tooltip" data-bs-placement="top" title="تفاصيل المكتب">
                          <i class="bi bi-link" style="  margin-bottom: -3px; "></i>  
                      </a>
                      <a href="{{route('tenant.spaces.edit')}}" target="_blank" class="card__social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="تعديل المكتب">
                          <i class="bi bi-pencil-square "style="margin-bottom: -3px; "></i>
                      </a>
                      <a href="{{route('tenant.spaces.delete')}}" target="_blank" class="card__social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف المكتب">
                        <i class="bi bi-x-octagon "style="margin-bottom: -3px; "></i>
                    </a>
                  </ul>
              </div>
          </div>
      </div>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="mycontainer">
      <div class="mycard2">
          <div class="card__border2">
              <img src="{{asset('site/img/office/pexels-max-rahubovskiy-7534232.jpg')}}" alt="card image" class="card__img2">
          </div>
          {{-- bi-plus-circle --}}
          <h3 class="card__name">مكتب 1</h3>
          <span class="card__profession">مكتب خاص<i class="bi bi-pin-map-fill"></i></span>
          <div class="card__social" id="card-social">
              <div class="card__social-control">
                  <!-- Card social -->
                  <ul class="card__social-list2" dir="rtl">
                      <a href="{{route('tenant.spaces.view')}}" target="_blank" class="card__social-link  "data-bs-toggle="tooltip" data-bs-placement="top" title="تفاصيل المكتب">
                          <i class="bi bi-link" style="  margin-bottom: -3px; "></i>  
                      </a>
                      <a href="{{route('tenant.spaces.edit')}}" target="_blank" class="card__social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="تعديل المكتب">
                          <i class="bi bi-pencil-square "style="margin-bottom: -3px; "></i>
                      </a>
                      <a href="{{route('tenant.spaces.delete')}}" target="_blank" class="card__social-link" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف المكتب">
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