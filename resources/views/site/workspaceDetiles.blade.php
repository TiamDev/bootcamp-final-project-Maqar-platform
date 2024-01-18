@extends('layouts.site')
@section('content')
    <link href="{{ asset('/site/css/card.css') }}" rel="stylesheet">


    <main id="main " class="my-mt container" dir="rtl">
        <form action="{{ route('offer.booking', ['name' => $workspaceOffer->workspace->name]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="POST">

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        {{-- الفترات يدخلها --}}
                        <div class="p-4" dir="rtl">
                            <h4 class="sub-title-x mainColor">التاريخ </h4>
                            <div class="row mb-2">
                                <div class="col-3 d-f">
                                    <p>تاريخ البداية</p>
                                </div>
                                <div class="col-5">
                                    <input type="date" class="form-control " name="dateStart" required>

                                </div>
                            </div>
                            @if ($workspaceOffer->workspaceDuration->name == 'hour')
                                <div class="row mb-2">
                                    <div class="col-3 d-f">
                                        <p>وقت البداية</p>
                                    </div>
                                    <div class="col-5 ">
                                        @php
                                            $startWorkHour = (int) $workspaceOffer->workspace->provider->startWorkHour;
                                        @endphp
                                        <select class="form-control" name="timeStart">
                                            <option value="{{ $startWorkHour }}" selected>
                                                {{ $startWorkHour }}:00
                                                ص</option>
                                            @for ($i = $startWorkHour + 1; $i <= 23; $i++)
                                                @php
                                                    $hour = $i % 12 === 0 ? 12 : $i % 12;
                                                    $period = $i < 12 ? 'ص' : 'م';
                                                    $option = $hour . ':00 ' . $period;
                                                @endphp
                                                <option value="{{ $i }}">{{ $option }}</option>
                                            @endfor
                                        </select>
                                        @error('dateEnd')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            @else
                                <input type="hidden" class="form-control" name="timeStart"
                                    value="{{ $workspaceOffer->workspace->provider->startWorkHour }}">
                                <input type="hidden" class="form-control" name="name"
                                    value="{{ $workspaceOffer->workspace->name }}">
                            @endif
                            <div class="row mb-2">
                                <div class="col-3 d-f">
                                    <p> تكرار المدة</p>
                                    <small>({{ $workspaceOffer->workspaceDuration->title }})</small>
                                </div>
                                <div class="col-5">
                                    <input type="number" class="form-control " min="1" value="1"
                                        id="repeatDuration" name="repeatDuration">
                                    @if ($isBooked == 2)
                                        <p class="conform-text"> خارج عن اوقات الدوام</p>
                                    @endif
                                </div>
                            </div>
                            @if ($isBooked == 0)
                                <p class="conform-text">المساحة محجوزة ارجو اختيار فترة اخرى</p>
                            @endif

                        </div>
                        <div class=" p-4" dir="rtl">
                            <h4 class="sub-title-x pt-1 mainColor">خدمات اضافية </h4>
                            <div class="row">
                                @foreach ($workspaceOffer->workspace->provider->services as $service)
                                    <div class="col-lg-6 col-md-6">
                                        <input type="checkbox" name="servises[]" id="service_{{ $service->id }}"
                                            class="checkbox-input-over" value="{{ $service->id }}"
                                            onchange="updateTable(this)" />
                                        <label for="service_{{ $service->id }}" class="checkbox-label-over">
                                            <div class="checkbox-text-over">
                                                <div class="d-flex justify-content-between">
                                                    <p class="checkbox-text--description">{{ $service->name }}</p>
                                                    <span class="checkbox-text--title">{{ $service->price }}
                                                    </span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                        <section class=" p-4" dir="rtl">
                            <h4 class="sub-title-x pt-1 mainColor"> الفاتورة </h4>
                            <table class="table" id="invoice">
                                <thead>
                                    <tr>
                                        <th scope="col" class="bg-total">#</th>
                                        <th scope="col" colspan="2" class="w-50 bg-total">اسم الخدمة</th>
                                        <th></th>
                                        <th scope="col" class="bg-total">السعر
                                            ({{ $workspaceOffer->workspace->provider->currency }})</th>

                                    </tr>
                                </thead>
                                <tr>
                                    <td>1</td>
                                    <td colspan="2"> {{ $workspaceOffer->workspace->title }}</td>
                                    <td></td>
                                    <td id="office-total">{{ $workspaceOffer->price }}</td>

                                </tr>
                                <tbody>

                                </tbody>
                                <tfoot class="total">
                                    <th colspan="4" class="fs-5 bg-total">الاجمالي</th>
                                    <th class="darkColor bg-total fs-4 "id="total-price">{{ $workspaceOffer->price }}</th>
                                </tfoot>
                            </table>
                        </section>
                        <div class="row p-4">
                            <div class="col">
                                <input type="hidden" name="duration"
                                    value="{{ $workspaceOffer->workspaceDuration->name }}">
                                <input type="hidden" name="workspaceOffer_id" value="{{ $workspaceOffer->id }}">
                                <button type="submit" class="btn-dasMain"> استكمال اجراءات الحجز</button>
                                <a href="{{ route('home') }}"></a>
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
                                    @foreach ($images as $key => $image)
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="{{ $key }}"
                                            class="{{ $key == 0 ? 'active' : '' }}" aria-current="true"
                                            aria-label="Slide 1"></button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach ($images as $key => $image)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                            <img style="height: 500px"
                                                src="{{ asset('storage/images/' . $image->path) }}"
                                                class="d-block w-100 img-spase" alt="Slide {{ $key + 1 }}">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div><!-- End Slides with indicators -->
                            <div class="pricing-box " dir="">
                                <h4 class=" pt-1 mainColor text-center"> تفاصيل المكتب </h4>
                                <div class="">
                                    <div class="row text-end mb-3" dir="rtl">
                                        <div class="col-lg-6 col-md-6 ">
                                            <p class="fw-bold "> <i
                                                    class="bi bi-geo-fill mainColor fs-5 px-2 fw-bold"></i>{{ $workspaceOffer->workspace->provider->title }}
                                                -
                                                {{ $workspaceOffer->workspace->title }}</p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 align-self-center">
                                            <p class="pe-3">
                                                {{ $workspaceOffer->workspace->provider->directorate->governorate->name }}
                                                {{ $workspaceOffer->workspace->provider->directorate->name }} -
                                                {{ $workspaceOffer->workspace->provider->address }}
                                            </p>
                                        </div>

                                    </div>
                                    <div class="row text-end mb-3" dir="rtl">
                                        <div class="col-lg-6 col-md-6">
                                            <p class="fw-bold"> <i
                                                    class="bi bi-columns-gap mainColor fs-6 px-2 fw-bold"></i>{{ $workspaceOffer->workspace->workspaceType->label }}
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 align-self-center">
                                            <p class="pe-3 ">
                                                {{ $workspaceOffer->price }}
                                                {{ $workspaceOffer->workspace->provider->currency }} في
                                                {{ $workspaceOffer->workspaceDuration->title }}
                                            </p>
                                        </div>

                                    </div>
                                    <div class="row text-end mb-3" dir="rtl">
                                        <div class="col-lg-6 col-md-6">
                                            <p class="fw-bold"> <i
                                                    class="bi bi-person-standing mainColor fs-4 px-2 fw-bold"></i>{{ $workspaceOffer->workspace->maxPeople }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row text-end mb-3" dir="rtl">
                                        <div class="col-lg-6 col-md-6">
                                            <p class="fw-bold"> <i
                                                    class="bi bi-bounding-box-circles mainColor fs-6 px-2 fw-bold"></i>{{ $workspaceOffer->workspace->area }}
                                                متر مربع
                                            </p>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
        </div>
        </div>
    </main>

    <script>
        var tableBody = document.getElementById("invoice").getElementsByTagName("tbody")[0];
        var totalFooter = document.getElementById("total-price");
        var repeatDurationInput = document.getElementById("repeatDuration");
        var totalPriceElement = document.getElementById("total-price");
        var totalPrice = parseFloat(totalPriceElement.innerText);
        var officePriceElement = document.getElementById("office-total");
        var officePrice = parseFloat(officePriceElement.innerText);
        var repeatDuration = parseFloat(repeatDurationInput.value);
        var newOfficePrice = repeatDuration * officePrice;
        var x = officePrice;
        repeatDurationInput.onchange = function() {
            repeatDuration = parseFloat(repeatDurationInput.value);
            newOfficePrice = repeatDuration * x; // استخدم قيمة x الأصلية لحساب السعر الجديد
            officePriceElement.innerText = newOfficePrice.toFixed(2);
            officePrice = newOfficePrice;
            totalPrice = parseFloat(officePriceElement
                .innerText); // قم بإعادة تعيين القيمة الكلية باستخدام سعر المكتب الجديد
            var serviceRows = tableBody.getElementsByTagName("tr");
            for (var i = 1; i < serviceRows.length; i++) {
                var serviceRow = serviceRows[i];
                var priceCell = serviceRow.cells[3];
                var price = parseFloat(priceCell.innerText);
                totalPrice += price;
            }
            totalPriceElement.innerText = totalPrice.toFixed(2);
        };

        function updateTable(checkbox) {

            if (checkbox.checked) {
                var serviceId = checkbox.value;
                var serviceName = document.getElementById("service_" + serviceId).nextElementSibling.querySelector(
                    ".checkbox-text--description").innerText;
                var servicePrice = document.getElementById("service_" + serviceId).nextElementSibling.querySelector(
                    ".checkbox-text--title").innerText;
                var row = tableBody.insertRow();
                row.id = "service_row_" + serviceId;
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                var cell4 = row.insertCell(3);
                cell1.innerHTML = tableBody.rows.length + 1;
                cell2.colSpan = 2;
                cell2.innerHTML = serviceName;
                cell3.innerHTML = "";
                cell4.innerHTML = servicePrice;
                totalPrice += parseFloat(servicePrice);
            } else {
                var serviceId = checkbox.value;
                var rowId = "service_row_" + serviceId;
                var row = document.getElementById(rowId);
                if (row) {
                    var priceCell = row.cells[3];
                    var price = parseFloat(priceCell.innerText);
                    tableBody.removeChild(row);
                    totalPrice -= price;
                    for (var i = 0; i < tableBody.rows.length; i++) {
                        tableBody.rows[i].cells[0].innerText = i + 1;
                    }
                }
            }
            totalPriceElement.innerText = totalPrice.toFixed(2);
        }




        // function updateTable(checkbox) {
        //     var tableBody = document.getElementById("invoice").getElementsByTagName("tbody")[0];
        //     var totalFooter = document.querySelector(".total-price");
        //     var repeatDurationInput = document.getElementById("repeatDuration");
        //     var totalPriceElement = document.getElementById("total-price");
        //     var totalPrice = parseFloat(totalPriceElement.innerText);
        //     var officePrice = parseFloat(document.getElementById("office-total").innerText);

        //     // قراءة قيمة repeatDuration
        //     var repeatDuration = parseFloat(repeatDurationInput.value);

        //     // حساب قيمة officPrice
        //     var officPrice = repeatDuration * officePrice;

        //     // التحقق من تغيير قيمة repeatDuration
        //     repeatDurationInput.onchange = function() {
        //         repeatDuration = parseFloat(repeatDurationInput.value);
        //         officPrice = repeatDuration * officePrice;

        //         // تحديث الإجمالي
        //         totalPrice = totalPrice - officePrice + officPrice;
        //         officePrice = officPrice;
        //         totalPrice += officPrice;

        //         // تحديث قيمة عنصر الإجمالي في الصفحة
        //         totalPriceElement.innerText = totalPrice.toFixed(2);
        //     };

        //     if (checkbox.checked) {
        //         var serviceId = checkbox.value;
        //         var serviceName = document.getElementById("service_" + serviceId).nextElementSibling.querySelector(
        //             ".checkbox-text--description").innerText;
        //         var servicePrice = document.getElementById("service_" + serviceId).nextElementSibling.querySelector(
        //             ".checkbox-text--title").innerText;

        //         var row = tableBody.insertRow();
        //         row.id = "service_row_" + serviceId; // إضافة id للصف بناءً على ايدي الخدمة

        //         var cell1 = row.insertCell(0);
        //         var cell2 = row.insertCell(1);
        //         var cell3 = row.insertCell(2);
        //         var cell4 = row.insertCell(3);

        //         cell1.innerHTML = tableBody.rows.length + 1;
        //         cell2.colSpan = 2;
        //         cell2.innerHTML = serviceName;
        //         cell3.innerHTML = "";
        //         cell4.innerHTML = servicePrice;

        //         totalPrice += parseFloat(servicePrice);
        //     } else {
        //         var serviceId = checkbox.value;
        //         var rowId = "service_row_" + serviceId; // الحصول على id الصف المرتبط بإيدي الخدمة
        //         var row = document.getElementById(rowId);

        //         if (row) {
        //             var priceCell = row.cells[3];
        //             var price = parseFloat(priceCell.innerText);
        //             tableBody.removeChild(row);

        //             // totalPrice -= price;
        //             totalPrice -= price;

        //             for (var i = 0; i < tableBody.rows.length; i++) {
        //                 tableBody.rows[i].cells[0].innerText = i + 1;
        //             }
        //         }
        //     }

        //     // totalPrice -= officPrice; // يجب أن يكون خارج ال else ليتم تحديث المبلغ الإجمالي في كل الحالات
        //     totalPriceElement.innerText = totalPrice.toFixed(2);
        // }
    </script>



@endsection
