<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Daily Grind')</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    @stack('styles')
</head>
<body>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <header class="navbar">
        <a href="/" class="brand">
            <img src="{{ asset('images/logo.svg') }}" alt="Daily Grind Logo" class="logo">
        </a>

        <nav class="nav-links">
            <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About</a>
            <a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
        </nav>

        <button id="theme-toggle"
                data-moon="{{ asset('images/night_mode.png') }}"
                data-sun="{{ asset('images/light_mode.png') }}"
                aria-label="Toggle theme">
            <span class="knob">
                <img id="theme-icon" src="{{ asset('images/light_mode.png') }}" alt="">
            </span>
        </button>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 Daily Grind | Badana, Patigayon, Rojas</p>
    </footer>

    <script src="{{ asset('js/home.js') }}"></script>
    @stack('scripts')
</body>
</html>