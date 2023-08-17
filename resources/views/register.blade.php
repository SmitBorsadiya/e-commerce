@extends('master')
@section('content')

<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-sm-4">
            <form action="register" method="POST">
                @csrf
                <div class="mb-3 form-group">
                    <label for="exampleInputName" class="form-label">User Name</label>
                    <input type="text" name="name" class="form-control">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

@endsection
