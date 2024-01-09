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
                    <h5 class="card-title">تسجيل الدخول</h5>
                </div>
                <form method="POST" action="{{ route('signin.submit') }}">
                    @csrf
                    <input type="hidden" name="_method" value="POST">
                    {{-- {{
                        if ($request->filled('route')) {
                            print '<input type="hidden" name="route" value="'.$request->inpue('route').'">';
                        }
                        if ($request->filled('name')) {
                            print '<input type="hidden" name="name" value="'.$request->inpue('name').'">';
                        }
                    }} --}}
                    @if ($request->filled('route'))
                        <input type="hidden" name="route" value="{{ $request->input('route') }}">
                    @endif

                    @if ($request->filled('name'))
                        <input type="hidden" name="name" value="{{ $request->input('name') }}">
                    @endif
                    <div class="form-group pb-3">
                        <label for="email">البريد الإلكتروني</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="">
                        @error('email')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group pb-3">
                        <label for="password">كلمة المرور</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="">
                        @error('password')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn-dasMain ">تسجيل الدخول</button>
                        <div class="sign-footer">
                            <p>ليس لديك حساب ?</p><a href="{{ route('signup') }}" class="toggle">إنشاء حساب</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    </main><!-- End #main -->

</body>

</html>
