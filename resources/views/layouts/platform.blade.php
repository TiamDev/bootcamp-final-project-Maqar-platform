<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>مقر</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('admin/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('admin/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
</head>

<body>
    @php
        $user = auth()->user();
        $rolelabel = $user->roles()->first()->label;
        $roleName = $user->roles()->first()->name;

        // dd($user);

    @endphp
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center" dir="rtl">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ asset('admin/img/logo.png') }}" alt="">
                <span class="d-none d-lg-block">مقر</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->



        <nav class="header-nav me-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        @if ($roleName === 'admin')
                            <img src="{{ asset('storage/logo/' . $user->provider->logo) }}" alt="Profile"
                                class="rounded-circle m-2">
                        @else
                            <img src="{{ asset('site/img/user2.jpg') }}" alt="Profile" class="rounded-circle m-2">
                        @endif

                        <span class="d-none d-md-block dropdown-toggle ps-3"> </span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

                        <li class="dropdown-header">
                            <h6>{{ $user->name }}</h6>
                            <span>{{ $rolelabel }}</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            @if ($roleName === 'admin')
                                <a class="dropdown-item d-flex align-items-center"
                                    href="{{ route('tenant.dashboard') }}">
                                    <i class="bi  bi-buildings ps-2"></i>
                                    <span>ملف مقر {{ $user->provider->title }} </span>
                                </a>
                            @elseif ($roleName === 'super-admin')
                                <a class="dropdown-item d-flex align-items-center"
                                    href="{{ route('platform.dashboard') }}">
                                    <i class="bi  bi-buildings ps-2"></i>
                                    <span>ملف مقر </span>
                                </a>
                            @else
                                <a class="dropdown-item d-flex align-items-center"
                                    href="{{ route('client.dashboard') }}">
                                    <i class="bi bi-person ps-2"></i>
                                    <span>ملفي الشخصي</span>
                                </a>
                            @endif
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

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav" dir="rtl">


            @if ($user)
                @if ($user->hasRole('super-admin'))
                    <li class="text-secondary my-3">
                        المنصه
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  @if (!(Route::currentRouteName() === 'platform.dashboard')) collapsed @endif"
                            href="{{ route('platform.dashboard') }}">
                            <i class="bi bi-cast"></i>
                            <span>لوحة التحكم</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  @if (!(Route::currentRouteName() === 'platform.provider' || Route::currentRouteName() === 'platform.view')) collapsed @endif"
                            href="{{ route('platform.provider') }}">
                            <i class="bi bi-grid"></i>
                            <span> مقار </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  @if (
                            !(Route::currentRouteName() === 'WorkspaceType' ||
                                Route::currentRouteName() === 'WorkspaceType.add' ||
                                Route::currentRouteName() === 'WorkspaceType.view' ||
                                Route::currentRouteName() === 'WorkspaceType.delete'
                            )) collapsed @endif"
                            href="{{ route('WorkspaceType') }}">
                            <i class="bi bi-boxes"></i>
                            <span>انواع المساحات </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  @if (
                            !(Route::currentRouteName() === 'platform.joinRequest' ||
                                Route::currentRouteName() === 'platform.joinRequest.view'
                            )) collapsed @endif"
                            href="{{ route('platform.joinRequest') }}">
                            <i class="bi bi-building-add"></i>
                            <span>طلبات الانضمام </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (!(Route::currentRouteName() === 'platform.messages')) collapsed @endif"
                            href="{{ route('platform.messages') }}">
                            <i class="bi bi-envelope"></i>
                            <span>الرسائل</span>
                        </a>
                    </li>
                @endif

                <!-- المزود -->
                @if ($user->hasRole('admin'))
                    <li class="text-secondary my-3">
                        المزود
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  @if (!(Route::currentRouteName() === 'tenant.dashboard')) collapsed @endif"
                            href="{{ route('tenant.dashboard') }}">
                            <i class="bi bi-cast"></i>
                            <span>لوحة التحكم</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed @if (Route::currentRouteName() === 'tenant.site') active @endif"
                            href="{{ route('tenant.site', ['site' => $user->provider->name]) }}">
                            <i class="bi bi-app-indicator"></i>
                            <span> موقعي </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  collapsed @if (
                            !(Route::currentRouteName() === 'content' 
                            // &&
                            //     Route::currentRouteName() === 'content.addFeature' &&
                            //     Route::currentRouteName() === 'content.addService' &&
                            //     Route::currentRouteName() === 'content.addBankAccount'
                            )) active @endif"
                            href="{{ route('content') }}">
                            <i class="bi bi-layout-text-sidebar-reverse"></i>
                            <span> ادارة المحتوى</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed @if (Route::currentRouteName() === 'workspaces' ||
                                Route::currentRouteName() === 'workspace.add' ||
                                Route::currentRouteName() === 'workspace.edit' ||
                                Route::currentRouteName() === 'workspace.view' ||
                                Route::currentRouteName() === 'workspace.delete') active @endif"
                            href="{{ route('workspaces') }}">
                            <i class="bi bi-building-gear"></i>
                            <span>المساحات</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed"
                            href="{{ route('tenant.Reservations', ['site' => $user->provider->name]) }}">
                            <i class="bi bi-person-lines-fill"></i>
                            <span>الحجوزات</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="pages-contact.html">
                    <i class="bi bi-collection"></i>
                    <span>العروض</span>
                </a>
            </li> --}}
                    {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="pages-contact.html">
                    <i class="bi bi-ticket-detailed"></i>
                    <span>مواعيد الزيارات</span>
                </a>
            </li> --}}
                    <li class="nav-item">
                        <a class="nav-link @if (!(Route::currentRouteName() === 'tenant.messages')) collapsed @endif"
                            href="{{ route('tenant.messages') }}">
                            <i class="bi bi-envelope"></i>
                            <span>الرسائل</span>
                        </a>
                    </li>
                @endif
                @if ($user->hasRole('client'))
                    <!-- المستاجر -->
                    <li class="text-secondary my-3">
                        المستاجر
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  @if (!(Route::currentRouteName() === 'client.dashboard')) collapsed @endif"
                            href="{{ route('client.dashboard') }}">
                            <i class="bi bi-cast"></i>
                            <span>لوحة التحكم</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed @if (!(Route::currentRouteName() === 'client.booking')) collapsed @endif"
                            href="{{ route('client.booking') }}">
                            <i class="bi bi-bookmark-plus"></i>
                            <span>حجز مساحة</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                <a class="nav-link collapsed @if (!(Route::currentRouteName() === 'client.booking')) collapsed @endif"
                    href="{{ route('client.booking') }}">
                    <i class="bi bi-envelope"></i>
                    <span>حجوزاتي</span>
                </a>
            </li> --}}
                    <li class="nav-item">
                        <a class="nav-link collapsed @if (!(Route::currentRouteName() === 'client.myReservations')) collapsed @endif"
                            href="{{ route('client.myReservations') }}">
                            <i class="bi bi-stack"></i>
                            <span>الحجوزات</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed @if (!(Route::currentRouteName() === 'client.bill')) collapsed @endif"
                            href="{{ route('client.bill') }}">
                            <i class="bi bi-journal-text"></i>
                            <span>الفواتير</span>
                        </a>
                    </li>
                @endif

            @endif

        </ul>

    </aside><!-- End Sidebar-->

    @yield('content')

    <!-- ======= Footer ======= -->
    {{-- <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Fatima Bakran</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">Fatima Bakran</a>
    </div>
  </footer><!-- End Footer --> --}}

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('admin/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.js') }}"></script>

    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('admin/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('admin/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('admin/js/main.js') }}"></script>

</body>

</html>
