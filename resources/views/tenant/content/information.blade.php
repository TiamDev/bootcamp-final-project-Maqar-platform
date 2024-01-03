<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('admin/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('site/css/sign.css')}}" rel="stylesheet">


</head>

<body >

<section>
  <div class="card card-join">
    <div class="text-center">
      <img src="{{asset('admin/img/logo.png')}}" width="200" alt="">
      <h3 class="card-title">
        بيانات الشركة 
  
      </h3>
    </div>
    {{-- <h4 class="card-title text-end">
      طلب انضمام 
    </h4> --}}
    <div class="card-body" dir="rtl">
      <form action="" method="post">
    <div class="row">
      <div class="col-6">
        <label for="inputState" class="form-label">اسم المكتب</label>
        <input type="text" class="form-control" id="inputName5" fdprocessedid="tpewl" value="73595325">
        <label for="inputState" class="form-label"> رقم الهاتف</label>
        <input type="text" class="form-control" id="inputName5" fdprocessedid="tpewl" value="73595325">
        <div class="row">
          <div class="col-6">
            <label for="inputState" class="form-label">المحافطة</label>
            <input type="text" class="form-control" id="inputName5" fdprocessedid="tpewl" value="73595325">
          </div>
          <div class="col-6">
            <label for="inputState" class="form-label">المدينه</label>
        <input type="text" class="form-control" id="inputName5" fdprocessedid="tpewl" value="73595325">
          </div>
        </div>
        <label for="inputState" class="form-label">العنوان</label>
        <input type="text" class="form-control" id="inputName5" fdprocessedid="tpewl" value="73595325">
        
      </div>
      <div class="col-6">
        <label for="inputState" class="form-label">ايميل المكتب</label>
        <input type="text" class="form-control" id="inputName5" fdprocessedid="tpewl" value="73595325">
        <label for="inputState" class="form-label"> رقم الهوية</label>
        <input type="text" class="form-control" id="inputName5" fdprocessedid="tpewl" value="73595325">
        <label for="inputState" class="form-label">السجل التجاري </label>
        <input type="file" class="form-control" id="inputName5" fdprocessedid="tpewl" value="73595325">
        <label for="inputState" class="form-label">شعار الشركة</label>
        <input type="file" class="form-control" id="inputName5" fdprocessedid="tpewl" value="73595325">
      </div>
      
    </div>
    <a href="{{route('tenant.content.stepTwo')}}" class="btn-dasMain" type="submit">موافق</a>
  </form>
    </div>
  </div>
</section>
</body>
</html>