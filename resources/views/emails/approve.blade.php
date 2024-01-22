<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title></title>
    <meta content="" name="description">
    <meta content="" name="keywords">
</head>

<body>

    <div class="container img-box-container">
        <div class="card card-login" dir="rtl">
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ asset('admin/img/logo.png') }}" width="200" alt="">
                    <h5 class="card-title"></h5>
                </div>
                <h3 style="text-align: center"> اهلا بك 🧩{{ $reply }}</h3>
                <p style="text-align: center">
                    نحن سعداء بإبلاغك أن طلب الانضمام الخاص بك إلى منصة مقر قد تم قبوله.
                    شكراً لثقتكم بنا ، ونتطلع إلى تحقيق تجربة رائعة معنا.
                </p>
                <div style="text-align: center">
                    <a style="display: inline-block;
            padding: 5px 20px;
            background-color: #53ad90;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;"
                        href="{{ route('signin') }}">تسجيل الدخول</a>
                </div>
                <p>
                    باطيب التحيات
                </p>
                <p> فريق منصة مقر
                </p>
            </div>
        </div>
    </div>
</body>

</html>
