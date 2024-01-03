@extends('layouts.site')
@section('content')
<main id="main" dir="ltr">
  <div class="container provider-conent">
    <div class="header-section left-br">
      <h2 class="office-name"> Sixteen Stars</h2>
      <p class="office-address ">ابراج بن محفوظ - المكلا </p>
    </div>
  </div>
  <!-- slider -->
  <div class="slider-container">
    <div class="slide">
      <div class="slider-item" style="background-image: url({{asset('/site/img/office/pexels-flo-dahm-699459.jpg)')}}">

      </div>
      <div class="slider-item" style="background-image: url({{asset('/site/img/office/modern-office-space-interior.jpg)')}}">

      </div>
      <div class="slider-item" style="background-image: url({{asset('/site/img/office/pexels-lisa-fotios-1957477.jpg)')}}">

      </div>
      <div class="slider-item" style="background-image: url({{asset('/site/img/office/pexels-max-rahubovskiy-7005458.jpg)')}}">
      </div>
      <div class="slider-item" style="background-image: url({{asset('/site/img/office/pexels-lisa-fotios-1957478.jpg')}}">

      </div>
      <div class="slider-item" style="background-image: url({{asset('/site/img/office/pexels-max-rahubovskiy-7005458.jpg')}}">

      </div>


      <div class="slider-button">
        <button class="slider-prev"><i class="bi bi-chevron-left"></i>
        </button>
        <button class="slider-next"><i class="bi bi-chevron-right"></i>
        </button>
      </div>

    </div>
  </div>

  <section dir="rtl" class="about-provider">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <h2 class="text-dark">
            نبذة عن Sixteen Stars
          </h2>
          <p class="fs-5">
            يتميز بموقعه المحوري. عزِّز من مكانة أعمالك من خلال امتلاك مقر في هذا المبنى المرموق الذي يخطف الأبصار على
            الفور ويجمع بين التصميم المعماري العصري المذهل والعناصر الكلاسيكية.

            ازرع الثقة في نفوس عملائك من خلال الموقع المتميز لهذا المبنى، واعقد اجتماعاتك في قاعات عصرية ومتطورة،
            وامنح
            عملاءك المتعة والترفيه من خلال زيارة معالم محلية، مثل "المتحف الوطني الأردني للفنون الجميلة". استمتع أيضًا
            بسهولة التنقل؛ فهذا الموقع تربطه شبكة طرق جيدة وبه موقف آمن لانتظار السيارات تحت الأرض.
          </p>
        </div>
        <div class="col-lg-3">
          <img src="assets/img/logo/logo2.png" alt="" srcset="" style="width: 100%;">
        </div>
      </div>
    </div>


  </section>
  <!-- service -->
  <div class="row" dir="rtl">
    <div class="col-lg-12">
      <section id="suppliers" class="suppliers">
        <div class="container">
          <h2 class="text-dark">
            ما يتوفر في Sixteen Stars
          </h2>
          <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
              <div class="supplier-box">
                <div class="supplier-box-img">
                  <i class="bi bi-buildings"></i>
                </div>
                <div>
                  <span class=""></span>
                  <p> ساحات للاستراحة</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="supplier-box">
                <div class="supplier-box-img">
                  <i class="bi bi-buildings"></i>
                </div>
                <div>
                  <span class=""></span>
                  <p>مصعد </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="supplier-box">
                <div class="supplier-box-img">
                  <i class="bi bi-buildings"></i>
                </div>
                <div>
                  <span class=""></span>
                  <p>قاعات اجتماعات</p>
                </div>
              </div>

            </div>
            <div class="col-lg-3 col-md-6">
              <div class="supplier-box">
                <div class="supplier-box-img">
                  <i class="bi bi-buildings"></i>
                </div>
                <div>
                  <span class=""></span>
                  <p>مركز المدينة/البلدة</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="supplier-box">
                <div class="supplier-box-img">
                  <i class="bi bi-buildings"></i>
                </div>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                    class=""></span>
                  <p>بالقرب من وسائل المواصلات</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="supplier-box">
                <div class="supplier-box-img">
                  <i class="bi bi-buildings"></i>
                </div>
                <div>
                  <p>ركن السيارات</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>خدماتنا</h2>
        <p></p>
      </header>

      <div class="row gy-4" data-aos="fade-left">

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="box">
          
            <img src="{{asset('site/img/office/modern-office-space-interior.jpg')}}" class="img-fluid" alt="">
            <div class=" pricing-box px-4">
              <div class="row">
                <h4 style="border-right: 3px solid gray;">مكتب خاص</h4>
              </div>
              <div class="row">
                <div class="col-6 ">
                  <p class="pricing-amount">
                    يبدأ من
                    <span class="amount">80000</span>
                    <span>ريال</span>
                  </p>
                </div>
                <div class="col-6">
                  <h4 class="pricing-type">شهريا</h4>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <p class="pricing-amount">
                    يبدأ من

                    <span class="amount">80000</span>
                    <span>ريال</span>
                  </p>
                </div>
                <div class="col-6">
                  <h4 class="pricing-type">اسبوعيا</h4>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <p class="pricing-amount">
                    يبدأ من
                    <span class="amount">50000</span>
                    <span>ريال</span>
                  </p>
                </div>
                <div class="col-6">
                  <h4 class="pricing-type">يوميا</h4>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <p class="pricing-amount">
                    يبدأ من
                    <span class="amount">3000</span>
                    <span>ريال</span>
                  </p>
                </div>
                <div class="col-6">
                  <h4 class="pricing-type">ساعة</h4>
                </div>
              </div>
            </div>
            <a href="#" class="main-btn">احجز الان</a>
          </div>
        </div>



      </div>

  </section><!-- End Pricing Section -->

</main><!-- End #main -->
@endsection