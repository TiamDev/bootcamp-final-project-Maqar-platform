@extends('layouts.platform')
@section('content')
    @php
        $counter = 1;
    @endphp
    <main id="main" class="main">

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">طلبات الانضمام</li>
                    <li class="breadcrumb-item"><a href="{{ route('platform.dashboard') }}">الرئيسية</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard mytable">

            <div class="row">
                <div class="col">
                    <div class="card" dir="rtl">
                        <div class="card-body">
                            <div class="card-title d-flex justify-content-between">
                                <h5 class="w-600">جدول الطلبات</h5>
                                <a href="{{ route('WorkspaceType.add') }}" class="dash-btn das-show"><i
                                        class="bi bi-plus-square"></i></a>
                                </a>
                            </div>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">اسم المزود</th>
                                        <th scope="col">الايميل </th>
                                        <th scope="col"> حالة الطلب</th>
                                        <th scope="col"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($providers as $provider)
                                        <tr>
                                            <td>{{ $counter }}</td>
                                            <td>{{ $provider->title }}</td>
                                            <td>{{ $provider->email }}</td>
                                            <td>
                                                @if ($provider->state == 'step1')
                                                    جديد
                                                @elseif ($provider->state == 'approved')
                                                    تمت الموافقة
                                                @elseif ($provider->state == 'reject')
                                                    تم الرفض
                                                @endif
                                            </td>
                                            <!-- operation -->
                                            <td class="text-center">
                                                <a href="{{ route('platform.joinRequest.view', ['name' => $provider->name]) }}"
                                                    class="dash-btn das-show"><i class="bi bi-link"></i></a>

                                            </td>
                                        </tr>
                                        @php
                                            $counter++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                            @include('common.pagination', ['paginator' => $providers])

                            <!-- End Table with hoverable rows -->

                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main><!-- End #main -->
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.js') }}"></script>

    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
@endsection
