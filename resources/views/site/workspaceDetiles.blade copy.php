@extends('layouts.site')
@section('content')
<link href="{{ asset('/site/css/card.css') }}" rel="stylesheet">

<main id="main " class="mt-5 container" dir="ltr">
    <form action="" method="post">
        <div class="row">

            <div class="col-lg-6">
                <div class="card">
                    <div class="p-4" dir="rtl">
                        <h6 class=" pt-1 mainColor">خدمات اضافية </h6>
                        <div class="row">
                            <div class="col-6 ">
                                <input type="checkbox" name="pasta" id="tonnarelli" class="checkbox-input-over" />
                                <label for="tonnarelli" class="checkbox-label-over">
                                    <div class="checkbox-text-over">
                                        <p class="checkbox-text--description">مشروبات طوال اليوم</p>
                                    </div>
                                </label>
                            </div>
                            <div class="col-6">
                                <input type="checkbox" name="pasta" id="spaghetti" class="checkbox-input-over" />
                                <label for="spaghetti" class="checkbox-label-over">
                                    <div class="checkbox-text-over">
                                        <p class="checkbox-text--description">وجبة افطار</p>
                                    </div>
                                </label>
                            </div>
                            <div class="col-6 ">
                                <input type="checkbox" name="pasta" id="tonnarelli" class="checkbox-input-over" />
                                <label for="tonnarelli" class="checkbox-label-over">
                                    <div class="checkbox-text-over">
                                        <p class="checkbox-text--description">مشروبات طوال اليوم</p>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <section class=" p-4" dir="rtl">
                        <h6 class=" pt-1 mainColor"> الفاتورة </h6>
                        <table class="table" id="invoice">
                            <thead>
                                <tr>
                                    <th scope="col" class="bg-total">#</th>
                                    <th scope="col" class="w-50 bg-total">اسم الخدمة</th>
                                    <th scope="col" class="bg-total"></th>
                                    <th scope="col" class="bg-total">السعر (ري)</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td colspan="2">مكتب خاص -مكتب 1</td>
                                    <td>25,000</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>مشروبات طوال الوقت</td>
                                    <th scope="col">
                                        <div class="col-md-12">
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
                </div>
            </div>
            <div class="col-lg-6">
                <div class="">
                    <div class="card offer-box">
                        <!-- Slides with indicators -->
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('site/img/office/pexels-max-rahubovskiy-7534232.jpg') }}" class="d-block w-100 img-spase" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('site/img/office/pexels-max-rahubovskiy-7534231.jpg') }}" class="d-block w-100 img-spase" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('site/img/office/pexels-max-rahubovskiy-7534232.jpg') }}" class="d-block w-100 img-spase" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="pricing-box " dir="ltr">
                            <h6 class=" pt-1   mainColor"> تفاصيل المكتب </h6>
                            <div class="">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="">{{ $workspace->provider->address }}</p>
                                    </div>
                                    <div class="col-6 ">
                                        <h6 class=""> {{ $workspace->provider->title }} -
                                            {{ $workspace->title }}<i class="bi bi-geo-fill"></i>
                                        </h6>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                        <div class="col-12">
                                            <h6 class=""> 20/1/2024 - 20-5-2024 <i class="bi bi-clock"></i></h6>
                                        </div>
                                    </div> --}}
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class=""> {{ $workspace->workspaceType->name }} <i class="bi bi-columns-gap"></i></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>








</main>
@endsection