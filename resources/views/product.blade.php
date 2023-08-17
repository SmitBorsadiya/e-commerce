@extends('master')
@section('content')

<div class="custom-product">
    <div id="carouselExampleIndicators" class="carousel slide caro" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            @foreach($products as $item)
            <div class="carousel-item {{$item['id']==1?'active':''}}">
                <a href="detail/{{$item['id']}}">
                    <img src="{{$item['gallery']}}" class="slider-img d-block" alt="No image">
                    <div class="carousel-caption slider-text">
                        <h3>{{$item['name']}}</h3>
                        <p>{{$item['description']}}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="trending">
        <h3>Treanding Products</h3>
        @foreach($products as $item)
        <div class="tred-item">
            <a href="detail/{{$item['id']}}">
                <img src="{{$item['gallery']}}" class="tred-img" alt="No image">
                <div class="">
                    <h6>{{$item['name']}}</h6>
                </div>
            </a>
        </div>
        <div class="tred-item">
            <a href="detail/{{$item['id']}}">
                <img src="{{$item['gallery']}}" class="tred-img" alt="No image">
                <div class="">
                    <h6>{{$item['name']}}</h6>
                </div>
            </a>
        </div>
        <div class="tred-item">
            <a href="detail/{{$item['id']}}">
                <img src="{{$item['gallery']}}" class="tred-img" alt="No image">
                <div class="">
                    <h6>{{$item['name']}}</h6>
                </div>
            </a>
        </div>
        <div class="tred-item">
            <a href="detail/{{$item['id']}}">
                <img src="{{$item['gallery']}}" class="tred-img" alt="No image">
                <div class="">
                    <h6>{{$item['name']}}</h6>
                </div>
            </a>
        </div>
        <div class="tred-item">
            <a href="detail/{{$item['id']}}">
                <img src="{{$item['gallery']}}" class="tred-img" alt="No image">
                <div class="">
                    <h6>{{$item['name']}}</h6>
                </div>
            </a>
        </div>
        
        @endforeach
    </div>
</div>

@endsection
