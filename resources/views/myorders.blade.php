@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-10">
        <div class="treanding mx-4 my-4">
            <h3>My Orders....</h3>
            <br><br>
            @foreach($orders as $item)
            <div class="row searched-item class-list-divider mx-4 my-4">
                <div class="col-sm-4">
                    <a href="detail/{{$item->id}}">
                        <img style="height: 200px" src="{{$item->gallery}}" class="tred-img" alt="No image">
                    </a>
                </div>
                <div class="col-sm-4">
                    <div class="">
                        <h3>Name: {{$item->name}}</h3>
                        <h5>Delivery Status: {{$item->status}}</h5>
                        <h5>Address: {{$item->address}}</h5>
                        <h5>Payment Status: {{$item->payment_status}}</h5>
                        <h5>Payment Method: {{$item->payment_method}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
