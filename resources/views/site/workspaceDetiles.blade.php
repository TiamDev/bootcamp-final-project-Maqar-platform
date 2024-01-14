@extends('layouts.site')
@section('content')
    <link href="{{ asset('/site/css/card.css') }}" rel="stylesheet">

    <main id="main " class="mt-5 container" dir="ltr">
        <form action="{{ route('offer.booking', ['name' => $workspaceOffer->workspace->name]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="POST">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="" dir="rtl">
                            <h4 class="sub-title-x pt-1 mainColor">خدمات اضافية </h4>
                            <div class="row">
                                @foreach ($workspaceOffer->workspace->provider->services as $service)
                                    <div class="col-6 ">
                                        <input type="checkbox" name="servises[]" id="service_{{ $service->id }}"
                                            class="checkbox-input-over" value="{{ $service->id }}"
                                            onchange="updateTable(this)" />
                                        <label for="service_{{ $service->id }}" class="checkbox-label-over">
                                            <div class="checkbox-text-over">
                                                <div class="d-flex justify-content-between">
                                                    <p class="checkbox-text--description">{{ $service->name }}</p>
                                                    <span class="checkbox-text--title">{{ $service->price }} ري</span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- الفترات يدخلها --}}
                        <div class="p-4" dir="rtl">
                            <h4 class="sub-title-x mainColor">التاريخ </h4>
                            <div class="row mb-2">
                                <div class="col-3 d-f">
                                    <p>تاريخ البداية</p>
                                </div>
                                <div class="col-5">
                                    <input type="date" class="form-control " name="dateStart" required>
                                    {{-- @error('dateStart')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror --}}
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
                                                {{ $startWorkHour }}
                                                AM</option>
                                            @for ($i = $startWorkHour + 1; $i <= 23; $i++)
                                                @php
                                                    $hour = $i % 12 === 0 ? 12 : $i % 12;
                                                    $period = $i < 12 ? 'AM' : 'PM';
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
                                    <input type="number" class="form-control " min="1" id="repeatDuration"
                                        name="repeatDuration">
                                    @error('repeatDuration')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <section class=" p-4" dir="rtl">
                            <h6 class=" pt-1 mainColor"> الفاتورة </h6>
                            <table class="table" id="invoice">
                                <thead>
                                    <tr>
                                        <th scope="col" class="bg-total">#</th>
                                        <th scope="col" colspan="2" class="w-50 bg-total">اسم الخدمة</th>
                                        <th scope="col" class="bg-total">كمية</th>
                                        <th scope="col" class="bg-total">السعر (ري)</th>

                                    </tr>
                                </thead>
                                <tr>
                                    <td>1</td>
                                    <td colspan="2"> {{ $workspaceOffer->workspace->title }}</td>
                                    <td>1</td>
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

                            </div>
                            <div class="col">
                                @error('error')
                                    {{ $message }}
                                @enderror
                                <p class="conform-text"></p>
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
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('site/img/office/pexels-max-rahubovskiy-7534232.jpg') }}"
                                            class="d-block w-100 img-spase" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('site/img/office/pexels-max-rahubovskiy-7534231.jpg') }}"
                                            class="d-block w-100 img-spase" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('site/img/office/pexels-max-rahubovskiy-7534232.jpg') }}"
                                            class="d-block w-100 img-spase" alt="...">
                                    </div>
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
                            </div>
                            <div class="pricing-box " dir="ltr">
                                <h6 class=" pt-1 mainColor"> تفاصيل المكتب </h6>
                                <div class="">
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="">{{ $workspaceOffer->workspace->provider->address }}</p>
                                        </div>
                                        <div class="col-6 ">
                                            <h6 class=""> {{ $workspaceOffer->workspace->provider->title }} -
                                                {{ $workspaceOffer->workspace->title }}<i class="bi bi-geo-fill"></i></h6>
                                        </div>
                                    </div>
                                    {{-- <div class="row">
                                        <div class="col-12">
                                            <h6 class=""> 20/1/2024 - 20-5-2024 <i class="bi bi-clock"></i></h6>
                                        </div>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class=""> {{ $workspaceOffer->workspace->workspaceType->name }} <i
                                                    class="bi bi-columns-gap"></i></h6>
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
        function checkData() {

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // يجب استبداله برمز csrf المناسب لتطبيق Laravel الخاص بك
                    },
                    body: JSON.stringify({
                        name: 'قيمة الاسم' // قم بتعيين البيانات التي ترغب في إرسالها هنا
                    })
                })
                .then(response => response.json())
                .then(result => {
                    // قم بمعالجة الرد هنا
                    console.log(result);
                })
                .catch(error => {
                    // قم بمعالجة الخطأ في طلب AJAX
                    console.log(error);
                });
        }
        ///////////////////////////////////
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

        //         // تحديث قيمة عنصر الإجمالي في الصفحة
        //         document.getElementById("total-price").innerText = totalPrice.toFixed(2);
        //     };

        //     if (checkbox.checked) {
        //         var serviceId = checkbox.value;
        //         var serviceName = document.getElementById("service_" + serviceId).nextElementSibling.querySelector(
        //             ".checkbox-text--description").innerText;
        //         var servicePrice = document.getElementById("service_" + serviceId).nextElementSibling.querySelector(
        //             ".checkbox-text--title").innerText;

        //         var row = tableBody.insertRow();
        //         var cell1 = row.insertCell(0);
        //         var cell2 = row.insertCell(1);
        //         var cell3 = row.insertCell(2);
        //         var cell4 = row.insertCell(3);

        //         cell1.innerHTML = tableBody.rows.length + 1;
        //         cell2.colSpan = 2;
        //         cell2.innerHTML = serviceName;
        //         cell3.innerHTML = "";
        //         cell4.innerHTML = servicePrice;

        //         totalPrice += parseFloat(servicePrice) + officPrice;
        //     } else {
        //         var rowIndex = checkbox.parentNode.parentNode.rowIndex;
        //         var priceCell = tableBody.rows[rowIndex].cells[3];
        //         var price = parseFloat(priceCell.innerText);
        //         tableBody.deleteRow(rowIndex);

        //         for (var i = rowIndex; i < tableBody.rows.length; i++) {
        //             tableBody.rows[i].cells[0].innerHTML = i + 1;
        //         }

        //         totalPrice -= price + officPrice;
        //     }

        //     totalPriceElement.innerText = totalPrice.toFixed(2);
        // }
    </script>
@endsection
