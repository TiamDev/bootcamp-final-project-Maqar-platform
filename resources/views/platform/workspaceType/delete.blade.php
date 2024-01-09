@extends('layouts.platform')
@section('content')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>الادوار</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">حذف الدور</li>
        <li class="breadcrumb-item ">الادوار</li>
        <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  
  <section class="section  ">
    <div class="card px-5" dir="rtl">
      <div class='card-title'>
        <h3>هل انت متاكد من حذف</h3>
      </div>
      <div class='card-body'>
        <div class="row">
          <h5>مدير مكتب</h5>
          <div class="col mt-5">
            <form action="">
              <button type="submit" class="btn btn-danger">تاكيد</button>
              <a class="btn btn-dark" href="{{route('platform.roles.index')}}">رجوع</a>
            </form>
          </div>
        </div>

      </div>
    </div>  
  </section>   
</main>


@endsection