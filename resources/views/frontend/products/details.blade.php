@extends('frontend.layouts.master')

@section('main')
    <div class="container">
        <br>
        <p class="text-center">{{$product->title}}</p>
        <hr>

        <div class="card">
            <div class="row">
                <aside class="col-sm-5 border-right">
                    <article class="gallery-wrap">
                        <div>
                            <img src="{{$product->getFirstMediaUrl('products')}}" alt="{{$product->title}}" class="card-img-top">
                        </div>
                    </article>
                </aside>

                <div class="col-sm-7">
                    <article class="card-body p-5">
                        <h3 class="title mb-3">{{$product->title}}</h3>

                        <p class="price-detail-wrap">
                            <span class="price h3 text-warning">
                                <span class="currency">BDT </span>
                                <span class="num">{{$product->price}}</span>
                            </span>
                        </p>

                        <dl class="item-property">
                            <dt>Description</dt>
                            <dd><p>{{$product->description}}</p></dd>
                        </dl>

                        <hr>

                        <a href="" class="btn btn-lg btn-outline-primary text-uppercase">
                            <i class="fas fa-shopping-cart"></i> Add to Cart
                        </a>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection