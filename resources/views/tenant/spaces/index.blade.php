@extends('layouts.platform')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">المساحات</li>
                    <li class="breadcrumb-item"><a href="{{ route('tenant') }}">لوحة التحكم</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="card px-3 mx-4"dir="rtl">
            <div class=" d-flex justify-content-between">
                <h4 class="w-600">مساحات مقر {{ $provider->title }}</h4>
                <a href="{{ route('workspaces.add') }}" class="dash-btn das-show"><i class="bi bi-plus-square fs-4"></i></a>
                </a>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success mx-4" dir="rtl">
                {{ session('success') }}
            </div>
        @endif
        <div class="row" dir="rtl">
            @foreach ($workspaceImages as $space)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="mycontainerx">
                        <div class="mycard2">
                            <div class="card__border2">
                                <img src="{{ asset('storage/images/' . $space->image) }}" alt="card image"
                                    class="card__img2">
                            </div>
                            {{-- bi-plus-circle --}}
                            <h3 class="card__name">{{ $space->workspace->title }}</h3>
                            <span class="card__profession">{{ $space->workspace->workspaceType->label }}<i
                                    class="bi bi-pin-map-fill"></i></span>
                            <div class="card__social" id="card-social">
                                <div class="card__social-control">
                                    <!-- Card social -->
                                    <ul class="card__social-list2" dir="rtl">
                                        <a href="{{ route('workspaces.view', ['name' => $space->workspace->name]) }}"
                                            class="card__social-link  "data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="تفاصيل المكتب">
                                            <i class="bi bi-link" style="  margin-bottom: -3px; "></i>
                                        </a>
                                        <a href="{{ route('workspaces.edit', ['name' => $space->workspace->name]) }}"
                                            class="card__social-link" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="تعديل المكتب">
                                            <i class="bi bi-pencil-square "style="margin-bottom: -3px; "></i>
                                        </a>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </main>
@endsection
