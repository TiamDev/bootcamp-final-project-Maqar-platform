@extends('layouts.platform')
@section('content')
    <main id="main">

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">ادارة الحجوزات</li>
                    <li class="breadcrumb-item"><a href="{{ route('tenant.dashboard') }}">الرئيسية</a></li>
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
                                        <th>نوع الفترة </th>
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
                                    @foreach ($reservations as $reservation)
                                        <tr>
                                            <td>{{ $reservation->user->name }}</td>
                                            <td>{{ $reservation->workspaceOffer->workspace->title }}</td>
                                            <td>{{ $reservation->workspaceOffer->workspaceDuration->title }}</td>
                                            <td>{{ $reservation->start_date }}</td>
                                            <td>{{ $reservation->end_date }}</td>
                                            <td><span
                                                    class="badge rounded-pill text-bg-success">{{ $reservation->state->title }}</span>
                                            <td class="operations">
                                                <a href="{{ route('tenant.Reservations.ReservationView', ['site' => $reservation->workspaceOffer->workspace->provider->name, 'id' => $reservation->id]) }}"
                                                    class="dash-btn das-show"><i class="bi bi-link fs-4"
                                                        title="عرض التفاصيل"></i></a>
                                                <a href="{{ route('tenant.Reservations.ReservationReject', ['site' => $reservation->workspaceOffer->workspace->provider->name, 'id' => $reservation->id]) }}"
                                                    class="dash-btn das-delete" title="رفض"><i
                                                        class="bi bi-x-octagon"></i>
                                            </td>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
        </section>

    </main><!-- End #main -->
@endsection
