<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Waffle Network — IT Solutions')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}?v=3">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.png') }}?v=3">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        [data-theme="light"] {
            --bg: #f8fafc; --bg-secondary: #ffffff; --bg-card: #ffffff;
            --text: #0f172a; --text-secondary: #475569; --text-muted: #94a3b8;
            --primary: #1d4ed8; --primary-light: #3b82f6; --primary-dark: #1e3a8a;
            --primary-bg: #eff6ff; --border: #e2e8f0; --nav-bg: rgba(248,250,252,0.95);
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.08); --shadow-md: 0 4px 16px rgba(0,0,0,0.08);
            --shadow-lg: 0 8px 32px rgba(0,0,0,0.1);
        }
        [data-theme="dark"] {
            --bg: #0a0f1e; --bg-secondary: #0f172a; --bg-card: #1e293b;
            --text: #f1f5f9; --text-secondary: #94a3b8; --text-muted: #64748b;
            --primary: #3b82f6; --primary-light: #60a5fa; --primary-dark: #2563eb;
            --primary-bg: #1e3a5f; --border: #1e293b; --nav-bg: rgba(10,15,30,0.95);
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.3); --shadow-md: 0 4px 16px rgba(0,0,0,0.3);
            --shadow-lg: 0 8px 32px rgba(0,0,0,0.4);
        }

        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            font-family: 'Inter', system-ui, sans-serif;
            background: var(--bg); color: var(--text);
            transition: background 0.3s, color 0.3s;
            overflow-x: hidden; font-size: 16px; line-height: 1.6;
        }

        /* NAV */
        nav {
            position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
            background: var(--nav-bg); backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border);
            height: 68px; display: flex; align-items: center;
            padding: 0 6%; justify-content: space-between;
        }
        .nav-logo { display: flex; align-items: center; gap: 10px; text-decoration: none; }
        .nav-logo img { width: 36px; height: 36px; object-fit: contain; border-radius: 6px; }
        .logo-text { font-size: 1.1rem; font-weight: 700; color: var(--text); letter-spacing: -0.3px; }
        .logo-text span { color: var(--primary); }
        .nav-links { display: flex; list-style: none; gap: 2rem; align-items: center; }
        .nav-links a {
            color: var(--text-secondary); text-decoration: none;
            font-size: 0.9rem; font-weight: 500; transition: color 0.2s;
            padding: 4px 0; position: relative;
        }
        .nav-links a::after {
            content: ''; position: absolute; bottom: -2px; left: 0;
            width: 0; height: 2px; background: var(--primary);
            transition: width 0.3s;
        }
        .nav-links a:hover { color: var(--primary); }
        .nav-links a:hover::after { width: 100%; }
        .nav-links a.active { color: var(--primary); }
        .nav-links a.active::after { width: 100%; }
        .nav-cta {
            background: var(--primary) !important; color: white !important;
            padding: 8px 20px !important; border-radius: 6px !important;
        }
        .nav-cta::after { display: none !important; }
        .nav-cta:hover { background: var(--primary-dark) !important; }
        .theme-btn {
            background: var(--bg-card); border: 1px solid var(--border);
            border-radius: 6px; padding: 6px 12px; font-size: 0.85rem;
            color: var(--text-secondary); cursor: pointer;
            font-family: 'Inter', sans-serif; transition: all 0.2s;
        }
        .theme-btn:hover { border-color: var(--primary); color: var(--primary); }
        .hamburger { display: none; flex-direction: column; gap: 4px; cursor: pointer; padding: 4px; }
        .hamburger span { width: 22px; height: 2px; background: var(--text); border-radius: 2px; transition: all 0.3s; display: block; }
        .hamburger.open span:nth-child(1) { transform: rotate(45deg) translate(4px, 4px); }
        .hamburger.open span:nth-child(2) { opacity: 0; }
        .hamburger.open span:nth-child(3) { transform: rotate(-45deg) translate(4px, -4px); }
        .mobile-nav {
            display: none; position: fixed; top: 68px; left: 0; right: 0;
            background: var(--nav-bg); backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border);
            padding: 1.5rem 6%; flex-direction: column; gap: 1rem; z-index: 999;
        }
        .mobile-nav.open { display: flex; }
        .mobile-nav a { color: var(--text-secondary); text-decoration: none; font-weight: 500; font-size: 0.95rem; padding-bottom: 1rem; border-bottom: 1px solid var(--border); }

        /* PAGE HEADER */
        .page-header {
            padding: 140px 6% 80px;
            background: linear-gradient(135deg, var(--bg) 0%, var(--bg-secondary) 100%);
            border-bottom: 1px solid var(--border);
        }
        .page-header .label {
            display: inline-flex; align-items: center; gap: 6px;
            background: var(--primary-bg); color: var(--primary);
            border: 1px solid rgba(29,78,216,0.2);
            padding: 5px 14px; border-radius: 100px;
            font-size: 0.8rem; font-weight: 600;
            letter-spacing: 0.5px; text-transform: uppercase; margin-bottom: 1rem;
        }
        .page-header h1 {
            font-size: clamp(2rem, 4vw, 3.2rem); font-weight: 800;
            letter-spacing: -0.5px; margin-bottom: 1rem; line-height: 1.2;
        }
        .page-header p { color: var(--text-secondary); font-size: 1.05rem; max-width: 550px; line-height: 1.7; }

        /* CONTAINER */
        .container { max-width: 1100px; margin: 0 auto; }
        section { padding: 80px 6%; }

        /* FOOTER */
        footer {
            background: var(--bg-secondary); border-top: 1px solid var(--border);
            padding: 2rem 6%; display: flex; align-items: center;
            justify-content: space-between; flex-wrap: wrap; gap: 1rem;
        }
        footer p { font-size: 0.875rem; color: var(--text-muted); }
        .footer-links { display: flex; gap: 1.5rem; }
        .footer-links a { font-size: 0.875rem; color: var(--text-muted); text-decoration: none; transition: color 0.2s; }
        .footer-links a:hover { color: var(--primary); }

        /* REVEAL ANIMATION */
        .reveal { opacity: 1; transform: translateY(0); transition: opacity 0.6s ease, transform 0.6s ease; }
        .reveal.animate-out { opacity: 0; transform: translateY(24px); }
        .reveal.visible { opacity: 1; transform: translateY(0); }
        .delay-1 { transition-delay: 0.1s; } .delay-2 { transition-delay: 0.2s; }
        .delay-3 { transition-delay: 0.3s; } .delay-4 { transition-delay: 0.4s; }
        .delay-5 { transition-delay: 0.5s; } .delay-6 { transition-delay: 0.6s; }

        /* BUTTONS */
        .btn-primary {
            background: var(--primary); color: white; padding: 12px 28px;
            border-radius: 7px; text-decoration: none; font-weight: 600;
            font-size: 0.95rem; transition: all 0.2s; display: inline-flex; align-items: center; gap: 8px;
        }
        .btn-primary:hover { background: var(--primary-dark); transform: translateY(-1px); box-shadow: var(--shadow-md); }
        .btn-outline {
            background: transparent; color: var(--text); padding: 12px 28px;
            border-radius: 7px; text-decoration: none; font-weight: 600;
            font-size: 0.95rem; border: 1px solid var(--border); transition: all 0.2s; display: inline-inline-flex;
        }
        .btn-outline:hover { border-color: var(--primary); color: var(--primary); }

        /* RESPONSIVE */
        @media (max-width: 640px) {
            .nav-links { display: none; }
            .hamburger { display: flex; }
            section { padding: 60px 5%; }
            .page-header { padding: 120px 5% 60px; }
        }

        @yield('styles')
    </style>
