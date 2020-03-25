@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row" id = "buttonRow">
            <div class = "col-md-2"></div>
            <div class="col-md-2">
                <a class="nav-link" href="{{ route('register') }}"><button class="btn-danger btn-block customBtn login">Tournament Registration</button></a>
            </div>
            <div class = "col-md-1"></div>
            <div class="col-md-2">
                <a class="nav-link" href="{{ route('register') }}"><button class="btn-warning btn-block customBtn register">Register</button></a>
            </div>
            <div class = "col-md-1"></div>
            <div class="col-md-2">
                <a class="nav-link" href="{{ route('login') }}"><button class="btn-danger btn-block customBtn login">Log In</button></a>
            </div>
            <div class = "col-md-2"></div>
        </div>
    </div>
    <div class = "container-fluid">
        <div class="row">
            <div class="col-md-12">
{{--                <h1 class = "centeredTxt yellowTxt">Welcome to Behind The Rock Tournament!</h1>--}}
{{--                <p>Have some introductory text here...</p>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed metus tortor. Vivamus sit amet varius urna, ac consequat quam. Donec aliquam nisi quis augue pretium commodo. Fusce consectetur posuere eros, a pellentesque tortor aliquet eget. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus at nunc urna. Ut vehicula ex massa, tempus tincidunt dui eleifend quis. Aenean in aliquet augue. Aliquam magna lorem, consectetur at faucibus vitae, ornare et ex. Suspendisse pulvinar accumsan varius. Curabitur in justo vel felis viverra porta. Praesent laoreet a velit at congue. Sed molestie tortor sit amet metus hendrerit tristique.</p>--}}
{{--                <p>Curabitur a dui non orci pharetra lobortis. Fusce metus eros, accumsan tincidunt odio ut, egestas tempus tellus. Aliquam lectus urna, dictum vel ex sed, aliquet aliquam nulla. Phasellus vitae turpis tempus, maximus leo a, cursus eros. Nunc sapien dui, convallis in ornare eu, ullamcorper a mi. Pellentesque elementum vulputate consequat. Donec vulputate sem ante, eu pharetra elit feugiat eu. Phasellus a interdum quam. Etiam accumsan est eget rhoncus aliquam. Etiam scelerisque sed magna a cursus. Suspendisse bibendum hendrerit est eu efficitur. Curabitur vitae urna vel mi blandit luctus non ut elit. Curabitur eget laoreet mauris. Nam sollicitudin, erat nec congue auctor, diam est auctor augue, eget condimentum quam sapien non magna. Quisque suscipit posuere tortor id molestie.</p>--}}

                                <x-slider></x-slider>
            </div>
        </div>
    </div>
    <div class ="container">
        <div class = "row">
            <last-week></last-week>
        </div>
    </div>

@endsection
