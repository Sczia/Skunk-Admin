@extends('AMS.backend.admin-layouts.sidebar')

@section('page-title')
    Dashboard
@endsection

@section('contents')
    <section class="section dashboard">
        <!-- Left side columns -->

        <div class="row">
            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item"
                                    href="{{ route('admin.dashboard.index', ['type' => 'today']) }}">Today</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('admin.dashboard.index', ['type' => 'weekly']) }}">Weekly</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('admin.dashboard.index', ['type' => 'monthly']) }}">Monthly</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Expenses <span>| {{ $type }}</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-cart"></i>
                            </div>
                            <div class="ps-3">
                                <h6>₱{{ number_format($totalExpenses, 2, '.', ',') }}</h6>
                                <span class="text-success small pt-1 fw-bold"></span> <span
                                    class="text-muted small pt-2 ps-1"></span>

                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Sales Card -->
        </div>

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header d-flex justify-content-between border-bottom-0">
                        <h3 class="text-maroon">Latest Records</h3>
                    </div>
                    <div class="card-body">

                        <!-- Table with stripped rows -->
                        <table class="table" id="clients-table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Car</th>
                                    <th scope="col">Service</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($latestRecords as $record)
                                    <tr>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <span>{{ $record->client->name }}</span>
                                                <small class="text-secondary">{{ $record->client->email }}</small>
                                            </div>
                                        </td>
                                        <td>
                                            {{ $record->car->vehicle }}, {{ $record->car->model }}
                                        </td>
                                        <td>
                                            {{ $record->service->service }}
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
