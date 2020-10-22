@extends('frontend.layouts.master')

@section('main')
    <div class="container">
        <div class="row">

            @include('frontend.partials._message')

            <h3 class="text-center pt-3">Order Details | Order ID: #{{$order->id}}</h3>

            <div class="col-md-6">
                <ul class="list-group">                       
                    <li class="list-group-item"><b>Customer Name:</b> {{$order->customer_name}}</li>
                    <li class="list-group-item"><b>Customer Phone:</b> {{$order->customer_phone_number}}</li>
                    <li class="list-group-item"><b>Address:</b> {{$order->address}}</li>
                </ul>

                <h5>More dynamic way</h5>
                <ul class="list-group">
                    @foreach ($order->toArray() as $column => $value)
                        @if ($column === 'user_id')
                            {{-- Hiding user_id --}}
                            @continue
                        @endif
                        <li class="list-group-item"><b>{{ucwords(str_replace('_', ' ', $column))}}:</b> {{$value}}</li>
                    @endforeach                    
                </ul>
            </div>

            <div class="col-md-6">
                <h5>Product(s) in this order</h5>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Product Title</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->products as $product)                        
                        <tr>
                            <td>{{$product->product->title}}</td>
                            <td>{{$product->quantity}}</td>
                            <td><span style="floar:right">{{number_format($product->price, 2)}}</span></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection