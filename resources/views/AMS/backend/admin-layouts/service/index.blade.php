@extends('AMS.backend.admin-layouts.sidebar')

@section('page-title')
Service
@endsection

@section('contents')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header d-flex justify-content-between border-bottom-0">
                        <h3 class="text-maroon">@yield('page-title')</h3>
                        <button class="btn btn-outline-maroon" data-bs-toggle="modal" data-bs-target="#add">Add
                            Service</button>
                        @include('AMS.backend.admin-layouts.service.modal._add')
                    </div>
                    <div class="card-body">

                        <!-- Table with stripped rows -->
                        <table class="table" id="services-table">
                            <thead>
                                <tr>
                                    <th scope="col">Service</th>
                                    <th scope="col">Price</th>

                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>

                                        <td>
                                            {{ $service->service }}
                                        </td>
                                        <td>

                                            <div class="d-flex flex-column justify-content-center px-2 py-1">
                                                <h6 class="mb-0 text-sm">₱{{ number_format($service->amount, 2, '.', ',') }}
                                                </h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center px-2 py-1">
                                                <button class="btn btn-link text-primary mb-0" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#edit{{ $service->id }}">
                                                    <i class="ri-edit-line text-primary me-2" aria-hidden="true""></i>
                                                </button>
                                                <button class="btn btn-link text-danger mb-0" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#delete{{ $service->id }}">
                                                    <i class="ri-delete-bin-6-line text-danger" aria-hidden="true"></i>
                                                </button>


                                                @include('AMS.backend.admin-layouts.service.modal._edit')
                                                @include('AMS.backend.admin-layouts.service.modal._delete')

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
            $('#services-table').DataTable({
                "ordering": false
            });
        });
    </script>
@endsection
