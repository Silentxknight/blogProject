@extends('layouts.app')
@section('content')

<div class="jumbotron" style="background-color:#00CEFF">
    <h1>Welcome To Blog Post Project</h1>
    <p>This is my FirstApp by "Laravel", Login to see new posts!</p>
    <p><a href="login" class="btn btn-primary btn-lg">Login</a> <a href="{{ route('register') }}" class="btn btn-success btn-lg">Register</a></p>
</div>



@endsection
