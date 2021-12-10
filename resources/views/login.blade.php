@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row justify-content-center">
        <div class="col-sm-4 col-md-4 ">
            <form action="/login" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary text-center">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection