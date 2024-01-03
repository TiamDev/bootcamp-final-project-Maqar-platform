@extends('layouts.platform')
@section('content')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>المستخدمين</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">تفاصيل الدور</li>
        <li class="breadcrumb-item ">الادوار</li>
        <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  
  <section class="section  ">
    <div class="card px-5" dir="rtl">
      <div class='card-title'>
        <h3>الدور</h3>
      </div>
      <div class='card-body'>
        <div class=" profile-overview" id="profile-overview">
          <div class="row mb-4">
            <div class="col-12  mylable">الاسم</div>
            <div class="col-12">فاطمة بكر بكران</div>
          </div>
          <div class="row">
            <div class="col-12 mylable">الصلاحيات</div>
            <div class="col-12 "> 
              <ul class="myul">
                <li>اضافة مستخدم</li>
                <li>تعديل حساب</li>
                <li>حذف مستخدم</li>
                <li>قبول مستخدم</li>
              </ul>
            </div>
          </div>

        </div>
        
      </div>
    </div>  
  </section>   
</main>

@endsection