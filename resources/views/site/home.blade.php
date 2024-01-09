@extends('layouts.site')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row mt-3">
                <div class="col-lg-6 col-md-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">منصة مقر لمساحات العمل
                    </h1>
                    <h2 data-aos="fade-up" data-aos-delay="400"> احصل على المساحة التي تريدها، بدءًا من مكتب واحد وصولًا إلى
                        مبنى
                        بأكمله. الخيار لك.

                    </h2>
                    <div data-aos="fade-up" data-aos-delay="600" class="d-flex ">
                        <div class="text-center text-lg-start">
                            <a href="#about"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>اعثر على مقر عملك</span>
                                <i class="bi bi-arrow-left pe-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6  hero-img d-md-block  d-sm-none d-xs-none text-center" data-aos="zoom-out"
                    data-aos-delay="200">
                    <img src="{{ asset('/site/img/ill/3d-casual-life-young-colleagues-are-working-together-on-a-project.png') }}"
                        class="img-fluid " alt="">

                </div>
            </div>


        </div>

    </section><!-- End Hero -->
    <!-- search start -->
    <div class="container ">
        <div class="search-box search-box-m">
            <form action="{{ route('offers') }}" method="post">
                @csrf
                <div class="row  justify-content-center align-items-center">
                    <div class="col-3">
                        <div class="form-floating search-form">
                            <select class="form-select period-select" id="floatingSelect" name="workspace_type"
                                aria-label="Floating label select example">
                                @foreach ($workspaceTypes as $workspaceType)
                                    <option value="{{ $workspaceType->id }}">{{ $workspaceType->label }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">نوع المساحة:</label>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-floating">
                            <select class="form-select" id="workspaceDurationSelect" aria-label="State"
                                name="workspaceDuration_id">
                                @foreach ($workspaceDurations as $workspaceDuration)
                                    <option value="{{ $workspaceDuration->id }}">{{ $workspaceDuration->title }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect-d">:المدة</label>
                        </div>
                        @error('workspaceType_id')
                            <p></p>
                        @enderror
                    </div>
                    <div class="col-3">
                        <div class="form-floating">
                            <select class="form-select" id="governorateSelect" onchange="getDirectorates()">
                                <option selected disabled>اختر المحافظة</option>
                                @foreach ($governorates as $governorate)
                                    <option value="{{ $governorate->id }}">{{ $governorate->name }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect-g">المحافظة</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-floating">
                            <select class="form-select" id="directorateSelect" aria-label="State" name="directorate_id">
                            </select>
                            <label for="floatingSelect-d">المديرية</label>
                        </div>
                        @error('directorate_id')
                            <p>يجب اختيار المديريه</p>
                        @enderror
                    </div>
                    <div class="col-1">
                        <button type="submit" class=" search-box-btn w-100">بحث</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- search end -->

    <main id="main">

        <!-- ======= Values Section ======= -->
        <section id="values" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>مكان عمل مرن مصمم خصيصًا لتلبية احتياجاتك</h2>
                    <p>تتوفر إيجارات المكتب المرنة والقابلة للتخصيص بالكامل بالساعة أو اليوم، أو حسب المدة التي تحتاجها.</p>
                </header>

                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <div class="service-box-img">
                                <img src="{{ asset('/site/img/ill/casual-life-3d-young-woman-working-at-desk.png') }}"
                                    class="img-fluid" alt="">
                            </div>
                            <h3>مكاتب خاصة</h3>
                            <p>مجموعة من المكاتب المجهزة بالكامل والجاهزة للاستخدام حيث يوجد بها كل شيء تحتاجه للبدء .</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                        <div class="box">
                            <div class="service-box-img">
                                <img src="{{ asset('/site/img/ill/3d-casual-life-completed-teamwork.png') }}"
                                    class="img-fluid" alt="">
                            </div>
                            <h3>مكاتب مشتركة</h3>
                            <p>يمكن للمكاتب المشتركة المفتوحة والتفاعلية والمصممة بشكل رائع، تحقيق بُعد إضافي لطريقة عملك.
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                        <div class="box">
                            <div class="service-box-img">
                                <img src="{{ asset('/site/img/ill/3d-casual-life-group-of-young-people-discussing-something-while-working.png') }}"
                                    class="img-fluid" alt="">
                            </div>
                            <h3>غرف اجتماعات</h3>
                            <p>مجموعة كبيرة من خيارات غرف الاجتماعات التي تتيح لك اختيار المساحة والمكان المثاليين لاجتماعك
                                القادم.
                            </p>

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Values Section -->

        <!-- ======= Features Section ws ======= -->
        <div id="features" class="features">

            <div class="container mt-5" data-aos="fade-up">

                <header class="section-header">
                    <h2> ما تقدمه مقر لمزودي مساحات العمل</h2>
                    <p> يمكنك الإستفادة من منصتنا</p>
                </header>

                <div class="row">

                    <div class="col-lg-4 d-flex justify-content-center ">
                        <img style="height: 60%;"
                            src="{{ asset('/site/img/ill/3d-casual-life-young-people-sticking-notes-on-the-wall.png') }}"
                            class="img-fluid  d-lg-block d-sm-none" alt="">
                    </div>

                    <div class="col-lg-8 d-flex features-content">
                        <div class="row align-self-center justify-content-center  gy-4">

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box ">
                                    <div class="d-flex align-items-center">
                                        <i class="bi-aspect-ratio ms-3"></i>
                                        <h3> قاعدة بيانات واسعة </h3>
                                    </div>

                                    <p>مكن لمزودي المساحة عرض تفاصيل ومعلومات شاملة حول المساحات المتاحة، بما في ذلك
                                        المساحة، والمرافق
                                        المتاحة، والموقع، والأسعار، وصور الأماكن، وما إلى ذلك .</p>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                <div class="feature-box ">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-columns-gap ms-3"></i>
                                        <h3>إدارة الحجوزات والتأجير</h3>
                                    </div>

                                    <p> توفر المنصة واجهة لإدارة الحجوزات وعمليات التأجير، بما في ذلك تحديد التواريخ
                                        المتاحة، والتعامل مع
                                        عمليات الحجز والدفع، وتتبع الحجوزات الحالية والمستقبلية.</p>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                                <div class="feature-box ">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-buildings ms-3"></i>
                                        <h3>توفير معلومات مفصلة</h3>
                                    </div>

                                    <p> توفير معلومات مفصلة حول المساحات، مثل الصور العالية الجودة والوصف المفصل والتجهيزات
                                        المتاحة.
                                        أيضًا تضمين خريطة الموقع. </p>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                                <div class="feature-box ">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-graph-down-arrow ms-3"></i>
                                        <h3>تقديم خدمات تسويقية </h3>
                                    </div>

                                    <p>يمكن لمنصة "مقر" تقديم خدمات تسويقية لمزودي المساحة، مثل ترويج المساحات المتاحة عبر
                                        قنوات التواصل
                                        الاجتماعي، والتسويق عبر البريد الإلكتروني، والإعلانات المدفوعة.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- / row -->
            </div>

        </div><!-- End Features Section -->

        <!-- ======= Features Section  ======= -->
        <div id="features" class="features" dir="ltr">

            <div class="container mt-5" data-aos="fade-up">

                <header class="section-header">
                    <h2> ما تقدمه مقر للمستأجرين </h2>
                    <p> يمكنك الإستفادة من منصتنا</p>
                </header>

                <div class="row">

                    <div class="col-lg-4 d-flex justify-content-center ">
                        <img src="{{ asset('/site/img/ill/3d-casual-life-young-man-and-woman-sticking-notes-on-wall.png') }}"
                            class="img-fluid  d-lg-block d-sm-none" alt="">
                    </div>

                    <div class="col-lg-8 d-flex features-content">
                        <div class="row align-self-center justify-content-center  gy-4">

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box ">
                                    <div class="d-flex align-items-center">
                                        <i class="bi-aspect-ratio ms-3"></i>
                                        <h3> عرض التفاصيل والصور</h3>
                                    </div>

                                    <p>مكن للمستأجرين عرض تفاصيل مفصلة حول المساحات المتاحة، واطلاعهم على الصور والمعلومات
                                        المرتبطة بها،
                                        مما يساعدهم في اتخاذ قرار.</p>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                <div class="feature-box ">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-columns-gap ms-3"></i>
                                        <h3>رؤية عامة للمساحات</h3>
                                    </div>

                                    <p> يمكن للمستأجرين عرض عروض متعددة للمساحات المتاحة في نفس الوقت، مما يسمح لهم بمقارنة
                                        الخيارات
                                        واختيار الأفضل بناءً على احتياجاتهم ومتطلباتهم.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                                <div class="feature-box ">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-buildings ms-3"></i>
                                        <h3>
                                            ملف شخصي للمستأجر</h3>
                                    </div>

                                    <p> يمكن للمستأجرين إنشاء ملف شخصي يحتوي على تفاصيلهم وتفضيلاتهم وتاريخ الحجوزات
                                        السابقة، مما يسهل
                                        عليهم إدارة عمليات الحجز وتتبع سجلاتهم.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                                <div class="feature-box ">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-graph-down-arrow ms-3"></i>
                                        <h3>المرونة الزمنية</h3>
                                    </div>

                                    <p>يمكن للمستاجرين حجز المساحة في اي وقت واي مكان دون الحاجة الى الحضور .</p>

                                </div>
                            </div>



                        </div>
                    </div>

                </div> <!-- / row -->
            </div>

        </div><!-- End Features Section -->

        <!-- ======= Clients Section @======= -->
        <section id="clients" class="clients">

            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h2>مزودينا</h2>
                    <p>تعرف على مزودينا والخدمات التي يقدمونها .</p>
                </header>
                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><a href=""><img
                                    src="{{ asset('/site/img/clients/client-1.png') }}" class="img-fluid"
                                    alt=""></a>
                            <!-- <p class="text-center">حاضنة سند</p> -->
                        </div>
                        <div class="swiper-slide"><a href=""><img
                                    src="{{ asset('/site/img/clients/client-2.png') }}" class="img-fluid"
                                    alt=""></a>
                            <!-- <p class="text-center">Sixteen Stars</p> -->
                        </div>
                        <div class="swiper-slide"><a href=""><img
                                    src="{{ asset('/site/img/clients/client-3.png') }}" class="img-fluid"
                                    alt=""></a>
                            <!-- <p class="text-center">فندق هيلتون</p> -->
                        </div>
                        <div class="swiper-slide"><a href=""><img
                                    src="{{ asset('/site/img/clients/client-4.png') }}" class="img-fluid"
                                    alt=""></a>
                            <!-- <p class="text-center">شركة جسر</p> -->
                        </div>
                        <div class="swiper-slide"><a href=""><img
                                    src="{{ asset('/site/img/clients/client-5.png') }}" class="img-fluid"
                                    alt=""></a>
                            <!-- <p class="text-center">الجيلاني </p> -->
                        </div>
                        <div class="swiper-slide"><a href=""><img
                                    src="{{ asset('/site/img/clients/client-6.png') }}" class="img-fluid"
                                    alt=""></a>
                            <!-- <p class="text-center">مؤسسة سالم</p> -->
                        </div>
                        <div class="swiper-slide"><a href=""><img
                                    src="{{ asset('/site/img/clients/client-7.png') }}" class="img-fluid"
                                    alt=""></a>
                            <!-- <p class="text-center">أثر</p> -->
                        </div>
                        <div class="swiper-slide"><img src="{{ asset('/site/img/clients/client-8.png') }}"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section><!-- End Clients Section -->
        <!-- ======= Portfolio Section @======= -->
        <section id="portfolio" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>عروض مقر</h2>
                    <!-- <p>تفقد مكاتبنا</p> -->
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">الكل</li>
                            <li data-filter=".filter-app">مكاتب خاصة</li>
                            <li data-filter=".filter-card">مكاتب مشتركة</li>
                            <li data-filter=".filter-web">غرف الإجتماعات</li>
                        </ul>
                    </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/site/img/office/pexels-atbo-245240 copy.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h2 class="text-dark">سند</h2>
                                <h5>مكتب خاص</h5>
                                <p class="fs-6 text-secondary"><span>5</span><i class="bi bi-people-fill px-2"></i> </p>

                                <div class="portfolio-links">
                                    <a href="{{ asset('/site/img/office/pexels-atbo-245240 copy.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="حجز"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="تفاصيل أكثر"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/site/img/office/pexels-flo-dahm-699459.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('/site/img/portfolio/portfolio-2.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/site/img/office/pexels-jonathan-borba-3316924.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('/site/img/portfolio/portfolio-3.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/site/img/office/pexels-jonathan-borba-3316924.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('/site/img/portfolio/portfolio-4.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/site/img/portfolio/portfolio-5.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('/site/img/portfolio/portfolio-5.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/site/img/portfolio/portfolio-6.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('/site/img/portfolio/portfolio-6.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/site/img/portfolio/portfolio-7.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Card 1</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('/site/img/portfolio/portfolio-7.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/site/img/portfolio/portfolio-8.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('/site/img/portfolio/portfolio-8.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 3"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/site/img/portfolio/portfolio-9.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('/site/img/portfolio/portfolio-9.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Portfolio Section -->


        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>الأسئلة الشائعة</h2>
                    <p>نحن هنا لتقديم المساعدة</p>
                </header>

                <div class="row">
                    <div class="col-lg-6">
                        <!-- F.A.Q List 1-->
                        <div class="accordion accordion-flush" id="faqlist1">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        هل يمكن تأجير المكتب باليوم لأكثر من شخص واحد؟
                                    </button>
                                </h2>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        نعم. ما عليك سوى إخبارنا بعدد الأشخاص الذين سيحتاجون المكتب عند الحجز.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        ما المرافق المشتركة التي يمكنني استخدامها في المركز؟ </button>
                                </h2>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        تحتوي جميع مواقع تأجير المكاتب باليوم لدينا على أماكن استقبال مشتركة ومطابخ وحمامات
                                        مجهزة
                                        بالكامل.إذا كنت ترغب في حجز قاعة اجتماعات، أو استخدام صالون أعمال، فيُرجى التحدث إلى
                                        فريق خدمة
                                        العملاء.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        هل يمكنني طلب الطعام أو المشروبات؟
                                    </button>
                                </h2>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        نعم. إذا كنت ترغب في طلب خدمة توصيل الطعام، فسيقبل فريق الاستقبال ذلك نيابةً
                                        عنك.القهوة والشاي متاحة
                                        للجميع.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">

                        <!-- F.A.Q List 2-->
                        <div class="accordion accordion-flush" id="faqlist2">

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2-content-1">
                                        هل يمكنني الاختيار من بين المكاتب أم ستخصص لي واحدًا؟ </button>
                                </h2>
                                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        سيقوم فريق خدمة العملاء بتخصيص مكتب باليوم مناسب لك حسب احتياجاتك وحسب المكاتب
                                        باليوم المتوفرة.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2-content-2">
                                        <span class="rtl-qzmnd2">فريقي يتزايد؛ فماذا إذا كنت بحاجة إلى أكثر من بضعة
                                            مكاتب؟</span> </button>
                                </h2>
                                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        المساحة المكتبية المشتركة هي الخيار الأنسب للفرق الصغيرة التي تحتاج فقط إلى عدد قليل
                                        من المكاتب. ومع
                                        نمو أعمالك، قد تفضل التبديل إلى <a href="/ar-ae/office-space" target="_blank"
                                            class="updated">مكاتب
                                            خاصة</a>، والتي يمكنك تهيئتها على النحو الذي يناسب احتياجاتك. ولكن إذا كنت تفضل
                                        مكاتب مشتركة،
                                        فيمكننا توفير ذلك.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2-content-3">
                                        ما الخدمات القياسية المتضمنة؟
                                    </button>
                                </h2>
                                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        نوفر لك مساحات مكتبية في أجواء عمل مشتركة تكون مزودة بفريق استقبال محترف وشبكة
                                        "واي فاي" فائقة السرعة، فضلاً عن المرافق وخدمات التنظيف والصيانة وتوفير عنوان شركة
                                        يمكنك استخدامه
                                        لأعمالك وكذلك استخدام المطبخ المشترك المزود بمستلزمات إعداد الشاي والقهوة.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End F.A.Q Section -->



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
@endsection
