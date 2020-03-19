@extends('layouts.app')

@section('content')
    <div class="container card">
        <div class = "row">
            <div class = "col-md-12">
                <h2 class = 'centeredTxt'>How To Play From Home</h2>
            </div>
        </div>
        <div class = "row">
            <div class = "col-md-6">
                <ol>
                    <li>
                        A device for streaming i.e. laptop, tablet or a second cell phone and a device for scoring i.e. tablet, laptop, cell phone etc..
                        Apple devices are NOT compatible for streaming i.e. iPad, iPhone, but you can use them for scoring your match.
                        You may find it easiest if you have a device that accepts an external camera i.e. Microsoft Surface Pros or laptop.
                        Android tablets usually will NOT accept external cameras, but if an android tablet is the device you have then you can use the camera within your tablet
                        if you can put it up high enough to get a complete view of the table and has internet access. The external camera gives you more choices for an optimal stream.
                        If you need an external camera you can pick one up in store on the website.
                    </li>
                    <li>
                        Ensure you have internet access to your streaming device.
                    </li>
                    <li><img src="{{asset('imgs/chrome.png')}}" alt = "You need Google Chrome Browser" style = "float:right;">
                        Once you have your streaming device, you’ll need to make sure you’re running Chrome as your internet browser.
                        Internet Explorer will cause errors and may cause your video to not record.
                        If you don’t have a live stream through our website for your match then your match will be void, so this is important.
                    </li>
                    <li>
                        For scoring you can use any device with internet access including your cell phone. Other options are a PC, tablet or laptop and any Apple device (iPad, iPhone).
                        Just put your device on WiFi and you’re good to go.
                    </li>
                </ol>

            </div>
            <div class = "col-md-6">
                <img src = "{{asset('imgs/playAtHome.png')}}" style = "float:right" alt = "Play From Home">
            </div>
        </div>
        <div class = "row">
            <div class = "col-md-12">
                <h5 class = "centeredTxt">
                    That’s all you need. If you need any assistance with getting set-up, your can call us at <a href="tel:5412041929">(541) 204-1929</a> or email us at <a href = "mailto:info@behindtherock.org">info@behindtherock.org</a>.
                </h5>
            </div>
        </div>

    </div>
    @endsection