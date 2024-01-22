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
                <h3 style="text-align: center">رفض طلب الانضمام</h3>
                <p style="text-align: center">
                    نعتذر عن قبول طلبك للانضمام إلى منصة "مقر لمساحات الأعمال وذلك بسبب {{ $reply }}
                </p>
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
