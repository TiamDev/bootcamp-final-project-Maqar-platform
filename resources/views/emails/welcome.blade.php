<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/sign.css') }}" rel="stylesheet">


</head>

<body>

    <div class="container img-box-container">
        <div class="background-images">
            <div class="">

                <img src="{{ asset('site/img/ill/3d-casual-life-office-supplies.png') }}" alt="Background Image 1">
            </div>
            <div class="">

                <img src="{{ asset('site/img/ill/3d-casual-life-smiling-young-man-with-laptop-sitting-on-floor.png') }}"
                    width="250" alt="Background Image 2">
            </div>
        </div>
        <div class="card card-login" dir="rtl">
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ asset('admin/img/logo.png') }}" width="200" alt="">
                    <h5 class="card-title"></h5>
                </div>
                <h3> </h3>
                <p class="text-center">
                    نحن سعداء بإبلاغك أن طلب الانضمام الخاص بك إلى منصة مقر قد تم قبوله.
                    شكراً لثقتكم بنا، ونتطلع إلى تحقيق تجربة رائعة معنا.
                </p>
                <p>

                    باطيب التحيات،
                </p>
                <p> فريق منصة مقر
                </p>
                <a href="{{ route('signin') }}" class="btn-dashMain">تسجيل الدخول
                </a>
            </div>
        </div>
    </div>
    </main><!-- End #main -->

</body>

</html>
