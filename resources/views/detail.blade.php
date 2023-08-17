@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6" style="padding:100px">
            <img class="detail-img" src="{{$product['gallery']}}" width="200px" alt="img....">
        </div>
        <div class="col-sm-6">
            <br>
            <a href="/">Go back</a> <br><br>
            <h2>{{$product['name']}}</h2>
            <h4>Price: {{$product['price']}}</h4>
            <h6>Category: {{$product['category']}}</h6>
            <p>Details: {{$product['description']}}</p>
            <br><br>
            <form action="/AddtoCart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br><br>
            <form action="/ordernow" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-success" href="OrderNow">Buy Now</button>
            </form>
            <br><br>
        </div>
    </div>
</div>

@endsection
