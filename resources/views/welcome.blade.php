@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row" style="padding-top: 80px;">
            <div class="col-md-2 offset-2">
                <a class="nav-link" href="{{ route('register') }}"><button class="btn-danger btn-block customBtn login">Tournament Registration</button></a>
            </div>
            <div class="col-md-2 offset-1">
                <a class="nav-link" href="{{ route('register') }}"><button class="btn-warning btn-block customBtn register">Register</button></a>
            </div>
            <div class="col-md-2 offset-1">
                <a class="nav-link" href="{{ route('login') }}"><button class="btn-danger btn-block customBtn login">Log In</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <x-slider></x-slider>
            </div>
        </div>
        <div class = "row">
            <last-week></last-week>
        </div>
    </div>

@endsection
