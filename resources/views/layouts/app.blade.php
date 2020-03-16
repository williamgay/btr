<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('imgs/logo.png')}}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                    @if(Auth::user())
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Welcome {{ Auth::user()->firstName }}  {{ Auth::user()->lastName }}<span class="caret">
                                       @if(Auth::user()->profileImg)
                                        <img src="{{asset('images/'. Auth::user()->profileImg)}}"
                                             class="profileImg"></span>
                                @endif
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="separator"></div>
    <main class="py-4">
        @yield('content')
    </main>
    <hr size=100>

    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=168738397194631';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <div class="container">
        <div class="row">
            <div class="col-md-12 footerText">The following are trademarks or service marks of Behind the Rock Tour, LLC
                and
                may be used only with permission of Behind the Rock Tour, LLC: Behind the Rock Tour, BTRT, BTR Tour,
                all graphics on the website and all other logos, trademarks, and service names associated with the
                Behind the Rock Tour, LLC. No portion of the Website may be duplicated, redistributed, or
                manipulated in any form.
                Use of the Website signifies your agreement to the Terms of Use and Privacy Policy.
            </div>
        </div>
        <div class="row">
            <div class="fb-like pull-right col-sm-4 offset-8"
                 style='background-color: white;padding: 5px 5px;border-radius: 5px; float:right; margin-top:-5px;'
                 data-href="https://www.behindtherock.org/" data-layout="standard" data-action="like" data-size="large"
                 data-show-faces="true" data-share="false">

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 footerText">
                Copyright &copy; {{ date('Y') }} <a href="/">Behind the Rock, LLC</a> All Rights Reserved
            </div>
        </div>
    </div>


</div>

</body>
</html>
