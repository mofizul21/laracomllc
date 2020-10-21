@extends('frontend.layouts.master')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center pt-3">Register</h3>

            @include('frontend.partials._message')

            <form action="{{route('register')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Full Name</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="phone" class="form-control" name="phone_number" value="{{old('phone_number')}}">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" value="Register" class="btn btn-success btn-lg btn-block">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection