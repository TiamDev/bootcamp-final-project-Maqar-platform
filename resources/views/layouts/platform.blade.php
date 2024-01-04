<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>مقر</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('admin/img/favicon.png')}}" rel="icon">
  <link href="{{asset('admin/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('admin/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

  <link href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center" dir="rtl">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{asset('admin/img/logo.png')}}" alt="">
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

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{asset('admin/img/messages-1.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{asset('admin/img/messages-2.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{asset('admin/img/messages-3.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{asset('admin/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle m-2">
            <span class="d-none d-md-block dropdown-toggle ps-3"> </span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav" dir="rtl">

      <!-- <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"> لوحة التحكم </i>
          <span> </span>
        </a>
      </li>End Dashboard Nav -->
      <li class="text-secondary">
        المنصه
      </li>
      <li class="nav-item">
        <a class="nav-link  @if (!(Route::currentRouteName() === 'platform.dashboard')) collapsed @endif" href="{{route('platform.dashboard')}}">
          <i class="bi bi-cast"></i>
          <span>لوحة التحكم</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link 
        @if (!(Route::currentRouteName()=== 'platform.users' || Route::currentRouteName() === 'platform.users.add' || Route::currentRouteName() === 'platform.users.edit' || Route::currentRouteName() === 'platform.users.view' || Route::currentRouteName() === 'platform.users.delete'||
          Route::currentRouteName() === 'platform.roles' || Route::currentRouteName() === 'platform.roles.add' || Route::currentRouteName() === 'platform.roles.edit' || Route::currentRouteName() === 'platform.roles.view' || Route::currentRouteName() === 'platform.roles.delete')) collapsed @endif" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>الحسابات</span><i class="bi bi-chevron-down me-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('platform.users')}}" class="@if (Route::currentRouteName() === 'platform.users' || Route::currentRouteName() === 'platform.users.add' || Route::currentRouteName() === 'platform.users.edit' || Route::currentRouteName() === 'platform.users.view' || Route::currentRouteName() === 'platform.users.delete')
            active
        @endif" >
              <i class="bi bi-circle "></i><span>المستخدمين</span>
            </a>
          </li>
          <li>
            <a href="{{route('platform.roles')}}" 
            class="@if (Route::currentRouteName() === 'platform.roles' || Route::currentRouteName() === 'platform.roles.add' || Route::currentRouteName() === 'platform.roles.edit' || Route::currentRouteName() === 'platform.roles.view' || Route::currentRouteName() === 'platform.roles.delete')
            active
        @endif">
              <i class="bi bi-circle"></i><span>الأدوار</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav -->
      <li class="nav-item">
        <a class="nav-link  @if (!(Route::currentRouteName() === 'platform.offices')) collapsed @endif" href="{{route('platform.offices')}}">
          <i class="bi bi-buildings"></i>
          <span>المكاتب </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-boxes"></i>
          <span>العروض</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if (!(Route::currentRouteName() === 'platform.messages')) collapsed @endif" href="{{route('platform.messages')}}">
          <i class="bi bi-envelope"></i>
          <span>الرسائل</span>
        </a>
      </li>
      <!-- المزود -->
      <li class="text-secondary">
        المزود
      </li>
      <li class="nav-item">
        <a class="nav-link  @if (!(Route::currentRouteName() === 'tenant.dashboard')) collapsed @endif" href="{{route('tenant.dashboard')}}">
          <i class="bi bi-cast"></i>
          <span>الرئيسية</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link 
        @if (!(Route::currentRouteName()=== 'tenant.users' || Route::currentRouteName() === 'tenant.users.add' || Route::currentRouteName() === 'tenant.users.edit' || Route::currentRouteName() === 'tenant.users.view' || Route::currentRouteName() === 'tenant.users.delete'||
          Route::currentRouteName() === 'tenant.roles' || Route::currentRouteName() === 'tenant.roles.add' || Route::currentRouteName() === 'tenant.roles.edit' || Route::currentRouteName() === 'tenant.roles.view' || Route::currentRouteName() === 'tenant.roles.delete')) collapsed @endif" data-bs-target="#tenant-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>الحسابات</span><i class="bi bi-chevron-down me-auto"></i>
        </a>
        <ul id="tenant-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('tenant.users')}}" class="@if (Route::currentRouteName() === 'tenant.users' || Route::currentRouteName() === 'tenant.users.add' || Route::currentRouteName() === 'tenant.users.edit' || Route::currentRouteName() === 'tenant.users.view' || Route::currentRouteName() === 'tenant.users.delete')
            active
        @endif" >
              <i class="bi bi-circle "></i><span>المستخدمين</span>
            </a>
          </li>
          <li>
            <a href="{{route('tenant.roles')}}" 
            class="@if (Route::currentRouteName() === 'tenant.roles' || Route::currentRouteName() === 'tenant.roles.add' || Route::currentRouteName() === 'tenant.roles.edit' || Route::currentRouteName() === 'tenant.roles.view' || Route::currentRouteName() === 'tenant.roles.delete')
            active
        @endif">
              <i class="bi bi-circle"></i><span>الأدوار</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed @if (Route::currentRouteName() === 'tenant.content' )active @endif" href="{{route('tenant.content')}}">
          <i class="bi bi-layout-text-sidebar-reverse"></i>
          <span> ادارة المحتوى</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed @if (Route::currentRouteName() === 'tenant.roles' || Route::currentRouteName() === 'tenant.spaces.add' || Route::currentRouteName() === 'tenant.spaces.edit' || Route::currentRouteName() === 'tenant.spaces.view' || Route::currentRouteName() === 'tenant.spaces.delete')active
    @endif" href="{{route('tenant.spaces')}}">
          <i class="bi bi-building-gear"></i>
          <span>المساحات</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-easel"></i>
          <span>غرف الإجتماعات</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('tenant.booking')}}">
          <i class="bi bi-person-lines-fill"></i>
          <span>الحجوزات</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-collection"></i>
          <span>العروض</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-ticket-detailed"></i>
          <span>مواعيد الزيارات</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if (!(Route::currentRouteName() === 'tenant.messages')) collapsed @endif" href="{{route('tenant.messages')}}">
          <i class="bi bi-envelope"></i>
          <span>الرسائل</span>
        </a>
      </li>
      <!-- المستاجر -->
      <li class="text-secondary">
        العميل
      </li>
      <li class="nav-item">
        <a class="nav-link  @if (!(Route::currentRouteName() === 'client.dashboard')) collapsed @endif" href="{{route('client.dashboard')}}">
          <i class="bi bi-cast"></i>
          <span>الرئيسة</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed @if (!(Route::currentRouteName() === 'client.booking')) collapsed @endif" href="{{route('client.booking')}}">
          <i class="bi bi-envelope"></i>
          <span>حجز مساحة</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed @if (!(Route::currentRouteName() === 'client.booking')) collapsed @endif" href="{{route('client.booking')}}">
          <i class="bi bi-envelope"></i>
          <span>حجوزاتي</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed @if (!(Route::currentRouteName() === 'client.bill')) collapsed @endif" href="{{route('client.bill')}}">
          <i class="bi bi-envelope"></i>
          <span>الفواتير</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('platform.profile')}}">
          <i class="bi bi-envelope"></i>
          <span>الملف الشخصي</span>
        </a>
      </li>
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
  <script src="{{asset('admin/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.js')}}"></script>

  <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('admin/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('admin/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('admin/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('admin/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('admin/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('admin/js/main.js')}}"></script>

</body>

</html>