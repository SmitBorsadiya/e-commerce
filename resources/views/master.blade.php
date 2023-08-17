<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smit's E-Comm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    {{View::make('header')}}
    <div id="page-container">
        <div id="content-wrap">
            @yield('content')
        </div>

        {{View::make('footer')}}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</body>

<style>

    #page-container {
        min-height: 100%;
        display: grid;
        grid-template-rows: auto 1fr auto;
    }

    #content-wrap {
        padding-bottom: 2.5rem;
    }

    .custom-product {
        height: 600px;
    }

    .slider-img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: auto;
    }

    .caro {
        background-color: hsl(0, 0%, 90%);
    }

    .fa {
        text-decoration: none;
        color: rgb(255, 255, 255);
    }

    .slider-text {
        background: #8f676769;
    }

    img.slider-img {
        height: 400px;
    }

    .tred-img {
        height: 100px;
    }

    .tred-item {
        float: left;
        width: 19%;
        border: 2px solid black;
        border-radius: 10px;
        margin: 5px;
        text-align: center;
    }

    .trending {
        margin: 30px;
        text-align: center;
    }

    li>a {
        text-decoration: none;
        color: white;
    }

    .class-list-divider {
        border-bottom: 1px solid black;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }

    .img {
        width: 35px;
        margin: 5px;
    }

    footer {
        background-color: rgb(75, 70, 74);
        color: #fff;
        padding: 20px;
    }

</style>
</html>
