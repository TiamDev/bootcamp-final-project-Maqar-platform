@extends('layouts.platform')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">تعديل مساحة</li>
                    <li class="breadcrumb-item "><a href="{{ route('workspaces') }}">المساحات</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('tenant.dashboard') }}">الرئيسية</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section  ">
            <div class="row">
                <div class="col-5">
                    <div class="card px-5" dir="rtl">
                        <div class="card-body">
                            <div class="img-card">
                                <div class="top ">
                                    <p> معرض الصور</p>
                                    {{-- <button type="button">upload</button> --}}
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
                </div>
                <div class="col-7">
                    <div class="card px-5" dir="rtl">
                        <div class="card-body">
                            <h4 class="card-title">تعديل البيانات</h4>

                            <!-- Multi Columns Form -->
                            <form class="row g-3" action="{{ route('workspaces.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $Workspace->id }}">
                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label" name="title">الاسم</label>
                                    <input type="text" class="form-control" id="inputName5"
                                        value="{{ $Workspace->title }}">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputEmail5" class="form-label">الاسم بالانجليزي</label>
                                    <input type="text" class="form-control" id="inputEmail5" name="name"
                                        value="{{ $Workspace->name }}">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputState" class="form-label">النوع</label>
                                    <select id="inputState" class="form-select" name="WorkspaceType">
                                        @foreach ($WorkspaceTypes as $WorkspaceType)
                                            <option
                                                {{ $WorkspaceType->label === $Workspace->workspaceType->label ? 'selected' : '' }}>
                                                {{ $WorkspaceType->label }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress5" class="form-label">عدد الافراد</label>
                                    <input type="text" class="form-control" id="inputAddres5s"
                                        value="{{ $Workspace->maxPeople }}" name="maxPeople" placeholder="">
                                </div>
                                <div class="col-12 booking-duration">
                                    <label for="inputAddress5" class="form-label">فترات حجز المساحة</label>
                                    @foreach ($WorkspaceDuration as $duration)
                                        <div class="input-group mb-3" dir="ltr">
                                            <span class="input-group-text" id="basic-addon1">ريال </span>
                                            <input type="text" class="form-control price" disabled
                                                name="{{ $duration->name }}-input" placeholder=" سعر المساحة  "
                                                aria-label="Recipient's username" aria-describedby="basic-addon1"
                                                value="{{ $Workspace->workspaceOffers->where('workspaceDuration_id', $duration->id)->first()->price ?? '' }}"
                                                fdprocessedid="agqgdm">
                                            <div class="input-group-text" id="basic-addon1"
                                                name="{{ $duration->name }}-check">
                                                <label class="form-check-label" for="{{ $duration->name }}">
                                                    {{ $duration->title }}
                                                </label>
                                                <input class="form-check-input ms-1" type="checkbox"
                                                    id="{{ $duration->name }}"
                                                    {{ $Workspace->workspaceOffers->where('workspaceDuration_id', $duration->id)->isNotEmpty() ? 'checked' : '' }}>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn-dasMain">تعديل</button>
                                    <a type="reset" href="{{ route('workspaces') }}" class="btn-dasSecond">رجوع</a>
                                </div>
                            </form><!-- End Multi Columns Form -->

                        </div>
                    </div>

                </div>

            </div>
        </section>
    </main>
    <script>
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
                if (files.every(e => e.name !== file[i].name)) files.push(file[i])

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

            // Check if checkbox should be checked and field should be enabled
            const isChecked =
                {{ $Workspace->workspaceOffers->where('workspaceDuration_id', $duration->id)->isNotEmpty() ? 'true' : 'false' }};
            if (isChecked) {
                checkbox.checked = true;
                inputTexts[index].disabled = false;
            }
        });
    </script>
@endsection
