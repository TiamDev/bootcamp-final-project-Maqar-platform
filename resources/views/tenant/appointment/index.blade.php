@extends('layouts.platform')
@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>المستخدمين</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">الرسائل</li>
        <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard mytable">
    <div class="row">

      <div class="col">
        <div class="card" dir="rtl">
          <div class="card-body">
           
            <!-- Table with hoverable rows -->
            <table class="table ">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">الايميل</th>
                  <th scope="col">عنوان الرسالة </th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>

                <tr>
                  <th scope="row">3</th>
                  <td>brandom@gmail.com</td>
                  <td>هل يمكن الدفع عن طريق الموقع</td>
                  <td class="text-center">
                    <a href="{{route('tenant.messages.view')}}" class="das-show">تفاصيل</a>
                    <a href="{{route('tenant.messages.delete')}}" class="das-delete">حذف</a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>brandom@gmail.com</td>
                  <td>طرق الاشتراك كمصنة</td>
                  <td class="text-center">
                    <a href="{{route('tenant.messages.view')}}" class="das-show">تفاصيل</a>
                    <a href="{{route('tenant.messages.delete')}}" class="das-delete">حذف</a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>brandom@gmail.com</td>
                  <td>هل يوجد طريقة للدفع من خلال الموقع</td>
                  <td class="text-center">
                    <a href="{{route('tenant.messages.view')}}" class="das-show">تفاصيل</a>
                    <a href="{{route('tenant.messages.delete')}}" class="das-delete">حذف</a>
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