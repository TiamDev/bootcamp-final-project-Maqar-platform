@extends('layouts.platform')
@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>المستخدمين</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">المستخدمين</li>
        <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard mytable">
    <div class="row">

      <div class="col">
        <div class="card" dir="rtl">
          <div class="card-body">
             <div class="card-title text-start">
              <div class="card-title d-flex justify-content-between">
                <h5 class="w-600">جدول المستخدمين</h5> 
                <a href="{{route('platform.users.view')}}" class="dash-btn das-show"><i class="bi bi-plus-square"></i></a>
              </a>        
              </div>
             </div> 
            <!-- Table with hoverable rows -->
            <table class="table ">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">اسم المستخدم</th>
                  <th scope="col">الايميل</th>
                  <th scope="col" class="text-center">العمليات </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Brandon Jacob</td>
                  <td>brandom@gmail.com</td>
                  <td class="text-center">
                    <a href="{{route('platform.users.view')}}" class="dash-btn das-show"><i class="bi bi-link"></i></a>
                    <a href="{{route('platform.users.edit')}}" class="dash-btn das-edit"><i class="bi bi-pencil-square"></i></a>
                    <a href="{{route('platform.users.delete')}}" class="dash-btn das-delete"><i class="bi bi-x-octagon"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Brandon Jacob</td>
                  <td>brandom@gmail.com</td>
                  <td class="text-center">
                    <a href="{{route('platform.users.view')}}" class="dash-btn das-show"><i class="bi bi-link"></i></a>
                    <a href="{{route('platform.users.edit')}}" class="dash-btn das-edit"><i class="bi bi-pencil-square"></i></a>
                    <a href="{{route('platform.users.delete')}}" class="dash-btn das-delete"><i class="bi bi-x-octagon"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Brandon Jacob</td>
                  <td>brandom@gmail.com</td>
                  <td class="text-center">
                    <a href="{{route('platform.users.view')}}" class="dash-btn das-show"><i class="bi bi-link"></i></a>
                    <a href="{{route('platform.users.edit')}}" class="dash-btn das-edit"><i class="bi bi-pencil-square"></i></a>
                    <a href="{{route('platform.users.delete')}}" class="dash-btn das-delete"><i class="bi bi-x-octagon"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Brandon Jacob</td>
                  <td>brandom@gmail.com</td>
                  <td class="text-center">
                    <a href="{{route('platform.users.view')}}" class="dash-btn das-show"><i class="bi bi-link"></i></a>
                    <a href="{{route('platform.users.edit')}}" class="dash-btn das-edit"><i class="bi bi-pencil-square"></i></a>
                    <a href="{{route('platform.users.delete')}}" class="dash-btn das-delete"><i class="bi bi-x-octagon"></i>
                    </a>
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