@extends('layouts.platform')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">إضافة حساب</li>
                    <li class="breadcrumb-item "><a href="{{ route('content') }}">حسابات البنكية</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('tenant.dashboard') }}">الرئيسية</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <form class=" g-3" action="{{ route('content.createBankAccount') }}" method="POST">
            @csrf
            <input type="hidden" name="provider_id" value="{{ $provider->id }}">
            <section class="section ">
                <div class="row" dir="rtl">
                    <div class="col-6">
                        <div class="card px-5" dir="rtl">

                            <div class="card-body">
                                <h4 class="card-title">إضافة حساب</h4>
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <!-- Multi Columns Form -->
                                <div class="row">
                                    <div class="col-12">
                                        <label for="inputName5" class="form-label">اسم البنك</label>
                                        <input type="text" class="form-control" id="inputName5"
                                            value="{{ old('name') }}" name="name">
                                        @error('name')
                                            <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="inputName5" class="form-label">الرقم</label>
                                        <input type="text" class="form-control" id="inputName5"
                                            value="{{ old('number') }}" name="number">
                                        @error('number')
                                            <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn-dasMain">حفظ</button>
                                    <a type="reset" href="{{ route('content') }}" class="btn-dasSecond">رجوع</a>
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
