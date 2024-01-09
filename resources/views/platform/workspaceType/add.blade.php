@extends('layouts.platform')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>اضافة</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">اضافة</li>
                    <li class="breadcrumb-item "><a href="{{ route('WorkspaceType') }}">انواع المساحات</a> </li>
                    <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section  ">
            <div class="row">
                <div class="col">
                    <div class="card px-5" dir="rtl">
                        <div class="card-body">
                            <h3 class="card-title">اضافة
                                نوع المساحة
                            </h3>

                            <!-- Multi Columns Form -->
                            <form class=" g-3" action="{{ route('workspaceType.create') }}" method="post">
                                @csrf
                                <div class="row">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    {{-- @if ($message)
                                        <div class="alert alert-success">
                                            {{ $message }}
                                        </div>
                                    @endif --}}
                                    <div class="col-md-12">
                                        <label for="inputName5" class="form-label">الاسم بالانجليزي</label>
                                        <input type="text" class="form-control" id="inputName5" name="name"
                                            placeholder="example_one">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputName5" class="form-label">الاسم بالعربي</label>
                                        <input type="text" class="form-control" id="inputName5" name="label">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputName5" class="form-label">الوصف</label>
                                        <input type="text" class="form-control" id="inputName5" name="description">
                                    </div>
                                </div>
                                <button type="submit" class="btn-dasMain">حفظ التغييرات</button>
                            </form><!-- End Multi Columns Form -->

                        </div>
                    </div>

                </div>
            </div>
    </main>
@endsection
