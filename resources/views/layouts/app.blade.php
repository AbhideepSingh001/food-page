    {{-- Header Include --}}
    @include('include.head')
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
        }

        .carousel-caption {
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

    <body class="d-flex flex-column min-vh-100">

        {{-- Header Include --}}
        @include('partials.header')

        {{-- Main Content --}}
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1603088549155-6ae9395b928f?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Chicken Seekh Kebab</h5>
                        <p>Type: Grilled / BBQ / Tandoor-style snack</p>
                        <p>Cooking method: Charcoal grill (open flame)</p>
                        <p>Presentation: Bamboo skewers (seekh) par laga hua minced chicken</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1719464456003-2ca534cbae6c?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Chicken Shashlik</h5>
                        <p>Type: Grilled chicken on skewers</p>
                        <p>Cooking style: Charcoal grill (open flame)</p>
                        <p>Cut style: Boneless chicken cubes (minced nahi)</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1742315035548-32b29b9c5a62?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Grilled Squid</h5>
                        <p>Category: Seafood</p>
                        <p>Cooking Style: Flat iron grill / teppan-style grilling</p>
                        <p>Preparation: Whole squid body + tentacles skewered</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        {{-- About us --}}
        <div class="aboutus pt-4 ps-5">
            <div class="aboutleft pt-5 ps-5">
                <a href="about"><img class="about" src="../../image/aboutus.png" alt=""></a>
            </div>
            <div class="aboutright">
                <h2 class="pb-4">About Us</h2>
                <p>We don’t just prepare food — <br>
                    <span style="color: goldenrod ;">we serve flavor, freshness, and unforgettable experiences.</span> <br>

                    Our journey began with a simple idea:
                    to create food that satisfies not only your hunger but also your heart. <br>

                    Every dish we serve is carefully crafted. Every ingredient is selected with attention to quality. Every recipe is prepared with passion and precision. Whether you’re craving flavorful fried rice or a rich, creamy dessert, each bite delivers the perfect balance of taste and freshness.
                </p>
            </div>
        </div>

        {{-- Service --}}
        <!-- Services Section Start -->
        <section class="services py-5 bg-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">Our Food Services</h2>
                    <p class="text-muted">Experience delicious flavors delivered with quality and care.</p>
                </div>

                <div class="row g-4">

                    <!-- Door to Door Service -->
                    <div class="col-md-4">
                        <div class="card shadow-sm h-100 text-center p-4 service-card">
                            <div class="mb-3">
                                <i class="fa-solid fa-motorcycle fa-3x text-danger"></i>
                            </div>
                            <h5 class="fw-bold">Door to Door Service</h5>
                            <p class="text-muted" style="font-family: plain light;">
                                Enjoy fresh and hot meals delivered straight to your doorstep with fast and reliable delivery service.
                            </p>
                        </div>
                    </div>

                    <!-- National & International Dishes -->
                    <div class="col-md-4">
                        <div class="card shadow-sm h-100 text-center p-4 service-card">
                            <div class="mb-3">
                                <i class="fa-solid fa-globe fa-3x text-primary"></i>
                            </div>
                            <h5 class="fw-bold">National & International Dishes</h5>
                            <p class="text-muted" style="font-family: plain light;">
                                From authentic Indian cuisine to global flavors like Chinese, Italian, and Continental dishes.
                            </p>
                        </div>
                    </div>

                    <!-- Local Dishes -->
                    <div class="col-md-4">
                        <div class="card shadow-sm h-100 text-center p-4 service-card">
                            <div class="mb-3">
                                <i class="fa-solid fa-bowl-food fa-3x text-success"></i>
                            </div>
                            <h5 class="fw-bold">Local Special Dishes</h5>
                            <p class="text-muted">
                                Taste the traditional and cultural local dishes prepared with authentic spices and fresh ingredients.
                            </p>
                        </div>
                    </div>

                    <!-- Fast Food -->
                    <div class="col-md-4">
                        <div class="card shadow-sm h-100 text-center p-4 service-card">
                            <div class="mb-3">
                                <i class="fa-solid fa-burger fa-3x text-warning"></i>
                            </div>
                            <h5 class="fw-bold">Fast Food Dishes</h5>
                            <p class="text-muted">
                                Burgers, pizzas, fries, sandwiches, and more — quick bites for your cravings anytime.
                            </p>
                        </div>
                    </div>

                    <!-- Signature Dishes -->
                    <div class="col-md-4">
                        <div class="card shadow-sm h-100 text-center p-4 service-card">
                            <div class="mb-3">
                                <i class="fa-solid fa-star fa-3x text-info"></i>
                            </div>
                            <h5 class="fw-bold">Signature Dishes</h5>
                            <p class="text-muted">
                                Our chef’s exclusive signature dishes crafted with creativity and premium ingredients.
                            </p>
                        </div>
                    </div>

                    <!-- Demanding Dishes -->
                    <div class="col-md-4">
                        <div class="card shadow-sm h-100 text-center p-4 service-card">
                            <div class="mb-3">
                                <i class="fa-solid fa-fire fa-3x text-danger"></i>
                            </div>
                            <h5 class="fw-bold">Most Demanding Dishes</h5>
                            <p class="text-muted">
                                Customer favorites and trending dishes that everyone loves and keeps coming back for.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Services Section End -->

        {{-- Footer Include --}}
        @include('partials.footer')

@include('include.tail')