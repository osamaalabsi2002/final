@extends('layouts.APPa')

@section('content')

<style>
    .img_product {
        width: 100%;
        height: 350px;
        object-fit: contain;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="ec-minheader">
    <div class="ec-minheader-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ec-page-title">
                        <h1>Shop Listing</h1>
                        <img src="{{ asset('main/images/title-strip.png') }}" alt="">
                        <p>Discover our products and find what suits you best.</p>
                    </div>
                    <ul class="ec-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li class="active"><a href="#">Current Page</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Filter Section -->
<div class="container mt-4">
    <form action="{{ route('productList') }}" method="GET">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="search" class="form-control" placeholder="Search by product name" value="{{ request('search') }}">
            </div>
            <div class="col-md-3">
                <input type="number" name="min_price" class="form-control" placeholder="Min Price" value="{{ request('min_price') }}" min="0">
            </div>
            <div class="col-md-3">
                <input type="number" name="max_price" class="form-control" placeholder="Max Price" value="{{ request('max_price') }}" min="0">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
    </form>
</div>

<!-- Product Listing Section -->
<div class="col-md-12 mt-4">
    <div class="ec-shop ec-shop-list">
        <ul class="row">
            <!-- Loop through products -->
            @foreach ($products as $product)
            <li class="col-md-3">
                <div class="e-shop-wrap">
                    <figure>
                        <!-- Link to the individual product's detail page -->
                        <a href="{{ url('Shopdetail/product/' . $product->id) }}" class="ec-shop-thumb">
                            <!-- Product Image -->
                            <img src="{{ asset('img/' . $product->image1) }}" alt="{{ $product->name_products }}" class="img_product">
                        </a>
                        <!-- Sale tag condition -->
                        @if($product->price < 50)
                            <span class="ec-festured"><span>Sale</span></span>
                        @endif
                        <figcaption>
                            <a href="{{ url('Shopdetail/product/' . $product->id) }}" class="fa fa-plus"></a>
                        </figcaption>
                    </figure>
                    <div class="ec-shopinfo">
                        <h6><a href="{{ url('Shopdetail/product/' . $product->id) }}">{{ $product->name_products }}</a></h6>
                        <div class="ec-rating-section">
                            <div class="ec-rating">
                                <span class="rating-box" style="width:47%"></span>
                            </div>
                            <span class="ec-reviews">245 Reviews</span>
                        </div>
                        <a href="#" class="ec-cartbtn">
                            <i class="fa fa-cart-plus"></i> Add to Cart
                        </a>
                        <span class="ec-price"><small>$</small>{{ $product->price }}.<span>00</span></span>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>

<!-- Pagination -->
<div class="col-md-12 mt-4">
    <div class="ec-pagination">

    </div>
</div>

@endsection
