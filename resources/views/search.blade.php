@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="text-center">
        <div class="treanding">
            <h3>Result of searched Products.....</h3>
            @foreach($products as $item)
            <div class="searched-item">
                <a href="detail/{{$item['id']}}">
                    <img style="height: 200px" src="{{$item['gallery']}}" class="tred-img" alt="No image">
                    <div class="">
                        <h3>{{$item['name']}}</h3>
                        <h5>{{$item['description']}}</h5>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
