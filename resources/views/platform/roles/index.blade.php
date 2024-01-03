@extends('layouts.platform')
@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>الأدوار</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">الأدوار</li>
        <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard mytable">
    
    <div class="row">
      <div class="col">
        <div class="card" dir="rtl">
          <div class="card-body">
            <div class="card-title d-flex justify-content-between">
              <h5 class="w-600">جدول الادوار</h5> 
              <a href="{{route('platform.roles.view')}}" class="dash-btn das-show"><i class="bi bi-plus-square"></i></a>
            </a>        
            </div>
           
            <table class="table ">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">اسم الدور</th>
                  <th scope="col"> </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>مدير المنصة</td>
                  <td class="text-center">
                    <a href="{{route('platform.roles.view')}}" class="dash-btn das-show"><i class="bi bi-link"></i></a>
                    <a href="{{route('platform.roles.edit')}}" class="dash-btn das-edit"><i class="bi bi-pencil-square"></i></a>
                    <a href="{{route('platform.roles.delete')}}" class="dash-btn das-delete"><i class="bi bi-x-octagon"></i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>مدير المكتب </td>
                  <td class="text-center">
                    <a href="{{route('platform.roles.view')}}" class="dash-btn das-show"><i class="bi bi-link"></i></a>
                    <a href="{{route('platform.roles.edit')}}" class="dash-btn das-edit"><i class="bi bi-pencil-square"></i></a>
                    <a href="{{route('platform.roles.delete')}}" class="dash-btn das-delete"><i class="bi bi-x-octagon"></i>
                  </td>
                </tr>
                  <th scope="row">3</th>
                  <td>العميل</td>
                  <td class="text-center">
                    <a href="{{route('platform.roles.view')}}" class="dash-btn das-show"><i class="bi bi-link"></i></a>
                    <a href="{{route('platform.roles.edit')}}" class="dash-btn das-edit"><i class="bi bi-pencil-square"></i></a>
                    <a href="{{route('platform.roles.delete')}}" class="dash-btn das-delete"><i class="bi bi-x-octagon"></i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>سكرتير</td>
                  <td class="text-center">
                    <a href="{{route('platform.roles.view')}}" class="dash-btn das-show"><i class="bi bi-link"></i></a>
                    <a href="{{route('platform.roles.edit')}}" class="dash-btn das-edit"><i class="bi bi-pencil-square"></i></a>
                    <a href="{{route('platform.roles.delete')}}" class="dash-btn das-delete"><i class="bi bi-x-octagon"></i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>مدير المحتوى</td>
                  <td class="text-center">
                    <a href="{{route('platform.roles.view')}}" class="dash-btn das-show"><i class="bi bi-link"></i></a>
                    <a href="{{route('platform.roles.edit')}}" class="dash-btn das-edit"><i class="bi bi-pencil-square"></i></a>
                    <a href="{{route('platform.roles.delete')}}" class="dash-btn das-delete"><i class="bi bi-x-octagon"></i>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- End Table with hoverable rows -->

          </div>
        </div>
      </div>

    </div>
  </section>

</main><!-- End #main -->
@endsection