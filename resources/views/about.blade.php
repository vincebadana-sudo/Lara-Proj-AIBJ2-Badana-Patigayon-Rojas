@extends('layouts.app')

@section('title', 'About | Daily Grind')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')
    <section class="about-intro">
        <h1>About Daily Grind</h1>
        <p>
            Daily Grind started in 2020 as a small coffee cart near the university gate.
            Students kept coming back for our iced coffee, so we moved into a real shop
            where people can study, talk, and rest.
        </p>
    </section>
@endsection
