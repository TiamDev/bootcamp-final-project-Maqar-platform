@extends('layouts.platform')
@section('content')
<main id="main" class="main">

<div class="pagetitle">
  <h1>المستخدمين</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">تعديل مستخدم</li>
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
          <h3 class="card-title">تعديل مستخدم جديد</h3>

          <!-- Multi Columns Form -->
          <form class="row g-3">
            <div class="col-md-12">
              <label for="inputName5" class="form-label">الاسم</label>
              <input type="text" class="form-control" id="inputName5">
            </div>
            <div class="col-md-6">
              <label for="inputEmail5" class="form-label">الإيميل</label>
              <input type="email" class="form-control" id="inputEmail5">
            </div>
            <div class="col-md-6">
              <label for="inputPassword5" class="form-label">كلمة السر</label>
              <input type="password" class="form-control" id="inputPassword5">
            </div>
            <div class="col-12">
              <label for="inputAddress5" class="form-label">العنوان</label>
              <input type="text" class="form-control" id="inputAddres5s" placeholder="1234 Main St">
            </div>
            
            <div class="col-md-6">
              <label for="inputCity" class="form-label">المحافظة</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">المدينة</label>
              <select id="inputState" class="form-select">
                <option selected>المكلا</option>
                <option>غيل باوزير</option>
                <option>الشحر</option>

              </select>
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-12">
              <h5>الدور :</h5>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                  مدير المنصة
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck2">
                <label class="form-check-label" for="gridCheck2">
                   مدير مكتب 
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck3">
                <label class="form-check-label" for="gridCheck3">
                  مستخدم 
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck4">
                <label class="form-check-label" for="gridCheck4">
                  محاسب 
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck5">
                <label class="form-check-label" for="gridCheck5">
                  سكرتير 
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