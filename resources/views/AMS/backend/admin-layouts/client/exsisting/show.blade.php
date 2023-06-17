@extends('AMS.backend.admin-layouts.sidebar')

@section('page-title')
    {{ $client->name }}`s Records
@endsection

@section('contents')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header d-flex justify-content-between border-bottom-0">
                        <h3 class="text-maroon">@yield('page-title')</h3>
                        <a href="{{ route('admin.client.old.index') }}" class="btn btn-outline-maroon">
                            <i class="ri-arrow-go-back-line"></i>
                            Back
                        </a>
                    </div>
                    <div class="card-body">

                        <!-- Table with stripped rows -->
                        <table class="table" id="records-table">
                            <thead>
                                <tr>
                                    <th scope="col">Car Info.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Service</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($client->records as $record)
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span>{{ $record->car->vehicle }}</span>
                                                <span>{{ $record->car->model }}</span>
                                                <span>{{ $record->car->plate_number }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span>{{ $record->service->name }}</span>
                                                <span>{{ $record->size->size }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            {{ $record->service->service }}
                                        </td>
                                        <td>
                                            {{ date('F d, Y', strtotime($record->created_at)) }}
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
