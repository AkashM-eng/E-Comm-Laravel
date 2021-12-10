<?php
use App\Http\Controllers\productController;
$cartCount = 0;
if (Session::has('user')) {
    $cartCount = productController::cartItem();
}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">E-Comm</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">

                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                @if (Session::has('user'))
                    <a class="nav-link" href="/myorders">Orders</a>
                @else
                    <a class="nav-link" href="/login">Orders</a>
                @endif
            </li>
            <form class="form-inline my-2 my-lg-0 ml-4">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

        </ul>
        @if (Session::has('user'))
            <ul class="navbar-nav float-right">
                <li class="nav-item ">
                    <a class="nav-link" href="/cartlist">Cart({{ $cartCount }})</a>
                </li>
            </ul>
            <div class="btn-group m-2">

                <button type="button" class="btn btn-primary">{{ Session::get('user')['name'] }}</button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/logout">Logout</a>
                </div>
            @else
                <a class="btn btn-primary mr-2" href="/login">Login</a>
                <a class="btn btn-success" href="/register">Register</a>
            </div>
    </div>
    @endif
    </div>
</nav>
