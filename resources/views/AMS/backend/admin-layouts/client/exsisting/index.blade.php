@extends('AMS.backend.admin-layouts.sidebar')

@section('page-title')
    Existing Clients
@endsection

@section('contents')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header d-flex justify-content-between border-bottom-0">
                        <h3 class="text-maroon">@yield('page-title')</h3>
                        {{-- <button class="btn btn-outline-maroon" data-bs-toggle="modal" data-bs-target="#add">Add
                            Client</button>
                        @include('AMS.backend.admin-layouts.record.modal._add') --}}
                    </div>
                    <div class="card-body">

                        <!-- Table with stripped rows -->
                        <table class="table" id="clients-table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Company name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Phone number</th>
                                    <th scope="col">Points</th>
                                    <th scope="col">Records</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>

                                        <td>
                                            {{ $client->name }}
                                        </td>
                                        <td>
                                            {{ $client->email }}
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
                                            <a class="btn btn-link text-info mb-0" data-bs-toggle="modal"
                                                data-bs-target="#points{{ $client->id }}">
                                                <i class="ri-eye-line text-info" aria-hidden="true"></i>
                                            </a>
                                            @include('AMS.backend.admin-layouts.client.exsisting.modal._rewards')
                                        </td>
                                        <td>
                                            <a class="btn btn-link text-warning mb-0"
                                                href="{{ route('admin.client.old.show', ['id' => $client->id]) }}">
                                                <i class="ri-eye-line text-warning" aria-hidden="true"></i>
                                            </a>
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
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
@endsection
