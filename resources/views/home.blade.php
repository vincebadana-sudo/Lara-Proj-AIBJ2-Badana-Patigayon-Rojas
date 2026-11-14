@extends('layouts.app')

@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
    <section class="hero">
        <h1>Welcome</h1>
        <p>Short description of your theme goes here.</p>
        <button id="theme-toggle">Toggle Dark Mode</button>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endpush