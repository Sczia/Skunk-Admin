@extends('AMS.backend.admin-layouts.sidebar')

@section('page-title')
    New Client
@endsection

@section('contents')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header d-flex justify-content-between border-bottom-0">
                        <h3 class="text-maroon">@yield('page-title')</h3>
                    </div>
                    <div class="card-body">

                        <!-- Table with stripped rows -->
                        <table class="table" id="clients-table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>

                                    <th scope="col">Company name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Phone number</th>
                                    <th scope="col" class="text-center">More info</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <span>{{ $client->name }}</span>
                                                <small class="text-secondary">{{ $client->email }}</small>
                                            </div>
                                        </td>

                                        <td>
                                            {{ $client->company }}
                                        </td>
                                        <td>
                                            {{ $client->address }}
                                        </td>
                                        <td>
                                            {{ $client->number }}
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center px-2 py-1">
                                                {{--    <button class="btn btn-link text-primary mb-0" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#edit{{ $client->id }}">
                                                    <i class="ri-edit-line text-primary me-2" aria-hidden="true""></i>
                                                </button> --}}
                                                <button class="btn btn-link text-warning mb-0" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#show{{ $client->id }}">
                                                    <i class="ri-eye-line text-warning" aria-hidden="true"></i>
                                                </button>



                                                {{--
                                                @include('AMS.backend.admin-layouts.client.modal._edit') --}}
                                                @include('AMS.backend.admin-layouts.client.new.modal._delete')
                                                @include('AMS.backend.admin-layouts.client.new.modal._show')
                                                @include('AMS.backend.admin-layouts.client.new.modal._confirm')

                                            </div>


                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center px-2 py-1">
                                                <button class="btn btn-link text-success mb-0" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#confirm{{ $client->id }}">
                                                    <i class="ri-check-line text-success" aria-hidden="true"></i>
                                                </button>
                                                <button class="btn btn-link text-danger mb-0" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#delete{{ $client->id }}">
                                                    <i class="ri-delete-bin-6-line text-danger" aria-hidden="true"></i>
                                                </button>


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
            $('#clients-table').DataTable({
                "ordering": false
            });
        });
    </script>
@endsection
