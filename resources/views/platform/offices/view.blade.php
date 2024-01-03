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
          <h3 class="card-title">الحساب التعريفي</h3>

          <section class="section profile">
            <div class="row">
              <div class="col-xl-4">
      
                <div class="card">
                  <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
      
                    <img src="{{asset('admin/img/office-company/sanad.jpg')}}" alt="Profile" class="rounded-circle">
                    <h2>اسم المكتب</h2>
                    <h3>حاضنة سند</h3>
                  </div>
                </div>
      
              </div>
      
              <div class="col-xl-8">
      
                <div class="card">
                  <div class="card-body pt-3">
                    <!-- Bordered Tabs -->               
                    <div class="tpt-2">    
                      <div class=" profile-overview" id="profile-overview">
                            
                        <h5 class="card-title">تفاصيل المكتب</h5>
      
                        <div class="row">
                          <div class="col-lg-3 col-md-4 label "> الاسم المكتب </div>
                          <div class="col-lg-9 col-md-8">حاضنة سند</div>
                        </div>
      
                        <div class="row">
                          <div class="col-lg-3 col-md-4 label">الدولة</div>
                          <div class="col-lg-9 col-md-8">اليمن -حضرموت</div>
                        </div>
      
                    
      
                        <div class="row">
                          <div class="col-lg-3 col-md-4 label">المدينة</div>
                          <div class="col-lg-9 col-md-8">المكلا -منطقة بلقيس </div>
                        </div>
      
                        <div class="row">
                          <div class="col-lg-3 col-md-4 label">رقم الهاتف</div>
                          <div class="col-lg-9 col-md-8"> 785535022</div>
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