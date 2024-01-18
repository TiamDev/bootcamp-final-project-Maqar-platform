@extends('layouts.platform')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">ادارة المحتوى</li>
                    <li class="breadcrumb-item"><a href="{{ route('tenant.dashboard') }}">الرئيسية</a></li>
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
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="logo-tab">
                            <h3 class="tab-heading">الرئيسية</h3>
                            <p class="paragraph">
                                يمكنك اضافة و تغيير محتوى صفحتك التي يراها مستخدمي منصة مقر
                            </p>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form action="{{ route('content.publish') }}" method="post">
                                @csrf
                                @if ($provider->state == 'approved')
                                    <button class="btn-dasMain">نشر الموقع </button>
                                @endif
                            </form>

                        </div>
                        <div class="tab-pane fade" id="pills-logo" role="tabpanel" aria-labelledby="logo-tab">
                            <form action="{{ route('content.logo') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="provider_id" value="{{ $provider->id }}">
                                <div class="row">
                                    <div class="col-lg-8 ps-5">
                                        <h3 class="tab-heading"> تغيير شعار شركتك </h3>
                                        <p class="paragraph">
                                            صورة الشعار يجب أن تكون واضحة، ذات دقة عالية وقابلة للتحجيم، مع خلفية شفافة،
                                            تعكس هوية وقيم العلامة التجارية، وتكون مرتبطة بها.
                                        </p>
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="logo" required=""
                                                id="logo-input1">
                                        </div>
                                        <button type="submit" class="btn-dasMain">حفظ التغييرات</button>
                                    </div>
                                    <div class="col-lg-4 my-auto">
                                        <img src="{{ asset('storage/logo/' . $provider->logo) }}" class="logo-img-edit"
                                            id="logo-image1">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-slider" role="tabpanel" aria-labelledby="slider-tab">
                            <form action="{{ route('content.Galary') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="provider_id" value="{{ $provider->id }}">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h3 class="tab-heading"> معرض الصور</h3>
                                        <p class="paragraph">
                                            معرض الصور هو ما يمثل شركتك ويعرض مكاتبك والمساحات التي لديك (5 صور )
                                        </p>
                                        <div class="form-group">
                                            <input type="file" class="form-control galary-input" name="images[]"
                                                required="" multiple>
                                        </div>
                                        <button type="submit" class="btn-dasMain">حفظ التغييرات</button>
                                    </div>

                                    <div class="col-lg-12 my-auto" id="image-preview">
                                        @foreach ($Galary as $image)
                                            <img src="{{ asset('storage/galary/' . $image->path) }}"
                                                class="d-block  img-spase">
                                        @endforeach
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-aboutus" role="tabpanel" aria-labelledby="aboutus-tab">
                            <div class="col-lg-12 ps-5 card">
                                <h3 class="tab-heading"> محتوى من نحن </h3>
                                <p class="paragraph">
                                    تساعد صفحة "من نحن" على توضيح هوية الشركة وتعريفها بشكل شامل. يتم توفير معلومات حول
                                    تاريخ الشركة، والرؤية والرسالة، والقيم الأساسية التي تستند إليها الشركة. يساعد هذا القسم
                                    على بناء الثقة والتواصل مع الزوار والعملاء المحتملين.
                                </p>
                                <form action="{{ route('content.aboutus') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="provider_id" value="{{ $provider->id }}">
                                    <textarea class="mytextarea" name="aboutus">
                            @foreach ($contents as $content)
