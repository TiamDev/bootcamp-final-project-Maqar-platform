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
            <!-- <h5 class="card-title">Table with hoverable rows</h5> -->
            <a href="{{route('tenant.users.add')}}" class="btn-dasMain">اضافة مستخدم</a>
            <!-- Table with hoverable rows -->
            <table class="table ">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">اسم المستخدم</th>
                  <th scope="col">الايميل</th>
                  <th scope="col"> </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Brandon Jacob</td>
                  <td>brandom@gmail.com</td>
                  <td class="text-center">
                    <a href="{{route('tenant.users.view')}}" class="das-show">تفاصيل</a>
                    <a href="{{route('tenant.users.edit')}}" class="das-edite">تعديل</a>
                    <a href="{{route('tenant.users.delete')}}" class="das-delete">حذف</a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Bridie Kessler</td>
                  <td>brandom@gmail.com</td>
                  <td class="text-center">
                    <a href="{{route('tenant.users.view')}}" class="das-show">تفاصيل</a>
                    <a href="{{route('tenant.users.edit')}}" class="das-edite">تعديل</a>
                    <a href="{{route('tenant.users.delete')}}" class="das-delete">حذف</a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Ashleigh Langosh</td>
                  <td>brandom@gmail.com</td>
                  <td class="text-center">
                    <a href="{{route('tenant.users.view')}}" class="das-show">تفاصيل</a>
                    <a href="{{route('tenant.users.edit')}}" class="das-edite">تعديل</a>
                    <a href="{{route('tenant.users.delete')}}" class="das-delete">حذف</a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Angus Grady</td>
                  <td>brandom@gmail.com</td>
                  <td class="text-center">
                    <a href="{{route('tenant.users.view')}}" class="das-show">تفاصيل</a>
                    <a href="{{route('tenant.users.edit')}}" class="das-edite">تعديل</a>
                    <a href="{{route('tenant.users.delete')}}" class="das-delete">حذف</a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Raheem Lehner</td>
                  <td>brandom@gmail.com</td>
                  <td class="text-center">
                    <a href="{{route('tenant.users.view')}}" class="das-show">تفاصيل</a>
                    <a href="{{route('tenant.users.edit')}}" class="das-edite">تعديل</a>
                    <a href="{{route('tenant.users.delete')}}" class="das-delete">حذف</a>
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