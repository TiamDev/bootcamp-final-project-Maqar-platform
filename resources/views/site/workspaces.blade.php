@extends('layouts.site')
@section('content')
    <main id="main" class="main">


        {{-- <div class="container ">
            <div class="search-box search-box-m">
                <form action="{{ route('site.search') }}" method="post">
                    @csrf
                    <div class="row  justify-content-center align-items-center">
                        <div class="col-3">
                            <div class="form-floating search-form">
                                <select class="form-select period-select" id="floatingSelect" name="workspace_type"
                                    aria-label="Floating label select example">
                                    <option value="1">مكتب خاص </option>
                                    <option value="2">مكتب مشترك </option>
                                    <option value="3"> غرفة إجتماعات </option>
                                </select>
                                <label for="floatingSelect">نوع المساحة:</label>
                            </div>
                        </div>
                        <div class="col-2">
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

                        <div class="col-1">
                            <button type="submit" class=" search-box-btn w-100">بحث</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> --}}
        <!-- search end -->

        <div class="container mt-5" data-aos="fade-up" dir="rtl">
            <div class="row gy-4" data-aos="fade-left">
                <!-- offer card -->
                @foreach ($workspaceOffers as $workspaceOffer)
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card offer-box">
                            <img src="{{ asset('site/img/office/pexels-flo-dahm-699459.jpg') }}" class="img-fluid offer-img"
                                alt="">
                            <div class="pricing-box " dir="ltr">
                                <div class="row ">
                                    <div class="col-2">
                                        <a type="button" class="pt-1">
                                            <i class="bi bi-link fs-4"></i>
                                        </a>
                                        <!-- End Large Modal-->
                                    </div>
                                    <div class="col-10">
                                        <h4 class="pt-2">{{ $workspaceOffer->workspace->title }}</h4>
                                        <h4 class="pt-2">{{ $workspaceOffer->workspace->name }}</h4>

                                    </div>
                                </div>
                                <div class="">
                                    <div class="row">
                                        <div class="">
                                            <p class="m-0">{{ $workspaceOffer->workspace->discription }}</p>
                                            <a href=" {{ route('tenant.home') }}" class=" more-info"><small>لمعرفة
                                                    المزيد
                                                    عن
                                                    المكتب</small></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p> {{ $workspaceOffer->price }} في {{ $workspaceOffer->workspaceDuration->title }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8 text-end">

                                    <form
                                        action="{{ route('offer.details', ['name' => $workspaceOffer->workspace->name]) }}"
                                        method="post">
                                        @csrf
                                        {{-- <input type="hidden" name="duration"
                                            value="{{ $workspaceOffer->workspaceDuration->id }}"> --}}
                                        <input type="hidden" name="id" value="{{ $workspaceOffer->id }}">
                                        <button type="submit">عرض</button>
                                    </form>
                                </div>
                                <div class="col-4 d-flex align-items-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- offer card -->
                @endforeach

            </div>
        </div>
    </main>
@endsection
