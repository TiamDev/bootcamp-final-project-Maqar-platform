@extends('layouts.platform')
@section('content')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>ادارة المحتوى</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">ادارة المحتوى</li>
        <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard mytable">


    <div class="" dir="rtl">
      <div class="">
        {{-- <h5 class="card-title">ادارة محتوى موقعك</h5> --}}

        <!-- Pills Tabs -->
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"> الرئيسية</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-logo-tab" data-bs-toggle="pill" data-bs-target="#pills-logo" type="button" role="tab" aria-controls="pills-logo" aria-selected="false">شعار الشركة </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-slider-tab" data-bs-toggle="pill" data-bs-target="#pills-slider" type="button" role="tab" aria-controls="pills-slider" aria-selected="false">معرض الصور </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-aboutus-tab" data-bs-toggle="pill" data-bs-target="#pills-aboutus" type="button" role="tab" aria-controls="pills-aboutus" aria-selected="false">نبذة عن شركتك</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-service-tab" data-bs-toggle="pill" data-bs-target="#pills-service" type="button" role="tab" aria-controls="pills-service" aria-selected="false"> خدماتنا </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-advantage-tab" data-bs-toggle="pill" data-bs-target="#pills-advantage" type="button" role="tab" aria-controls="pills-advantage" aria-selected="false"> مميزاتنا </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-address-tab" data-bs-toggle="pill" data-bs-target="#pills-address" type="button" role="tab" aria-controls="pills-address" aria-selected="false"> العنوان </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">توصل معنا</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-links-tab" data-bs-toggle="pill" data-bs-target="#pills-links" type="button" role="tab" aria-controls="pills-links" aria-selected="false">  حسابات التواصل الاجتماعي </button>
          </li>
        </ul>
        <div class="card tab-content pt-2" id="myTabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="logo-tab">
            @yield('f')
            <h3 class="tab-heading">الرئيسية</h3>
            <p class="paragraph">
              يمكنك تغيير محتوى صفحتك التي يراها مستخدمي منصة مقر 
            </p>
          </div>
          <div class="tab-pane fade" id="pills-logo" role="tabpanel" aria-labelledby="logo-tab">
            <form >
              <div class="row">
                <div class="col-lg-8 ps-5" >
                  <h3 class="tab-heading"> تغيير شعار شركتك </h3>
                  <p class="paragraph">
                      صورة الشعار يجب أن تكون واضحة، ذات دقة عالية وقابلة للتحجيم، مع خلفية شفافة، تعكس هوية وقيم العلامة التجارية، وتكون مرتبطة بها.</p>
                <div class="form-group">
                  <input type="file" class="form-control" name="meal_image" value="" onchange="previewImage(event)" id="meal_image" required="">
                </div>
                <a href="" class="btn-dasMain">حفظ التغييرات</a>
                  </div>
                  <div class="col-lg-4 my-auto">
                    <img src="{{asset("admin/img/clients/client-5.png")}}" class="logo-img-edit"/>
                </div>
                    </div>  
              </form>        
          </div>
          <div class="tab-pane fade" id="pills-slider" role="tabpanel" aria-labelledby="slider-tab">
            <form action="">
            <div class="row">
              <div class="col-lg-6">
                <h3 class="tab-heading"> معرض الصور</h3>
                <p class="paragraph">
                  معرض الصور هو ما يمثل شركتك ويعرض مكاتبك والمساحات التي لديك
                </p>
                <a href="" class="btn-dasMain">حفظ التغييرات</a>
              </div>
              <div class="col-lg-6">
                <div class="img-card">
                  <div class="top " >
                    <p> معرض الصور</p>
                  </div>
                  <form action="/upload" method="post" class="">
                    <span class="img-inner"> <span class="img-select">اختر الصور</span></span>
                    <input type="file" name="file" class="img-file" multiple>
                  </form>
                  <div class="img-container">
                   
                  </div>
                </div>
              </div>
            </div>  
            </form>       
          </div>
          <div class="tab-pane fade" id="pills-aboutus" role="tabpanel" aria-labelledby="aboutus-tab">
            <div class="col-lg-12 ps-5" >
              <h3 class="tab-heading">  محتوى من نحن </h3>
              <p class="paragraph">
                تساعد صفحة "من نحن" على توضيح هوية الشركة وتعريفها بشكل شامل. يتم توفير معلومات حول تاريخ الشركة، والرؤية والرسالة، والقيم الأساسية التي تستند إليها الشركة. يساعد هذا القسم على بناء الثقة والتواصل مع الزوار والعملاء المحتملين.
              </p>
                <form>
                <textarea class="mytextarea">
                  يتميز بموقعه المحوري. عزِّز من مكانة أعمالك من خلال امتلاك مقر في هذا المبنى المرموق الذي يخطف الأبصار على الفور ويجمع بين التصميم المعماري العصري المذهل والعناصر الكلاسيكية. ازرع الثقة في نفوس عملائك من خلال الموقع المتميز لهذا المبنى، واعقد اجتماعاتك في قاعات عصرية ومتطورة، وامنح عملاءك المتعة والترفيه من خلال زيارة معالم محلية، مثل "المتحف الوطني الأردني للفنون الجميلة". استمتع أيضًا بسهولة التنقل؛ فهذا الموقع تربطه شبكة طرق جيدة وبه موقف آمن لانتظار السيارات تحت الأرض.
                </textarea>
                <a href="" class="btn-dasMain">حفظ التغييرات</a>
                </form>
              </div>
            
          </div>
          <div class="tab-pane fade" id="pills-service" role="tabpanel" aria-labelledby="service-tab">
            <form >
              <div class="row">
                <div class="col-8">
                  <h3 class="tab-heading">تعديل خدماتنا </h3>
                <p class="paragraph">
                    الخدمات التي توفرها شركتك 
                </p>
                <select id="inputState" class="form-select" fdprocessedid="1dsoq">
                  <option selected="">Choose...</option>
                  <option>5</option>
                </select>
              </div>
                </div>  
                <a href="" class="btn-dasMain">حفظ التغييرات</a>
              </form>   
          </div>
          <div class="tab-pane fade" id="pills-advantage" role="tabpanel" aria-labelledby="advantage-tab">
            <form >
              <div class="row">
                <div class="col-8">
                  <h3 class="tab-heading">تعديل مميزاتنا </h3>
                <p class="paragraph">
                    الخدمات التي توفرها شركتك 
                </p>
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select" fdprocessedid="1dsoq">
                  <option selected="">Choose...</option>
                  <option>5</option>
                </select>
              </div>
                </div>  
                <a href="" class="btn-dasMain">حفظ التغييرات</a>
              </form>           
            </div>
          <div class="tab-pane fade" id="pills-address" role="tabpanel" aria-labelledby="address-tab">
            <form >
              <div class="row">
                <div class="col-8">
                  <h3 class="tab-heading">تعديل عنوان الشركة </h3>
                <p class="paragraph">
                     يجب تحديد المكان بدقة 
                </p>
                <div class="row">
                  <div class="col-4">
                    <label for="inputState" class="form-label">الدولة</label>
                    <select id="inputState" class="form-select" fdprocessedid="1dsoq">
                      <option selected="">اليمن</option>
                      <option>المملكة العربية السعودية</option>
                    </select>
                  </div>
                  <div class="col-4">
                    <label for="inputState" class="form-label">المدينة/المحافظة </label>
                    <select id="inputState" class="form-select" fdprocessedid="1dsoq">
                      <option selected="">حضرموت</option>
                      <option>صنعاء</option>
                    </select>
                  </div>
                  <div class="col-4">
                    <label for="inputState" class="form-label">الشارع</label>
                    <input type="text" class="form-control" id="inputName5" fdprocessedid="tpewl" placeholder="فوة - الاربعين شقة">
                  </div>
                </div>
                
              </div>
                </div>  
                <a href="" class="btn-dasMain">حفظ التغييرات</a>
              </form>  
          </div>
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="contact-tab">
            <form >
              <div class="row">
                <div class="col-8">
                  <h3 class="tab-heading">تعديل معلومات التواصل </h3>
                <p class="paragraph">
                    معلومات التواصل مهمة لتيسير للعملاء عملية التواصل والوصول إلى الشركة 
                </p>
                <div class="col-6">
                  <label for="inputState" class="form-label">الايميل</label>
                  <input type="text" class="form-control" id="inputName5" fdprocessedid="tpewl" value="sanad@gmail.com">
                </div>
                <div class="col-6">
                  <label for="inputState" class="form-label">رقم التواصل</label>
                  <input type="text" class="form-control" id="inputName5" fdprocessedid="tpewl" value="73595325">
                </div>
              </div>
                </div>  
                <a href="" class="btn-dasMain">حفظ التغييرات</a>
              </form> 
          </div>
          <div class="tab-pane fade" id="pills-links" role="tabpanel" aria-labelledby="links-tab">

            <form >
              <div class="row">
                <div class="col-8">
                  <h3 class="tab-heading">حسابات التواصل الاجتماعي</h3>
                <p class="paragraph">
                   يمكنك اختيار وسائل التواصل الاجتماعي التي تريد عرضها ليصل عملائك بشكل اسرع
                </p>
                <div class="input-group mb-3" dir="ltr">

                  <input type="text" class="form-control price" disabled placeholder="سعر المساحة بالاسبوع  "  aria-label="Recipient's username" aria-describedby="basic-addon3" fdprocessedid="agqgdm">
                  <div class="input-group-text" id="basic-addon3">
                    <label class="form-check-label" for="gridCheck1">
                      تويتر
                    </label>
                    <input class="form-check-input ms-1" type="checkbox" id="gridCheck1">
                  </div>
                </div>
                <div class="input-group mb-3" dir="ltr">
                  <input type="text" class="form-control price" disabled placeholder="سعر المساحة بالاسبوع  "  aria-label="Recipient's username" aria-describedby="basic-addon3" fdprocessedid="agqgdm">
                  <div class="input-group-text" id="basic-addon3">
                    <label class="form-check-label" for="gridCheck1">
                      انستقرام
                    </label>
                    <input class="form-check-input ms-1" type="checkbox" id="gridCheck1">
                  </div>
                </div>
                <div class="input-group mb-3" dir="ltr">
                  <input type="text" class="form-control price" disabled placeholder="سعر المساحة بالاسبوع  "  aria-label="Recipient's username" aria-describedby="basic-addon3" fdprocessedid="agqgdm">
                  <div class="input-group-text" id="basic-addon3">
                    <label class="form-check-label" for="gridCheck1">
                      لينكدان
                    </label>
                    <input class="form-check-input ms-1" type="checkbox" id="gridCheck1">
                  </div>
                </div>
                <div class="input-group mb-3" dir="ltr">
                  <input type="text" class="form-control price" disabled placeholder="سعر المساحة بالاسبوع  "  aria-label="Recipient's username" aria-describedby="basic-addon3" fdprocessedid="agqgdm">
                  <div class="input-group-text" id="basic-addon3">
                    <label class="form-check-label" for="gridCheck1">
                      فيسبوك
                    </label>
                    <input class="form-check-input ms-1" type="checkbox" id="gridCheck1">
                  </div>
                </div>
              </div>
                </div>  
                <a href="" class="btn-dasMain">حفظ التغييرات</a>
              </form> 
          </div>
        </div><!-- End Pills Tabs -->

      </div>
    </div>














  </section>

