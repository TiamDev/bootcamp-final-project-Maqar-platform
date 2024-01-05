@extends('layouts.site')
@section('content')
    <main id="main" dir="ltr">
        <div class="container provider-conent">
            <div class="header-section left-br">
                <h2 class="office-name"> Sixteen Stars</h2>
                <p class="office-address ">ابراج بن محفوظ - المكلا </p>
            </div>
        </div>

        {{-- slider --}}
        <div class="container">
            <div class="slider-container">
                <div class="small-images">
                    <img class="small-image" src="{{ asset('site/img/office/pexels-flo-dahm-699459.jpg') }}"
                        onclick="changeImage('{{ asset('site/img/office/pexels-flo-dahm-699459.jpg') }}')">
                    <img class="small-image" src="{{ asset('site/img/office/pexels-lisa-fotios-1957478.jpg') }}"
                        onclick="changeImage('{{ asset('site/img/office/pexels-lisa-fotios-1957478.jpg') }}')">
                    <img class="small-image" src="{{ asset('site/img/office/pexels-max-rahubovskiy-7005458.jpg') }}"
                        onclick="changeImage('{{ asset('site/img/office/pexels-max-rahubovskiy-7005458.jpg') }}')">
                    <img class="small-image" src="{{ asset('site/img/office/pexels-lisa-fotios-1957478.jpg') }}"
                        onclick="changeImage('{{ asset('site/img/office/pexels-lisa-fotios-1957478.jpg') }}')">
                </div>
                <div class="large-image">
                    <img id="main-image" src="{{ asset('site/img/office/pexels-flo-dahm-699459.jpg') }}">
                </div>
            </div>
        </div>

        <section dir="rtl" class="about-provider">
            <div class="container">
                <h2 class="text-dark">
                    <i class="bi bi-buildings title-icon"></i>

                    نبذة عن Sixteen Stars
                </h2>
                <div class="row">
                    <div class="col-lg-3">
                        <img src="{{ asset('admin/img/logo.png') }}" alt="" srcset="" style="width: 100%;">
                    </div>
                    <div class="col-lg-9">

                        <p class="fs-5">
                            يتميز بموقعه المحوري. عزِّز من مكانة أعمالك من خلال امتلاك مقر في هذا المبنى المرموق الذي يخطف
                            الأبصار على
                            الفور ويجمع بين التصميم المعماري العصري المذهل والعناصر الكلاسيكية.

                            ازرع الثقة في نفوس عملائك من خلال الموقع المتميز لهذا المبنى، واعقد اجتماعاتك في قاعات عصرية
                            ومتطورة،
                            وامنح
                            عملاءك المتعة والترفيه من خلال زيارة معالم محلية، مثل "المتحف الوطني الأردني للفنون الجميلة".
                            استمتع أيضًا
                            بسهولة التنقل؛ فهذا الموقع تربطه شبكة طرق جيدة وبه موقف آمن لانتظار السيارات تحت الأرض.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section dir="rtl" class="about-provider">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-dark">
                            <i class="bi bi-gem title-icon"></i>
                            المرافق
                        </h2>
                        <div class="row px-5">
                            <ul class="myul ">
                                <li>انترنت فايير</li>
                                <li>ساحات استراحة</li>
                                <li>مركز المدينة/البلدة</li>
                                <li>بالقرب من وسائل المواصلات الرئيسية</li>
                                <li>مصعد</li>
                                <li>غرف اجتماعات</li>
                                <li>مواقف سيارات</li>
                                <li>استقبال</li>
                                <li>الات بيع</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container " data-aos="fade-up" dir="rtl">
            <h2 class="text-dark">
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
        </section>
        <!-- End Pricing Section -->


        <section dir="rtl" class="address-provider">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 box-info">
                        <h2 class="text-dark">
                            <i class="bi bi-geo-alt title-icon"></i>
                            عنواننا
                        </h2>
                        <div class="row px-5">
                            <div class="info-box ">
                                <h5>الدولة</h5>
                                <p>اليمن <br></p>
                                <h5>المدينة</h5>
                                <p>المكلا <br>فوة -اربعين شقة</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8">
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
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="contact">
            <div class="container " data-aos="fade-up">
                <div class="row gy-4 ">
                    <div class="col-lg-8" dir="rtl">
                        <div class="card">
                            <h5 class="text-center pb-2">يمكنك التوصل معنا عن طريق الموقع</h5>
                            <form action="{{ route('message.send') }}" method="post">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-6">
                                        <label for="inputState" class="form-label">اسم </label>
                                        <input type="text" class="form-control" id="inputName5" name="name"
                                            fdprocessedid="tpewl" placeholder=" ">
                                    </div>
                                    <div class="col-6">
                                        <label for="inputState" class="form-label">الإيميل </label>
                                        <input type="email" name="email" class="form-control" id="inputName5"
                                            fdprocessedid="tpewl" placeholder=" ">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputState" class="form-label">العنوان </label>
                                        <input type="text" class="form-control" name="subject" id="inputName5"
                                            fdprocessedid="tpewl" placeholder=" ">
                                    </div>

                                    <div class="col-12">
                                        <label for="inputState" class="form-label">الرسالة </label>
                                        <textarea class="form-control" name="message" rows="6" placeholder="الرسالة" required></textarea>
                                    </div>

                                    {{-- <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                  <button type="submit" class="main-btn">ارسال</button>
                </div> --}}
                                    <button type="submit">ارسال</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 box-info"dir="rtl">
                        <h2 class="text-dark">
                            <i class="bi bi-geo-alt title-icon"></i>
                            تواصل معنا
                        </h2>
                        <div class="row px-5">
                            <div class="info-box ">
                                <h5>الايميل</h5>
                                <p>sanad@gmail.com<br></p>
                                <h5>الهاتف</h5>
                                <p> +967 789 451 230 </p>
                                <h5>الاستقبال</h5>
                                <p> الأحد - الخميس <span>8:00 ص - 11:00م </span></p>
                                <h5>وسائل التواصل الإجتماعي</h5>
                                <div class="">
                                    <div class="social-links mt-3">
                                        <a href="#" class="twitter d-flex"><i
                                                class="bi bi-twitter ps-3"></i>http://www.tweeter.com/sanad</a>
                                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
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
