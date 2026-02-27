@extends('layouts.app')

@section('title','Home')

@push('styles')

<style>
    .carousel-item {
        height: 100vh;
        width: 100%;
        overflow: hidden;
    }

    .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .carousel-caption {
        background-color: #00000090;
        opacity: 0;
        transform: translateY(60px);
        transition: all 0.6s ease-in-out;
    }

    .carousel-item:hover .carousel-caption {
        opacity: 1;
        transform: translateY(0);
    }

    .carousel-caption h5 {
        color: #ffc0cbb5;
        font-weight: 700;
        font-size: 35px;
    }

    .carousel-caption p {
        color: #f9f8f8;
        font-size: 24px;
    }

    .aboutus {
        display: grid;
        height: 500px;
        width: 100%;
        grid-template-columns: 30% 70%;
        background-color: black;
        color: whitesmoke;
    }

    .about {
        height: 350px;
        border-radius: 50%;
    }

    .aboutright h2 {
        font-size: 55px;
        color: goldenrod;
    }

    .aboutright p {
        font-size: 20px;
        line-height: 40px;
    }

    .card {
        cursor: pointer;
    }
</style>

@endpush


@section('content')

{{-- Carousel --}}
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
    </div>


    <div class="carousel-inner">

        <div class="carousel-item active">

            <img src="https://images.unsplash.com/photo-1603088549155-6ae9395b928f?q=80&w=1470&auto=format&fit=crop" class="d-block w-100">

            <div class="carousel-caption d-none d-md-block">
                <h5>Chicken Seekh Kebab</h5>
                <p>Grilled / BBQ / Tandoor style snack</p>
                <p>Cooked on charcoal flame</p>
            </div>

        </div>


        <div class="carousel-item">

            <img src="https://images.unsplash.com/photo-1719464456003-2ca534cbae6c?q=80&w=1469&auto=format&fit=crop" class="d-block w-100">

            <div class="carousel-caption d-none d-md-block">
                <h5>Chicken Shashlik</h5>
                <p>Grilled chicken skewers</p>
                <p>Boneless chicken cubes</p>
            </div>

        </div>


        <div class="carousel-item">

            <img src="https://images.unsplash.com/photo-1742315035548-32b29b9c5a62?q=80&w=1470&auto=format&fit=crop" class="d-block w-100">

            <div class="carousel-caption d-none d-md-block">
                <h5>Grilled Squid</h5>
                <p>Seafood Dish</p>
                <p>Teppan style grilling</p>
            </div>

        </div>

    </div>


    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

</div>


{{-- About Section --}}

<div class="aboutus pt-4 ps-5">

    <div class="aboutleft pt-5 ps-5">

        <a href="{{ url('about') }}">
            <img class="about" src="{{ asset('image/aboutus.png') }}">
        </a>

    </div>

    <div class="aboutright">

        <h2 class="pb-4">About Us</h2>

        <p>

            We don’t just prepare food —
            <span style="color:goldenrod">we serve flavor, freshness, and unforgettable experiences.</span>

            Our journey began with a simple idea:
            to create food that satisfies your hunger and heart.

            Every dish is crafted with passion and quality ingredients.

        </p>

    </div>

</div>


{{-- Services --}}

<section class="services py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">Our Food Services</h2>
            <p class="text-muted">Experience delicious flavors delivered with quality and care.</p>

        </div>


        <div class="row g-4">


            <div class="col-md-4">

                <div class="card shadow-sm h-100 text-center p-4">

                    <i class="fa-solid fa-motorcycle fa-3x text-danger mb-3"></i>

                    <h5 class="fw-bold">Door to Door Service</h5>

                    <p class="text-muted">
                        Enjoy fresh meals delivered directly to your home.
                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="card shadow-sm h-100 text-center p-4">

                    <i class="fa-solid fa-globe fa-3x text-primary mb-3"></i>

                    <h5 class="fw-bold">International Dishes</h5>

                    <p class="text-muted">
                        Indian, Chinese, Italian and global cuisine.
                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="card shadow-sm h-100 text-center p-4">

                    <i class="fa-solid fa-bowl-food fa-3x text-success mb-3"></i>

                    <h5 class="fw-bold">Local Special Dishes</h5>

                    <p class="text-muted">
                        Authentic traditional dishes with rich spices.
                    </p>

                </div>

            </div>


        </div>

    </div>

</section>

@endsection