</main><!-- End #main -->



<script>
const maxImages = 5;

  let files=[];
  imgButton=document.querySelector('.top button');
  imgForm=document.querySelector('.img-card form');
  imgContainer=document.querySelector('.img-container');
  imgBrowse=document.querySelector('.img-select');
  imgInner=document.querySelector('.img-inner');
  imgInput=document.querySelector('.img-file');
  
  imgBrowse.addEventListener('click',()=>imgInput.click());
  imgInput.addEventListener('change',()=>{
    let file=imgInput.files;
    for(let i=0;i<file.length;i++){
        if (files.length < maxImages && files.every(e => e.name !== file[i].name)) {
          files.push(file[i]);
        }
    }
    if (files.length > maxImages) {
      files = files.slice(0, maxImages);
    }      
    
    imgForm.reset();
    showImages();
  })
  
  const showImages=()=>{
    let images='';
    console.log('ddddd');
    files.forEach((e,i)=>{
      images +=` <div class="image-dw">
      <img src="${URL.createObjectURL(e)}" alt="image">
      <span onclick="delImage(${i})">&times;</span></div>`;
    })
    imgContainer.innerHTML =images;
  
  }
  const delImage= index=>{
    files.splice(index,1)
    showImages();
  }
  
  
  
  const checkboxes = document.querySelectorAll('.form-check-input');
    const inputTexts = document.querySelectorAll('.price');
  
    checkboxes.forEach((checkbox, index) => {
      checkbox.addEventListener('change', function() {
        inputTexts[index].disabled = !this.checked;
      });
    });
  </script>
  
@endsection