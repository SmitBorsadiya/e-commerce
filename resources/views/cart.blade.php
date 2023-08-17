<?php
use App\Http\Controllers\ProductController;
$total = 0;
if (Session :: has('user')) {
    $total = ProductController::cartItem();
}
?>

@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-10">
        <div class="treanding">
            @if ($total == 0)
            <div class="alert alert-warning alert-dismissible fade show my-3" role="alert">
                <strong>Warning!</strong> No item in the cart.
            </div>
            @else
            <h3 class="my-4" style="display: flex; justify-content: center;">Item in the Cart are.....</h3>
            <a class="btn btn-success" href="OrderNow">Order Now</a>
            <br><hr>
            @endif

            @foreach($products as $item)
            <div class="row searched-item class-list-divider">
                <div class="col-sm-4">
                    <a href="detail/{{$item->id}}">
                        <img style="height: 200px" src="{{$item->gallery}}" class="tred-img" alt="No image">
                    </a>
                </div>
                <div class="col-sm-4">
                    <div class="">
                        <h3>{{$item->name}}</h3>
                        <h5>{{$item->description}}</h5>
                    </div>
                </div>
                <div class="col-sm-4">
                    <a href="/removeItem/{{$item->cart_id}}" class="btn btn-warning">Remove</a>
                </div>
            </div>
            @endforeach
        </div>
        @if(!$total == 0)
        <a class="btn btn-success" href="OrderNow">Order Now</a>
        @endif
    </div>
</div>

@endsection
