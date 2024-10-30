@extends('layouts.appAdmin')
@section('content')



<div class="content-body">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Add New Employee</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
               <ol class="breadcrumb">
                 
                    <li class="breadcrumb-item active"><a href="{{ route('employees.index') }}">Employees</a></li>
                    <li class="breadcrumb-item active">Add Employee</li>
                </ol> 
            </div>
        </div>

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Add Employee Form -->
        <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- First Name -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" id="first_name" value="{{ old('first_name') }}" required>
                    </div>
                </div>

                <!-- Last Name -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" id="last_name" value="{{ old('last_name') }}" required>
                    </div>
                </div>

                <!-- Phone Number -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="text" name="phone_number" class="form-control" id="phone_number" value="{{ old('phone_number') }}">
                    </div>
                </div>

                <!-- Email -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" required>
                    </div>
                </div>

                <!-- Description -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="description">{{ old('description') }}</textarea>
                    </div>
                </div>


                
                <!-- Image Upload -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="image" class="form-label">Employee Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>
                </div>

                

                <!-- Submit Buttons -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>

        @endsection
        <!--**********************************
            Content body end

         