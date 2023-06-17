@extends('AMS.backend.admin-layouts.sidebar')

@section('page-title')
    Expense
@endsection

@section('contents')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header d-flex justify-content-between border-bottom-0">
                        <h3 class="text-maroon">@yield('page-title')</h3>
                        <button class="btn btn-outline-maroon" data-bs-toggle="modal" data-bs-target="#add">Add
                            Expense</button>
                        @include('AMS.backend.admin-layouts.expense.modal._add')
                    </div>
                    <div class="card-body">

                        <!-- Table with stripped rows -->
                        <table class="table" id="services-table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>

                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expenses as $expense)
                                    <tr>

                                        <td>
                                            {{ $expense->name }}
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center px-2 py-1">
                                                <h6 class="mb-0 text-sm">₱{{ number_format($expense->price, 2, '.', ',') }}
                                                </h6>
                                            </div>
                                        </td>
                                        <td>
                                            {{ date('F d, Y', strtotime($expense->created_at)) }}
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center px-2 py-1">
                                                <button class="btn btn-link text-primary mb-0" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#edit{{ $expense->id }}">
                                                    <i class="ri-edit-line text-primary me-2" aria-hidden="true""></i>
                                                </button>
                                                <button class="btn btn-link text-danger mb-0" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#delete{{ $expense->id }}">
                                                    <i class="ri-delete-bin-6-line text-danger" aria-hidden="true"></i>
                                                </button>


                                                @include('AMS.backend.admin-layouts.expense.modal._edit')
                                                @include('AMS.backend.admin-layouts.expense.modal._delete')

                                            </div>
                                        </td>
                                    </tr>
                                    @php
                                        $total = 0;
                                        $total += $expense->price;
                                    @endphp
                                @endforeach
                                <tr>
                                    <td colspan="4">
                                        <span class="text-danger">Total: ₱{{ number_format($total, 2, '.', ',') }}</span>
                                    </td>
                                </tr>
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
            $('#expenses-table').DataTable({
                "ordering": false
            });
        });
    </script>
@endsection
