@extends('layouts.platform')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">الرسائل</li>
                    <li class="breadcrumb-item"><a href="{{ route('platform.dashboard') }}">الرئيسية</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        @php
            $counter = 1;
        @endphp
        <section class="section dashboard mytable">
            <div class="row">
                <div class="col">
                    <div class="card" dir="rtl">
                        <div class="card-body">
                            <div class="card-title d-flex justify-content-between">
                                <h5 class="w-600">جدول الرسائل</h5>
                            </div>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <!-- Table with hoverable rows -->
                            <table class="table text-nowrap mb-0 align-middle">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class=" ">
                                            <h6 class="fw-semibold mb-0">#</h6>
                                        </th>
                                        <th class=" ">
                                            <h6 class="fw-semibold mb-0">الايميل</h6>
                                        </th>
                                        <th class=" ">
                                            <h6 class="fw-semibold mb-0">العنوان</h6>
                                        </th>
                                        <th class=" ">
                                            <h6 class="fw-semibold mb-0"></h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($Messages->count() == 0)
                                        <tr>
                                            <td colspan="4">
                                                <p style="text-align: center">لايوجد رسايل</p>
                                            </td>
                                        </tr>
                                    @endif
                                    @foreach ($Messages as $Message)
                                        <tr>
                                            <td class="">
                                                <h6 class="fw-bold mb-0">{{ $counter }}</h6>
                                            </td>
                                            <td class="">
                                                <h6 class="fw-bolder mb-1">{{ $Message->email }}</h6>
                                            </td>
                                            <td class="">
                                                <p class="mb-0 ">{{ $Message->subject }}</p>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('messages.view', ['id' => $Message->id]) }}"
                                                    class="crud-icon"><i class="bi bi-link"></i></a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal_{{ $Message->id }}" class="crud-icon"><i
                                                        class="bi bi-trash3">
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                        <div dir="rtl" class="modal fade" id="exampleModal_{{ $Message->id }}"
                                            tabindex="-1" aria-labelledby="exampleModalLabel_{{ $Message->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5"
                                                            id="exampleModalLabel_{{ $Message->id }}">حذف رسالة</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Use the message ID to display relevant message content -->
                                                        <p>هل انت متاكد ؟</p>
                                                    </div>
                                                    <div class="modal-footer justify-content-start">
                                                        <form method="post"
                                                            action="{{ route('messages.destroy', ['id' => $Message->id]) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-primary">حذف</button>
                                                            <button type="button" class="btn btn-primary"
                                                                data-bs-dismiss="modal">اغلاق</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @php
                                            $counter++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        @include('common.pagination', ['paginator' => $Messages])
    </main><!-- End #main -->
@endsection
