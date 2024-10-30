@extends('layouts.appAdmin')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Edit Product</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('products.index') }}">Products</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Product</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Product Info</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <!-- Product Name -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Product Name</label>
                                        <input type="text" name="name_results" class="form-control" value="{{ old('name_results', $product->name_results) }}">
                                    </div>
                                </div>
                                
                                <!-- Made In -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Made In</label>
                                        <input type="text" name="made_in" class="form-control" value="{{ old('made_in', $product->made_in) }}">
                                    </div>
                                </div>

                                <!-- Uses -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Uses</label>
                                        <input type="text" name="uses" class="form-control" value="{{ old('uses', $product->uses) }}">
                                    </div>
                                </div>
                                
                                <!-- Price -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Price</label>
                                        <input type="number" name="price" class="form-control" value="{{ old('price', $product->price) }}">
                                    </div>
                                </div>
                                
                                <!-- Description -->
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea name="products_description" class="form-control">{{ old('products_description', $product->products_description) }}</textarea>
                                    </div>
                                </div>

                                <!-- Product Images Upload -->
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group fallback w-100">
                                        <label class="form-label">Image 1</label>
                                        <input type="file" name="image1" class="dropify" data-default-file="{{ Storage::url($product->image1) }}">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group fallback w-100">
                                        <label class="form-label">Image 2</label>
                                        <input type="file" name="image2" class="dropify" data-default-file="{{ Storage::url($product->image2) }}">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group fallback w-100">
                                        <label class="form-label">Image 3</label>
                                        <input type="file" name="image3" class="dropify" data-default-file="{{ Storage::url($product->image3) }}">
                                    </div>
                                </div>
                                
                                <!-- Submit Buttons -->
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ route('products.index') }}" class="btn btn-light">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
