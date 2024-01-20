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
            {{-- <div class="row" dir="rtl">
                <div class="col-12">
                    <div class="card">
                        <div class=" d-flex justify-content-between mt-2">
                            <h5 class="card-title ">جدول الحجوزات</h5>
                            <a href="{{ route('platform.users.view') }}" class="dash-btn das-show"><i
                                    class="bi bi-plus-square fs-4"></i></a>
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-lg-12">

                    <div class="card" dir="rtl">
                        <div class="card-body">
                            <div class="row mb-3  align-items-center">
                                <div class="col-lg-10">
                                    <h3 class="">جدول الحجوزات</h3>
                                </div>

                                <div class="col-2 d-flex justify-content-center align-items-center">
                                    <div class="input-group mb-3" dir="ltr">
                                        <span class="input-group-text" id="basic-addon1"> <i
                                                class="bi bi-funnel mainColor"></i>
                                            </i>
                                        </span>
                                        <select id="bookingStatus" class="form-control" onchange="displaySelectedBooking()">
                                            <option value="">اختر حالة الحجز</option>
                                            @foreach ($states as $state)
                                                <option value="{{ $state->id }}">{{ $state->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- <h5 class="card-title"></h5> -->
                            <!-- Table with stripped rows -->
                            <table class="table booking-table" id="bookingTable">
                                <thead>
                                    <tr>
                                        <th>
                                            اسم المستاجر
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
                                            <td><span id="state-{{ $reservation->state->id }}"
                                                    data-status-id="{{ $reservation->state->id }}"
                                                    class="badge rounded-pill @if ($reservation->state->id == 1) text-bg-primary
                                                @elseif ($reservation->state->id == 2)
                                                text-bg-warning
                                                @elseif ($reservation->state->id == 3)
                                                text-bg-success
                                                @else
                                                text-bg-danger @endif ">{{ $reservation->state->title }}</span>
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
    <script>
        function displaySelectedBooking() {
            var selectedStatus = document.getElementById("bookingStatus").value;
            var table = document.getElementById("bookingTable");
            var rows = table.getElementsByTagName("tbody")[0].getElementsByTagName("tr");

            for (var i = 0; i < rows.length; i++) {
                var statusCell = rows[i].querySelector("td span");
                if (statusCell) {
                    var statusId = statusCell.getAttribute("data-status-id");
                    if (selectedStatus === "" || selectedStatus === statusId) {
                        rows[i].style.display = "";
                    } else {
                        rows[i].style.display = "none";
                    }
                }
            }
        }
    </script>
@endsection
