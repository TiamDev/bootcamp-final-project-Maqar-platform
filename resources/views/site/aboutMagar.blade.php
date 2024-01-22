@extends('layouts.site')
@section('content')
    <main id="main" dir="rtl">
        <div class="header-section">
            <h1 class="title">نساعد الأعمال في اكتشاف أفضل الحلول لإنجاز العمل </h1>
            <p>تتيح شبكتنا الواسعة من المواقع للشركات من جميع الأحجام العمل في أي مكان، وبالكيفية التي تريدها. </p>
        </div>
        <!-- </section> -->
        <section>
            <div class="container mb-5">
                <!-- Feature Icons -->
                <div class="row feature-icons" data-aos="fade-up">
                    <div class="row">

                        <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                            <img src="{{ asset('site/img/ill/3d-casual-life-office-building.png') }}" class="img-fluid p-4"
                                alt="">
                        </div>

                        <div class="col-xl-7 d-flex content">
                            <div class="row align-self-center gy-4">
                                <div class="col-md-10- icon-box" data-aos="fade-up">
                                    <i class="bi-layout-wtf fs-3 text-secondary"></i>
                                    <div>
                                        <h1>مزودي مساحات العمل</h1>
                                        <p class="fs-5">تم تطوير منصتنا لتكون مكانًا حيث يمكن لملاك المساحات ومزودي خدمات
                                            العمل المشترك
                                            الاستفادة منها.
                                            نقدم لهم منصة شاملة لإدارة حجوزاتهم وتوفير معلومات حول مكان عملهم وخدماتهم
                                            للمستفيدين الآخرين.
                                            تهدف المنصة إلى تحقيق سهولة الوصول للمستفيدين وتمكينهم من الاطلاع على مواقع
                                            مقرات الملاك ومعرفة
                                            الخدمات المتاحة. بالإضافة إلى ذلك، تسهم المنصة في تعزيز التواصل والتفاعل بين
                                            الملاك والمستفيدين،
                                            مما يساهم في تعزيز تجربة العمل المشترك وتعزيز التعاون والتواصل الفعال.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Feature Icons -->
            </div>
        </section>
        <section dir="ltr" class="pt-0 about-bg">
            <div class="container ">
                <!-- Feature Icons -->
                <div class="row feature-icons" data-aos="fade-up">
                    <div class="row">

                        <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                            <img src="{{ asset('site/img/ill/3d-casual-life-monitor-and-other-office-stuff.png') }}"
                                class="img-fluid p-4" alt="">
                        </div>

                        <div class="col-xl-7 d-flex content">
                            <div class="row align-self-center gy-4">

                                <div class="col-md-12- icon-box" data-aos="fade-up">
                                    <i class="bi-sign-intersection-y text-secondary fs-3"></i>
                                    <div>
                                        <h1> عملائنا </h1>
                                        <p class="fs-5">نحن نقدم لك الحرية في اختيار نوع المساحة التي تناسب احتياجاتك،
                                            سواء كانت مكاتب خاصة
                                            أو مكاتب
                                            مشتركة أو صالونات أعمال أو قاعات اجتماعات. يمكنك أيضًا تحديد المدة الزمنية التي
                                            تفضلها، سواء كانت
                                            قصيرة أو طويلة، بحسب رغبتك.
                                            يمكنك الوصول إلى مساحات العمل في أي مكان في اليمن. سواء كنت ترغب في مكان
                                            قريب من منزلك، أو في موقع استراتيجي قريب من عملائك أو فرص الأعمال، لدينا خيارات
                                            وفيرة تناسب
                                            احتياجاتك.
                                            يمكنك اختيار المكان والمساحة التي تناسبك وتوفر لك البيئة المثالية للعمل
                                            والتركيز. نحن نسعى لتوفير
                                            تجربة مريحة وملهمة للشركات وأفراد العمل، بغض النظر عن مكان تواجدهم في العالم.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Feature Icons -->
            </div>
        </section>
        <div class="container my-5">
            <h3 class="text-center my-5">
                أصبح العثور على مكتب يلبّي تطلعات عملائك الآن أسهل من أي وقتٍ مضى
            </h3>
        </div>
    </main><!-- End #main -->
@endsection
