@extends('master')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between btn-yellowish p-2 mb-2">
            <h3 class="text-center">Your Orders</h3>

        </div>
        <div class="row">
            @foreach ($myorders as $item)
                <div class="col-md-6 cartlist-img">
                    <img class="d-block w-100 " src={{ $item->gallery }}>
                </div>
                <div class="col-md-6">
                    <dl class="row p-2">
                        <dt class="col-sm-3 col-md-4 col-md-4 p-2 mb-2 bg-gray-light">Product Name
                            :</dt>
                        <dd class="col-sm-9 col-md-8 col-md-8 p-2 mb-2 bg-gray-light">{{ $item->name }}
                        </dd>
                        <dt class="col-sm-3 col-md-4 p-2 mb-2 bg-gray-lighter">Product Status
                            :</dt>
                        <dd class="col-sm-9 col-md-8 p-2 mb-2 bg-gray-lighter">{{ $item->status }}
                        </dd>
                        <dt class="col-sm-3 col-md-4 p-2 mb-2 bg-gray-light">Address
                            :</dt>
                        <dd class="col-sm-9 col-md-8 p-2 mb-2 bg-gray-light"> {{ $item->address }}
                        </dd>
                        <dt class="col-sm-3 col-md-4 p-2 mb-2 bg-gray-light">Payment Method
                            :</dt>
                        <dd class="col-sm-9 col-md-8 p-2 mb-2 bg-gray-light">{{ $item->payment_method }}
                        </dd>
                        <dt class="col-sm-3 col-md-4 p-2 mb-2 bg-gray-light">Price
                            :</dt>
                        <dd class="col-sm-9 col-md-8 p-2 mb-2 bg-gray-light">Rs. {{ $item->price }} /-
                        </dd>

                    </dl>
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <button id="{{ $item->product_id }}" type="submit" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
