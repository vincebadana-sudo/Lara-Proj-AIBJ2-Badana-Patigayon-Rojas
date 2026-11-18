@extends('layouts.app')

@section('title', 'About | Daily Grind')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')
    <section class="about-intro">
        <h1>About Daily Grind</h1>
        <p>
            Daily Grind started in 2020 as a small coffee cart near the university.
            Students kept coming back for our iced coffee, so we moved into a real shop
            where people can study, talk, and rest.
        </p>
    </section>

    <section class="mission-vision">
        <div class="mv-box">
            <h2>Our Mission</h2>
            <p>To serve good and affordable coffee in a place where everyone feels welcome.</p>
        </div>
        <div class="mv-box">
            <h2>Our Vision</h2>
            <p>To be the favorite study and hangout cafe of students in Butuan City.</p>
        </div>
    </section>

    <section class="stats">
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
    </section>

    <section class="team">
        <h2>Meet the Team</h2>
        <div class="team-cards">
            <div class="card">
                <div class="avatar">S1</div>
                <h3>Staff Name 1</h3>
                <p class="role">Owner</p>
                <p>Started the cafe and still makes the first cup every morning.</p>
            </div>
            <div class="card">
                <div class="avatar">S2</div>
                <h3>Staff Name 2</h3>
                <p class="role">Head Barista</p>
                <p>Creates our drinks and trains the new baristas.</p>
            </div>
            <div class="card">
                <div class="avatar">S3</div>
                <h3>Staff Name 3</h3>
                <p class="role">Baker</p>
                <p>Bakes the bread and pastries fresh every day.</p>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endpush
