@extends('layouts.platform')
@section('content')
<main id="main" class="main">

<div class="pagetitle">
  <h1>المستخدمين</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">تفاصيل مستخدم</li>
      <li class="breadcrumb-item ">المستخدمين</li>
      <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section  ">
  <div class="row">
    <div class="col">
      <div class="card px-5" dir="rtl">
        <div class="card-body">
          <h3 class="card-title">تفاصيل المستخدم </h3>

          <section class="section profile">
            <div class="row">
              <div class="col-xl-4">
      
                <div class="card">
                  <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
      
                    <img src="{{asset('admin/img/messages-2.jpg')}}" alt="Profile" class="rounded-circle">
                    <h2>فاطمة بكر بكران</h2>
                    <h3>مدير المنصة</h3>
                  </div>
                </div>
      
              </div>
      
              <div class="col-xl-8">
      
                <div class="card">
                  <div class="card-body pt-3">
                    <h3 class="card-title">بيانات الحساب</h3>

                    <!-- Bordered Tabs -->               
                    <div class="tpt-2">    
                      <div class=" profile-overview" id="profile-overview">
                            
                        {{-- <h5 class="card-title">Profile Details</h5> --}}
      
                        <div class="row">
                          <div class="col-lg-3 col-md-4 label ">الاسم</div>
                          <div class="col-lg-9 col-md-8">فاطمة بكر بكران</div>
                        </div>
      
                        <div class="row">
                          <div class="col-lg-3 col-md-4 label">الدور</div>
                          <div class="col-lg-9 col-md-8">مدير المنصة</div>
                        </div>
      
                    
      
                        <div class="row">
                          <div class="col-lg-3 col-md-4 label">المحافظة</div>
                          <div class="col-lg-9 col-md-8">حضرموت </div>
                        </div>
      
                        <div class="row">
                          <div class="col-lg-3 col-md-4 label">العنوان</div>
                          <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                        </div>
      
                        <div class="row">
                          <div class="col-lg-3 col-md-4 label">رقم الهاتف</div>
                          <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                        </div>
      
                        <div class="row">
                          <div class="col-lg-3 col-md-4 label">الايميل</div>
                          <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
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
</main>
@endsection