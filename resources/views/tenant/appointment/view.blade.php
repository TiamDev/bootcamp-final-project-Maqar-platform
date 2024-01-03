@extends('layouts.platform')
@section('content')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>الرسائل</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">تفاصيل الرسالة</li>
        <li class="breadcrumb-item "><a href="{{route('tenant.messages')}}">الرسائل</a></li>
        <li class="breadcrumb-item"><a href="{{route('platform.dashboard')}}">الرئيسية</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title --> 
  <section class="section  ">
    <div class="row">
      <div class="col">
        <div class="card px-5" dir="rtl">
          <div class="card-body">
            <h3 class="card-title">الرسالة</h3>
            <section class="section profile">
              <div class="row">
                <div class="col-xl-4">
                  <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                      <img src="{{asset('admin/img/messages-2.jpg')}}" alt="Profile" class="rounded-circle">
                      {{-- <h2>فاطمة بكران</h2> --}}
                      <h3>fatima@gmail.com</h3>
                    </div>
                  </div>
                </div>
                <div class="col-xl-8">
                  <div class="card">
                    <div class="card-body pt-3">
                      <!-- Bordered Tabs -->               
                      <div class="">    
                        <div class=" profile-overview" id="profile-overview">
                          <div class="row">
                            <div class="col-lg-3 col-md-4 label ">الاسم</div>
                            <div class="col-lg-9 col-md-8">فاطمة بكر بكران</div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3 col-md-4 label">الايميل</div>
                            <div class="col-lg-9 col-md-8">fatima@gmail.com</div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3 col-md-4 label">رقم الهاتف</div>
                            <div class="col-lg-9 col-md-8">486-3538 x29071</div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3 col-md-4 label ">العنوان</div>
                            <div class="col-lg-9 col-md-8">كيفية الدفع عن طريق الموقع</div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3 col-md-4 label ">الرسالة</div>
                            <div class="col-lg-9 col-md-8">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error nulla molestiae consectetur porro doloremque quos totam labore neque nihil expedita! Saepe esse tempore omnis obcaecati aperiam quod rerum maxime temporibus. </div>
                          </div>
                          <div class="row">
                            <form action="">
                              <button type="button" class="btn-dasMain" data-bs-toggle="modal" data-bs-target="#basicModal">
                                ارسال رد 
                              </button>
                              <div class="modal fade" id="basicModal" tabindex="-1" dir="rtl">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">ارسال رد</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    
                                    <div class="modal-body">
                                      <div class="row">
                                        <div class="col-12">
                                          <textarea name="replay" id="replay"  rows="10" placeholder="اكتب هنا"></textarea>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                                      <button type="button" class="btn btn-primary">ارسال</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              {{-- <button type="submit" class="btn-dasMain">الرد</button> --}}
                              <a class="btn btn-dark" href="{{route('platform.messages')}}">رجوع</a>
                            </form>
                          </div>
                        </div>
                      </div><!-- End Bordered Tabs -->
                    </div>
                  </div>
                </div>
                {{-- <div class="col-xl-12">
                  <div class="card">
                    <div class="card-body pt-3">
                      <!-- Bordered Tabs -->               
                      <div class="">    
                        <div class=" profile-overview" id="profile-overview">
                          <div class="row">
                            <div class="col-lg-3 col-md-4 label ">الرسالة</div>
                            <div class="col-lg-9 col-md-8">  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error nulla molestiae consectetur porro doloremque quos totam labore neque nihil expedita! Saepe esse tempore omnis obcaecati aperiam quod rerum maxime temporibus.</div>
                          </div>
                        </div>
                      </div><!-- End Bordered Tabs -->
                    </div>
                  </div>
                </div> --}}
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </main>


@endsection