</head>
<body>

    <nav>
        <a href="/" class="nav-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Waffle Network">
            <span class="logo-text">Waffle <span>Network</span></span>
        </a>

        <ul class="nav-links">
            <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href="/services" class="{{ request()->is('services') ? 'active' : '' }}">Services</a></li>
            <li><a href="/portfolio" class="{{ request()->is('portfolio') ? 'active' : '' }}">Portfolio</a></li>
            <li><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About Us</a></li>
            <li><a href="/#contact" class="nav-cta">Contact</a></li>
            <li>
                <select onchange="location = this.value" class="theme-btn" style="border:1px solid var(--border); background:var(--bg-card);">
                    <option value="{{ route('lang.swap', 'en') }}" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>English</option>
                    <option value="{{ route('lang.swap', 'ms') }}" {{ app()->getLocale() === 'ms' ? 'selected' : '' }}>Bahasa Melayu</option>
                </select>
            </li>
        </ul>

        <div style="display:flex;align-items:center;gap:10px;">
            <button class="theme-btn" onclick="toggleTheme()" id="themeBtnMob">🌙 Dark</button>
            <div class="hamburger" id="ham" onclick="toggleMenu()">
                <span></span><span></span><span></span>
            </div>
        </div>
    </nav>

    <div class="mobile-nav" id="mobileNav">
        <a href="/" onclick="toggleMenu()">Home</a>
        <a href="/services" onclick="toggleMenu()">Services</a>
        <a href="/portfolio" onclick="toggleMenu()">Portfolio</a>
        <a href="/about" onclick="toggleMenu()">About Us</a>
        <a href="/#contact" onclick="toggleMenu()">Contact</a>
    </div>

    @yield('content')

    <footer>
        <p>© {{ date('Y') }} Waffle Network Sdn. Bhd. — IT Solutions</p>
        <div class="footer-links">
            <a href="#">Privacy</a>
            <a href="#">Terms</a>
            <a href="/#contact">Contact Us</a>
        </div>
    </footer>

    <script>
        function toggleTheme() {
            const isDark = document.documentElement.getAttribute('data-theme') === 'dark';
            document.documentElement.setAttribute('data-theme', isDark ? 'light' : 'dark');
            document.getElementById('themeBtn').textContent = isDark ? '🌙 Dark' : '☀️ Light';
            document.getElementById('themeBtnMob').textContent = isDark ? '🌙 Dark' : '☀️ Light';
            localStorage.setItem('theme', isDark ? 'light' : 'dark');
        }
        const saved = localStorage.getItem('theme') || 'light';
        document.documentElement.setAttribute('data-theme', saved);
        if (saved === 'dark') {
            document.getElementById('themeBtn').textContent = '☀️ Light';
            document.getElementById('themeBtnMob').textContent = '☀️ Light';
        }
        function toggleMenu() {
            document.getElementById('mobileNav').classList.toggle('open');
            document.getElementById('ham').classList.toggle('open');
        }

        // Scroll reveal animations
        const obs = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.reveal').forEach(el => {
            obs.observe(el);
        });
    </script>

    @yield('scripts')
</body>
</html>