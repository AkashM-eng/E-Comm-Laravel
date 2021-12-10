@extends('master')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between btn-yellowish p-2">
            <h3 class="text-center">Your Cart List</h3>
            <a href="/ordernow" class="btn btn-success">Order Now</a>
        </div>

        @foreach ($productlist as $item)
            <div class="row mb-2">
                <div class="col-md-3 col-sm-3 cartlist-img">
                    <img class="d-block " src={{ $item->gallery }}>

                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="justify-content-center p-4">
                        <h3 class="text-center">{{ $item->name }}</h3>
                        <dd class="text-center">{{ $item->description }}</dd>
                        <dd class="text-center">Price: Rs. {{ $item->price }}</dd>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 justify-content-center mt-4">
                    <a class="btn btn-warning" href="/removecart/{{ $item->cart_id }}">Remove to Cart</a>
                </div>

            </div>
        @endforeach

    </div>

@endsection
