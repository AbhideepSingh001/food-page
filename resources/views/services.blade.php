

{{-- Header Include --}}
@include('include.head')
@section('title', 'Services')

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        background: #f7f7f7;
    }

    /* HERO */
    .services-hero {
        background: #1e293b;
        color: #fff;
        text-align: center;
        padding: 70px 20px;
    }

    .services-hero h1 {
        font-size: 40px;
        margin-bottom: 10px;
    }

    .services-hero p {
        font-size: 16px;
        opacity: 0.9;
    }

    /* SERVICES */
    .services-section {
        padding: 60px 20px;
    }

    .services-container {
        max-width: 1200px;
        margin: auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
    }

    /* CARD */
    .service-card {
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
    }

    .service-card:hover {
        transform: translateY(-6px);
    }

    .service-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .service-content {
        padding: 20px;
    }

    .service-content h3 {
        font-size: 22px;
        margin-bottom: 10px;
    }

    .service-content p {
        font-size: 14px;
        color: #555;
        margin-bottom: 15px;
    }

    /* BUTTON */
    .btn {
        display: inline-block;
        padding: 10px 18px;
        background: #2563eb;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 14px;
    }

    .btn:hover {
        background: #1e40af;
    }
</style>

<body>

{{-- Navbar Include --}}
@include('partials.header')
    <section class="services-hero">
        <h1>Our Signature Dishes</h1>
        <p>Explore our wide range of delicious dishes and premium food services</p>
    </section>

    <section class="services-section">
        <div class="services-container">

            @foreach($services as $service)
            <div class="service-card">
                <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}">

                <div class="service-content">
                    <h3>{{ $service['title'] }}</h3>
                    <p>{{ $service['description'] }}</p>

                    <a href="/service/{{ $service['slug'] }}" class="btn">
                        View Service
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </section>
    {{--Footer Include--}}
@include('partials.footer')
</body>

</html>