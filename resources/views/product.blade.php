@extends('master')
@section('content')
<div class="">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          
          @foreach ($products as $item)
           
           
          <div class="carousel-item  {{$item['id']==1?'active':''}} ">
             <img class="d-block w-100 slider-img" src={{$item['gallery']}} >
           </div>
           
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="p-2">
    <h3 class="p-2">Trending Products</h3>
    <div class="row">
        @foreach ($products as $item)
        <div class="col-md-2 trending-prod mb-4">
        <a href="detail/{{$item['id']}}">
            <img class="d-block w-100 slider-img" src={{$item['gallery']}} >
            <div class="">
                <h3 class="text-center">{{$item['name']}}</h3>
            </div>
        </a>
        </div>
       
        @endforeach
       
    </div>
</div>
</div>


    
@endsection