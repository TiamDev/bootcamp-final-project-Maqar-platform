@extends('layouts.platform')
@section('content')
    <main id="main">

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">عرض الحجز</li>
                    <li class="breadcrumb-item"><a href="{{ route('client.dashboard') }}">الرئيسية</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="dashboard">
            <div class="row" dir="rtl">
                <div class="col-xxl-12 col-md-6">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">حجز <span>| 20/5/2024</span></h5>
                            <div class="row">
                                <div class="col-112">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center ms-4">
                                            <i class="bi bi-cash"></i>
                                        </div>
                                        <div class="ps-3 ">
                                            <h6><a href="{{ route('tenant.home') }}" class="link-details"
                                                    title="تفاصيل المكتب">
                                                    حاضنة سند
                                                </a>
                                            </h6>
                                            <span class="text-success small pt-1 ">
                                                تاريخ البداية :<span>20/5/2024</span> |
                                                تاريخ النهاية :<span>20/7/2024</span>

                                            </span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <section class=" p-4" dir="rtl">
                                    <table class="table" id="invoice">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="bg-total">الرقم المرجعي للمعاملة </th>
                                                <th scope="col" class="w-50 bg-total">اسم الخدمة</th>
                                                <th scope="col" class="bg-total">الكمية</th>
                                                <th scope="col" class="bg-total">السعر (ري)</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1452kjn455</th>
                                                <td colspan="2">مكتب خاص -مكتب 1</td>
                                                <td>25,000</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">24154652bnmbh</th>
                                                <td>مشروبات طوال الوقت</td>
                                                <th scope="col">5
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
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
