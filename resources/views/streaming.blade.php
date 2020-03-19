@extends('layouts.app')

@section('content')
    <div class="container card">
        <div class = "row">
            <div class = "col-md-12">
                <h1 class = "centeredTxt yellowTxt">
                    BTRT Streaming Guidelines
                </h1>
            </div>
        </div>
        <div class = "row">
            <div class = "col-md-5">
                <p class = "yellowTxt">
                    Step by Step Using New Streaming Software - Simplified
                </p>
                <p>
                    We are working with a few limitations, so here’s a few things you’ll need or not want to use.
                </p>
                <ol>
                    <li>
                        <span class = "yellowTxt">Required:  Google Chrome Internet Browser</span>
                        <br>
                        If you don’t already have Google Chrome you can just do a Google search, Download and install. This is the most stable browser for this software.
                    </li>
                    <li>
                        Internet Explorer does not provide stable streaming on any platform.  Don’t use Internet Explorer.
                    </li>
                    <li>
                        Apple devices:  You <span class = "yellowTxt">CANNOT</span> stream with Apple devices like:  iPhone or iPad.  You can use these devices for scoring, but you cannot use them for streaming.
                    </li>
                </ol>
                <p>How to Live Stream</p>
                <ol>
                    <li>
                        Decide which device you will be scoring on and which device you’ll be streaming with. <span class = "yellowTxt">Remember no streaming on Apple devices.
                        </span>
                    </li>
                    <li>
                        Login to <a href="/">Behindtherock.org</a> on the device you’ll be scoring with.  DO NOT login to the website on your streaming device until after you have paid for your match.
                    </li>
                    <li>
                        Register and pay for the match as usual.
                    </li>
                    <li>
                        The SkorBord will open and you’ll get a pop-up box with this button <img src="{{asset('imgs/live-btn1.png')}}" alt = "Start Streaming Now"> and DO NOT click on it unless you’re streaming from this device.

                    </li>
                    <li>
                        Now login to behindtherock.org on your streaming device.
                    </li>
                    <li>
                        You’ll get a pop-up box just like the first one.  <img src="{{asset('imgs/live-btn1.png')}}" alt = "Start Streaming Now">  Click on it.
                    </li>
                    <li>
                        Once you’ve got your live streaming up and running, the dialog box on your scoring device will disappear and its game on!  You’ll all set.
                    </li>
                    <li>
                        If you’re streaming and scoring both on the Kiosk, your streaming will open in a new window.
                        You can minimize the window but would recommend you put the streaming window and your scoring window side by side so if you have any issues
                        you can see them both at the same time.
                    </li>
                </ol>

            </div>
            <div class ="col-md-7">
                <img src = "{{asset('imgs/poolStreaming.png')}}" style = "float:right;" alt = "Streaming your game">
            </div>
        </div>
        <div class = "row">
            <div class = "col-md-12">
                <p>
                    If you run into any issues don’t hesitate to call <a href="tel:5412041929">(541) 204-1929</a> or my cell number if you have it.  Or we can be reached on WhatsApp, WeChat or FB.  If you just have a question, don’t hesitate to call, text or FB message.
                </p>
                <p>
                    Phone: <a href="tel:5412041929">(541) 204-1929</a><br>
                    FB: deby WELFRINGER BTRT<br>
                    WhatsApp: Deby W<br>
                    WeChat: Deby WELFRINGER id: wxid_3f87iysgdxmv22
                </p>
            </div>
        </div>
    </div>

    @endsection