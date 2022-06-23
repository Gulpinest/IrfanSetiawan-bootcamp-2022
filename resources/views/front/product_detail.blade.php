@extends('template.front.layout')
@section('content')
        <!-- Header-->
        <header class="bg-dark py-5 mb-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">{{$product->product_name}}</h1>
                </div>
            </div>
        </header>

        <div class="container" style="margin-bottom:200px;">
            <div class="row">
                <div class="offset-md-1 col-md-10">
                    <div class="card" style="">
                        <div class="row">
                            <div class="col-md-4">
                                <img class="card-img" src="{{ asset($product->product_photo) }}" alt="{{ $product->product_name }}" />
                            </div>

                            <div class="col-md-8 p-4" style="height: 100%">
                                <div class="card p-3">
                                    <div class="card p-3">
                                        <div class="card-head">
                                            <h5>Desc</h5>
                                        </div>
                                        <div class="card-body">
                                            <p>
                                                {!! $product->description !!}
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-grid gap-2">
                                        <a class="btn btn-outline-success mt-auto" href="{{url('cart/add?products_id='.$product->id)}}">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
