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
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true"> الرئيسية</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-logo-tab" data-bs-toggle="pill" data-bs-target="#pills-logo"
                                type="button" role="tab" aria-controls="pills-logo" aria-selected="false">شعار الشركة
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-slider-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-slider" type="button" role="tab" aria-controls="pills-slider"
                                aria-selected="false">معرض الصور </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-aboutus-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-aboutus" type="button" role="tab" aria-controls="pills-aboutus"
                                aria-selected="false">نبذة عن شركتك</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-service-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-service" type="button" role="tab" aria-controls="pills-service"
                                aria-selected="false"> المرافق </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-advantage-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-advantage" type="button" role="tab"
                                aria-controls="pills-advantage" aria-selected="false"> خدماتنا </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-address-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-address" type="button" role="tab" aria-controls="pills-address"
                                aria-selected="false"> العنوان و العملة</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">توصل معنا</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-links-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-links" type="button" role="tab" aria-controls="pills-links"
                                aria-selected="false"> حسابات التواصل الاجتماعي </button>
                        </li>
                    </ul>
                    <div class="card tab-content pt-2" id="myTabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="logo-tab">
                            <h3 class="tab-heading">الرئيسية</h3>
                            <p class="paragraph">
                                يمكنك اضافة و تغيير محتوى صفحتك التي يراها مستخدمي منصة مقر
                            </p>
                        </div>
                        <div class="tab-pane fade" id="pills-logo" role="tabpanel" aria-labelledby="logo-tab">
                            <form>
                                <div class="row">
                                    <div class="col-lg-8 ps-5">
                                        <h3 class="tab-heading"> تغيير شعار شركتك </h3>
                                        <p class="paragraph">
                                            صورة الشعار يجب أن تكون واضحة، ذات دقة عالية وقابلة للتحجيم، مع خلفية شفافة،
                                            تعكس هوية وقيم العلامة التجارية، وتكون مرتبطة بها.</p>
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="meal_image" value=""
                                                onchange="previewImage(event)" id="meal_image" required="">
                                        </div>
                                        <a href="" class="btn-dasMain">حفظ التغييرات</a>
                                    </div>
                                    <div class="col-lg-4 my-auto">
                                        <img src="{{ asset('admin/img/clients/client-5.png') }}" class="logo-img-edit" />
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
                                            <div class="top ">
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
                            <div class="col-lg-12 ps-5">
                                <h3 class="tab-heading"> محتوى من نحن </h3>
                                <p class="paragraph">
                                    تساعد صفحة "من نحن" على توضيح هوية الشركة وتعريفها بشكل شامل. يتم توفير معلومات حول
                                    تاريخ الشركة، والرؤية والرسالة، والقيم الأساسية التي تستند إليها الشركة. يساعد هذا القسم
                                    على بناء الثقة والتواصل مع الزوار والعملاء المحتملين.
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
                            {{-- <form> --}}

                            <div class="">
                                <div class="col-8 w-100">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="tab-heading"> مرافق مقر {{ $provider->title }}</h3>
                                        <a href="{{ route('content.addFeature') }}" class="dash-btn das-show"><i
                                                class="bi bi-plus-square fs-4"></i></a>
                                        </a>
                                    </div>
                                    <p class="paragraph text-secondary">
                                        يمكن توضيح المزايا الإضافية التي تمتلكها مثل وجود مواقف للسيارات، والمواقع المركزية
                                        في
                                        المدينة،والمطاعم ووسائل النقل العام... </p>
                                    <div class="row">
                                        @if (count($features) > 0)
                                            @foreach ($features as $feature)
                                                <div class="col-lg-4">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between">
                                                                <h5> {{ $feature->name }}</h5>
                                                                <a href=""><i
                                                                        class="bi bi-x-octagon text-danger"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <a href="{{ route('workspaces.add') }}" class="mainColor">يرجى اضافة مرافق</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- </form> --}}
                        </div>
                        <div class="tab-pane fade" id="pills-advantage" role="tabpanel" aria-labelledby="advantage-tab">
                            {{-- <form> --}}
                            <div class="">
                                <div class="col-8 w-100">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="tab-heading"> خدمات مقر {{ $provider->title }}</h3>
                                        <a href="{{ route('content.addService') }}" class="dash-btn das-show"><i
                                                class="bi bi-plus-square fs-4"></i></a>
                                        </a>
                                    </div>
                                    <p class="paragraph text-secondary">تعزز تجربة العملاء وتوفر لهم راحة وسهولة أكبر أثناء
                                        استخدام الخدمات المدفوعة مثل تقديم وجبة الافطار."
                                    </p>
                                    <div class="row">
                                        @if (count($services) > 0)
                                            @foreach ($services as $service)
                                                <div class="col-lg-4">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between">
                                                                <div>
                                                                    <h5> {{ $service->name }} </h5>
                                                                    <p class="m-0 mainColor">
                                                                        {{ $service->price }}
                                                                        {{ $provider->currency }}</p>
                                                                </div>

                                                                <a href=""><i
                                                                        class="bi bi-x-octagon text-danger"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <a href="{{ route('workspaces.add') }}" class="mainColor">يرجى اضافة
                                                مرافق</a>
                                        @endif
                                    </div>
                                </div>
                            </div> {{-- </form> --}}
                        </div>
                        <div class="tab-pane fade" id="pills-address" role="tabpanel" aria-labelledby="address-tab">
                            <form>
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="tab-heading"> عنوان الشركة و العملة</h3>
                                        <p class="paragraph">
                                            يُرجى تحديد الموقع بدقة وكذلك العملة التي ترغب في عرضها للمستخدمين </p>
                                        <div class="row">
                                            <div class="col-3">
                                                <label for="inputState" class="form-label"> المحافظة</label>
                                                <select class="form-select" id="governorateSelect"
                                                    onchange="getDirectorates()">
                                                    <option selected disabled>اختر المحافظة</option>
                                                    @foreach ($governorates as $governorate)
                                                        <option value="{{ $governorate->id }}">{{ $governorate->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="inputState" class="form-label">المديرية</label>

                                                <select class="form-select" id="directorateSelect" aria-label="State"
                                                    name="directorate_id" name="directorate_id">
                                                    <option selected disabled>اختر المحافظة اولا</option>

                                                </select>
                                                @error('directorate_id')
                                                    <p>يجب اختيار المديريه</p>
                                                @enderror
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="inputState" class="form-label">الشارع</label>
                                                <input type="text" class="form-control" id="inputName5"
                                                    name="address" name="address" fdprocessedid="tpewl"
                                                    placeholder="فوة - الاربعين شقة">
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="inputState" class="form-label">العملة</label>
                                                <select class="form-select" name="currency" onchange="getDirectorates()">
                                                    <option value="ري">ري</option>
                                                    <option value="رس">رس</option>
                                                    <option value="دولار">دولار</option>

                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <a href="" class="btn-dasMain">حفظ التغييرات</a>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="contact-tab">
                            <form action="content.contactus" method="POST">
                                <div class="row">
                                    <div class="col-8">
                                        <h3 class="tab-heading">تعديل معلومات التواصل </h3>
                                        <p class="paragraph">
                                            معلومات التواصل مهمة لتيسير للعملاء عملية التواصل والوصول إلى الشركة
                                        </p>
                                        <div class="col-6">
                                            <label for="inputState" class="form-label">الايميل</label>
                                            <input type="text" class="form-control" name="email"
                                                fdprocessedid="tpewl" value="{{ $provider->email }}">
                                        </div>
                                        <div class="col-6">
                                            <label for="inputState" class="form-label">رقم التواصل</label>
                                            <input type="text" class="form-control" name="phone"
                                                fdprocessedid="tpewl" value="{{ $provider->phone }}">
                                        </div>
                                    </div>
                                </div>
                                <a href="" class="btn-dasMain">حفظ التغييرات</a>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-links" role="tabpanel" aria-labelledby="links-tab">

                            <form>
                                <div class="row">
                                    <div class="col-8">
                                        <h3 class="tab-heading">حسابات التواصل الاجتماعي</h3>
                                        <p class="paragraph">
                                            يمكنك اختيار وسائل التواصل الاجتماعي التي تريد عرضها ليصل عملائك بشكل اسرع
                                        </p>
                                        <div class="input-group mb-3" dir="ltr">

                                            <input type="text" class="form-control price" disabled
                                                placeholder="ادخل الرابط " aria-label="Recipient's username"
                                                aria-describedby="basic-addon3" fdprocessedid="agqgdm">
                                            <div class="input-group-text" id="basic-addon3">
                                                <label class="form-check-label" for="gridCheck1">
                                                    تويتر
                                                </label>
                                                <input class="form-check-input ms-1" type="checkbox" id="gridCheck1">
                                            </div>
                                        </div>
                                        <div class="input-group mb-3" dir="ltr">
                                            <input type="text" class="form-control price" disabled
                                                placeholder="ادخل الرابط " aria-label="Recipient's username"
                                                aria-describedby="basic-addon3" fdprocessedid="agqgdm">
                                            <div class="input-group-text" id="basic-addon3">
                                                <label class="form-check-label" for="gridCheck1">
                                                    انستقرام
                                                </label>
                                                <input class="form-check-input ms-1" type="checkbox" id="gridCheck1">
                                            </div>
                                        </div>
                                        <div class="input-group mb-3" dir="ltr">
                                            <input type="text" class="form-control price" disabled
                                                placeholder="ادخل الرابط " aria-label="Recipient's username"
                                                aria-describedby="basic-addon3" fdprocessedid="agqgdm">
                                            <div class="input-group-text" id="basic-addon3">
                                                <label class="form-check-label" for="gridCheck1">
                                                    لينكدان
                                                </label>
                                                <input class="form-check-input ms-1" type="checkbox" id="gridCheck1">
                                            </div>
                                        </div>
                                        <div class="input-group mb-3" dir="ltr">
                                            <input type="text" class="form-control price" disabled
                                                placeholder="ادخل الرابط " aria-label="Recipient's username"
                                                aria-describedby="basic-addon3" fdprocessedid="agqgdm">
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
        function getDirectorates() {
            var governorateId = document.getElementById('governorateSelect').value;
            var xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var directorates = JSON.parse(xhr.responseText);
                        var directorateSelect = document.getElementById('directorateSelect');
                        directorateSelect.innerHTML = '';

                        for (var i = 0; i < directorates.length; i++) {
                            var option = document.createElement('option');
                            option.value = directorates[i].id;
                            option.text = directorates[i].name;
                            directorateSelect.appendChild(option);
                        }
                    } else {
                        console.log('حدث خطأ أثناء استرداد البيانات');
                    }
                }
            };
            xhr.open('GET', '/getDirectorates?governorate_id=' + governorateId, true);
            xhr.send();
        }
    </script>
    <script>
        const maxImages = 5;

        let files = [];
        imgButton = document.querySelector('.top button');
        imgForm = document.querySelector('.img-card form');
        imgContainer = document.querySelector('.img-container');
        imgBrowse = document.querySelector('.img-select');
        imgInner = document.querySelector('.img-inner');
        imgInput = document.querySelector('.img-file');

        imgBrowse.addEventListener('click', () => imgInput.click());
        imgInput.addEventListener('change', () => {
            let file = imgInput.files;
            for (let i = 0; i < file.length; i++) {
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

        const showImages = () => {
            let images = '';
            console.log('ddddd');
            files.forEach((e, i) => {
                images += ` <div class="image-dw">
      <img src="${URL.createObjectURL(e)}" alt="image">
      <span onclick="delImage(${i})">&times;</span></div>`;
            })
            imgContainer.innerHTML = images;

        }
        const delImage = index => {
            files.splice(index, 1)
            showImages();
        }



        const checkboxes = document.querySelectorAll('.form-check-input');
        const inputTexts = document.querySelectorAll('.price');

        checkboxes.forEach((checkbox, index) => {
            checkbox.addEventListener('change', function() {
                inputTexts[index].disabled = !this.checked;
            });
        });

        // service

        function addFields() {
            var container = document.getElementById("fields-container");

            var newTitleField = document.createElement("div");
            newTitleField.classList.add("form-group");
            newTitleField.innerHTML = `
    <div class="row myrow">

      <div class="col-8">
        <div class="form-group pb-3">
          <input type="text" class="form-control" name="title[]" placeholder="أدخل مرفق ">
        </div>
      </div>

    </div>
  `;
            // counter++;
            container.appendChild(newTitleField);
        }
        // bank
        function addFields2() {
            var container = document.getElementById("fields-container2");

            var newTitleField = document.createElement("div");
            newTitleField.classList.add("form-group");
            newTitleField.innerHTML = `
    <div class="row myrow">

    <div class="col-8">
    <div class="form-group pb-3">
        <input type="text" class="form-control" name="bank[]"
            placeholder="البنك">
    </div>
</div>
<div class="col-4">
    <div class="form-group pb-3">
        <input type="number" class="form-control" name="PIN[]"
            placeholder="رقم الحساب">
    </div>
</div>
    </div>
  `;
            // counter++;
            container.appendChild(newTitleField);
        }
        ///
    </script>
@endsection
