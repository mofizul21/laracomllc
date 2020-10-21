@extends('frontend.layouts.master')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center pt-3">Login</h3>

            @include('frontend.partials._message')

            <form action="{{route('login')}}" method="post" >
                @csrf
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" value="Login" class="btn btn-success btn-lg btn-block">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection