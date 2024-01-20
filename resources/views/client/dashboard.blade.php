@extends('layouts.platform')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">لوحة التحكم </li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        @php
            $user = auth()->user();
            $count = 1;
        @endphp

        <section class="dash-section">

            <div class=" dash-box ">
                <div class="row">
                    <div class="col-8 my-auto">
                        <p class="mainColor pe-3 fs-4">اهلا <span>{{ $user->name }} </span></p>
                        <h1>دعنا نجد مساحة العمل المناسبة لك .</h1>
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('site/img/ill/3d-casual-life-online-video-conference-in-office.png') }}"
                            class="" style="margin-top:-60px ;width:100%" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- search start -->
        <div class="px-2">
            <div class="container " dir="rtl">
                <div class="search-box search-box-m">
                    <form action="{{ route('offers') }}" method="post">
                        @csrf
                        <div class="row  justify-content-center align-items-center">
                            <div class="col-lg-3 col-md-3">
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
                            <div class="col-lg-2 col-md-2">
                                <div class="form-floating">
                                    <select class="form-select" id="workspaceDurationSelect" aria-label="State"
                                        name="workspaceDuration_id">
                                        @foreach ($workspaceDurations as $workspaceDuration)
                                            <option value="{{ $workspaceDuration->id }}">{{ $workspaceDuration->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label for="floatingSelect-d">:المدة</label>
                                </div>
                                @error('workspaceType_id')
                                    <p></p>
                                @enderror
                            </div>
                            <div class="col-lg-3 col-md-3">
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
                            <div class="col-lg-3 col-md-3">
                                <div class="form-floating">
                                    <select class="form-select" id="directorateSelect" aria-label="State"
                                        name="directorate_id">
                                    </select>
                                    <label for="floatingSelect-d">المديرية</label>
                                </div>

                            </div>
                            <div class="col-lg-1 col-md-1">
                                <button type="submit" class=" search-box-btn w-100">بحث</button>
                            </div>
                        </div>
                        @error('directorate_id')
                            <p class="error-message ps-5 ms-5 text-start">يجب اختيار المديريه</p>
                        @enderror
                    </form>
                </div>
            </div>
        </div>

        <!-- search end -->
        <section>
            <div class="main-container">
                <div class="cards" dir="rtl">
                    @foreach ($workspaceTypes as $workspaceType)
                        <div class="card-home card-{{ $count }}">
                            {{-- <div class="card__icon"><i class="bi bi-grid"></i></div>
                            <p class="card__exit"><i class="bi bi-x"></i></p> --}}
                            <h2 class="card__title">{{ $workspaceType->label }}
                            </h2>
                            <p class="card__apply">{{ $workspaceType->description }} </p>

                            {{-- <p class="card__apply">
                                <a class="card__link" href="#">احجز الان <i class="fas fa-arrow-right"></i></a>
                            </p> --}}
                        </div>
                        @php $count++ @endphp
                    @endforeach

                </div>
            </div>
        </section>


    </main>
    {{-- <main id="main" class="main"> --}}
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
