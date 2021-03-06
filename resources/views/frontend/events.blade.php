@extends('layouts.index')

@section( 'nav')

<li><a href="{{ route('home') }}">Home</a></li>
<li><a href="{{ route('gallery') }}">Gallery</a></li>
<li><a href="{{ route('players') }}">Players</a></li>
<li class="active"><a href="{{ route('events') }}">Events</a></li>
<li><a href="{{ route('about') }}">About</a></li>
<li><a href="{{ route('contact') }}">Contact</a></li>

@endsection

@section( 'main-content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="hero-wrap text-center" style="background-image: url('images/hero_2.jpg');" data-stellar-background-ratio="0.5">
                <div class="hero-contents">
                    <h2>Events</h2>
                    <p><a href="index.html">Home</a> <span class="mx-2">/</span> <strong>Events</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">


        <div class="row mb-5">
            <div class="col-sm-6 col-md-4 col-lg-3 mb-5 mb-lg-5">
                <div class="custom-media d-block">
                    <div class="img-wrap mb-3">
                        <a href="#"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                    <div>
                        <span class="caption">May 19, 2020</span>
                        <h3><a href="#">Roman Greg scorer 4 goals</a></h3>
                        <p class="mb-0"><a href="#" class="more"><span class="mr-2">+</span>Learn More</a></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 mb-5 mb-lg-5">
                <div class="custom-media d-block">
                    <div class="img-wrap mb-3">
                        <a href="#"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                    <div>
                        <span class="caption">May 19, 2020</span>
                        <h3><a href="#">Line for the upcoming match</a></h3>
                        <p class="mb-0"><a href="#" class="more"><span class="mr-2">+</span>Learn More</a></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 mb-5 mb-lg-5">
                <div class="custom-media d-block">
                    <div class="img-wrap mb-3">
                        <a href="#"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                    <div>
                        <span class="caption">May 19, 2020</span>
                        <h3><a href="#">Roman Greg scorer 4 goals</a></h3>
                        <p class="mb-0"><a href="#" class="more"><span class="mr-2">+</span>Learn More</a></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 mb-5 mb-lg-5">
                <div class="custom-media d-block">
                    <div class="img-wrap mb-3">
                        <a href="#"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                    <div>
                        <span class="caption">May 19, 2020</span>
                        <h3><a href="#">Roman Greg scorer 4 goals</a></h3>
                        <p class="mb-0"><a href="#" class="more"><span class="mr-2">+</span>Learn More</a></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 mb-5 mb-lg-5">
                <div class="custom-media d-block">
                    <div class="img-wrap mb-3">
                        <a href="#"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                    <div>
                        <span class="caption">May 19, 2020</span>
                        <h3><a href="#">Roman Greg scorer 4 goals</a></h3>
                        <p class="mb-0"><a href="#" class="more"><span class="mr-2">+</span>Learn More</a></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 mb-5 mb-lg-5">
                <div class="custom-media d-block">
                    <div class="img-wrap mb-3">
                        <a href="#"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                    <div>
                        <span class="caption">May 19, 2020</span>
                        <h3><a href="#">Line for the upcoming match</a></h3>
                        <p class="mb-0"><a href="#" class="more"><span class="mr-2">+</span>Learn More</a></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 mb-5 mb-lg-5">
                <div class="custom-media d-block">
                    <div class="img-wrap mb-3">
                        <a href="#"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                    <div>
                        <span class="caption">May 19, 2020</span>
                        <h3><a href="#">Roman Greg scorer 4 goals</a></h3>
                        <p class="mb-0"><a href="#" class="more"><span class="mr-2">+</span>Learn More</a></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 mb-5 mb-lg-5">
                <div class="custom-media d-block">
                    <div class="img-wrap mb-3">
                        <a href="#"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                    <div>
                        <span class="caption">May 19, 2020</span>
                        <h3><a href="#">Roman Greg scorer 4 goals</a></h3>
                        <p class="mb-0"><a href="#" class="more"><span class="mr-2">+</span>Learn More</a></p>
                    </div>
                </div>
            </div>


        </div>

        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="custom-pagination">
                    <a href="#">1</a>
                    <span>2</span>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection
