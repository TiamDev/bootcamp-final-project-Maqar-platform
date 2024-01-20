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

    <section>
        <div class="card card-join">
            <div class="text-center">
                <img src="{{ asset('admin/img/logo.png') }}" width="200" alt="">
                <h3 class="card-title">
                    بيانات الشركة

                </h3>
            </div>
            {{-- <h4 class="card-title text-end">
      طلب انضمام 
    </h4> --}}
            <div class="card-body" dir="rtl">
                <form action="{{ route('providerInfo') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <label for="inputState" class="form-label">اسم الشركة (انجليزي)</label>
                            <input type="text" name="name" class="form-control" id="inputName5"
                                fdprocessedid="tpewl" value="{{ old('name') }}">
                            @error('name')
                                <div>{{ $message }}</div>
                            @enderror
                            <label for="inputState" class="form-label">(العربي)اسم الشركة</label>
                            <input type="text" name="title" class="form-control" id="inputName5"
                                fdprocessedid="tpewl" value="{{ old('title') }}">
                            @error('title')
                                <div>{{ $message }}</div>
                            @enderror
                            <label for="inputState" class="form-label"> رقم الهاتف/الجوال</label>
                            <input type="text" name="phone" class="form-control" id="inputName5"
                                fdprocessedid="tpewl" value="{{ old('phone') }}">
                            @error('phone')
                                <div>{{ $message }}</div>
                            @enderror
                            <div class="row">
                                <div class="col-6">
                                    <label for="inputState" class="form-label">المحافطة</label>
                                    <select name="governorate" id="" class="form-control">
                                        @foreach ($Governorates as $Governorate)
                                            <option value="{{ $Governorate->id }}">{{ $Governorate->name }}</option>
                                        @endforeach

                                    </select>
                                    @error('governorate')
                                        <div>{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="inputState" class="form-label">المدينه</label>
                                    <select name="directorate" id="" class="form-control">
                                        @foreach ($Directorates as $Directorate)
                                            <option value="{{ $Directorate->id }}">{{ $Directorate->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('directorate')
                                        <div>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <label for="inputState" class="form-label">العنوان</label>
                            <input type="text" name="address" class="form-control" id="inputName5"
                                fdprocessedid="tpewl" value="{{ old('address') }}">
                        </div>
                        @error('address')
                            <div>{{ $message }}</div>
                        @enderror
                        <div class="col-6">
                            <label for="inputState" class="form-label">ايميل الشركة</label>
                            <input type="text" name="email" class="form-control" id="inputName5"
                                fdprocessedid="tpewl" value="{{ old('email') }}">
                            @error('email')
                                <div>{{ $message }}</div>
                            @enderror
                            <label for="inputState" class="form-label"> رقم الهوية</label>
                            <input type="text" name="identity_NO" class="form-control" id="inputName5"
                                fdprocessedid="tpewl" value="{{ old('identity_NO') }}">
                            @error('identity_NO')
                                <div>{{ $message }}</div>
                            @enderror
                            <label for="inputState" class="form-label">السجل التجاري </label>
                            <input type="file" class="form-control" name="tradeDocument" required=""
                                id="logo-input1">
                            @error('tradeDocument')
                                <div>{{ $message }}</div>
                            @enderror
                            <label for="inputState" class="form-label">شعار الشركة</label>
                            <input type="file" class="form-control" name="logo" required=""
                                id="logo-input1">
                            @error('logo')
                                <div>{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <button class="btn-dasMain" type="submit">التالي</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
