@extends('layouts.platform')
@section('content')
    @php
        $counter = 1;
    @endphp
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>انواع المساحات</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">انواع المساحات</li>
                    <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard mytable">

            <div class="row">
                <div class="col">
                    <div class="card" dir="rtl">
                        <div class="card-body">
                            <div class="card-title d-flex justify-content-between">
                                <h5 class="w-600">جدول المساحات</h5>
                                <a href="{{ route('WorkspaceType.add') }}" class="dash-btn das-show"><i
                                        class="bi bi-plus-square"></i></a>
                                </a>

                            </div>

                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">اسم المساحة</th>
                                        <th scope="col"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($types as $type)
                                        <tr>
                                            <td>{{ $counter }}</td>
                                            <td>{{ $type->label }}</td>
                                            <!-- operation -->
                                            <td class="text-center">
                                                <a href="{{ route('WorkspaceType.view', ['name' => $type->name]) }}"
                                                    class="dash-btn das-show"><i class="bi bi-link"></i></a>
                                                <a href="{{ route('WorkspaceType.edit', ['name' => $type->name]) }}"
                                                    class="dash-btn das-edit"><i class="bi bi-pencil-square"></i></a>
                                                <a href="#" class="dash-btn das-delete" data-toggle="modal"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal_{{ $type->id }}">
                                                    <i class="bi bi-x-octagon"></i>
                                                </a>

                                                <div class="modal fade" id="exampleModal_{{ $type->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel_{{ $type->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5"
                                                                    id="exampleModalLabel_{{ $type->id }}">
                                                                    حذف {{ $type->label }}
                                                                </h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Use the message ID to display relevant message content -->
                                                                <p>هل انت متاكد من حذف {{ $type->label }}؟</p>
                                                            </div>
                                                            <div class="modal-footer justify-content-start">
                                                                <form method="post"
                                                                    action="{{ route('WorkspaceType.delete', ['id' => $type->id]) }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn-dasMain">حذف</button>
                                                                    <button type="button" class="btn-dasSecond"
                                                                        data-bs-dismiss="modal">الغاء</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </td>
                                        </tr>
                                        @php
                                            $counter++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
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
