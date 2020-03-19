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
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container">
            <a href="../" class="navbar-brand"><img src="{{asset('imgs/logo.png')}}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <li class = 'nav-item'>
                    <a href ="{{route('captains')}}">Captains</a>
                </li>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Tour Info <span class="caret"></span></a>
                        <div class="dropdown-menu" aria-labelledby="themes">
                            <a class="dropdown-item" href="{{route('general_information')}}">General Information</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('btrt_membership')}}">BTR Membership</a>
                            <a class="dropdown-item" href="{{route('getting_started')}}">Getting Started</a>
                            <a class="dropdown-item" href="{{route('game_played')}}">Games Played</a>
                            <a class="dropdown-item" href="{{route('commissions')}}">Commissions and Referrals</a>
                            <a class="dropdown-item" href="{{route('getRoomPlaying')}}">How to Get Your Room Started</a>
                            <a class="dropdown-item" href="{{route('playFromHome')}}">How To Play From Home</a>
                            <a class="dropdown-item" href="{{route('streaming')}}">Streaming</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('rules')}}">Rules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Players</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Contact</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download">Spacelab <span class="caret"></span></a>
                        <div class="dropdown-menu" aria-labelledby="download">
                            <a class="dropdown-item" target="_blank" href="https://jsfiddle.net/bootswatch/Laobkr1d/">Open in JSFiddle</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../4/spacelab/bootstrap.min.css" download>bootstrap.min.css</a>
                            <a class="dropdown-item" href="../4/spacelab/bootstrap.css" download>bootstrap.css</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../4/spacelab/_variables.scss" download>_variables.scss</a>
                            <a class="dropdown-item" href="../4/spacelab/_bootswatch.scss" download>_bootswatch.scss</a>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
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
                 style='background-color: white;padding: 5px 5px;border-radius: 5px; float:right; margin-top:5px;'
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
