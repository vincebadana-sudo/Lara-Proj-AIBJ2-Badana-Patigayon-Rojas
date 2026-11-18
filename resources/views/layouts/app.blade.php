<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Daily Grind Cafe')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #1a1a1a;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* HEADER DESIGN */
        header {
            background-color: #262626;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 40px;
            border-bottom: 1px solid #333;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .logo-area {
            display: flex;
            flex-direction: column;
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 0.75rem;
            line-height: 1.1;
            letter-spacing: 0.5px;
        }

        .logo-icon {
            width: 22px;
            height: 22px;
            margin-top: 2px;
        }

        /* Theme Toggle Switch */
        .theme-toggle-btn {
            background: #3b3b3b;
            border: none;
            width: 42px;
            height: 22px;
            border-radius: 11px;
            cursor: pointer;
            position: relative;
            display: flex;
            align-items: center;
            padding: 2px;
        }

        .theme-toggle-icon {
            width: 18px;
            height: 18px;
            background: #111;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.65rem;
            color: #fff;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        nav a {
            color: #cccccc;
            text-decoration: none;
            font-size: 0.95rem;
            transition: color 0.2s;
        }

        nav a:hover, nav a.active {
            color: #ffffff;
            font-weight: 600;
        }

        main {
            flex: 1;
            width: 100%;
        }

        footer {
            background-color: #1f1f1f;
            color: #aaaaaa;
            text-align: center;
            padding: 20px 0;
            font-size: 0.88rem;
            border-top: 1px solid #2a2a2a;
            width: 100%;
        }
    </style>
    @stack('styles')
</head>
<body>

    <!-- HEADER -->
    <header>
        <div class="header-left">
            <a href="{{ url('/') }}" class="logo-area">
                <span>DAILY</span>
                <span>GRIND</span>
                <svg class="logo-icon" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2">
                    <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                    <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                    <line x1="2" y1="19" x2="18" y2="19"></line>
                </svg>
            </a>

            <button class="theme-toggle-btn" title="Toggle Dark/Light Mode">
                <div class="theme-toggle-icon">🌙</div>
            </button>
        </div>

        <nav>
            <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a>
            <a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
        </nav>
    </header>

    <!-- MAIN CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer>
        &copy; 2026 Daily Grind | Badana, Patigayon, Rojas
    </footer>

    @stack('scripts')
</body>
</html>
