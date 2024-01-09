<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Inner Page - FlexStart Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('site/css/sign.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">


</head>

<body>

    <div class="container img-box-container-signup">
        <div class="background-images">
            <div class="">

                <img src="{{ asset('site/img/ill/3d-casual-life-young-man-sitting-with-laptop-and-waving.png') }}"
                    width="260" alt="Background Image 1">
            </div>
            <div class="">

                <img src="{{ asset('site/img/ill/3d-casual-life-monitor-and-other-office-stuff.png') }}" width="320"
                    alt="Background Image 2">
            </div>
        </div>
        <div class="card-signup" dir="rtl">
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ asset('admin/img/logo.png') }}" width="200" alt="">
                    <h5 class="card-title">انشاء حساب</h5>
                </div>
                <form method="POST" action="{{ route('signup') }}">
                    @csrf
                    <div class="form-group pb-3">
                        <label for="text">الاسم كاملا</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="  "
                            value="{{ old('name') }}">
                        @error('name')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group pb-3">
                        <label for="email">البريد الإلكتروني</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="  "
                            value="{{ old('email') }}">
                        @error('email')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group pb-3">
                        <label for="text">رقم الهاتف</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="  "
                            value="{{ old('phone') }}">
                        @error('phone')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group pb-3">
                        <label for="password">كلمة المرور</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="أدخل كلمة المرور">
                        @error('password')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group pb-3">
                        <label for="password"> تاكيد كلمة المرور </label>
                        <input type="password" class="form-control" id="conform-password" name="password_confirmation"
                            placeholder="أدخل كلمة المرور">
                        @error('password_confirmation')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="radio" name="role" value="client" id="spaghetti"
                                class="checkbox-input-over" checked />
                            <label for="spaghetti" class="checkbox-label-over2">
                                <div class="checkbox-text-over">
                                    <p class="checkbox-text--title"> </p>
                                    <p class="checkbox-text--description">مستخدم</p>
                                </div>
                            </label>
                        </div>
                        <div class="col-6 ">
                            <input type="radio" name="role" value="admin" id="tonnarelli"
                                class="checkbox-input-over" />
                            <label for="tonnarelli" class="checkbox-label-over2">
                                <div class="checkbox-text-over">
                                    <p class="checkbox-text--title"> </i></p>
                                    <p class="checkbox-text--description">مزود</p>
                                </div>
                            </label>
                        </div>


                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn-dasMain ">انشاء حساب</button>
                        <div class="sign-footer">
                            <p> لديك حساب ?</p><a href="{{ route('signin') }}" class="toggle"> تسجيل دخول</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>





    {{-- <main id="main" dir="rtl">

    <div class="login-container ">
      <div class="container">

        <div class="row ill-container">
          <div class="col-6 d-lg-flex align-items-center justify-content-center " style="padding-left: 8%;">
            <img src="{{ asset('site/img/ill/3d-casual-life-smiling-young-man-with-laptop-sitting-on-floor.png')}}" height="300" alt="">

          </div>
          <div class="col-6 d-lg-flex  align-items-center justify-content-center" style="padding-right: 7%;">
            <img src="{{ asset('site/img/ill/3d-casual-life-young-man-with-laptop-on-chair.png')}}" height="300" alt="">
          </div>
        </div>
      </div>
      <div class="ill-box">
        <section class="ftco-section">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-6 text-center ">
                <img src="{{ asset('site/img/logo/logo2.png')}}" width="200" alt="">
              </div>
            </div>
            <div class="row justify-content-center px-5">
              <div class="col-md-6 col-lg-8 ">
                <div class="login-wrap pt-3">
                  <h3 class="mb-4 text-center darkColor ">تسجيل الدخول</h3>
                  <form action="#" class="signin-form">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="اسم المستخدم" required>
                    </div>
                    <div class="form-group">
                      <input id="password-field" type="password" class="form-control" placeholder="كلمة السر" required>
                      <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="form-control btn submitBtn submit p-3">تسجيل دخول</button>
                    </div>
                    <div class="form-group ">
                      <div>
                        <label class="checkbox-wrap checkbox-primary darkColor">
                          <span class="checkmark"></span>
                          <input type="checkbox" checked>
                          تذكرني
                        </label>
                      </div>
                      <div class="w-50  text-right ">
                        <a href="#">هل نسيت كلمة السر</a>
                      </div>
                      <div class="text-center pt-3">
                        <span class="">
                          ليس لديك حساب ؟
                        </span>

                        <a class="" href="#">
                          إنشاء حساب
                        </a>
                      </div>
                    </div>
                  </form>
                
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div> --}}

    </main><!-- End #main -->

</body>

</html>
