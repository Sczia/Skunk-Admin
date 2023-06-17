@extends('AMS.backend.layouts.master')

@section('sidebar')
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.dashboard.index') ? 'active' : '' }}"
                    href="{{ route('admin.dashboard.index') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            {{--           <li class="nav-item">
                <a class="nav-link collapsed {{ Route::is('admin.academic.*') ? 'active' : '' }}" data-bs-target="#clients"
                    data-bs-toggle="collapse" href="#">
                    <i class="ri-book-open-line"></i>
                    <span>clients</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="clients" class="nav-content collapse p-2" data-bs-parent="#sidebar-nav">
                    <li class="{{ Route::is('admin.academic.course.index') ? 'collapse-active' : '' }}">
                        <a href="{{ route('admin.academic.course.index') }}">
                            <i class="bi bi-circle"></i>
                            <span>Course</span>
                        </a>
                    </li>
                    <li class="{{ Route::is('admin.academic.schedule.index') ? 'collapse-active' : '' }}">
                        <a href="{{ route('admin.academic.schedule.index') }}">
                            <i class="bi bi-circle"></i>
                            <span>Schedule</span>
                        </a>
                    </li>
                    <li class="{{ Route::is('admin.academic.section.index') ? 'collapse-active' : '' }}">
                        <a href="{{ route('admin.academic.section.index') }}">
                            <i class="bi bi-circle"></i>
                            <span>Section</span>
                        </a>
                    </li>
                    <li class="{{ Route::is('admin.academic.subject.index') ? 'collapse-active' : '' }}">
                        <a href="{{ route('admin.academic.subject.index') }}">
                            <i class="bi bi-circle"></i>
                            <span>Subject</span>
                        </a>
                    </li>

                </ul>

            </li> --}}


            {{--   <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.computer.index') ? 'active' : '' }}"
                    href="{{ route('admin.computer.index') }}">
                    <i class="ri-computer-line"></i><span>Computers</span>
                </a>

            </li> --}}
            <!-- End Components Nav -->

            {{--  <li class="nav-item">
                <a class="nav-link "  href="">
                    <i class="ri-history-line"></i><span>History</span>
                </a>

            </li> --}}
            <!-- End Forms Nav -->




            {{-- <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#reports" data-bs-toggle="collapse" href="#">
                    <i class="ri-booklet-line"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="reports" class="nav-content collapse p-2" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('admin.report.attendance.index') }}">
                            <i class="bi bi-circle"></i>
                            <span>Attendance Log</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.report.schedule.request.index') }}">
                            <i class="bi bi-circle"></i>
                            <span>Requests</span>
                        </a>
                    </li>

                </ul>

            </li> --}}
            <!-- End Charts Nav -->


            {{--  <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#users" data-bs-toggle="collapse" href="#">
                    <i class="ri-user-settings-line"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="users" class="nav-content collapse p-2" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="">
                            <i class="bi bi-circle"></i><span>Admin</span>
                        </a>
                    </li>
                     <li>
                        <a href="">
                            <i class="bi bi-circle"></i><span>Student</span>
                        </a>
                    </li> -

                </ul>

            </li> --}}
            <!-- End Icons Nav -->



            <li class="nav-item">
                <a class="nav-link collapsed {{ Route::is('admin.client.*') ? 'active' : '' }}" data-bs-target="#clients"
                    data-bs-toggle="collapse" href="#">
                    <i class="ri-book-open-line"></i>
                    <span>Clients</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="clients" class="nav-content collapse p-2" data-bs-parent="#sidebar-nav">
                    <li class="{{ Route::is('admin.client.new.index') ? 'collapse-active' : '' }}">
                        <a href="{{ route('admin.client.new.index') }}">
                            <i class="bi bi-circle"></i>
                            <span>New Client</span>
                        </a>
                    </li>
                    <li class="{{ Route::is('admin.client.old.index') ? 'collapse-active' : '' }}">
                        <a href="{{ route('admin.client.old.index') }}">
                            <i class="bi bi-circle"></i>
                            <span>Existing Client</span>
                        </a>
                    </li>
                    <li class="{{ Route::is('admin.client.new.create') ? 'collapse-active' : '' }}">
                        <a href="{{ route('admin.client.new.create') }}">
                            <i class="bi bi-circle"></i>
                            <span>Add Record/Client</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.service.index') ? 'active' : '' }}" href="{{ route('admin.service.index') }}">
                    <i class="ri-file-text-fill"></i><span> Services</span>
                </a>

            </li>

            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.expense.index') ? 'active' : '' }}" href="{{ route('admin.expense.index') }}">
                    <i class="ri-wallet-3-fill"></i><span> Expense</span>
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link"  href="{{ route('admin.user.index') }}">
                    <i class="ri-admin-line"></i><span>Users</span>
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link"  href="{{ route('admin.paper.index') }}">
                    <i class="ri-file-list-line"></i><span>Records</span>
                </a>
            </li>

    </aside>
@endsection

