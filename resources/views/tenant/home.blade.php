@extends('layouts.site')
@section('content')
    <main id="main" dir="ltr">
        <div class="container provider-conent ">
            <div class="header-section left-br">
                <h2 class="office-name">{{ $provider->title }}</h2>
                <p class="office-address ">{{ $provider->address }}</p>
            </div>
        </div>

        {{-- slider --}}
        <div class="container ">
            <div class="slider-container">
                <div class="small-images">
                    @foreach ($images as $index => $image)
                        @if ($index === 0)
                            {{-- <img class="small-image" src="{{ asset($image->path) }}"
                                onclick="changeImage('{{ asset($image->path) }}')"> --}}
                        @else
                            <img class="small-image" src="{{ asset('storage/galary/' . $image->path) }}"
                                onclick="changeImage('{{ asset('storage/galary/' . $image->path) }}')">
                        @endif
                    @endforeach
                </div>
                <div class="large-image">

                    @if (!empty($images) && isset($images[0]))
                        <img id="main-image" src="{{ asset('storage/galary/' . $images[0]->path) }}">
                    @endif
                </div>
            </div>
        </div>

        <section dir="rtl" class="about-provider">
            <div class="container">
                <h2 class="text-dark my-4">
                    <i class="bi bi-buildings title-icon"></i>

                    نبذة عن مقر {{ $provider->title }}
                </h2>
                <div class="row">

                    <div class="col-lg-9">
                        @php
                            $aboutUsContent = $provider
                                ->contents()
                                ->where('type', 'aboutus')
                                ->first();
                        @endphp
                        @if ($aboutUsContent)
                            <div class="about-us">
                                <p class="fs-5 mt-3">{{ $aboutUsContent->description }}</p>
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ asset('storage/logo/' . $provider->logo) }}" alt="" srcset=""
                            style="width: 60%;">
                    </div>
                </div>
            </div>
        </section>

        <section dir="rtl" class="about-provider">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-dark mb-4">
                            <i class="bi bi-gem title-icon "></i>
                            المرافق
                        </h2>
                        <div class="row px-5">
                            <ul class="myul ">
                                @if (count($provider->features) > 0)
                                    @foreach ($provider->features as $feature)
                                        <li> {{ $feature->name }}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <div class="container " data-aos="fade-up" dir="rtl">
            <h2 class="text-dark mb-3">
                <i class="bi bi-gear title-icon pb-4"></i>
                خدماتنا
            </h2>
            <div class="row gy-4" data-aos="fade-left">
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="service-box">
                        <img src="{{ asset('site/img/office/pexels-flo-dahm-699459.jpg') }}" class="img-fluid service-img"
                            alt="">
                        <div class="pricing-box px-4" dir="ltr">
                            <h4 class="pricing-title ">مكتب خاص
                            </h4>
                            <div class="pricing-details ">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="pricing-amount">يبدأ من <span class="amount">80,000</span> ريال
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <h4 class="pricing-type">شهرياً</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="pricing-amount">يبدأ من <span class="amount">80,000</span> ريال
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <h4 class="pricing-type">الاسبوع</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="pricing-amount">يبدأ من <span class="amount">80,000</span> ريال
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <h4 class="pricing-type">اليوم</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="main-btn">احجز الآن</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="service-box">
                        <img src="{{ asset('site/img/office/pexels-flo-dahm-699459.jpg') }}" class="img-fluid service-img"
                            alt="">
                        <div class="pricing-box px-4" dir="ltr">
                            <h4 class="pricing-title ">مكتب مشترك
                            </h4>
                            <div class="pricing-details ">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="pricing-amount">يبدأ من <span class="amount">80,000</span> ريال
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <h4 class="pricing-type">الشهر</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="pricing-amount">يبدأ من <span class="amount">80,000</span> ريال
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <h4 class="pricing-type">الاسبوع</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="pricing-amount">يبدأ من <span class="amount">80,000</span> ريال
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <h4 class="pricing-type">اليوم</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="pricing-amount">يبدأ من <span class="amount">80,000</span> ريال
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <h4 class="pricing-type">ساعة</h4>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="main-btn">احجز الآن</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="service-box">
                        <img src="{{ asset('site/img/office/pexels-flo-dahm-699459.jpg') }}"
                            class="img-fluid service-img" alt="">
                        <div class="pricing-box px-4" dir="ltr">
                            <h4 class="pricing-title ">غرفة إجتماعات
                            </h4>
                            <div class="pricing-details ">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="pricing-amount">يبدأ من <span class="amount">80,000</span> ريال
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <h4 class="pricing-type">الاسبوع</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="pricing-amount">يبدأ من <span class="amount">80,000</span> ريال
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <h4 class="pricing-type">اليوم</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="pricing-amount">يبدأ من <span class="amount">80,000</span> ريال
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <h4 class="pricing-type">الساعة</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="main-btn">احجز الآن</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section> --}}
        <!-- End Pricing Section -->

        <section dir="rtl" class="address-provider">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 box-info">
                        <h2 class="text-dark mb-4">
                            <i class="bi bi-geo-alt title-icon"></i>
                            عنواننا
                        </h2>
                        <div class=" px-5">
                            <div class="info-box row">
                                <div class="col-lg-3">
                                    <h5>المحافظة</h5>
                                    <p>{{ $provider->directorate->governorate->name }} </p>
                                </div>
                                <div class="col-lg-3">
                                    <h5>المديرية</h5>
                                    <p>{{ $provider->directorate->name }} </p>
                                </div>
                                <div class="col-lg-6">
                                    <h5>العنوان</h5>
                                    <p> {{ $provider->address }}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- <div class="col-lg-8">
                        <div id="map"></div>
                        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
                        <script>
                            function initMap() {
                                // Specify the coordinates for the center of the map
                                var myLatLng = {
                                    lat: 37.7749,
                                    lng: -122.4194
                                };
                                // Create a map object and specify the DOM element for display
                                var map = new google.maps.Map(document.getElementById('map'), {
                                    center: myLatLng,
                                    zoom: 12
                                });

                                // Create a marker and set its position
                                var marker = new google.maps.Marker({
                                    map: map,
                                    position: myLatLng,
                                    title: 'My Location'
                                });
                            }
                        </script>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- contact us section -->

        <section id="contact" class="contact">
            <div class="container " data-aos="fade-up">
                <div class="row gy-4 ">
                    <div class="col-lg-8" dir="rtl">
                        <div class="card mt-3">
                            <form action="{{ route('messages.storeTenant') }}" method="post">
                                @csrf
                                <input type="hidden" name="provider" value="{{ $provider->user_id }}">
                                <div class="row gy-4">
                                    <div class="col-6">
                                        <h5 class="form-label">اسم </h5>
                                        <input type="text" class="form-control" id="inputName5" name="name"
                                            fdprocessedid="tpewl" placeholder=" ">
                                    </div>
                                    <div class="col-6">
                                        <h5>الإيميل </h5>
                                        <input type="email" name="email" class="form-control" id="inputName5"
                                            fdprocessedid="tpewl" placeholder=" ">
                                    </div>
                                    <div class="col-12">
                                        <h5>عنوان الرسالة </h5>
                                        <input type="text" class="form-control" name="subject" id="inputName5"
                                            fdprocessedid="tpewl" placeholder=" ">
                                    </div>

                                    <div class="col-12">
                                        <h5>الرسالة </h5>
                                        <textarea class="form-control" name="message" rows="6" placeholder="" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn-dasMain w-100">ارسال</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 box-info"dir="rtl">
                        <h2 class="text-dark mb-4">
                            <i class="bi  bi-cursor title-icon"></i>
                            تواصل معنا
                        </h2>
                        <div class="row px-5">
                            <div class="info-box ">
                                <h5>الايميل</h5>
                                <p class="mb-2">{{ $provider->email }}<br></p>
                                <h5>الهاتف</h5>
                                <p class="mb-2"> {{ $provider->phone }}</p>
                                <h5>الاستقبال</h5>
                                <p class="mb-2"><span>{{ $provider->startWorkHour }}:00 ص -
                                        {{ $provider->endWorkHour }}:00 م</span>
                                </p>
                                <h5>وسائل التواصل الإجتماعي</h5>
                                <div class="">
                                    <div class="social-links mt-3">
                                        @foreach ($socialAccounts as $socialAccount)
                                            @if ($socialAccount->type === 'Twitter')
                                                <a href="{{ $socialAccount->link }}" class="twitter ">
                                                    <i class="bi bi-twitter ps-3"></i>
                                                    {{ $socialAccount->link }}
                                                </a>
                                            @endif
                                            @if ($socialAccount->type === 'Facebook')
                                                <a href="{{ $socialAccount->link }}" class="facebook">
                                                    <i class="bi bi-facebook  ps-3"></i>
                                                    {{ $socialAccount->link }}
                                                </a>
                                            @endif
                                            @if ($socialAccount->type === 'Instagram')
                                                <a href="{{ $socialAccount->link }}" class="instagram">
                                                    <i class="bi bi-instagram  ps-3"></i>
                                                    {{ $socialAccount->link }}
                                                </a>
                                            @endif
                                            @if ($socialAccount->type === 'Linkedin')
                                                <a href="{{ $socialAccount->link }}" class="linkedin">
                                                    <i class="bi bi-linkedin ps-3"></i>
                                                    {{ $socialAccount->link }}
                                                </a>
                                            @endif
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- <div class="col-lg-4">
            <div class="row gy-4">
              <div class="col-12">
                <header class="section-header">
                  <h2>تواصل معنا </h2>
                  <!-- <p>Contact Us</p> -->
                </header>
              </div>
              
              <div class="col-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>اتصل بنا</h3>
                  <p>+967 735 456 485<br>+967 735 456 123 </p>
                </div>
              </div>
              <div class="col-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>الايميل</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>

            </div>

          </div> --}}
                </div>

            </div>

        </section><!-- End Contact Section -->
    </main>
@endsection
