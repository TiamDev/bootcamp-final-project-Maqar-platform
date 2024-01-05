<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>FlexStart Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/site/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/site/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    {{-- <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet"> --}}

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/site/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('/site/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/site/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/site/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/site/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('/site/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('/site/css/style.css') }}" rel="stylesheet">
</head>

<body dir="rtl">

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ asset('/site/img/logo/logo2.png') }}" alt="">
                <!-- <span>مقر</span> -->
            </a>

            <nav id="navbar" class="navbar">
                <ul dir="ltr" style="padding-left:300px">
                    <li><a class="nav-link scrollto" href="#services">نبذه عن مقر</a></li>
                    <li><a class="nav-link scrollto" href="#team">تواصل معنا</a></li>
                    <li class="dropdown megamenu"><a href="#">
                            <i class="bi bi-chevron-down pe-2"></i>
                            <span>خدماتنا</span>
                        </a>
                        <ul dir="rtl">
                            <li>
                                <a href="#">مكتب خاص</a>
                            </li>
                            <li>
                                <a href="#">مكتب مشترك</a>
                            </li>
                            <li>
                                <a href="#">غرفة مؤتمرات</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto active" href="#hero">الرئيسية</a></li>
                </ul>
                <!-- <div class="dropdown">
          <a href="#"><i class="fs-4 bi bi-person-fill"></i></a>
          <ul>
            <li><a href="#">تسجيل دخول</a></li>
            <li><a href="#">إنشاء حساب</a></li>
          </ul>
        </div> -->
                <!-- <a class="" href="#about"><i class="fs-4 bi bi-person-fill"></i> </a> -->
                <a class="getstarted scrollto" href="{{ route('signin') }}"> تسجيل دخول</a>

                <i class="bi bi-list mobile-nav-toggle">
                </i>

            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    @yield('content')
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="{{ asset('/site/img/logo/logo2.png') }}" alt="" width="100">
                            <span>منصة مقر</span>
                        </a>
                        <p>اختيار منصة لمساحات العمل هو الخطوة الصحيحة لتعزيز الإنتاجية وتحقيق النجاح في مجال العمل.
                            انضم إلى المنصة
                            اليوم واستفد من مجموعة واسعة من الخدمات والمزايا التي تلبي احتياجاتك الفردية والتجارية.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>روابط</h4>
                        <ul>
                            <li>
                                <a href="#">الرئيسية</a>
                                <i class="bi bi-chevron-left"></i>
                            </li>
                            <li>
                                <a href="#">نبذة عن مقر</a>
                                <i class="bi bi-chevron-left"></i>
                            </li>
                            <li>
                                <a href="#">مميزاتنا</a>
                                <i class="bi bi-chevron-left"></i>
                            </li>
                            <li>
                                <a href="#">خدماتنا</a>
                                <i class="bi bi-chevron-left"></i>
                            </li>
                            <li>
                                <a href="#">تواصل معنا</a>
                                <i class="bi bi-chevron-left"></i>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>خدماتنا</h4>
                        <ul>
                            <li>
                                <a href="#">مكاتب مخصصه</a>
                                <i class="bi bi-chevron-left"></i>
                            </li>
                            <li>
                                <a href="#">مكاتب مشتركة</a>
                                <i class="bi bi-chevron-left"></i>
                            </li>
                            <li>
                                <a href="#">غرف للمؤتمرات</a>
                                <i class="bi bi-chevron-left"></i>
                            </li>

                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact  text-md-start">
                        <h4 class="text-end">تواصل مع مقر</h4>
                        <p class="text-end">

                            <strong>رقم:</strong> +1 5589 55488 55<br>
                            <strong>الإيميل:</strong> Maqar@gmail.com<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; حقوق النشر <strong><span>منصة مقر</span></strong> جميع الحقوق محفوظة .
            </div>
            <div class="credits">
                Designed by <a href="#">Fatima Bakran</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/site/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('/site/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('/site/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/site/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('/site/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/site/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/site/vendor/php-email-form/validate.js') }}"></script>
    <script class="u-script" type="text/javascript" src="{{ asset('/site/js/jquery-1.9.1.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/site/js/main.js') }}"></script>
    {{-- <script src="{{ asset('/site/js/nicepage.js') }}"></script>
  <script src="{{ asset('/site/js/jquery-1.9.1.min.js') }}"></script> --}}

</body>

</html>
