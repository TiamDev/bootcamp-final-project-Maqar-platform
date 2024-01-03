@extends('layouts.platform')
@section('content')
<main id="main" class="main">

<div class="pagetitle">
  <h1>المستخدمين</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">تعديل دور</li>
      <li class="breadcrumb-item ">الأدوار</li>
      <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section  ">
  <div class="row">
    <div class="col">
      <div class="card px-5" dir="rtl">
        <div class="card-body">
          <h3 class="card-title">تعديل دور جديد</h3>

          <!-- Multi Columns Form -->
          <form class="row g-3">
            <div class="col-md-12">
              <label for="inputName5" class="form-label">الاسم</label>
              <input type="text" class="form-control" id="inputName5">
            </div>
            <div class="col-12">
              <h5>الصلاحيات :</h5>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridChecK1">
                  اضافة
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck2">
                <label class="form-check-label" for="gridCheck2">
                   تعديل 
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck3">
                <label class="form-check-label" for="gridCheck3">
                  حذف 
                </label>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn-dasMain">إضافة</button>
              <button type="reset" class="btn-dasSecondary">رجوع</button>
            </div>
          </form><!-- End Multi Columns Form -->

        </div>
      </div>

</div>
</div>
</main>
@endsection