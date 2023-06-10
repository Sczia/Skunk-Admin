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

                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expence as $expence)
                                    <tr>

                                        <td>

                                        </td>
                                        <td>

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


                                                @include('AMS.backend.admin-layouts.client.modal._edit')
                                                @include('AMS.backend.admin-layouts.client.modal._delete')

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
            $('#expenses-table').DataTable({
                "ordering": false
            });
        });
    </script>
@endsection
