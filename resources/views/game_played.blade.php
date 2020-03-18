@extends('layouts.app')

@section('content')
    <div class="container card">
        <div class = "row">
            <div class = "col-md-12">
                <h2 class ="centeredTxt">Games Played</h2>
            </div>
        </div>
        <div class = "row">
            <div class = "col-md-12">
                <p>

                    All the games we play are modified versions of the games you know and love, but you'll be playing against the Ghost.
                    The games are similar to what you are probably used to, but let us stress the importance of reading the rules for each game.
                    Be sure to read ALL the rules for each game. Quick note: Everyone needs to be aware we play by the "ALL BALL FOUL RULE". This rule applies in every game.
                </p>
            </div>
        </div>
        <div class ="row">
            <div class = "col-md-5">
                <p>
                    <span class ="yellowTxt">220</span> - 10 Ball
                </p>
                <p>
                    <span class = "yellowTxt">198</span> - 9 Ball
                </p>
                <p>
                    <span class = "yellowTxt">176</span> - 8 Ball
                </p>
                <h3>Games Rolling Out</h3>
                <p>
                    <span class = "yellowTxt">110 - 14.1 or Straight Pool: </span> - Honolulu
                </p>
                <p>
                    <span class = "yellowTxt">Breaking Banks - Banks:  </span> - Billiards
                </p>
                <p>
                    <span class = "yellowTxt">One Pocket:  </span> - Snooker
                </p>
            </div>
            <div class = "col-md-7">
                    <img src="{{asset('imgs/gamesPlayed.png')}}" style = "float:right;" alt="Games Played">
            </div>
        </div>
            <div class = "row">
                <div class = "col-md-12">
                    <p>
                        We have more new and exciting formats coming.
                        These new formats will be played in the special events that we will run periodically.
                        Singles will be our regular weekly format. The Re-launch will also bring new formats: Of course there will always be singles, but also:
                    </p>
                </div>
            </div>
            <div class = "row">
                <div class = "col-md-6">
                    <p>
                        <span class = "yellowTxt">Scotch Doubles </span> - 2 players same location same game:
                    </p>
                    <p>
                        <span class = "yellowTxt">Partners </span> 2 players remote locations, their own games:
                    </p>
                </div>
                <div class = "col-md-6">
                    <p>
                        <span class = "yellowTxt">	3, 4 and 5 players team events  </span> -  remote or same locations
                    </p>
                    <p>
                        <span class = "yellowTxt">	Pro-Am Team events</span>
                    </p>
                </div>
            </div>


    </div>

    @endsection