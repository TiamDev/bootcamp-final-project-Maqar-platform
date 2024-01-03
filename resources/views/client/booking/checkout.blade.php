@extends('layouts.platform')
@section('content')
<main id="main" >
  <div class="pagetitle">
    <h1>اضافة الخدمات</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"> <a href="index.html">استعراض الحجز</a></li>
        <li class="breadcrumb-item "> <a href="index.html">المساحات</a></li>
        <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <form action="" method="post">
<div class="row">
  <div class="col-lg-6">
    <div class="">
      <div class="card offer-box">
        <img src="{{asset('site/img/office/pexels-flo-dahm-699459.jpg') }}" class="img-fluid offer-img " alt="">
        <div class="pricing-box " dir="ltr">
          <h6 class=" pt-1   mainColor" > تفاصيل الحجز </h6>
          <div class="">
            <div class="row">
              <div class="col-6">
                <p class="">حضرموت - المكلا - الديس</p>
              </div>
              <div class="col-6 ">
                <h6 class="">  حاضنة سند -مكتب 1<i class="bi bi-geo-fill"></i></h6>
              </div>
            </div>     
            <div class="row">
              <div class="col-12">
                <h6 class=""> 20/1/2024 - 20-5-2024 <i class="bi bi-clock"></i></h6>
              </div>
            </div> 
            <div class="row">
              <div class="col-12">
                <h6 class="">مكتب خاص <i class="bi bi-columns-gap"></i></h6>
              </div>
            </div>             
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="card">  
      <div class="card-body p-4">
        <div dir="rtl" class="alert alert-warning alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-triangle me-1"></i>
                ستُحجز الغرفة لمدة 20 دقيقة أثناء إتمام الحجز.
                {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" fdprocessedid="aml289"></button> --}}
          </div>
      </div>

  <div class="p-4" dir="rtl">
    <h6 class=" pt-1 mainColor"  >خدمات اضافية </h6>
  <div class="row" >
      <div class="col-6 ">
      <input type="checkbox" name="pasta" id="tonnarelli" class="checkbox-input-over"/>
      <label for="tonnarelli" class="checkbox-label-over">
        <div class="checkbox-text-over">
          <p class="checkbox-text--title"> <i class="bi bi-cup-hot"></i></p>
          <p class="checkbox-text--description">مشروبات طوال اليوم</p>
        </div>
      </label>
    </div>
    <div class="col-6">
      <input type="checkbox" name="pasta" id="spaghetti" class="checkbox-input-over"/>
      <label for="spaghetti" class="checkbox-label-over">
        <div class="checkbox-text-over">
          <p class="checkbox-text--title"> <i class="bi bi-egg-fried"></i></p>
          <p class="checkbox-text--description">وجبة افطار</p>
        </div>
      </label>
    </div>

    </div>
  </div>

<section class=" p-4" dir="rtl">
  <h6 class=" pt-1 mainColor"  > الفاتورة </h6>
  <table class="table" id="invoice">
    <thead>
      <tr>
        <th scope="col"  class="bg-total">#</th>
        <th scope="col" class="w-50 bg-total">اسم الخدمة</th>
        <th scope="col"  class="bg-total"></th>
        <th scope="col"   class="bg-total" >السعر (ري)</th>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td colspan="2">مكتب خاص -مكتب 1</td>
        <td >25,000</td>        
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>مشروبات طوال الوقت</td>
        <th scope="col"><div class="col-md-12">
          <input type="number" class="form-control" id="inputName5" fdprocessedid="9fxr1q" placeholder="عدد الافراد">
        </div>
      </th>

        <td>1000</td>
      </tr>
       
    </tbody>
    <tfoot class="total">
        <th colspan="3 " class="fs-5 bg-total">الاجمالي</th>
        <th class="darkColor bg-total fs-4">35,000</th>   
    </tfoot>
  </table>
</section>

<section class=" p-4" dir="rtl">
  <h6 class=" pt-1 mainColor"> ارفاق مستند </h6>
  <input class="form-control" type="file" id="formFile">

  <div class="">
  </div>
</section>
<div class="row p-4">
  <div class="col">
    <button type="submit" class="btn-dasMain">تأكيد الحجز</button>
  </div>
  <div class="col">
    <p class="conform-text">سيتم إرسال بريد إلكتروني للتأكيد حجزك</p>
  </div>

</div>
</form>







  
</main>
@endsection