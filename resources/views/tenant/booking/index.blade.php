@extends('layouts.platform')
@section('content')
    <main id="main">

        <div class="pagetitle">
            <h1>ادارة الحجوزات</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">ادارة الحجوزات</li>
                    <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section ">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card" dir="rtl">
                        <div class="card-body">
                            <div class=" d-flex justify-content-between">
                                <h5 class="card-title">جدول الحجوزات</h5>
                                <a href="{{ route('platform.users.view') }}" class="dash-btn das-show"><i
                                        class="bi bi-plus-square"></i></a>
                                </a>
                            </div>
                            <!-- <h5 class="card-title"></h5> -->
                            <!-- Table with stripped rows -->
                            <table class="table booking-table">
                                <thead>
                                    <tr>
                                        <th>
                                            اسم العميل
                                        </th>
                                        <th>
                                            المساحة
                                        </th>
                                        <th>النوع </th>
                                        <th data-type="date" data-format="YYYY/DD/MM">تاريخ البداية</th>
                                        <th data-type="date" data-format="YYYY/DD/MM">تاريخ النهاية</th>
                                        <th>
                                            حالة الحجز
                                        </th>
                                        <th>
                                            العمليات
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>فاطمة بكر بكران</td>
                                        <td>مكتب السلام</td>
                                        <td>مكتب خاص</td>
                                        <td>2000/06/08</td>
                                        <td>2000/08/08</td>
                                        <td><span class="badge rounded-pill text-bg-success">مؤكد</span>
                                        <td class="operations">
                                            <a href="{{ route('tenant.booking.view') }}" class="dash-btn das-show"><i
                                                    class="bi bi-link"></i></a>
                                            <a href="{{ route('platform.users.delete') }}" class="dash-btn das-delete"><i
                                                    class="bi bi-x-octagon"></i>

                                        </td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>روعة محمد باعيسى</td>
                                        <td>مكتب الهجرين</td>
                                        <td> مكتب مشترك</td>
                                        <td>2014/21/01</td>
                                        <td>2014/1/01</td>
                                        <td><span class="badge rounded-pill text-bg-danger">منتهي</span>
                                        </td>
                                        <td class="operations">
                                            <a href="{{ route('tenant.booking.view') }}" class="dash-btn das-show"><i
                                                    class="bi bi-link"></i></a>
                                            <a href="{{ route('platform.users.delete') }}" class="dash-btn das-delete"><i
                                                    class="bi bi-x-octagon"></i>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>رغد محمد العطاس</td>
                                        <td>مكتب شبام</td>
                                        <td> مكتب مشترك</td>
                                        <td>2014/21/01</td>
                                        <td>2014/1/01</td>
                                        <td><span class="badge rounded-pill text-bg-warning">قيد المراجعة</span>
                                        </td>
                                        <td class="operations">
                                            <a href="{{ route('tenant.booking.view') }}" class="dash-btn das-show"><i
                                                    class="bi bi-link"></i></a>
                                            <a href="{{ route('platform.users.delete') }}" class="dash-btn das-delete"><i
                                                    class="bi bi-x-octagon"></i>

                                        </td>
                                    </tr>

                                    </tr>
                                </tbody>
                            </table>

                            <!-- End Table with stripped rows -->
                            {{-- <div class="datatable-bottom">
                                <div class="datatable-info">عرض 1 الى 10</div>
                                <nav class="datatable-pagination">
                                    <ul class="datatable-pagination-list">
                                        <li class="datatable-pagination-list-item datatable-hidden datatable-disabled">
                                            <button data-page="1" class="datatable-pagination-list-item-link"
                                                aria-label="Page 1">‹</button>
                                        </li>
                                        <li class="datatable-pagination-list-item datatable-active"><button data-page="1"
                                                class="datatable-pagination-list-item-link" aria-label="Page 1"
                                                fdprocessedid="ej71rk">1</button></li>
                                        <li class="datatable-pagination-list-item"><button data-page="2"
                                                class="datatable-pagination-list-item-link" aria-label="Page 2"
                                                fdprocessedid="xkm36a">2</button></li>
                                        <li class="datatable-pagination-list-item"><button data-page="3"
                                                class="datatable-pagination-list-item-link" aria-label="Page 3"
                                                fdprocessedid="mb1rhy">3</button></li>
                                        <li class="datatable-pagination-list-item"><button data-page="4"
                                                class="datatable-pagination-list-item-link" aria-label="Page 4"
                                                fdprocessedid="qh2x6v">4</button></li>
                                        <li class="datatable-pagination-list-item"><button data-page="5"
                                                class="datatable-pagination-list-item-link" aria-label="Page 5"
                                                fdprocessedid="hplb9vo">5</button></li>
                                        <li class="datatable-pagination-list-item"><button data-page="6"
                                                class="datatable-pagination-list-item-link" aria-label="Page 6"
                                                fdprocessedid="4dnscw">6</button></li>
                                        <li class="datatable-pagination-list-item"><button data-page="7"
                                                class="datatable-pagination-list-item-link" aria-label="Page 7"
                                                fdprocessedid="jyo7q">7</button></li>
                                        <li class="datatable-pagination-list-item datatable-ellipsis datatable-disabled">
                                            <button class="datatable-pagination-list-item-link"
                                                fdprocessedid="v63px9">…</button>
                                        </li>
                                        <li class="datatable-pagination-list-item"><button data-page="10"
                                                class="datatable-pagination-list-item-link" aria-label="Page 10"
                                                fdprocessedid="tot316">10</button></li>
                                        <li class="datatable-pagination-list-item"><button data-page="2"
                                                class="datatable-pagination-list-item-link" aria-label="Page 2"
                                                fdprocessedid="c44vbe">›</button></li>
                                    </ul>
                                </nav>
                            </div> --}}
                        </div>
                    </div>

                </div>
        </section>

    </main><!-- End #main -->
@endsection
