<link rel="stylesheet" href="{{asset('/css/slider.css')}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{asset('/css/flexslider.css')}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{asset('/css/reset.css')}}" type="text/css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<!-- Modernizr -->
<script src="{{asset('/js/modernizr.js')}}"></script>
<div>

    <div class="container">

{{--        <div id="main" role="main">--}}
            <section class="slider">
                <div class = "row">
                    <div class = "col-md-12">
                <div class="flexslider">
                    <ul class="slides">
                        <li class="img img1">

                            <h2>Lorem Ipsum dolomar.....<br>
                            This can be some text here....</h2>
                        </li>
                        <li class="img img2">
                            <h2>Lorem Ipsum dolomar.....<br>
                                Each Slide has its own text</h2>
                        </li>
                        <li class="img img3">
                            <h2>Lorem Ipsum dolomar.....<br>
                                More Text Here</h2>
                        </li>
                        <li class="img img4">
                            <h2>Lorem Ipsum dolomar.....<br>
                                Need to decide on what text will be</h2>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            </section>
{{--        </div>--}}

    </div>

    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')
    </script>

    <!-- FlexSlider -->
    <script defer src="{{asset('/js/jquery.flexslider.js')}}"></script>

    <script>
        $(function () {
            SyntaxHighlighter.all();
        });
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
</div>