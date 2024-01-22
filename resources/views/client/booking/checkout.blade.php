@extends('layouts.platform')
@section('content')
    <main id="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"> بيانات الحجز</li>
                    <li class="breadcrumb-item "> <a
                            href="{{ route('tenant.Reservations', ['site' => Auth()->id()]) }}">العروض</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('tenant') }}">الرئيسية</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="row">
            <div class="col-lg-6">
                <div class="">
                    <div class="card offer-box">
                        <!-- Slides with indicators -->
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                @foreach ($images as $key => $image)
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"
                                        aria-current="true" aria-label="Slide 1"></button>
                                @endforeach
                            </div>
                            <div class="carousel-inner">
                                @foreach ($images as $key => $image)
                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                        <img style="height: 300px" src="{{ asset('storage/images/' . $image->path) }}"
                                            class="d-block w-100 img-spase" alt="Slide {{ $key + 1 }}">
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div><!-- End Slides with indicators -->
                        <div class="pricing-box " dir="">
                            <h4 class=" pt-1 mainColor text-center"> تفاصيل المكتب </h4>
                            <div class="">
                                <div class="row text-end mb-1" dir="rtl">
                                    <div class="col-lg-6 col-md-6 ">
                                        <p class="fw-bold "> <i
                                                class="bi bi-geo-fill mainColor fs-5 px-2 fw-bold"></i>{{ $reservation->workspaceOffer->workspace->provider->title }}
                                            -
                                            {{ $reservation->workspaceOffer->workspace->title }}</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 align-self-center">
                                        <p class="pe-3">
                                            {{ $reservation->workspaceOffer->workspace->provider->directorate->governorate->name }}
                                            {{ $reservation->workspaceOffer->workspace->provider->directorate->name }}
                                            -
                                            {{ $reservation->workspaceOffer->workspace->provider->address }}
                                        </p>
                                    </div>

                                </div>
                                <div class="row text-end mb-1" dir="rtl">
                                    <div class="col-lg-6 col-md-6">
                                        <p class="fw-bold"> <i
                                                class="bi bi-columns-gap mainColor fs-6 px-2 fw-bold"></i>{{ $reservation->workspaceOffer->workspace->workspaceType->label }}
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 align-self-center">
                                        <p class="pe-3 ">
                                            {{ $reservation->workspaceOffer->price }}
                                            {{ $reservation->workspaceOffer->workspace->provider->currency }} في
                                            {{ $reservation->workspaceOffer->workspaceDuration->title }}
                                        </p>
                                    </div>

                                </div>
                                <div class="row text-end mb-1" dir="rtl">
                                    <div class="col-lg-6 col-md-6">
                                        <p class="fw-bold"> <i
                                                class="bi bi-person-standing mainColor fs-4 px-2 fw-bold"></i>{{ $reservation->workspaceOffer->workspace->maxPeople }}
                                        </p>
                                    </div>


                                </div>
                                <div class="row text-end mb-1" dir="rtl">
                                    <div class="col-lg-6 col-md-6">
                                        <p class="fw-bold"> <i
                                                class="bi bi-bounding-box-circles mainColor fs-6 px-2 fw-bold"></i>{{ $reservation->workspaceOffer->workspace->area }}
                                            متر مربع
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" dir="rtl">
                        <section class=" ">
                            <h6 class="main-title"> الفاتورة </h6>
                            <table class="table" id="invoice">
                                <thead>
                                    <tr>
                                        <th scope="col" class="bg-total">#</th>
                                        <th scope="col" class="w-75 bg-total">اسم الخدمة</th>
                                        <th scope="col" class="bg-total">السعر
                                            ({{ $reservation->workspaceOffer->workspace->provider->currency }})</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $totalPrice = floatval($reservation->officPrice);
                                        $counter = 1;
                                    @endphp

                                    <tr>
                                        <th scope="row">{{ $counter }}</th>
                                        <td>{{ $reservation->workspaceOffer->workspace->title }}</td>
                                        <td>{{ $reservation->officPrice }}</td>
                                    </tr>
                                    @foreach ($reservation->orders as $order)
                                        <tr>
                                            <th scope="row">{{ ++$counter }}</th>
                                            <td>{{ $order->service->name }}</td>
                                            <td>{{ $order->service->price }}</td>
                                        </tr>
                                        @php
                                            $totalPrice += floatval($order->service->price);
                                        @endphp
                                    @endforeach


                                </tbody>
                                <tfoot class="total">
                                    <th colspan="2 " class="fs-5 bg-total">الاجمالي</th>
                                    <th class="darkColor bg-total fs-4">{{ $totalPrice }}</th>
                                </tfoot>
                            </table>
                        </section>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="" dir="rtl">
                        <h6 class="main-title">معلوماتك </h6>
                        <div class="row">
                            <div class="col-12 ">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 sub-title ">
                                        <p class=""> الاسم </p>
                                    </div>
                                    <div class="col-lg-9 col-md-8">
                                        <p class=""> {{ $reservation->user->name }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 sub-title ">
                                        <p class=""> الايميل </p>
                                    </div>
                                    <div class="col-lg-9 col-md-8">
                                        <p class="">{{ $reservation->user->email }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 sub-title">الرقم المرجعي</div>
                                    <div class="col-lg-9 col-md-8">{{ $reservation->id }}</div>
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
                                        <p> {{ substr($reservation->start_date, 0, 10) }}
                                        <p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 sub-title">
                                        <p>الوقت </p>
                                    </div>
                                    <div class="col-lg-3 col-md-8">
                                        <p>{{ date('g:i a', strtotime($reservation->start_date)) }}
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 sub-title ">
                                        <p> تاريخ النهاية </p>
                                    </div>
                                    <div class="col-lg-3 col-md-8">
                                        <p> {{ substr($reservation->end_date, 0, 10) }}
                                        <p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 sub-title">
                                        <p>الوقت </p>
                                    </div>
                                    <div class="col-lg-3 col-md-8">
                                        <p>{{ date('g:i a', strtotime($reservation->end_date)) }}
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <h6 class="main-title">حسابات
                                        {{ $reservation->workspaceOffer->workspace->provider->title }} البنكية </h6>

                                    @foreach ($reservation->workspaceOffer->workspace->provider->payments as $payment)
                                        <div class="col-lg-3 col-md-4 sub-title ">
                                            <p>
                                                {{ $payment->name }}
                                            </p>
                                        </div>
                                        <div class="col-lg-3 col-md-8">
                                            <p> {{ $payment->number }}
                                            <p>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        @if ($reservation->state->id == 1)
                            <form enctype="multipart/form-data"
                                action="{{ route('offer.checkout', ['name' => $reservation->workspaceOffer->workspace->name]) }}"
                                method="post">
                                @csrf
                                <input type="hidden" name="reservation_id" value="{{ $reservation->id }}">
                                <div class="" dir="rtl">
                                    <h6 class="main-title">السند</h6>
                                    @if ($errors->any())
                                        <div class="alert alert-danger text-end">
                                            @foreach ($errors->all() as $error)
                                                {{ $error }}
                                            @endforeach
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>يجب ارفاق السند لتأكيد الحجز.</p>
                                            <div class="form-group">
                                                <input type="file" class="form-control" name="voucher"
                                                    id="voucher-input">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="voucher-image" class="voucher-img"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" dir="rtl">
                                    <div class="col">
                                        <div class="d-flex justify-content-start">
                                            <button type="submit" class="btn-dasMain">تأكيد الحجز</button>
                                            <button type="button" class="btn-dasSecond" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">
                                                الغاء الحجز </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endif

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content" dir="rtl">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">إلغاء الحجز
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        هل انت متاكد من إلغاء الحجز !!
                                    </div>
                                    <div class="modal-footer justify-content-start">
                                        <form
                                            action="{{ route('offer.cansel', ['name' => $reservation->workspaceOffer->workspace->name]) }}"
                                            method="post">
                                            @csrf
                                            <input type="hidden" name="reservation_id" value="{{ $reservation->id }}">

                                            <button type="submit" class="btn-dasMain">تاكيد</button>
                                        </form>
                                        <button type="button" class="btn-dasSecond"
                                            data-bs-dismiss="modal">الغاء</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            var logoInput = document.getElementById('voucher-input');
                            var logoImage = document.getElementById('voucher-image');

                            logoInput.addEventListener('change', function(event) {
                                if (event.target.files.length > 0) {
                                    var file = event.target.files[0];
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        var imgElement = document.createElement('img');
                                        imgElement.src = e.target.result;
                                        imgElement.classList.add('voucher-img');

                                        // إزالة الصورة السابقة إذا كانت موجودة
                                        while (logoImage.firstChild) {
                                            logoImage.removeChild(logoImage.firstChild);
                                        }

                                        // إضافة الصورة الجديدة إلى عنصر الـ div
                                        logoImage.appendChild(imgElement);
                                    };
                                    reader.readAsDataURL(file);
                                } else {
                                    // قم بإزالة الصورة إذا تمت إزالة الملف المحدد
                                    while (logoImage.firstChild) {
                                        logoImage.removeChild(logoImage.firstChild);
                                    }
                                }
                            });
                        </script>
    </main>
@endsection
