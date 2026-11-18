<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Grind Cafe</title>
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

        .logo-area {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #fff;
            font-weight: bold;
            font-size: 1rem;
            text-decoration: none;
        }

        .logo-box {
            background-color: #3b2314;
            padding: 6px 10px;
            border-radius: 6px;
            font-size: 0.75rem;
            letter-spacing: 1px;
            text-align: center;
            line-height: 1.1;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        nav a {
            color: #dddddd;
            text-decoration: none;
            font-size: 0.95rem;
            transition: color 0.2s;
        }

        nav a:hover, nav a.active {
            color: #ffffff;
            font-weight: 600;
        }

        .theme-toggle {
            background: #333;
            border: none;
            color: #fff;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
        }

        /* MAIN CONTENT AREA */
        main {
            flex: 1;
        }

        /* FOOTER DESIGN */
        footer {
            background-color: #1f1f1f;
            color: #aaaaaa;
            text-align: center;
            padding: 22px 0;
            font-size: 0.88rem;
            border-top: 1px solid #2a2a2a;
        }
    </style>
    @stack('styles')
</head>
<body>

    <!-- HEADER -->
    <header>
        <a href="/" class="logo-area">
            <div class="logo-box">DAILY<br>GRIND</div>
        </a>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact" class="active">Contact</a>
            <button class="theme-toggle" title="Toggle Dark/Light Mode">🌙</button>
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
