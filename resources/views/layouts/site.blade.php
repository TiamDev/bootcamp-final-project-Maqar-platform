<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>منصة مقر لمساحات الاعمال</title>
    <meta content="workspaces" name="description">
    <meta content="magar" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/site/img/logo/logo2.png') }}" rel="icon">

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
            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('/site/img/logo/logo2.png') }}" alt="">
                <span>مقر</span>
            </a>
            <nav id="navbar" class="navbar">
                <ul dir="ltr" style="padding-left:300px">
                    <li><a class="nav-link scrollto @if (Route::currentRouteName() === 'home' && Str::contains(URL::current(), '#above')) active @endif"
                            href="{{ route('home') }}#clients">مزودينا</a></li>
                    <li><a class="nav-link scrollto @if (Route::currentRouteName() === 'home' && Str::contains(URL::current(), '#above')) active @endif"
                            href="{{ route('home') }}#above">ماتقدمه مقر</a></li>
                    <li><a class="nav-link scrollto @if (Route::currentRouteName() === 'home') active @endif"
                            href="{{ route('home') }}#contact">تواصل معنا</a></li>
                    <li><a class="nav-link scrollto @if (Route::currentRouteName() === 'aboutMagar') active @endif"
                            href="{{ route('aboutMagar') }}">نبذه عن مقر</a></li>
                    <li><a class="nav-link scrollto @if (Route::currentRouteName() === 'home') active @endif"
                            href="{{ route('home') }}#hero">الرئيسية</a></li>
                </ul>
                @php
                    $user = auth()->user();

                    if ($user) {
                        $rolelabel = $user->roles()->first()->label;
                        $roleName = $user->roles()->first()->name;
                    }
                @endphp

                @if ($user)
                    {{-- <div class="dropdown">
                        <a href="#"><i class="fs-4 bi bi-person-fill mx-5"></i></a>
                        <ul>
                            @if ($roleName === 'admin')
                                <li><a href="{{ route('tenant.dashboard') }}">لوحة التحكم</a></li>
                            @elseif ($roleName === 'client')
                                <li><a href="{{ route('client.dashboard') }}">لوحة التحكم</a></li>
                            @endif
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="{{ route('account.signout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn-dasMain w-100">تسجيل
                                        خروج</button>
                                </form>
                            </li>
                        </ul>
                    </div> --}}
                    <li class="nav-item nav-item-site dropdown p-0 " dir="rtl">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                            data-bs-toggle="dropdown">
                            @if ($roleName === 'admin')
                                <img src="{{ asset('storage/logo/' . $user->provider->logo) }}" width="40"
                                    alt="Profile" class="rounded-circle">
                            @else
                                <img src="{{ asset('site/img/user2.jpg') }}" alt="Profile" class="rounded-circle"
                                    width="40">
                            @endif
                            <span class="d-none d-md-block dropdown-toggle ps-3"> </span>
                        </a><!-- End Profile Iamge Icon -->
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header text-center">
                                <h6>{{ $user->name }}</h6>
                                <span>{{ $rolelabel }}</span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                    @if ($roleName === 'admin')
                                        <a href="{{ route('tenant') }}" class="justify-content-start">
                                            <i class="bi  bi-buildings ps-2"></i>
                                            <span> لوحة التحكم
                                            </span>
                                        </a>
                                    @else
                                        <span class="text-end">
                                            <a href="{{ route('client.dashboard') }}" class="justify-content-start">
                                                <i class="bi bi-person ps-1"></i>
                                                لوحة التحكم
                                            </a>
                                        </span>
                                    @endif
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="{{ route('account.signout') }}" method="post">
                                    @csrf
                                    <button class="dropdown-item d-flex align-items-center" type="submit">
                                        <i class="bi bi-box-arrow-right ps-2"></i>
                                        <span>تسجيل خروج</span>
                                    </button>
                                </form>
                            </li>

                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->
                @else
                    <a class="getstarted scrollto" href="{{ route('signin') }}"> تسجيل دخول</a>
                @endif
                <!-- <a class="" href="#about"><i class="fs-4 bi bi-person-fill"></i> </a> -->
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
                                <a href="{{ route('aboutMagar') }}">نبذة عن مقر</a>
                                <i class="bi bi-chevron-left"></i>
                            </li>
                            <li>
                                <a href="#">ما تقدمه مقر</a>
                                <i class="bi bi-chevron-left"></i>
                            </li>
                            <li>
                                <a href="#clients">مزودينا </a>
                                <i class="bi bi-chevron-left"></i>
                            </li>
                            <li>
                                <a href="#contact">تواصل معنا</a>
                                <i class="bi bi-chevron-left"></i>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>ما يقدمه ملاك المساحات</h4>
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
                &copy; <strong><span>منصة مقر</span></strong> جميع الحقوق محفوظة .
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
