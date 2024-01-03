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

<body>

  <section>
    <div class="card card-join">
      <div class="text-center">
        <img src="{{asset('admin/img/logo.png')}}" width="200" alt="">
        <h4 class="card-title">
          طلب انضمام
        </h4>
      </div>

      <div class="card-body" dir="rtl">
        <section>
          <h4 class="tab-heading">المرافق</h4>
          <div class="group">
              <div class="tags-input">
                  <ul class="">
                      <input type="text" name="" id="inputTag">
                  </ul>
              </div>
              {{-- <div class="removeAll">
                  <button class="btn-dasSecond submit-btn">حذف الكل</button>
              </div> --}}
          </div>
        </section>
        <section>
          <h4 class="tab-heading">الخدمات الاضافية</h4>
          <div class="row">
            <div class="col-12">
              <div id="fields-container">
                <div class="row myrow">

                  <div class="col-8">
                    <div class="form-group pb-3">
                      <input type="text" class="form-control" name="title[]" placeholder="أدخل الخدمة الاضافية">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group pb-3">
                      <input type="number" class="form-control" name="social-link[]" placeholder="أدخل السعر">
                    </div>
                  </div>
                </div>
              </div>
              <button onclick="addFields() " class="btn-dasSecond" >جديد</button>
            </div>
          </div>
        </section>

        <section>
          <div class="row">
            <div class="col-12">
              <h4 class="tab-heading">العملة</h4>
              <select id="inputState" class="form-select" fdprocessedid="qcnd3">
                <option selected="">SAR</option>
                <option>USD</option>
                <option>YEM</option>
              </select>
            </div>
          </div>
        </section>
        <section>
          <h4 class="tab-heading">اوقات الدوام</h4>
          <div class="row">
            <div class="col-12">
              <div class="row">
                <div class="col-6">
                  <input type="time" name="workTime" class="form-control" id="" width="100">
                </div>
                <div class="col-6">
                  <input type="time" name="workTime" id=""  class="form-control" width="100">
                </div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="row">
            <div class="col-12">
              <h4 class="tab-heading">من نحن</h4>
              <textarea class="mytextarea">
              </textarea>
            </div>
          </div>
        </section>
        
        <section>
          <div class="row">
            <div class="col-8">
              <h4 class="tab-heading">حسابات التواصل الاجتماعي</h4>
            <p class="paragraph">
               يمكنك اختيار وسائل التواصل الاجتماعي التي تريد عرضها ليصل عملائك بشكل اسرع
            </p>
            <div class="input-group mb-3" dir="ltr">

              <input type="text" class="form-control social-link" disabled placeholder="سعر المساحة بالاسبوع  "  aria-label="Recipient's username" aria-describedby="basic-addon3" fdprocessedid="agqgdm">
              <div class="input-group-text" id="basic-addon3">
                <label class="form-check-label" for="gridCheck1">
                  تويتر
                </label>
                <input class="form-check-input ms-1" type="checkbox" id="gridCheck1">
              </div>
            </div>
            <div class="input-group mb-3" dir="ltr">
              <input type="text" class="form-control social-link" disabled placeholder="سعر المساحة بالاسبوع  "  aria-label="Recipient's username" aria-describedby="basic-addon3" fdprocessedid="agqgdm">
              <div class="input-group-text" id="basic-addon3">
                <label class="form-check-label" for="gridCheck1">
                  انستقرام
                </label>
                <input class="form-check-input ms-1" type="checkbox" id="gridCheck1">
              </div>
            </div>
            <div class="input-group mb-3" dir="ltr">
              <input type="text" class="form-control social-link" disabled placeholder="سعر المساحة بالاسبوع  "  aria-label="Recipient's username" aria-describedby="basic-addon3" fdprocessedid="agqgdm">
              <div class="input-group-text" id="basic-addon3">
                <label class="form-check-label" for="gridCheck1">
                  لينكدان
                </label>
                <input class="form-check-input ms-1" type="checkbox" id="gridCheck1">
              </div>
            </div>
            <div class="input-group mb-3" dir="ltr">
              <input type="text" class="form-control social-link" disabled placeholder="سعر المساحة بالاسبوع  "  aria-label="Recipient's username" aria-describedby="basic-addon3" fdprocessedid="agqgdm">
              <div class="input-group-text" id="basic-addon3">
                <label class="form-check-label" for="gridCheck1">
                  فيسبوك
                </label>
                <input class="form-check-input ms-1" type="checkbox" id="gridCheck1">
              </div>
            </div>
          </div>
            </div>  
        </section>
          <form action="" method="">

          <a href="{{route('tenant.dashboard')}}" class="btn-dasMain" type="submit">التالي</a>
        </form>
      </div>
    </div>
  </section>



  <script src="{{asset('admin/js/profider.js')}}">
 
      
  </script>

</body>

</html>