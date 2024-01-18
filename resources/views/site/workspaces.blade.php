@extends('layouts.site')
@section('content')
    <main id="main" class="main my-mt">
        <div class="container mt-5" data-aos="fade-up" dir="rtl">
            <div class="row mb-3  align-items-center">
                <div class="col-lg-8">
                    <h3 class="">نتائج البحث</h3>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <div class="input-group mb-3" dir="ltr">
                        <span class="input-group-text" id="basic-addon1"> <i class="bi bi-person-standing mainColor"></i>
                            </i>
                        </span>
                        <input type="search" id="filterPeople" class="form-control text-end" placeholder="عدد الأشخاص"
                            min="1" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <div class="input-group mb-3" dir="ltr">
                        <span class="input-group-text" id="basic-addon1"> <i class="bi bi-cash mainColor"></i>
                            </i>
                        </span>
                        <input type="search" id="filterPrice" class="form-control text-end" placeholder="السعر كحد اقصى "
                            min="1" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>

            </div>
            <div class="row gy-4" data-aos="fade-left">
                <!-- offer card -->
                @if (!empty($workspaceImages))
                    @foreach ($workspaceImages as $workspaceOffer)
                        <div class="col-lg-3 col-md-6 card-offices-container" data-aos="zoom-in" data-aos-delay="100">
                            <div class="card-offices offer-box">
                                <img src="{{ asset('storage/images/' . $workspaceOffer->image) }}"
                                    class="img-fluid offer-img" alt="">
                                <div class="pricing-box " dir="ltr">
                                    <div class="row ">
                                        <div class="col-2">
                                            {{-- @if ($workspaceOffer->reservations()->whereDate('start_date', '<=', $currentDate)->whereDate('end_date', '>=', $currentDate)->exists())
                                                <span class="badge rounded-pill text-bg-success">محجوزه حاليا</span>
                                            @else
                                                <span class="badge rounded-pill text-bg-success">غير محجوزة</span>
                                            @endif --}}
                                            <!-- End Large Modal-->
                                        </div>
                                        <div class="col-12 ">

                                            <h4 class="text-center">{{ $workspaceOffer->workspace->title }}</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-10">
                                            <p class="m-0 p_offer"><a
                                                    href="{{ route('tenant.home', ['id' => $workspaceOffer->workspace->provider->id]) }}">{{ $workspaceOffer->workspace->provider->title }}</a>
                                            </p>
                                        </div>
                                        <div class="col-2">
                                            <i class="bi bi-geo-fill icon_offer"></i>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-10">
                                            <p class="m-0 p_offer num_of_people">{{ $workspaceOffer->workspace->maxPeople }}
                                            </p>
                                        </div>
                                        <div class="col-2">
                                            <i class="bi bi-person-standing icon_offer"></i>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <small>
                                                متر مربع
                                            </small>
                                        </div>
                                        <div class="col-2">
                                            <p class="m-0 p_offer">{{ $workspaceOffer->workspace->area }} </p>
                                        </div>
                                        <div class="col-2">
                                            <i class="bi bi-bounding-box-circles icon_offer"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5 text-end">
                                        <form
                                            action="{{ route('offer.viewDetails', ['name' => $workspaceOffer->workspace->name]) }}"
                                            method="get">
                                            @csrf
                                            <input type="hidden" name="id"
                                                value="{{ $workspaceOffer->workspaceoffer->id }}">
                                            <button type="submit" class="btn-siteMain">عرض</button>
                                        </form>
                                    </div>
                                    <div class="col-7 d-flex align-items-center">
                                        <p class="price-element-h5 w-100 text-center"> <span
                                                class="price-element ">{{ $workspaceOffer->workspaceoffer->price }}
                                                {{ $workspaceOffer->workspace->provider->currency }}</span>
                                            في
                                            {{ $workspaceOffer->workspaceoffer->workspaceDuration->title }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- offer card -->
                    @endforeach
                @else
                    <div class="container-isempty">
                        <div>
                            <img src="{{ asset('site/img/ill/3d-casual-life-office-composition.png') }}" alt="صورة">
                            <p class="text-center">
                                لا يوجد نتائج

                            </p>
                        </div>

                    </div>
                @endif

            </div>
        </div>
    </main>
    <script>
        const filterInput = document.getElementById('filterPeople');
        const filterPriceInput = document.getElementById('filterPrice');

        filterInput.addEventListener('input', function() {
            const filterValue = parseInt(filterInput.value);
            console.log(filterValue);
            const cards = document.querySelectorAll('.card-offices-container');

            cards.forEach(function(card) {
                const numPeopleElement = card.querySelector('.num_of_people');
                if (numPeopleElement) {
                    const numPeople = parseInt(numPeopleElement.textContent);

                    if (isNaN(filterValue) || numPeople >= filterValue) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                }
            });
        });
        filterPriceInput.addEventListener('input', applyPriceFilter);

        function applyPriceFilter() {
            const filterPriceValue = parseInt(filterPriceInput.value);
            const cards = document.querySelectorAll('.card-offices-container');

            cards.forEach(function(card) {
                const priceElement = card.querySelector('.price-element');

                if (priceElement) {
                    const price = parseInt(priceElement.textContent);

                    if (isNaN(filterPriceValue) || price <= filterPriceValue) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                }
            });
        }
    </script>
@endsection
