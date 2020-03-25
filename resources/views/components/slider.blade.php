
{{--<div>--}}

    <div class="container-fluid">



        <div id="mainCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#mainCarousel" data-slide-to="1"></li>
                <li data-target="#mainCarousel" data-slide-to="2"></li>
{{--                <li data-target="#mainCarousel" data-slide-to="4"></li>--}}
{{--                <li data-target="#mainCarousel" data-slide-to="5"></li>--}}
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 img-carousel  sliderImg" src="{{asset('imgs/pool1.png')}}" alt="First slide">
{{--                    <div class="carousel-caption d-none d-md-block">--}}
{{--                        <h3 class = "carouselHeader">Lorem Ipsum Dolomar</h3>--}}
{{--                        <p class = "carouselText">This is some sample text</p>--}}
{{--                    </div>--}}
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-carousel  sliderImg" src="{{asset('imgs/pool2.png')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-carousel  sliderImg" src="{{asset('imgs/pool3.png')}}" alt="Third slide">
                </div>
{{--                <div class="carousel-item">--}}
{{--                    <img class="d-block w-100 img-carousel" src="{{asset('imgs/pool4.png')}}" alt="Third slide">--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img class="d-block w-100 img-carousel" src="{{asset('imgs/pool5.png')}}" alt="Third slide">--}}
{{--                </div>--}}
            </div>
            <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
