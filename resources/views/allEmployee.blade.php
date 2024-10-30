@extends('layouts.appAdmin')
@section('content')
<!-- resources/views/employees/index.blade.php -->

<!-- resources/views/employees/index.blade.php -->





<style>

.profile-photo img {
    width: 100px; /* or any desired size */
    height: 100px; /* or any desired size */
    object-fit: cover; /* Ensures the image fills the container without stretching */
    border-radius: 50%; /* Makes the image circular */
}

/* For List View */
.rounded-circle {
    width: 100px; /* Make sure to use the same size for both views */
    height: 100px;
    object-fit: cover;
}


</style>






<div class="content-body">
    <div class="container-fluid">
        <!-- Breadcrumb -->
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>All Employees</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                   
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Employees</a></li>
                </ol>
            </div>
        </div>

        <!-- Tab Navigation and Search Form -->
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-pills mb-3">
                    <li class="nav-item"><a href="#list-view" data-toggle="tab" class="nav-link btn-primary mr-1 show active">List View</a></li>
                    <li class="nav-item"><a href="#grid-view" data-toggle="tab" class="nav-link btn-primary">Grid View</a></li>
                </ul>
            </div>

            <div class="col-lg-12">
                <div class="row tab-content">
                    <!-- List View -->
                    <div id="list-view" class="tab-pane fade active show col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Employees</h4>
                                <a href="{{ route('employees.create') }}" class="btn btn-primary">+ Add new</a>
                                
                                <!-- Search Form -->
                                <div class="float-right">
                                    <form action="{{ route('employees.index') }}" method="GET">
                                        <input type="text" name="search" placeholder="Search by name" class="form-control" value="{{ request()->input('search') }}">
                                    </form>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th>Description</th>
                                                <th>Joining Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($employees as $employee)
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="img/{{$employee->image}}" alt=""></td>
                                                <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                                                <td><a href="tel:{{ $employee->phone_number }}"><strong>{{ $employee->phone_number }}</strong></a></td>
                                                <td><a href="mailto:{{ $employee->email }}"><strong>{{ $employee->email }}</strong></a></td>
                                                <td>{{ $employee->description }}</td>
                                                <td>{{ $employee->created_at->format('Y/m/d') }}</td>
                                                <td>
                                                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></button>
                                                    </form>
                                                </td>                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Grid View -->
                    <div id="grid-view" class="tab-pane fade col-lg-12" class="profile-photo">
                        <div class="row">
                            @foreach ($employees as $employee)
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="card card-profile">
                                    <div class="card-header justify-content-end pb-0">
                                        <div class="dropdown">
                                            <button class="btn btn-link" type="button" data-toggle="dropdown">
                                                <span class="dropdown-dots fs--1"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right border py-0">
                                                <div class="py-2">
                                                    <a class="dropdown-item" href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                                                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="dropdown-item text-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-2">
                                        <div class="text-center">
                                            <div class="profile-photo">
                                                <img src="img/{{$employee->image}}" width="100" class="img-fluid rounded-circle" alt="">

                                                
                                            </div>
                                            <h3 class="mt-4 mb-1">{{ $employee->first_name }} {{ $employee->last_name }}</h3>
                                            <ul class="list-group mb-3 list-group-flush">
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="mb-0">Phone No. :</span><strong>{{ $employee->phone_number }}</strong></li>
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="mb-0">Email:</span><strong>{{ $employee->email }}</strong></li>
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="mb-0">Description:</span><strong>{{ $employee->description }}</strong></li>
                                            </ul>
                                            <a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="{{ route('employees.show', $employee->id) }}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


