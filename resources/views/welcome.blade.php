@extends('layouts.master')

@section('content')

<div id="content">
    <div class="container">
        <div class="col-md-12">
            <div id="main-slider">
                <div class="item">
                    <img src="img/main-slider1.jpg" alt="" class="img-responsive">
                </div>
                <div class="item">
                    <img class="img-responsive" src="img/main-slider2.jpg" alt="">
                </div>
                <div class="item">
                    <img class="img-responsive" src="img/main-slider3.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div id="advantages">

        <div class="container">
            <div class="same-height-row">
                <div class="col-sm-4">
                    <div class="box same-height clickable">
                        <div class="icon"><i class="fa fa-gift"></i>
                        </div>

                        <h3><a href="#">Buy Exclusives</a></h3>
                        <p>We have millions of one-of-a-kind items, so you can find whatever you need (or really, really want).</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box same-height clickable">
                        <div class="icon"><i class="fa fa-thumbs-up"></i>
                        </div>

                        <h3><a href="#">Do Crafts</a></h3>
                        <p>You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box same-height clickable">
                        <div class="icon"><i class="fa fa-money"></i>
                        </div>

                        <h3><a href="#">Earn Money</a></h3>
                        <p>Free returns on everything for 3 months.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="hot">

        <div class="box">
            <div class="container">
                <div class="col-md-12">
                    <h2>Popular right now</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="product-slider">

        @foreach ($products as $product)
            @if ($product->getRating($product->id) > 4.0)
                <div class="item">
                    <div class="product">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <a href="#">
                                        <img src="/images/{{$product->file->filename}}" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="#">
                                        <img src="/images/{{$product->file->filename}}" alt="" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="invisible">
                            <img src="/images/{{$product->file->filename}}" alt="" class="img-responsive">
                        </a>
                        <div class="text">
                            <h3><a href="/products/{{$product->id}}">{{$product->name}}</a></h3>
                            <p class="price">RM {{ number_format($product->price,2) }}</p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
            </div>
        </div>
    </div>

    <div class="container">
    <!-- <div class="container"> -->
        <div class="col-md-12">
            <div class="box slideshow">
                <p class="lead">Make awesome crafts and handmade items to people around the world</p>
                <h4><a href="#" class="btn btn-secondary btn-lg">START SELLING</a></h4>
                <p></p>
                <div id="get-inspired" class="owl-carousel owl-theme">
                    <div class="item">
                        <a href="#">
                            <img src="img/getinspired1.jpg" alt="Get inspired" class="img-responsive">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="img/getinspired2.jpg" alt="Get inspired" class="img-responsive">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="img/getinspired3.jpg" alt="Get inspired" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="box text-center"> -->
    <div class="box text-center">
        <div class="container">
            <div class="col-md-12">
                <h3 class="text-uppercase">GET INSPIRED</h3>

                <p class="lead">Recent reviews from happy people. <a href="#">Join the community</a> to give us your opinion.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- <div class="col-md-12"> -->
        <div class="col-md-12">

            <div id="blog-homepage" class="row">
                <div class="col-sm-6">
                    <div class="post">
                        <h4><a href="#">This is my life</a></h4>
                        <p class="author-category">By <a href="#">Coldplay</a>
                        </p>
                        <hr>
                        <p class="intro">Handmade items always have the person’s mark on them, and when you hold them, you feel less alone.</p>
                        <p class="read-more">
                        <!-- <a href="#" class="btn btn-primary">Continue reading</a> -->
                        </p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="post">
                        <h4><a href="#">Inspire people by my creativity</a></h4>
                        <p class="author-category">By <a href="#">Adele</a>
                        </p>
                        <hr>
                        <p class="intro">Handmade is not just about creativity, it is about the person you’re becoming while you’re creating.</p>
                        <p class="read-more">
                        <!-- <a href="#" class="btn btn-primary">Continue reading</a> -->
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection