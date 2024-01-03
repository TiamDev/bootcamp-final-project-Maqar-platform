@extends('layouts.platform')
@section('content')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>المستخدمين</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">حظر مساحة</li>
        <li class="breadcrumb-item "><a href="{{route('tenant.spaces')}}">المساحات<a></li>
        <li class="breadcrumb-item"><a href="{{route('tenant.dashboard')}}">الرئيسية</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  
  <section class="section  ">
    <div class="card px-5" dir="rtl">
      <div class='card-title'>
        <h3>هل انت متاكد من حظر</h3>
      </div>
      <div class='card-body'>
        <div class="row">
          <h5>مكتب 1 </h5>
          <div class="col mt-5">
            <form action="">
              <button type="submit" class="btn btn-danger">تاكيد</button>
              <a class="btn btn-dark" href="{{route('tenant.spaces')}}">رجوع</a>
            </form>
          </div>
        </div>

      </div>
    </div>  
  </section>   
</main>


@endsection