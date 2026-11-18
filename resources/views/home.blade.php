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

    <!-- Short description -->
    <section class="section intro">
        <div class="container">
            <h2>Brewed with Care</h2>
            <p class="lead">
                Daily Grind is a neighborhood café built for early mornings, long study
                sessions, and slow afternoons with friends. Every cup is made from
                carefully roasted beans and served with a smile, because good coffee
                should be part of your everyday routine.
            </p>
        </div>
    </section>

@endsection