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
        <h3>مدير المنصة</h3>
      </div>
      <div class='card-body'>
        <h5>الصلاحيات </h5>
        <ul>
          <li>اضافة مستخدم</li>
          <li>تعديل حساب</li>
          <li>حذف مستخدم</li>
          <li>قبول مستخدم</li>
        </ul>
      </div>
    </div>  
  </section>   
</main>

@endsection