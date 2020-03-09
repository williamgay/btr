@extends('layouts.app')

@section('content')
<div class="container">
    <div class=" row justify-content-center topRow" style = 'padding-top: 70px; margin: 0 auto;'>
        <h3>Welcome to Behind the Rock Membership Registration</h3>
    </div>
    <div class=" row justify-content-center">
        <h2 style="font-weight: bolder;">Create Your Profile</h2>
    </div>
    <div class=" row justify-content-center">
        <h2 class = 'text-center' style="color: #f1b310;">Before your begin, make sure you have a head and shoulder pic of
            yourself on your device so you can upload it.</h2>
    </div>
        <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="fargo" class="col-md-4 col-form-label text-md-right">{{ __('What is your Fargo Rating?') }}</label>

                            <div class="col-md-6">
                                <input id="fargo" type="text" class="form-control" name="fargo" value="{{ old('fargo') }}"autofocus>

                            </div>
                        </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __("If you don't have a Fargo Rating, please select") }}</label>

                                <div class="col-md-6">
                                    <select id="fargoAlt"class="form-control" name="fargoAlt" value="{{ old('fargoAlt') }}">
                                        <option selected>Rate Your 9-ball skill level</option>option>
                                        <option value ='professional'>A+++ Professional</option>
                                        <option value ='semipro'>A++ Semi Professional</option>
                                        <option value ='advAmateur+'>A+ Advanced Amateur</option>
                                        <option value ='advAmateur'>A Advanced Amateur</option>
                                        <option value ='openAmateur'>B Open Amateur</option>
                                        option value ='intermediateAmateur'>C-D Intermediate Amateur</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName">

                                @error('firstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName">

                                @error('lastName')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Select Your Country') }}</label>

                            <div class="col-md-6">
                                <select id="country"  class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required>
                                    <option>Select Your Country</option>
                                    <option>TODO:: NEED TO GET LIST OF COUNTRIES</option>
                                </select>
                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="streetAddress" class="col-md-4 col-form-label text-md-right">{{ __('Street Address') }}</label>

                            <div class="col-md-6">
                                <input id="streetAddress" type="text" class="form-control @error('streetAddress') is-invalid @enderror" name="streetAddress" value="{{ old('streetAddress') }}" required autocomplete="streetAddress">

                                @error('streetAddress')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city">

                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('Select Your State') }}</label>

                            <div class="col-md-6">
                                <select id="state"  class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" required>
                                    <option>Select Your State</option>
                                    <option>TODO:: NEED TO GET LIST OF States</option>
                                </select>
                                @error('states')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="zip" class="col-md-4 col-form-label text-md-right">{{ __('Postal Code') }}</label>

                            <div class="col-md-6">
                                <input id="zip" type="text" class="form-control @error('zip') is-invalid @enderror" name="zip" value="{{ old('zip') }}" required autocomplete="postalCode">

                                @error('zip')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Select Your Location') }}</label>

                            <div class="col-md-6">
                                <select id="location"  class="form-control" name="location" value="{{ old('location') }}">
                                    <option>Select Your Location</option>
                                    <option>TODO:: NEED TO GET LIST OF Locations</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="newLocation" class="col-md-4 col-form-label text-md-right">{{ __('Or Add New Location') }}</label>

                            <div class="col-md-6">
                                <input id="newLocation" type="text" class="form-control" name="newLocation" value="{{ old('newLocation') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<div id = "new"></div>
@endsection
