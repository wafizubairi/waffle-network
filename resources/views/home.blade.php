<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waffle Network</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}?v=3">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}?v=3">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.png') }}?v=3">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logo.png') }}?v=3">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* ========== VARIABLES ========== */
        [data-theme="light"] {
            --bg: #f8fafc;
            --bg-secondary: #ffffff;
            --bg-card: #ffffff;
            --text: #0f172a;
            --text-secondary: #475569;
            --text-muted: #94a3b8;
            --primary: #1d4ed8;
            --primary-light: #3b82f6;
            --primary-dark: #1e3a8a;
            --primary-bg: #eff6ff;
            --border: #e2e8f0;
            --nav-bg: rgba(248,250,252,0.95);
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.08);
            --shadow-md: 0 4px 16px rgba(0,0,0,0.08);
            --shadow-lg: 0 8px 32px rgba(0,0,0,0.1);
        }

        [data-theme="dark"] {
            --bg: #0a0f1e;
            --bg-secondary: #0f172a;
            --bg-card: #1e293b;
            --text: #f1f5f9;
            --text-secondary: #94a3b8;
            --text-muted: #64748b;
            --primary: #3b82f6;
            --primary-light: #60a5fa;
            --primary-dark: #2563eb;
            --primary-bg: #1e3a5f;
            --border: #1e293b;
            --nav-bg: rgba(10,15,30,0.95);
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.3);
            --shadow-md: 0 4px 16px rgba(0,0,0,0.3);
            --shadow-lg: 0 8px 32px rgba(0,0,0,0.4);
        }

        /* ========== RESET ========== */
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            font-family: 'Inter', system-ui, sans-serif;
            background: var(--bg);
            color: var(--text);
            transition: background 0.3s, color 0.3s;
            overflow-x: hidden;
            font-size: 16px;
            line-height: 1.6;
        }

        /* ========== NAV ========== */
        nav {
            position: fixed;
            top: 0; left: 0; right: 0;
            z-index: 1000;
            background: var(--nav-bg);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border);
            height: 68px;
            display: flex;
            align-items: center;
            padding: 0 6%;
            justify-content: space-between;
        }

        .nav-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .logo-icon {
            width: 36px;
            height: 36px;
            background: var(--primary);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .logo-text {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text);
            letter-spacing: -0.3px;
        }

        .logo-text span { color: var(--primary); }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2.5rem;
            align-items: center;
        }

        .nav-links a {
            color: var(--text-secondary);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: color 0.2s;
        }

        .nav-links a:hover { color: var(--primary); }

        .nav-cta {
            background: var(--primary);
            color: white !important;
            padding: 8px 20px;
            border-radius: 6px;
            font-size: 0.875rem !important;
            transition: background 0.2s !important;
        }
        .nav-cta:hover { background: var(--primary-dark) !important; color: white !important; }

        .theme-btn {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 6px;
            padding: 6px 12px;
            font-size: 0.85rem;
            color: var(--text-secondary);
            cursor: pointer;
            font-family: 'Inter', sans-serif;
            transition: all 0.2s;
        }
        .theme-btn:hover { border-color: var(--primary); color: var(--primary); }

        .hamburger {
            display: none;
            flex-direction: column;
            gap: 4px;
            cursor: pointer;
            padding: 4px;
        }
        .hamburger span {
            width: 22px;
            height: 2px;
            background: var(--text);
            border-radius: 2px;
            transition: all 0.3s;
            display: block;
        }
        .hamburger.open span:nth-child(1) { transform: rotate(45deg) translate(4px, 4px); }
        .hamburger.open span:nth-child(2) { opacity: 0; }
        .hamburger.open span:nth-child(3) { transform: rotate(-45deg) translate(4px, -4px); }

        .mobile-nav {
            display: none;
            position: fixed;
            top: 68px; left: 0; right: 0;
            background: var(--nav-bg);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border);
            padding: 1.5rem 6%;
            flex-direction: column;
            gap: 1.2rem;
            z-index: 999;
        }
        .mobile-nav.open { display: flex; }
        .mobile-nav a {
            color: var(--text-secondary);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--border);
        }

        /* ========== SECTIONS ========== */
        section { padding: 96px 6%; }
        .container { max-width: 1100px; margin: 0 auto; }

        .label {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: var(--primary-bg);
            color: var(--primary);
            border: 1px solid rgba(29,78,216,0.2);
            padding: 5px 14px;
            border-radius: 100px;
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-bottom: 1.2rem;
        }

        .section-title {
            font-size: clamp(1.8rem, 3.5vw, 2.5rem);
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -0.5px;
            margin-bottom: 1rem;
        }

        .section-desc {
            color: var(--text-secondary);
            font-size: 1.05rem;
            max-width: 520px;
            line-height: 1.7;
        }

        /* ========== HERO ========== */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding-top: 68px;
            background: var(--bg);
            position: relative;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--primary-bg);
            color: var(--primary);
            border: 1px solid rgba(29,78,216,0.2);
            padding: 6px 16px;
            border-radius: 100px;
            font-size: 0.82rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            animation: fadeUp 0.7s ease both;
        }

        .hero h1 {
            font-size: clamp(2.2rem, 4.5vw, 3.8rem);
            font-weight: 800;
            line-height: 1.1;
            letter-spacing: -1px;
            margin-bottom: 1.5rem;
            animation: fadeUp 0.7s ease 0.1s both;
        }

        .hero h1 .highlight { color: var(--primary); }

        .hero-desc {
            color: var(--text-secondary);
            font-size: 1.05rem;
            line-height: 1.75;
            margin-bottom: 2.5rem;
            max-width: 460px;
            animation: fadeUp 0.7s ease 0.2s both;
        }

        .hero-actions {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            animation: fadeUp 0.7s ease 0.3s both;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            padding: 12px 28px;
            border-radius: 7px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-primary:hover { background: var(--primary-dark); transform: translateY(-1px); box-shadow: var(--shadow-md); }

        .btn-outline {
            background: transparent;
            color: var(--text);
            padding: 12px 28px;
            border-radius: 7px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            border: 1px solid var(--border);
            transition: all 0.2s;
        }
        .btn-outline:hover { border-color: var(--primary); color: var(--primary); transform: translateY(-1px); }

        /* Hero visual */
        .hero-visual {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            animation: fadeUp 0.7s ease 0.4s both;
        }

        .hero-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 1.25rem;
            box-shadow: var(--shadow-sm);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .hero-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
        .hero-card:first-child { grid-column: span 2; }

        .card-icon-wrap {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            margin-bottom: 0.8rem;
        }

        .icon-blue { background: #eff6ff; }
        .icon-green { background: #f0fdf4; }
        .icon-purple { background: #faf5ff; }
        .icon-orange { background: #fff7ed; }
        .icon-red { background: #fef2f2; }
        .icon-teal { background: #f0fdfa; }

        .hero-card h4 {
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 0.3rem;
        }
        .hero-card p {
            font-size: 0.8rem;
            color: var(--text-secondary);
            line-height: 1.5;
        }

        .hero-stat {
            display: flex;
            align-items: baseline;
            gap: 4px;
            margin-top: 0.5rem;
        }
        .stat-num {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--primary);
        }
        .stat-label { font-size: 0.75rem; color: var(--text-muted); }

        /* ========== STATS BAR ========== */
        .stats-bar {
            background: var(--primary);
            padding: 48px 6%;
        }

        .stats-bar .container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            text-align: center;
        }

        .stat-item h3 {
            font-size: 2.5rem;
            font-weight: 800;
            color: white;
            letter-spacing: -1px;
        }
        .stat-item p {
            color: rgba(255,255,255,0.75);
            font-size: 0.9rem;
            margin-top: 4px;
        }

        /* ========== SERVICES ========== */
        .services { background: var(--bg-secondary); }

        .services-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 3rem;
            flex-wrap: wrap;
            gap: 1.5rem;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.25rem;
        }

        .service-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 1.75rem;
            transition: all 0.25s;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 3px;
            background: var(--primary);
            transform: scaleX(0);
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
            border-color: rgba(29,78,216,0.2);
        }

        .service-card:hover::before { transform: scaleX(1); }

        .service-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            margin-bottom: 1.2rem;
        }

        .service-card h3 {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 0.6rem;
        }

        .service-card p {
            color: var(--text-secondary);
            font-size: 0.9rem;
            line-height: 1.65;
        }

        .service-tag {
            display: inline-block;
            margin-top: 1rem;
            background: var(--primary-bg);
            color: var(--primary);
            font-size: 0.75rem;
            font-weight: 600;
            padding: 3px 10px;
            border-radius: 100px;
        }

        /* ========== CAROUSEL ========== */
        .carousel-section { background: var(--bg); }

        .carousel-outer {
            position: relative;
            overflow: hidden;
            border-radius: 14px;
            border: 1px solid var(--border);
            box-shadow: var(--shadow-lg);
        }

        .carousel-track {
            display: flex;
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .carousel-slide {
            min-width: 100%;
            padding: 3rem;
            display: flex;
            align-items: center;
            gap: 3rem;
            background: var(--bg-card);
        }

        .slide-content { flex: 1; }
        .slide-content h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
        }
        .slide-content p {
            color: var(--text-secondary);
            font-size: 0.95rem;
            line-height: 1.7;
            margin-bottom: 1.25rem;
        }

        .slide-tag {
            background: var(--primary-bg);
            color: var(--primary);
            font-size: 0.75rem;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 100px;
        }

        .slide-visual {
            width: 180px;
            height: 180px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 5rem;
            flex-shrink: 0;
        }

        .slide-v1 { background: #eff6ff; }
        .slide-v2 { background: #f0fdf4; }
        .slide-v3 { background: #faf5ff; }
        .slide-v4 { background: #fff7ed; }
        .slide-v5 { background: #fef2f2; }
        .slide-v6 { background: #f0fdfa; }

        .carousel-controls {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 1.25rem;
        }

        .carousel-dots { display: flex; gap: 6px; }
        .dot {
            width: 8px;
            height: 8px;
            border-radius: 100px;
            background: var(--border);
            cursor: pointer;
            transition: all 0.3s;
        }
        .dot.active {
            background: var(--primary);
            width: 24px;
        }

        .carousel-btns { display: flex; gap: 8px; }
        .c-btn {
            width: 38px;
            height: 38px;
            border-radius: 8px;
            border: 1px solid var(--border);
            background: var(--bg-card);
            color: var(--text);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            transition: all 0.2s;
        }
        .c-btn:hover { border-color: var(--primary); color: var(--primary); }

        /* ========== WHY US ========== */
        .why-us { background: var(--bg-secondary); }
        .why-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .why-list { display: flex; flex-direction: column; gap: 1.25rem; }
        .why-item {
            display: flex;
            gap: 1rem;
            align-items: flex-start;
        }
        .check {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            flex-shrink: 0;
            margin-top: 2px;
        }
        .why-item h4 {
            font-size: 0.95rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }
        .why-item p {
            font-size: 0.875rem;
            color: var(--text-secondary);
            line-height: 1.6;
        }

        .why-metrics {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .metric {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
        }
        .metric h3 {
            font-size: 2rem;
            font-weight: 800;
            color: var(--primary);
            letter-spacing: -0.5px;
        }
        .metric p {
            font-size: 0.85rem;
            color: var(--text-secondary);
            margin-top: 4px;
        }

        /* ========== CTA ========== */
        .cta-section {
            background: var(--primary-dark);
            padding: 96px 6%;
            text-align: center;
        }
        .cta-section h2 {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 800;
            color: white;
            letter-spacing: -0.5px;
            margin-bottom: 1rem;
        }
        .cta-section p {
            color: rgba(255,255,255,0.75);
            font-size: 1.05rem;
            max-width: 480px;
            margin: 0 auto 2.5rem;
            line-height: 1.7;
        }
        .btn-white {
            background: white;
            color: var(--primary-dark);
            padding: 14px 32px;
            border-radius: 7px;
            font-weight: 700;
            font-size: 1rem;
            text-decoration: none;
            transition: all 0.2s;
            display: inline-block;
        }
        .btn-white:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0,0,0,0.2); }

        /* ========== FOOTER ========== */
        footer {
            background: var(--bg-secondary);
            border-top: 1px solid var(--border);
            padding: 2rem 6%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1rem;
        }
        footer p { font-size: 0.875rem; color: var(--text-muted); }
        .footer-links { display: flex; gap: 1.5rem; }
        .footer-links a {
            font-size: 0.875rem;
            color: var(--text-muted);
            text-decoration: none;
            transition: color 0.2s;
        }
        .footer-links a:hover { color: var(--primary); }

        /* ========== ANIMATIONS ========== */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        .reveal.visible { opacity: 1; transform: translateY(0); }
        .delay-1 { transition-delay: 0.1s; }
        .delay-2 { transition-delay: 0.2s; }
        .delay-3 { transition-delay: 0.3s; }
        .delay-4 { transition-delay: 0.4s; }
        .delay-5 { transition-delay: 0.5s; }
        .delay-6 { transition-delay: 0.6s; }

        /* ========== RESPONSIVE ========== */
        @media (max-width: 900px) {
            .hero-grid { grid-template-columns: 1fr; }
            .hero-visual { display: none; }
            .services-grid { grid-template-columns: 1fr 1fr; }
            .stats-bar .container { grid-template-columns: repeat(2, 1fr); }
            .why-grid { grid-template-columns: 1fr; }
            .carousel-slide { flex-direction: column; text-align: center; }
            .slide-visual { width: 120px; height: 120px; font-size: 3.5rem; }
        }

        @media (max-width: 640px) {
            .nav-links { display: none; }
            .hamburger { display: flex; }
            .services-grid { grid-template-columns: 1fr; }
            .stats-bar .container { grid-template-columns: 1fr 1fr; }
            section { padding: 72px 5%; }
        }
    </style>
</head>
<body>

    {{-- ===== NAV ===== --}}
    <nav>
        <a href="#" class="nav-logo">
            <img src="{{ asset('images/logo.png') }}" 
                alt="Waffle Network Logo" 
                style="width:36px; height:36px; object-fit:contain; border-radius:6px;">
            <span class="logo-text">Waffle <span>Network</span></span>
        </a>

        <ul class="nav-links">
            <li><a href="#services">@lang('home.services')</a></li>
            <li><a href="#portfolio">@lang('home.portfolio')</a></li>
            <li><a href="#about">@lang('home.about_us')</a></li>
            <li><a href="#contact" class="nav-cta">@lang('home.contact')</a></li>
            <li>
                <select onchange="location = this.value" class="theme-btn" style="border:1px solid var(--border); background:var(--bg-card);">
                    <option value="{{ route('lang.swap', 'en') }}" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>English</option>
                    <option value="{{ route('lang.swap', 'ms') }}" {{ app()->getLocale() === 'ms' ? 'selected' : '' }}>Bahasa Melayu</option>
                </select>
            </li>
        </ul>

        <div style="display:flex;align-items:center;gap:10px;">
            <button class="theme-btn" onclick="toggleTheme()" id="themeBtn">🌙</button>
            <div class="hamburger" id="ham" onclick="toggleMenu()">
                <span></span><span></span><span></span>
            </div>
        </div>
    </nav>

    <div class="mobile-nav" id="mobileNav">
        <a href="#services" onclick="toggleMenu()">@lang('home.services')</a>
        <a href="#portfolio" onclick="toggleMenu()">@lang('home.portfolio')</a>
        <a href="#about" onclick="toggleMenu()">@lang('home.about_us')</a>
        <a href="#contact" onclick="toggleMenu()">@lang('home.contact')</a>
    </div>

    {{-- ===== HERO ===== --}}
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content">
                    <div class="hero-badge">🧇 Waffle Network — IT Solutions</div>
                    <h1>@lang('home.hero_title') <span class="highlight">@lang('home.hero_all')</span></h1>
                    <p class="hero-desc">@lang('home.hero_desc')</p>
                    <div class="hero-actions">
                        <a href="#services" class="btn-primary">@lang('home.view_services')</a>
                        <a href="#contact" class="btn-outline">@lang('home.contact_us')</a>
                    </div>
                </div>

                <div class="hero-visual">
                    <div class="hero-card">
                        <div class="card-icon-wrap icon-blue">🌐</div>
                        <h4>Web Development</h4>
                        <p>Modern & responsive websites for your business</p>
                        <div class="hero-stat">
                            <span class="stat-num">50+</span>
                            <span class="stat-label">projects completed</span>
                        </div>
                    </div>
                    <div class="hero-card">
                        <div class="card-icon-wrap icon-red">🔒</div>
                        <h4>Cybersecurity</h4>
                        <p>Protect your systems from cyber threats</p>
                    </div>
                    <div class="hero-card">
                        <div class="card-icon-wrap icon-purple">☁️</div>
                        <h4>Cloud Services</h4>
                        <p>Scalable cloud infrastructure</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== STATS ===== --}}
    <div class="stats-bar">
        <div class="container">
            <div class="stat-item reveal">
                <h3>100+</h3>
                <p>@lang('home.satisfied_clients')</p>
            </div>
            <div class="stat-item reveal delay-2">
                <h3>5+</h3>
                <p>@lang('home.years_experience')</p>
            </div>
            <div class="stat-item reveal delay-3">
                <h3>99.9%</h3>
                <p>@lang('home.uptime_guaranteed')</p>
            </div>
            <div class="stat-item reveal delay-4">
                <h3>24/7</h3>
                <p>@lang('home.technical_support')</p>
            </div>
        </div>
    </div>

    {{-- ===== SERVICES ===== --}}
    <section class="services" id="services">
        <div class="container">
            <div class="services-header">
                <div>
                    <div class="label reveal">⚡ @lang('home.our_services')</div>
                    <h2 class="section-title reveal">@lang('home.what_we_offer')</h2>
                    <p class="section-desc reveal">@lang('home.services_desc')</p>
                </div>
            </div>

            <div class="services-grid">
                <div class="service-card reveal delay-1">
                    <div class="service-icon icon-blue">🌐</div>
                    <h3>Web Development</h3>
                    <p>Development of modern, fast, and responsive websites and web applications using the latest technology.</p>
                    <span class="service-tag">Laravel · React · PHP</span>
                </div>
                <div class="service-card reveal delay-2">
                    <div class="service-icon icon-teal">🔗</div>
                    <h3>Network & Infrastructure</h3>
                    <p>Design, installation, and maintenance of stable and secure corporate networks.</p>
                    <span class="service-tag">Cisco · Mikrotik · Fiber</span>
                </div>
                <div class="service-card reveal delay-3">
                    <div class="service-icon icon-red">🔒</div>
                    <h3>Cybersecurity</h3>
                    <p>Security assessments, penetration testing, and system protection from the latest cyber threats.</p>
                    <span class="service-tag">Firewall · VPN · SOC</span>
                </div>
                <div class="service-card reveal delay-4">
                    <div class="service-icon icon-purple">☁️</div>
                    <h3>Cloud Services</h3>
                    <p>Cloud migration, infrastructure management, and cost optimization for AWS, Azure, and GCP.</p>
                    <span class="service-tag">AWS · Azure · GCP</span>
                </div>
                <div class="service-card reveal delay-5">
                    <div class="service-icon icon-orange">🛠️</div>
                    <h3>IT Support & Maintenance</h3>
                    <p>24/7 technical support, regular system maintenance, and fast IT troubleshooting.</p>
                    <span class="service-tag">Helpdesk · On-site · Remote</span>
                </div>
                <div class="service-card reveal delay-6">
                    <div class="service-icon icon-green">💻</div>
                    <h3>Software Development</h3>
                    <p>Development of custom software, ERP systems, mobile applications, and API integration according to business needs.</p>
                    <span class="service-tag">Mobile · ERP · API</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== PORTFOLIO CAROUSEL ===== --}}
    <section class="carousel-section" id="portfolio">
        <div class="container">
            <div class="label reveal">📁 Portfolios</div>
            <h2 class="section-title reveal">OUR <span style="color:var(--primary)">LATEST</span> PROJECTS</h2>
            <p class="section-desc reveal" style="margin-bottom:2.5rem;">Part of the projects we’ve completed for our clients.</p>

            <div class="carousel-outer reveal">
                <div class="carousel-track" id="track">
                    <div class="carousel-slide">
                        <div class="slide-content">
                            <span class="slide-tag">Web Development</span>
                            <h3 style="margin-top:0.75rem;">eCommerce system for a retail company</h3>
                            <p>Online buying and selling platform complete with inventory system, automatic payments, and analytics dashboard for local retail clients.</p>
                            <p style="font-size:0.82rem;color:var(--text-muted);">Laravel · MySQL · Payment Gateway</p>
                        </div>
                        <div class="slide-visual slide-v1">🛒</div>
                    </div>
                    <div class="carousel-slide">
                        <div class="slide-content">
                            <span class="slide-tag">Network & Infrastructure</span>
                            <h3 style="margin-top:0.75rem;">Corporate network for 500 users</h3>
                            <p>Design and installation of enterprise network for a multinational company with 3 branches and over 500 concurrent users.</p>
                            <p style="font-size:0.82rem;color:var(--text-muted);">Cisco · Fortinet · SD-WAN</p>
                        </div>
                        <div class="slide-visual slide-v2">🔗</div>
                    </div>
                    <div class="carousel-slide">
                        <div class="slide-content">
                            <span class="slide-tag">Cybersecurity</span>
                            <h3 style="margin-top:0.75rem;">Security audit for a financial firm</h3>
                            <p>Comprehensive security assessment including penetration testing, vulnerability assessment, and SOC implementation for financial institutions.</p>
                            <p style="font-size:0.82rem;color:var(--text-muted);">SIEM · WAF · ISO 27001</p>
                        </div>
                        <div class="slide-visual slide-v3">🔒</div>
                    </div>
                    <div class="carousel-slide">
                        <div class="slide-content">
                            <span class="slide-tag">Cloud Services</span>
                            <h3 style="margin-top:0.75rem;">Cloud migration for a logistics company</h3>
                            <p>Migration of on-premise infrastructure to AWS with zero downtime, saving 40% in annual operational costs for clients in the logistics sector.</p>
                            <p style="font-size:0.82rem;color:var(--text-muted);">AWS · Terraform · Docker</p>
                        </div>
                        <div class="slide-visual slide-v4">☁️</div>
                    </div>
                    <div class="carousel-slide">
                        <div class="slide-content">
                            <span class="slide-tag">Software Development</span>
                            <h3 style="margin-top:0.75rem;">eCommerce system for a retail company</h3>
                            <p>Online buying and selling platform complete with inventory system, automatic payments, and analytics dashboard for local retail clients.</p>
                            <p style="font-size:0.82rem;color:var(--text-muted);">PHP · Vue.js · MySQL</p>
                        </div>
                        <div class="slide-visual slide-v5">💻</div>
                    </div>
                    <div class="carousel-slide">
                        <div class="slide-content">
                            <span class="slide-tag">IT Support</span>
                            <h3 style="margin-top:0.75rem;">IT support contract for a private hospital</h3>
                            <p>Comprehensive IT infrastructure management for a private hospital with a 99.99% uptime SLA and 24/7 technical support throughout the year.</p>
                            <p style="font-size:0.82rem;color:var(--text-muted);">Helpdesk · On-site · ITIL</p>
                        </div>
                        <div class="slide-visual slide-v6">🏥</div>
                    </div>
                </div>
            </div>

            <div class="carousel-controls">
                <div class="carousel-dots" id="dots">
                    <div class="dot active" onclick="goTo(0)"></div>
                    <div class="dot" onclick="goTo(1)"></div>
                    <div class="dot" onclick="goTo(2)"></div>
                    <div class="dot" onclick="goTo(3)"></div>
                    <div class="dot" onclick="goTo(4)"></div>
                    <div class="dot" onclick="goTo(5)"></div>
                </div>
                <div class="carousel-btns">
                    <button class="c-btn" onclick="move(-1)">‹</button>
                    <button class="c-btn" onclick="move(1)">›</button>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== WHY US ===== --}}
    <section class="why-us" id="about">
        <div class="container">
            <div class="why-grid">
                <div>
                    <div class="label reveal">🏆 @lang('home.why_choose_us')</div>
                    <h2 class="section-title reveal">@lang('home.why_choose_us') <span style="color:var(--primary)">@lang('home.the_rest')</span></h2>
                    <p class="section-desc reveal" style="margin-bottom:2rem;">@lang('home.longterm_partner')</p>

                    <div class="why-list">
                        <div class="why-item reveal delay-1">
                            <div class="check">✓</div>
                            <div>
                                <h4>Experienced Team</h4>
                                <p>Certified engineers with over 5 years of experience across various industries and technologies.</p>
                            </div>
                        </div>
                        <div class="why-item reveal delay-2">
                            <div class="check">✓</div>
                            <div>
                                <h4>Fast Response</h4>
                                <p>SLA guaranteed with response time under 1 hour for critical issues and 24/7/365 support.</p>
                            </div>
                        </div>
                        <div class="why-item reveal delay-3">
                            <div class="check">✓</div>
                            <div>
                                <h4>Transparent Pricing</h4>
                                <p>No hidden fees. Clear and competitive pricing based on your actual needs.</p>
                            </div>
                        </div>
                        <div class="why-item reveal delay-4">
                            <div class="check">✓</div>
                            <div>
                                <h4>Custom Solutions</h4>
                                <p>We design solutions tailored to your specific business requirements, not generic templates.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="why-metrics">
                    <div class="metric reveal delay-1">
                        <h3>100+</h3>
                        <p>Active Clients</p>
                    </div>
                    <div class="metric reveal delay-2">
                        <h3>99.9%</h3>
                        <p>Uptime SLA</p>
                    </div>
                    <div class="metric reveal delay-3">
                        <h3>&lt;1j</h3>
                        <p>Response Time</p>
                    </div>
                    <div class="metric reveal delay-4">
                        <h3>5★</h3>
                        <p>Client Rating</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== CONTACT FORM ===== --}}
    <section id="contact" style="background:var(--bg-secondary); padding:96px 6%;">
        <div class="container">
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:start;">

                {{-- Left side --}}
                <div>
                    <div class="label reveal">📞 @lang('home.contact_us')</div>
                    <h2 class="section-title reveal">@lang('home.ready_get_started')</h2>
                    <p class="section-desc reveal" style="margin-bottom:2rem;">@lang('home.form_desc')</p>

                    <div class="why-list">
                        <div class="why-item reveal delay-1">
                            <div class="check">✓</div>
                            <div>
                                <h4>Free Consultation</h4>
                                <p>Initial consultation session with no obligation to understand your needs.</p>
                            </div>
                        </div>
                        <div class="why-item reveal delay-2">
                            <div class="check">✓</div>
                            <div>
                                <h4>Quote Within 24 Hours</h4>
                                <p>We will provide a detailed proposal and quote quickly.</p>
                            </div>
                        </div>
                        <div class="why-item reveal delay-3">
                            <div class="check">✓</div>
                            <div>
                                <h4>No Upfront Commitment</h4>
                                <p>You are free to make a decision without any pressure from us.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right side — Form --}}
                <div class="reveal delay-2">
                    @if(session('success'))
                        <div style="background:#f0fdf4; border:1px solid #bbf7d0; color:#166534; padding:16px 20px; border-radius:10px; margin-bottom:1.5rem; font-size:0.9rem; line-height:1.6;">
                            ✅ {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST"
                        style="background:var(--bg-card); border:1px solid var(--border); border-radius:14px; padding:2rem; box-shadow:var(--shadow-md);">
                        @csrf

                        <div style="margin-bottom:1.25rem;">
                            <label style="display:block; font-size:0.85rem; font-weight:600; margin-bottom:6px; color:var(--text);">@lang('home.full_name')</label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                placeholder="Example: Ahmad bin Ali"
                                style="width:100%; padding:10px 14px; border:1px solid var(--border); border-radius:7px; background:var(--bg); color:var(--text); font-size:0.9rem; font-family:'Inter',sans-serif; outline:none; transition:border 0.2s;"
                                onfocus="this.style.borderColor='var(--primary)'"
                                onblur="this.style.borderColor='var(--border)'">
                            @error('name') <p style="color:#ef4444; font-size:0.8rem; margin-top:4px;">{{ $message }}</p> @enderror
                        </div>

                        <div style="margin-bottom:1.25rem;">
                            <label style="display:block; font-size:0.85rem; font-weight:600; margin-bottom:6px; color:var(--text);">@lang('home.email_address')</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                placeholder="example@email.com"
                                style="width:100%; padding:10px 14px; border:1px solid var(--border); border-radius:7px; background:var(--bg); color:var(--text); font-size:0.9rem; font-family:'Inter',sans-serif; outline:none; transition:border 0.2s;"
                                onfocus="this.style.borderColor='var(--primary)'"
                                onblur="this.style.borderColor='var(--border)'">
                            @error('email') <p style="color:#ef4444; font-size:0.8rem; margin-top:4px;">{{ $message }}</p> @enderror
                        </div>

                        <div style="margin-bottom:1.25rem;">
                            <label style="display:block; font-size:0.85rem; font-weight:600; margin-bottom:6px; color:var(--text);">@lang('home.phone_number')</label>
                            <input type="text" name="phone" value="{{ old('phone') }}"
                                placeholder="011-1234 5678"
                                style="width:100%; padding:10px 14px; border:1px solid var(--border); border-radius:7px; background:var(--bg); color:var(--text); font-size:0.9rem; font-family:'Inter',sans-serif; outline:none; transition:border 0.2s;"
                                onfocus="this.style.borderColor='var(--primary)'"
                                onblur="this.style.borderColor='var(--border)'">
                        </div>

                        <div style="margin-bottom:1.25rem;">
                            <label style="display:block; font-size:0.85rem; font-weight:600; margin-bottom:6px; color:var(--text);">@lang('home.service_interest')</label>
                            <select name="service"
                                style="width:100%; padding:10px 14px; border:1px solid var(--border); border-radius:7px; background:var(--bg); color:var(--text); font-size:0.9rem; font-family:'Inter',sans-serif; outline:none; transition:border 0.2s; cursor:pointer;"
                                onfocus="this.style.borderColor='var(--primary)'"
                                onblur="this.style.borderColor='var(--border)'">
                                <option value="">-- Choose Service --</option>
                                <option value="Web Development" {{ old('service') == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                                <option value="Network & Infrastructure" {{ old('service') == 'Network & Infrastructure' ? 'selected' : '' }}>Network & Infrastructure</option>
                                <option value="Cybersecurity" {{ old('service') == 'Cybersecurity' ? 'selected' : '' }}>Cybersecurity</option>
                                <option value="Cloud Services" {{ old('service') == 'Cloud Services' ? 'selected' : '' }}>Cloud Services</option>
                                <option value="IT Support & Maintenance" {{ old('service') == 'IT Support & Maintenance' ? 'selected' : '' }}>IT Support & Maintenance</option>
                                <option value="Software Development" {{ old('service') == 'Software Development' ? 'selected' : '' }}>Software Development</option>
                                <option value="Others" {{ old('service') == 'Others' ? 'selected' : '' }}>Others</option>
                            </select>
                            @error('service') <p style="color:#ef4444; font-size:0.8rem; margin-top:4px;">{{ $message }}</p> @enderror
                        </div>

                        <div style="margin-bottom:1.5rem;">
                            <label style="display:block; font-size:0.85rem; font-weight:600; margin-bottom:6px; color:var(--text);">@lang('home.message')</label>
                            <textarea name="message" rows="4"
                                placeholder="@lang('home.message_placeholder')"
                                style="width:100%; padding:10px 14px; border:1px solid var(--border); border-radius:7px; background:var(--bg); color:var(--text); font-size:0.9rem; font-family:'Inter',sans-serif; outline:none; transition:border 0.2s; resize:vertical;"
                                onfocus="this.style.borderColor='var(--primary)'"
                                onblur="this.style.borderColor='var(--border)'">{{ old('message') }}</textarea>
                            @error('message') <p style="color:#ef4444; font-size:0.8rem; margin-top:4px;">{{ $message }}</p> @enderror
                        </div>

                        <button type="submit"
                            style="width:100%; padding:12px; background:var(--primary); color:white; border:none; border-radius:7px; font-size:0.95rem; font-weight:700; cursor:pointer; font-family:'Inter',sans-serif; transition:background 0.2s;"
                            onmouseover="this.style.background='var(--primary-dark)'"
                            onmouseout="this.style.background='var(--primary)'">
                            Send Message →
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== CTA STRIP ===== --}}
    <section style="background:var(--primary-dark); padding:60px 6%; text-align:center;">
        <h2 style="color:white; font-size:1.5rem; font-weight:700; margin-bottom:0.5rem;">@lang('home.or_contact_directly')</h2>
        <p style="color:rgba(255,255,255,0.75); margin-bottom:1.5rem;">hello@wafflenetwork.my | +60 11-1234 5678</p>
        <a href="mailto:hello@wafflenetwork.my?subject=Website%20Inquiry" class="btn-white">@lang('home.email_us')</a>
    </section>

    {{-- ===== FOOTER ===== --}}
    <footer>
        <p>© {{ date('Y') }} Waffle Network </p>
        <div class="footer-links">
            <a href="#">@lang('home.privacy')</a>
            <a href="#">@lang('home.terms')</a>
            <a href="#">@lang('home.contact_us')</a>
        </div>
    </footer>

    {{-- ===== JS ===== --}}
    <script>
        // Theme
        function toggleTheme() {
            const isDark = document.documentElement.getAttribute('data-theme') === 'dark';
            document.documentElement.setAttribute('data-theme', isDark ? 'light' : 'dark');
            const icon = isDark ? '🌙' : '☀️';
            const themeBtn = document.getElementById('themeBtn');
            if (themeBtn) themeBtn.textContent = icon;
            const themeBtnMob = document.getElementById('themeBtnMob');
            if (themeBtnMob) themeBtnMob.textContent = icon;
            localStorage.setItem('theme', isDark ? 'light' : 'dark');
        }
        const saved = localStorage.getItem('theme') || 'light';
        document.documentElement.setAttribute('data-theme', saved);

        const themeBtn = document.getElementById('themeBtn');
        if (themeBtn) themeBtn.textContent = saved === 'dark' ? '☀️' : '🌙';

        const themeBtnMob = document.getElementById('themeBtnMob');
        if (themeBtnMob) themeBtnMob.textContent = saved === 'dark' ? '☀️' : '🌙';

        // Mobile menu
        function toggleMenu() {
            document.getElementById('mobileNav').classList.toggle('open');
            document.getElementById('ham').classList.toggle('open');
        }

        // Carousel
        let cur = 0;
        const total = 6;
        let timer;

        function move(dir) {
            cur = (cur + dir + total) % total;
            update();
            reset();
        }

        function goTo(n) {
            cur = n;
            update();
            reset();
        }

        function update() {
            document.getElementById('track').style.transform = `translateX(-${cur * 100}%)`;
            document.querySelectorAll('.dot').forEach((d, i) => d.classList.toggle('active', i === cur));
        }

        function reset() {
            clearInterval(timer);
            timer = setInterval(() => move(1), 5000);
        }

        reset();

        // Scroll reveal
        const obs = new IntersectionObserver(entries => {
            entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
        }, { threshold: 0.12 });

        document.querySelectorAll('.reveal').forEach(el => obs.observe(el));
    </script>
</body>
</html>