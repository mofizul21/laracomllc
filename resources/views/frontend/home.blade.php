@extends('frontend.layouts.master')

@section('main')
    @include('frontend.partials._hero')
    
    <div class="album py-5 bg-light">
        <div class="container">
    
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($products as $product)
                <div class="col">
                    <div class="card shadow-sm">

                        <a href="{{route('product.details', $product->slug)}}"><img src="{{$product->getFirstMediaUrl('products')}}" class="bd-placeholder-img card-img-top" alt="Product Image"></a>

                        <div class="card-body">
                            <p class="card-text"><a href="{{route('product.details', $product->slug)}}">{{$product->title}}</a></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                                </div>
                                <strong class="text-muted">Price: ${{$product->price}}</strong>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach                
    
            </div>
            <div class="row">
                <div class="col-md-12 mt-5">
                    {{$products->render()}}
                </div>
            </div>
        </div>
    </div>
@endsection