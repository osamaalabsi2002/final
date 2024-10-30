@extends('layouts.APPa')

@section('content')
<style>
    .employee-Bigimage {
        width: 70%;
        height: auto;
        object-fit: contain;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-left: 20%;
    }
    .employee-smallimage {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .ec-images ul li a {
        border: none;
        position: relative;
    }
</style>

<div class="ec-main-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="ec-summary">
                    <h3>{{ $product->name_products }}</h3>
                    <span>Reference : {{ $product->id }}</span>
                </div>

                <div class="ec-images">
                    <ul class="gallery">
                        <li class="ec-featured-thumb">
                            <a href="{{ asset('img/' . $product->image1) }}" data-rel="prettyPhoto[gallery1]" title="">
                                <img style="width:60%" src="{{ asset('img/' . $product->image1) }}" alt="{{ $product->name_products }}" class="employee-Bigimage"> 
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ asset('img/' . $product->image2) }}" data-rel="prettyPhoto[gallery1]" title="">
                                <img src="{{ asset('img/' . $product->image2) }}" alt="{{ $product->name_products }}" class="employee-smallimage">
                                <span class="ec-images-hover"><i class="fa fa-plus"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ asset('img/' . $product->image3) }}" data-rel="prettyPhoto[gallery1]" title="">
                                <img src="{{ asset('img/' . $product->image3) }}" alt="{{ $product->name_products }}" class="employee-smallimage">
                                <span class="ec-images-hover"><i class="fa fa-plus"></i></span>
                            </a>
                        </li>
                        @if($product->image4)
                        <li>
                            <a href="{{ asset('img/' . $product->image4) }}" data-rel="prettyPhoto[gallery1]" title="">
                                <img src="{{ asset('img/' . $product->image4) }}" alt="{{ $product->name_products }}" class="employee-smallimage">
                                <span class="ec-images-hover"><i class="fa fa-plus"></i></span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>

                <div class="ec-summary">
                    <h4>{{ $product->products_description }}</h4>
                    <div class="ec-quality">
                        <div class="left-section">
                            <span>Quality: </span>
                            <div class="ec-rating"><span style="width:82%" class="rating-box"></span></div>
                        </div>
                        <div class="right-section">
                            <span>Stock Availability:</span> AVAILABLE
                        </div>
                    </div>

                    <form action="{{ route('addToCart') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name_products }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <input type="hidden" name="image" value="{{ asset('img/' . $product->image1) }}">
                        <button type="submit" class="ec-detail-btn">
                            <i class="fa fa-cart-plus"></i> Add to Cart
                        </button>
                    </form>
                </div>

                <!-- Comments Section -->
                <div class="ec-shop-tab">
                    <div id="eccomments">
                        <div class="ec-content-title">
                            <h2>{{ $product->comments->count() }} Comments</h2>
                        </div>
                        <ul>
                            @foreach($product->comments as $comment)
                            <li>
                                <div class="thumblist">
                                    <ul>
                                        <li>
                                            <figure><img src="{{ asset('path-to-user-images/'.$comment->user->image) }}" alt="User Image"></figure>
                                            <div class="text">
                                                <a href="#">{{ $comment->user->name }}</a> 
                                                <time datetime="{{ $comment->created_at }}"><i class="fa fa-clock-o"></i> {{ $comment->created_at->format('d M Y h:i A') }}</time>
                                                <p>{{ $comment->content }}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Comment Form -->
                    @if(auth()->check())
                        <div class="ec-form">
                            <div class="ec-content-title">
                                <h2>Leave a Comment</h2>
                            </div>
                            <form action="{{ route('comments.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <p class="ec-comment"><textarea name="content" placeholder="Your comment" required></textarea></p>
                                <p class="ec-submit"><input type="submit" value="Post Comment"></p>
                            </form>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Right Sidebar -->
            <aside class="col-md-3">
                <!-- Categories or other sidebar content -->
            </aside>
        </div>
    </div>
</div>
@endsection
