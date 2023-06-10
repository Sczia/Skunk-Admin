@extends('AMS.backend.admin-layouts.sidebar')

@section('page-title')
    Client Records
@endsection

@section('contents')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header d-flex justify-content-between border-bottom-0">
                        <h3 class="text-maroon">@yield('page-title')</h3>
                        <button class="btn btn-outline-maroon" data-bs-toggle="modal" data-bs-target="#add">Add
                            Client</button>
                        @include('AMS.backend.admin-layouts.record.modal._add')
                    </div>
                    <div class="card-body">

                        <!-- Table with stripped rows -->
                        <table class="table" id="records-table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Company name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Phone number</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($records as $record)
                                    <tr>

                                        <td>
                                            {{ $clients->records->name }}
                                        </td>
                                        <td>
                                            {{ $clients->email }}
                                        </td>
                                        <td>
                                            {{ $clients->company }}
                                        </td>
                                        <td>
                                            {{ $clients->address }}
                                        </td>
                                        <td>
                                            {{ $clients->number }}
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center px-2 py-1">
                                                <button class="btn btn-link text-primary mb-0" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#edit{{ $record->id }}">
                                                    <i class="ri-edit-line text-primary me-2" aria-hidden="true""></i>
                                                </button>
                                                <button class="btn btn-link text-danger mb-0" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#delete{{ $record->id }}">
                                                    <i class="ri-delete-bin-6-line text-danger" aria-hidden="true"></i>
                                                </button>
                                                <button class="btn btn-link text-danger mb-0" type="button"
                                                data-bs-toggle="modal" data-bs-target="#show{{ $record->id }}">
                                                <i class="i-eye-line-6-line text-warning" aria-hidden="true"></i>
                                                </button>

                                                @include('AMS.backend.admin-layouts.record.modal._edit')
                                                @include('AMS.backend.admin-layouts.record.modal._delete')
                                                @include('AMS.backend.admin-layouts.record.modal._show')

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#records-table').DataTable({
                "ordering": false
            });
        });
    </script>
@endsection
