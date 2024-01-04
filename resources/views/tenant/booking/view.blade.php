@extends('layouts.platform')
@section('content')
    <main id="main">
        <div class="pagetitle">
            <h1>بيانات الحجز</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"> <a href="index.html"> بيانات الحجز</a></li>
                    <li class="breadcrumb-item "> <a href="index.html">الحجوزات</a></li>
                    <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <form action="" method="post">
            <div class="row">
                <div class="col-lg-6">
                    <div class="">
                        <div class="card offer-box">
                            <img src="{{ asset('site/img/office/pexels-flo-dahm-699459.jpg') }}"
                                class="img-fluid offer-img " alt="">
                            <div class="pricing-box " dir="ltr">
                                <h6 class="main-title"> تفاصيل الحجز </h6>
                                <div class="">
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="">حضرموت - المكلا - الديس</p>
                                        </div>
                                        <div class="col-6 ">
                                            <p class=""> حاضنة سند -مكتب 1<i class="bi bi-geo-fill"></i></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <p class=""> 20/1/2024 - 20-5-2024 <i class="bi bi-clock"></i></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="">مكتب خاص <i class="bi bi-columns-gap"></i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card " dir="rtl">
                            <section class=" ">
                                <h6 class="main-title"> الفاتورة </h6>
                                <table class="table" id="invoice">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="bg-total">#</th>
                                            <th scope="col" class="w-50 bg-total">اسم الخدمة</th>
                                            <th scope="col" class="bg-total">الكمية</th>
                                            <th scope="col" class="bg-total">السعر (ري)</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>مكتب خاص -مكتب السلام</td>
                                            <th scope="col">
                                                1
                                            </th>
                                            <td>25,000</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>مشروبات</td>
                                            <th scope="col">
                                                5
                                            </th>
                                            <td>1000</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>مواقف سيارات</td>
                                            <th scope="col">
                                                5
                                            </th>
                                            <td>2000</td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="total">
                                        <th colspan="3 " class="fs-5 bg-total">الاجمالي</th>
                                        <th class="darkColor bg-total fs-4">35,000</th>
                                    </tfoot>
                                </table>
                            </section>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="" dir="rtl">
                            <h6 class="main-title">معلومات العميل </h6>
                            <div class="row">
                                <div class="col-12 ">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 sub-title ">
                                            <p class=""> الاسم </p>
                                        </div>
                                        <div class="col-lg-9 col-md-8">
                                            <p class=""> فاطمة بكر بكران</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 sub-title">
                                            <p class="">رقم الهاتف</p>
                                        </div>
                                        <div class="col-lg-9 col-md-8">
                                            <p class="">789456123</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 sub-title ">
                                            <p class=""> الايميل </p>
                                        </div>
                                        <div class="col-lg-9 col-md-8">
                                            <p class="">fatima@gmail.com</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 sub-title">الرقم المرجعي</div>
                                        <div class="col-lg-9 col-md-8">1248</div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="" dir="rtl">
                            <h6 class="main-title">تاريخ الحجز </h6>
                            <div class="row">
                                <div class="col-12 ">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 sub-title ">
                                            <p> تاريخ البداية </p>
                                        </div>
                                        <div class="col-lg-3 col-md-8">
                                            <p> 20/5/2020
                                            <p>
                                        </div>
                                        <div class="col-lg-3 col-md-4 sub-title">
                                            <p>الوقت </p>
                                        </div>
                                        <div class="col-lg-3 col-md-8">
                                            <p>2:00 م</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 sub-title ">
                                            <p> تاريخ النهاية </p>
                                        </div>
                                        <div class="col-lg-3 col-md-8">
                                            <p> 20/5/2020
                                            <p>
                                        </div>
                                        <div class="col-lg-3 col-md-4 sub-title">
                                            <p>الوقت </p>
                                        </div>
                                        <div class="col-lg-3 col-md-8">
                                            <p>2:00 م</p>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="" dir="rtl">
                            <h6 class="main-title"> الخدمات المطلوبة </h6>
                            <div class="row">
                                <div class="col-12 ">
                                    <div class="row">
                                        <div class="col-lg-9 col-md-8 pe-4">
                                            <ul class="myul">
                                                <li> مواقف سيارات</li>
                                                <li>مشروبات</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>



                        <section class="" dir="rtl">
                            <h6 class="main-title">السند</h6>
                            <img src="{{ asset('site/img/office/pexels-flo-dahm-699459.jpg') }}" width="300">
                            <div class="">
                            </div>
                        </section>
                        <div class="row "dir="rtl">
                            <div class="col">
                                <button type="submit" class="btn-dasMain">تأكيد الحجز</button>
                                <button type="submit" class="btn-dasSecond">رفض </button>
                                <a type="submit" href="{{ route('tenant.booking') }}" class="btn-dasSecond">رجوع </a>
                            </div>
                        </div>
        </form>








    </main>
@endsection