@if ($content && $content->type === 'aboutus')
{{ $content->description }}
@endif
@endforeach
                                        </textarea>
                                    <button class="btn-dasMain" type="submit">حفظ التغييرات</button>
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
                                            <a href="{{ route('content') }}" class="mainColor">يرجى اضافة
                                                مرافق</a>
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
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="contact-tab">
                            <form action="content.contactus" method="POST">
                                <div class="row">
                                    <div class="col-8">
                                        <h3 class="tab-heading"> معلومات التواصل </h3>
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
                            <h3 class="tab-heading"> حسابات التواصل الاجتماعي </h3>
                            <p class="paragraph"> وسائل التواصل الاجتماعي يمكن العملاء من الاطلاع على أحدث الأخبار والعروض
                                المساحات الجديدة، وتقديم استفساراتهم وملاحظاتهم بسهولة.
                            </p>
                            <form action="{{ route('content.social') }}" method="POST">
                                @csrf
                                @foreach (['Facebook', 'Instagram', 'Twitter', 'Linkedin'] as $type)
                                    <div class="input-group mb-3" dir="ltr">
                                        <input type="text" class="form-control social" name="{{ $type }}"
                                            placeholder="ادخل الرابط " aria-label="Recipient's username"
                                            aria-describedby="basic-addon3" fdprocessedid="agqgdm"
                                            value="{{ optional($socialAccounts->where('type', $type)->first())->link }}">
                                        <div class="input-group-text" id="basic-addon3">
                                            <label class="form-check-label" for="{{ $type }}_check">

                                                {{ $type }}
                                            </label>
                                            <input class="form-check-input ms-1" type="checkbox"
                                                name="{{ $type }}_check" id="{{ $type }}_check"
                                                @if ($socialAccounts->where('type', $type)->isNotEmpty()) checked @endif>
                                        </div>
                                    </div>
                                @endforeach
                                <button type="submit" class="btn-dasMain">حفظ التغييرات</button>
                            </form>
                        </div>

                    </div>
                </div>

            </div>


            </div><!-- End Pills Tabs -->

            </div>
            </div>
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
        // استهدف العنصرين باستخدام معرفاتهما
        var logoInput = document.getElementById('logo-input1');
        var logoImage = document.getElementById('logo-image1');

        // استمع إلى حدث تغيير الملف في حقل الإدخال
        logoInput.addEventListener('change', function(event) {
            // التأكد من وجود ملف محدد
            if (event.target.files.length > 0) {
                // الحصول على الملف المحدد
                var file = event.target.files[0];

                // إنشاء كائن FileReader لقراءة محتوى الملف
                var reader = new FileReader();

                // استمع إلى حدث استكمال قراءة الملف
                reader.onload = function(e) {
                    // تحديث مصدر الصورة (src) بمحتوى الملف المحدد
                    logoImage.src = e.target.result;
                };

                // قراءة محتوى الملف كـ URL
                reader.readAsDataURL(file);
            }
        });
    </script>
    <script>
        function previewImages() {
            var preview = document.querySelector('#image-preview');
            var files = document.querySelector('.galary-input[type=file]').files;

            function readAndPreview(file) {
                // Create a FileReader
                var reader = new FileReader();

                // When the image is loaded successfully
                reader.onload = function(e) {
                    var image = new Image();
                    image.src = e.target.result;

                    // Add the preview image to the div
                    preview.appendChild(image);
                };

                // Read the file as a DataURL
                reader.readAsDataURL(file);
            }

            if (files && files.length === 4) { // Check if 5 files are selected
                // Remove current images from the div
                preview.innerHTML = '';

                // Read and preview the selected images
                Array.from(files).forEach(readAndPreview);
            } else {
                // Clear the file input field
                document.querySelector('.galary-input[type=file]').value = '';

                // Remove current images from the div
                preview.innerHTML = '';

                // Display an error message
                var errorMessage = document.createElement('p');
                errorMessage.textContent = 'يرجى اختيار 4 صور';
                preview.appendChild(errorMessage);
            }
        }
        // Call the function when the file input changes
        document.querySelector('.galary-input[type=file]').addEventListener('change', previewImages);
        // Call the function when the file input changes
    </script>
    <script>
        const checkboxes = document.querySelectorAll('.form-check-input');
        const inputTexts = document.querySelectorAll('.social');

        checkboxes.forEach((checkbox, index) => {
            checkbox.addEventListener('change', function() {
                inputTexts[index].disabled = !this.checked;
            });
        });
    </script>

@endsection
