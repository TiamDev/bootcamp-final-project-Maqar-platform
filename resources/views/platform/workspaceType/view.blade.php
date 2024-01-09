@extends('layouts.platform')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>{{ $type->label }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">{{ $type->label }}</li>
                    <li class="breadcrumb-item "><a href="index.html">الرئيسية</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section  ">
            <div class="card px-5" dir="rtl">
                <div class='card-title'>
                    <h3>{{ $type->label }}</h3>
                </div>
                <div class='card-body'>
                    <div class=" profile-overview" id="profile-overview">
                        <div class="row mb-4">
                            <div class="col-1 mylable">الاسم</div>
                            <div class="col-10">
                                <p>{{ $type->label }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-1 mylable">الوصف</div>
                            <div class="col-10">
                                <p>{{ $type->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <a href="{{ route('WorkspaceType') }}" class="btn-dasMain ">رجوع</a>
                </div>
            </div>
        </section>
    </main>
@endsection
