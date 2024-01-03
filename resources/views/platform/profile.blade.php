@extends('layouts.platform')
@section('content')
<main id="main" class="main">

<div class="pagetitle">
  <h1>المستخدمين</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">الملف الشخصي </li>
      <li class="breadcrumb-item ">المستخدمين</li>
      <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section  ">
  <div class="row">
    <div class="col">
      <div class="card px-5" dir="rtl">
        <div class="card-body">
          <h3 class="card-title">الحساب التعريفي</h3>

          <section class="section profile">
            <div class="row">
              <div class="col-xl-4">
      
                <div class="card">
                  <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
      
                    <img src="{{asset('admin/img/messages-2.jpg')}}" alt="Profile" class="rounded-circle">
                    <h2>فاطمة بكر بكران</h2>
                    <h3>مدير المنصة</h3>
                    <div class="social-links mt-2">
                      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
      
              </div>
      
              <div class="col-xl-8">
      
                <div class="card">
                  <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">
      
                      <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">بيانات الحساب</button>
                      </li>
      
                      <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">تعديل بياناتي</button>
                      </li>
      
                      <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">حسابات التواصل الأجتماعي</button>
                      </li>
      
                      <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">تغيير كلمة المرور</button>
                      </li>
      
                    </ul>
                    <div class="tab-content pt-2">
      
                      <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            
                        {{-- <h5 class="card-title">Profile Details</h5> --}}
      
                        <div class="row">
                          <div class="col-lg-3 col-md-4 label ">الاسم</div>
                          <div class="col-lg-9 col-md-8">فاطمة بكر بكران</div>
                        </div>
      
                        <div class="row">
                          <div class="col-lg-3 col-md-4 label">الدور</div>
                          <div class="col-lg-9 col-md-8">مدير المنصة</div>
                        </div>
      
                    
      
                        <div class="row">
                          <div class="col-lg-3 col-md-4 label">المحافظة</div>
                          <div class="col-lg-9 col-md-8">حضرموت </div>
                        </div>
      
                        <div class="row">
                          <div class="col-lg-3 col-md-4 label">العنوان</div>
                          <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                        </div>
      
                        <div class="row">
                          <div class="col-lg-3 col-md-4 label">رقم الهاتف</div>
                          <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                        </div>
      
                        <div class="row">
                          <div class="col-lg-3 col-md-4 label">الايميل</div>
                          <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
                        </div>
      
                      </div>
      
                      <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
      
                        <!-- Profile Edit Form -->
                        <form>
                          <div class="row mb-3">
                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">الصورة الشخصيه</label>
                            <div class="col-md-8 col-lg-9">
                              <img src="{{asset('admin/img/messages-2.jpg')}}" alt="Profile">
                              <div class="pt-2">
                                <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                              </div>
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">الاسم</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="fullName" type="text" class="form-control" id="fullName" value="Kevin Anderson">
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="company" class="col-md-4 col-lg-3 col-form-label">اسم الشركة</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="company" type="text" class="form-control" id="company" value="Lueilwitz, Wisoky and Leuschke">
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="Job" class="col-md-4 col-lg-3 col-form-label">الدور</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="Country" class="col-md-4 col-lg-3 col-form-label">المحافظة</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="country" type="text" class="form-control" id="Country" value="USA">
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="Address" class="col-md-4 col-lg-3 col-form-label">العنوان</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="address" type="text" class="form-control" id="Address" value="A108 Adam Street, New York, NY 535022">
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">رقم الهاتف</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071">
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">الايميل</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com">
                            </div>
                          </div>
      
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">حفظ التغيرات</button>
                          </div>
                        </form><!-- End Profile Edit Form -->
      
                      </div>
      
                      <div class="tab-pane fade pt-3" id="profile-settings">
      
                        <!-- Settings Form -->
                        <form>
      
                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label"></label>
                            
                          <div class="row mb-3">
                            <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                            </div>
                          </div>
      
                          </div>
      
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">حفظ التغيرات</button>
                          </div>
                        </form><!-- End settings Form -->
      
                      </div>
      
                      <div class="tab-pane fade pt-3" id="profile-change-password">
                        <!-- Change Password Form -->
                        <form>
      
                          <div class="row mb-3">
                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">كلمة المرور الحالية</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="password" type="password" class="form-control" id="currentPassword">
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">كلمة المرور الجديدة</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="newpassword" type="password" class="form-control" id="newPassword">
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label"> تأكيد كلمة المرور </label>
                            <div class="col-md-8 col-lg-9">
                              <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                            </div>
                          </div>
      
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">حفظ التغيرات</button>
                          </div>
                        </form><!-- End Change Password Form -->
      
                      </div>
      
                    </div><!-- End Bordered Tabs -->
      
                  </div>
                </div>
      
              </div>
            </div>
          </section>

        </div>
      </div>

</div>
</div>
</main>
@endsection