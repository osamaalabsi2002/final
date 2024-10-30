@extends('layouts.appAdmin')
@section('content')







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
                    <h4>All Products</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Products</a></li>
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
                                <h4 class="card-title">All Products</h4>
                                <a href="{{ route('products.create') }}" class="btn btn-primary">+ Add new</a>
                                
                                <!-- Search Form -->
                                <div class="float-right">
                                    <form action="{{ route('products.index') }}" method="GET">
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
                                                <th>Made In</th>
                                                <th>Uses</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                            <tr>
                                                <td><img class="rounded" width="50" src="img/{{$product->image1}}"alt="Product Image"></td>
                                                <td>{{ $product->name_products }}</td>
                                                <td>{{ $product->made_in }}</td>
                                                <td>{{ $product->uses }}</td>
                                                <td>{{ $product->products_description }}</td>
                                                <td>${{ number_format($product->price, 2) }}</td>
                                                <td>
                                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
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
                            @foreach ($products as $product)
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="card card-profile">
                                    <div class="card-header justify-content-end pb-0">
                                        <div class="dropdown">
                                            <button class="btn btn-link" type="button" data-toggle="dropdown">
                                                <span class="dropdown-dots fs--1"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right border py-0">
                                                <div class="py-2">
                                                    <a class="dropdown-item" href="{{ route('products.edit', $product->id) }}">Edit</a>
                                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
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
                                                <img src="img/{{$product->image1}}" width="100" class="img-fluid" alt="Product Image">
                                                <img src="img/{{$product->image2}}" width="100" class="img-fluid" alt="Product Image">
                                                <img src="img/{{$product->image3}}" width="100" class="img-fluid" alt="Product Image">
                                                <img src="img/{{$product->image4}}" width="100" class="img-fluid" alt="Product Image">
                                            </div>
                                            <h3 class="mt-4 mb-1">{{ $product->name_results }}</h3>
                                            <ul class="list-group mb-3 list-group-flush">
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="mb-0">Made In:</span><strong>{{ $product->made_in }}</strong></li>
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="mb-0">Uses:</span><strong>{{ $product->uses }}</strong></li>
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="mb-0">Description:</span><strong>{{ $product->products_description }}</strong></li>
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="mb-0">Price:</span><strong>${{ number_format($product->price, 2) }}</strong></li>
                                            </ul>
                                            <a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="{{ route('products.show', $product->id) }}">Read More</a>
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
