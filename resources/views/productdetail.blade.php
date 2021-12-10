@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img class="d-block w-100 slider-img" src={{$product['gallery']}} >
        </div>
        <div class="col-md-6">
            <dl class="row p-2">
                <dt class="col-sm-3 col-md-4 col-md-4 p-2 mb-2 bg-gray-light">Product Name
                    :</dt>
                <dd class="col-sm-9 col-md-8 col-md-8 p-2 mb-2 bg-gray-light">{{$product['name']}}
                </dd>
                <dt class="col-sm-3 col-md-4 p-2 mb-2 bg-gray-lighter">Product Description
                    :</dt>
                <dd class="col-sm-9 col-md-8 p-2 mb-2 bg-gray-lighter">{{$product['description']}}
                </dd>
                <dt class="col-sm-3 col-md-4 p-2 mb-2 bg-gray-light">Price
                    :</dt>
                <dd class="col-sm-9 col-md-8 p-2 mb-2 bg-gray-light">Rs. {{$product['price']}} /-
                </dd>
            </dl>  
            <form action="/addtocart" method="post" >
                @csrf
                <input type="text" hidden name="product_id" value="{{$product['id']}}">
              
                <div class="ml-4">
                    <button type="submit" class="btn btn-yellowish">Add to Cart</button>
                    <button type="submit" class="btn btn-orange">Buy Now</button> 
                </div>
            </form>
        </div> 
    </div>
</div>
    
@endsection