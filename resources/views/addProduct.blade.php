@extends('layouts.appAdmin')
@section('content')







<div class="content-body">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Add New Product</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('products.index') }}">Products</a></li>
                    <li class="breadcrumb-item active">Add Product</li>
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

        <!-- Add Product Form -->
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- Product Name -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="name_results" class="form-label">Product Name</label>
                        <input type="text" name="name_products" class="form-control" id="name_products" value="{{ old('name_products') }}" required>
                    </div>
                </div>

                <!-- Made In -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="made_in" class="form-label">Made In</label>
                        <input type="text" name="made_in" class="form-control" id="made_in" value="{{ old('made_in') }}" required>
                    </div>
                </div>

                <!-- Uses -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="uses" class="form-label">Uses</label>
                        <input type="text" name="uses" class="form-control" id="uses" value="{{ old('uses') }}">
                    </div>
                </div>

                <!-- Price -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" name="price" class="form-control" id="price" value="{{ old('price') }}" required>
                    </div>
                </div>

                <!-- Description -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="products_description" class="form-label">Description</label>
                        <textarea name="products_description" class="form-control" id="products_description">{{ old('products_description') }}</textarea>
                    </div>
                </div>

                <!-- Image Upload 1 -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="image1" class="form-label">Product Image 1</label>
                        <input type="file" name="image1" class="form-control" id="image1">
                    </div>
                </div>

                <!-- Image Upload 2 -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="image2" class="form-label">Product Image 2</label>
                        <input type="file" name="image2" class="form-control" id="image2">
                    </div>
                </div>


      

                <!-- Image Upload 3 -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="image3" class="form-label">Product Image 3</label>
                        <input type="file" name="image3" class="form-control" id="image3">
                    </div>
                </div>



  <!-- Image Upload 3 -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="image4" class="form-label">Product Image 4</label>
                        <input type="file" name="image4" class="form-control" id="image4">
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

