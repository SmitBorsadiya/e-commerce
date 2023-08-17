<?php
use App\Http\Controllers\ProductController;
$total = 0;
if (Session :: has('user')) {
    $total = ProductController::cartItem();
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <img class="img" src="https://smit.fit/wp-content/uploads/2022/08/smitfit_logo.png" alt="Smit's Mart">
                <li class="nav-item">
                    <a class="nav-link active fw-bold" aria-current="page" href="/">Smit' Mart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/myorders">Orders</a>
                </li>
                </li>
                <form class="d-flex" role="search" action="/search">
                    <input class="form-control me-2" name="query" id="navBarSearchForm" type="search" placeholder="Search" aria-label="Search" style="width: 500px">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </ul>
            <ul class="navbar-nav my-2 my-sm-0">
                <li class="nav-item">
                    <a class="nav-link mr-sm-2" href="/cart">cart({{$total}})</a>
                </li>

                @if(Session::has('user'))
                <li class="nav-item" style="padding:8px">
                    <a href="#">{{Session::get('user')['name']}}</a>
                </li>
                <li  style="padding:8px">
                    <a class="nav-item" href="/logout">Logout</a>
                </li>
                @else
                <li class="nav-item" style="padding:8px">
                    <a href="/login">Login</a>
                    <a href="/register">Register</a>
                </li>
                @endif

            </ul>

        </div>
    </div>
</nav>
