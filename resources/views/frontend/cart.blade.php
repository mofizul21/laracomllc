@extends('frontend.layouts.master')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center pt-3">Cart</h3>

                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif

                @if (empty($cart))
                    <div class="alert alert-info">
                        <h3>Your cart is empty. Please add to cart something. <a href="{{route('frontend.home')}}">Let's shopping...</a></h3>
                    </div>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SL.</th>
                                <th>Product</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach ($cart as $key => $product)                            
                            <tr>                            
                                <td>{{$i++}}</td>
                                <td>{{ $product['title'] }}</td>
                                <td>{{ number_format($product['unit_price'], 2) }}</td>
                                <td><input type="number" name="quantity" value="{{ $product['quantity'] }}"></td>
                                <td>BDT {{ number_format($product['total_price'], 2) }}</td>
                                <td>
                                    <form action="{{route('cart.remove')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$key}}">
                                        <button type="submit" class="btn btn-sm btn-outline-secondary">Remove</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total:</td>
                                <th>BDT {{number_format($total, 2)}}</th>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{route('cart.clear')}}" class="btn btn-danger btn-lg float-left">Clear Cart</a>
                    <a href="{{route('checkout')}}" class="btn btn-success btn-lg float-right">Checkout</a>
                @endif

            </div>
        </div>
    </div>
@endsection