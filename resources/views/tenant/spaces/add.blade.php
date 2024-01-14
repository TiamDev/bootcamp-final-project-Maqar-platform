@extends('layouts.platform')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">إضافة مساحة</li>
                    <li class="breadcrumb-item "><a href="{{ route('workspaces') }}">المساحات</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('tenant.dashboard') }}">الرئيسية</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <form class=" g-3" action="{{ route('workspaces.create') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <input type="hidden" name="provider_id" value="{{ $provider->id }}">
            <section class="section  ">
                <div class="row">
                    <div class="col">
                        <div class="card px-5" dir="rtl">
                            <div class="card-body">
                                <h4 class="card-title">إضافة بيانات المساحة</h4>

                                <!-- Multi Columns Form -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputName5" class="form-label">الاسم</label>
                                        <input type="text" class="form-control" id="inputName5" value=""
                                            name="title" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail5" class="form-label">الاسم بالانجليزي</label>
                                        <input type="text" class="form-control" id="inputEmail5" name="name" required
                                            value="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="inputEmail5" class="form-label">وصف</label>
                                    <input type="text" class="form-control" id="inputEmail5" name="description" required
                                        value="">
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">النوع</label>
                                        <select id="inputState" class="form-select" name="workspaceType_id">
                                            @foreach ($WorkspaceTypes as $WorkspaceType)
                                                <option value="{{ $WorkspaceType->id }}">
                                                    {{ $WorkspaceType->label }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="inputAddress5" class="form-label">عدد الافراد</label>
                                        <input type="number" min="1" class="form-control" id="inputAddres5s"
                                            value="" name="maxPeople" placeholder="">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="inputAddress5" class="form-label">المساحة</label>
                                        <input type="number" class="form-control" id="inputAddres5s" value=""
                                            name="area" placeholder="بالمتر">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-cm-12 booking-duration">
                                    <label for="inputAddress5" class="form-label">فترات حجز المساحة</label>
                                    @foreach ($WorkspaceDuration as $duration)
                                        <div class="input-group mb-3" dir="ltr">
                                            <span class="input-group-text" id="basic-addon1">ريال </span>
                                            <input type="text" class="form-control price" disabled
                                                name="{{ $duration->name }}-input" placeholder=" سعر المساحة  "
                                                aria-label="Recipient's username" aria-describedby="basic-addon1"
                                                value="" fdprocessedid="agqgdm">
                                            <div class="input-group-text" id="basic-addon1">
                                                <label class="form-check-label" for="{{ $duration->name }}">
                                                    {{ $duration->title }}
                                                </label>
                                                <input class="form-check-input ms-1" type="checkbox"
                                                    id="{{ $duration->name }}" name="{{ $duration->name }}-check">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12">
                                    <label for="inputImage" class="form-label">تحميل الصور</label>
                                    <input type="file" class="form-control" id="inputImage" name="image[]" multiple>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn-dasMain">حفظ</button>
                                    <a type="reset" href="{{ route('workspaces') }}" class="btn-dasSecond">رجوع</a>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </section>
        </form><!-- End Multi Columns Form -->

    </main>
    <script>
        const checkboxes = document.querySelectorAll('.form-check-input');
        const inputTexts = document.querySelectorAll('.price');

        checkboxes.forEach((checkbox, index) => {
            checkbox.addEventListener('change', function() {
                inputTexts[index].disabled = !this.checked;
            });
        });
    </script>
@endsection
