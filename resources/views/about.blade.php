@extends('layouts.app')

@section('title', 'About | Daily Grind')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')
    <section class="about-hero">
        <h1>Our Story</h1>
        <p>More than coffee, a place to slow down.</p>
    </section>

    <section class="story">
        <img src="{{ asset('images/about/story.jpg') }}" alt="Iced coffee drinks at Daily Grind" class="story-img">
        <div class="story-text">
            <p class="label">Since 2020</p>
            <h2>From a small cart to your favorite corner</h2>
            <p>
                Daily Grind started as a small coffee cart near the university green gate.
                Students kept coming back for our iced coffee, and soon the line was
                longer than the cart.
            </p>
            <p>
                So we opened a real shop, a warm place where people can study, talk,
                and rest with a good cup in hand.
            </p>
        </div>
    </section>

    <section class="mission-vision">
        <div class="mv-box">
            <p class="label">Mission</p>
            <h2>Why we brew</h2>
            <p>To serve good and affordable coffee in a place where everyone feels welcome.</p>
        </div>
        <div class="mv-box">
            <p class="label">Vision</p>
            <h2>Where we are going</h2>
            <p>To be the favorite study and hangout cafe of students in Butuan City.</p>
        </div>
    </section>

    <section class="stats">
        <div class="stats-inner">
            <div class="stat">
                <span class="counter" data-target="500">0</span>
                <p>Happy Customers</p>
            </div>
            <div class="stat">
                <span class="counter" data-target="1200">0</span>
                <p>Cups Served</p>
            </div>
            <div class="stat">
                <span class="counter" data-target="15">0</span>
                <p>Drinks on the Menu</p>
            </div>
        </div>
    </section>

    <section class="team">
        <p class="label">The people behind the cup</p>
        <h2>Meet the Team</h2>
        <div class="team-cards">
            <div class="card">
                <img src="{{ asset('images/about/owner.jpg') }}" alt="Owner of Daily Grind" class="team-photo">
                <div class="card-body">
                    <h3>Ana Reyes</h3>
                    <p class="role">Owner &amp; Founder</p>
                    <p>Started the cart in 2020 and still makes the first cup every morning.</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('images/about/barista.jpg') }}" alt="Lead barista of Daily Grind" class="team-photo">
                <div class="card-body">
                    <h3>Paolo Cruz</h3>
                    <p class="role">Lead Barista</p>
                    <p>Creates our signature drinks and trains every new barista.</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('images/about/baker.jpg') }}" alt="Baker of Daily Grind" class="team-photo">
                <div class="card-body">
                    <h3>Miguel Tan</h3>
                    <p class="role">Baker</p>
                    <p>Bakes our bread and pastries fresh before the doors open.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endpush
