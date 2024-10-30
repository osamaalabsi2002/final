@extends('layouts.CartBook')

@section('content')
<div class="container">
    <h2>Your Cart</h2>

    @if (session('cart') && count(session('cart')) > 0)
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="bg-primary text-white">
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $item)
                    <tr>
                        <td><img src="{{ $item['image'] }}" class="img-fluid" style="width: 100px;"></td>
                        <td>{{ $item['name'] }}</td>
                        <td>
                            <!-- Decrease button -->
                            <form action="{{ route('cart.decrease', $item['id']) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-secondary">-</button>
                            </form>

                            <!-- Display quantity -->
                            {{ $item['quantity'] }}

                            <!-- Increase button -->
                            <form action="{{ route('cart.increase', $item['id']) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-secondary">+</button>
                            </form>
                        </td>
                        <td>${{ number_format($item['price'], 2) }}</td>
                        <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                        <td>
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $item['id'] }}">
                                <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Total Calculation -->
        <div class="text-right">
            <h4>Total Quantity: {{ session('totalQuantity') }}</h4>
            <h4>Total Price: ${{ number_format(session('totalPrice'), 2) }}</h4>
            <a href="{{ url('/checkout') }}" class="btn btn-success btn-lg mt-3">Proceed to Checkout</a>
        </div>
    @else
        <p>Your cart is empty.</p>
    @endif
</div>
@endsection
