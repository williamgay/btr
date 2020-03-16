@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your Dashboard</div>
                @if(!Auth::user()->profileImg)
                    <h3 style="text-align: center;">You will need to upload a head and shoulders picture of yourself before proceeding.</h3>
                    <div class="container">

                        <div class="panel panel-primary">
                            <div class="panel-body">

                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    <img src="images/{{ Session::get('image') }}">
                                @endif

                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">

                                        <div class="col-md-6">
                                            <input type="file" name="image" class="form-control">
                                        </div>

                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-success">Upload</button>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                @else
                    <div class ="row">
                        <div class = "col-md-4">
                            <ul class="nav flex-column nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link sideNav" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sideNav" href="#">Edit Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sideNav" href="#">My Videos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sideNav" href="#">Referrals</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sideNav" href="#">Commission Logs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sideNav" href="#">Add Goal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sideNav" href="#">My Goals</a>
                                </li>
                            </ul>

                        </div>
                        <div class = "col-md-8">
                            Over here, we should change the content. The current site uses the default view to edit profile. My thought is to show tournament news or other site
                            related news here.
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

</div>
@endsection
