@extends('layouts.app')

@section('title', 'Home | Daily Grind')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

    <!-- Hero -->
    <section class="background">
        <h1>Daily Grind</h1>
        <p>Freshly brewed coffee, warm pastries, and a cozy corner to start your day right.</p>
        <a href="/about" class="btn">Our Story</a>
    </section>

    <!-- PART 2: Featured products -->
    <section class="section featured-products">
        <div class="container">
            <h2>Featured Products</h2>
            <div class="product-grid">

                <div class="product-card" tabindex="0">
                    <div class="product-media">
                        <img src="{{ asset('images/iced_coffee.jpg') }}" alt="Iced coffee">
                        <div class="product-desc">
                            <p>Start your day with our signature blend of freshly brewed iced coffee.</p>
                        </div>
                    </div>
                    <h3>Freshly Brewed Iced Coffee</h3>
                </div>

                <div class="product-card" tabindex="0">
                    <div class="product-media">
                        <img src="{{ asset('images/iced_matcha.jpg') }}" alt="Iced matcha">
                        <div class="product-desc">
                            <p>Refresh yourself with our delicious iced matcha drink.</p>
                        </div>
                    </div>
                    <h3>Iced Matcha</h3>
                </div>

                <div class="product-card" tabindex="0">
                    <div class="product-media">
                        <img src="{{ asset('images/iced_mocha.jpg') }}" alt="Iced mocha">
                        <div class="product-desc">
                            <p>Indulge in our rich and creamy iced mocha, a perfect blend of coffee and chocolate.</p>
                        </div>
                    </div>
                    <h3>Iced Mocha</h3>
                </div>

                                <div class="product-card" tabindex="0">
                    <div class="product-media">
                        <img src="{{ asset('images/iced_caramel.jpg') }}" alt="Iced caramel">
                        <div class="product-desc">
                            <p>Delight in our sweet iced caramel drink, a perfect blend of coffee and rich caramel flavor.</p>
                        </div>
                    </div>
                    <h3>Iced Caramel</h3>
                </div>

                <div class="product-card" tabindex="0">
                    <div class="product-media">
                        <img src="{{ asset('images/iced_black_coffee.jpg') }}" alt="Iced black coffee">
                        <div class="product-desc">
                            <p>Refresh with our bold and smooth iced black coffee, perfect for coffee lovers.</p>
                        </div>
                    </div>
                    <h3>Iced Black Coffee</h3>
                </div>

                <div class="product-card" tabindex="0">
                    <div class="product-media">
                        <img src="{{ asset('images/iced_biscoff.jpg') }}" alt="Iced biscoff">
                        <div class="product-desc">
                            <p>Delight in our creamy iced biscoff drink, a perfect blend of coffee and rich biscoff flavor.</p>
                        </div>
                    </div>
                    <h3>Iced Biscoff</h3>
                </div>

            </div>
        </div>
    </section>

@endsection