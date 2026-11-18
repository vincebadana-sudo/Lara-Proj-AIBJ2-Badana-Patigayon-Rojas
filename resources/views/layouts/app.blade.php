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
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #FAF5EE;
            color: #3B2314;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            transition: background 0.3s ease, color 0.3s ease;
        }

        /* Global Dark Mode Styles */
        body.dark-mode {
            background-color: #121212 !important;
            color: #E0E0E0 !important;
        }

        body.dark-mode header {
            background-color: #1E1E1E !important;
            border-bottom: 1px solid #333 !important;
        }

        body.dark-mode footer {
            background-color: #181818 !important;
            color: #AAAAAA !important;
            border-top: 1px solid #282828 !important;
        }

        /* HEADER DESIGN: Logo on Left, Nav in Center/Right, Toggle on Far Right */
        header {
            background-color: #262626;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 40px;
            border-bottom: 1px solid #333;
            position: relative;
            z-index: 1000;
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
            stroke: #FFFFFF;
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
            font-weight: bold;
        }

        /* Theme Toggle Switch on the Right */
        .theme-toggle-btn {
            background: #3b3b3b;
            border: none;
            width: 46px;
            height: 24px;
            border-radius: 12px;
            cursor: pointer;
            position: relative;
            display: flex;
            align-items: center;
            padding: 2px;
            transition: background 0.3s;
            outline: none;
        }

        .theme-toggle-icon {
            width: 20px;
            height: 20px;
            background: #111;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            color: #fff;
            transition: transform 0.3s ease;
        }

        body.dark-mode .theme-toggle-btn {
            background: #4A4A4A;
        }

        body.dark-mode .theme-toggle-icon {
            transform: translateX(22px);
            background: #FFD700;
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
        <!-- Left: Logo & Mug Icon -->
        <a href="{{ url('/') }}" class="logo-area">
            <span>DAILY</span>
            <span>GRIND</span>
            <svg class="logo-icon" viewBox="0 0 24 24" fill="none" stroke-width="2">
                <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                <line x1="2" y1="19" x2="18" y2="19"></line>
            </svg>
        </a>

        <!-- Center: Nav Links -->
        <nav>
            <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a>
            <a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
        </nav>

        <!-- Right: Theme Toggle Switch -->
        <button class="theme-toggle-btn" id="themeToggle" type="button" title="Toggle Dark/Light Mode">
            <div class="theme-toggle-icon" id="toggleIcon">🌙</div>
        </button>
    </header>

    <!-- MAIN CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer>
        &copy; 2026 Daily Grind | Badana, Patigayon, Rojas
    </footer>

    <!-- JavaScript para sa Dark Mode -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const themeToggle = document.getElementById('themeToggle');
            const toggleIcon = document.getElementById('toggleIcon');
            const body = document.body;

            if (localStorage.getItem('theme') === 'dark') {
                body.classList.add('dark-mode');
                toggleIcon.textContent = '☀️';
            }

            if (themeToggle) {
                themeToggle.addEventListener('click', () => {
                    body.classList.toggle('dark-mode');
                    if (body.classList.contains('dark-mode')) {
                        localStorage.setItem('theme', 'dark');
                        toggleIcon.textContent = '☀️';
                    } else {
                        localStorage.setItem('theme', 'light');
                        toggleIcon.textContent = '🌙';
                    }
                });
            }
        });
    </script>

    @stack('scripts')
</body>
</html>
