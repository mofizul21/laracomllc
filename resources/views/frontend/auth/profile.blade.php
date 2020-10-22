@extends('frontend.layouts.master')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center pt-3">Welcome {{auth()->user()->name}}</h3>
                <h4>Your Orders</h4>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Customer Phone</th>
                            <th>Total Amount</th>
                            <th>Paid Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>#{{$order->id}}</td>
                                <td>{{$order->customer_name}}</td>
                                <td>{{$order->customer_phone_number}}</td>
                                <td>{{$order->total_amount}}</td>
                                <td>{{$order->paid_amount}}</td>
                                <td>{{$order->operational_status}}</td>
                                <td><a href="{{route('order.details', $order->id)}}">Details</a></td>
                            </tr>
                        @endforeach                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection