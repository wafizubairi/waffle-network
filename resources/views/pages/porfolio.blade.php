@extends('layouts.main')

@section('title', 'Portfolio — Waffle Network')

@section('styles')
<style>
    .filter-tabs { display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 2.5rem; }
    .filter-btn {
        padding: 8px 20px; border-radius: 100px; border: 1px solid var(--border);
        background: var(--bg-card); color: var(--text-secondary); cursor: pointer;
        font-size: 0.875rem; font-weight: 500; transition: all 0.2s; font-family: 'Inter', sans-serif;
    }
    .filter-btn:hover { border-color: var(--primary); color: var(--primary); }
    .filter-btn.active { background: var(--primary); color: white; border-color: var(--primary); }
    .portfolio-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; }
    .portfolio-card {
        background: var(--bg-card); border: 1px solid var(--border);
        border-radius: 14px; overflow: hidden; transition: all 0.3s;
    }
    .portfolio-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
    .card-visual {
        height: 180px; display: flex; align-items: center;
        justify-content: center; font-size: 4rem;
    }
    .card-body { padding: 1.5rem; }
    .card-category {
        display: inline-block; background: var(--primary-bg); color: var(--primary);
        font-size: 0.75rem; font-weight: 600; padding: 3px 10px;
        border-radius: 100px; margin-bottom: 0.75rem;
    }
    .card-body h3 { font-size: 1rem; font-weight: 700; margin-bottom: 0.5rem; }
    .card-body p { color: var(--text-secondary); font-size: 0.875rem; line-height: 1.6; margin-bottom: 1rem; }
    .card-tags { display: flex; flex-wrap: wrap; gap: 6px; }
    .tag { background: var(--bg); border: 1px solid var(--border); color: var(--text-muted); font-size: 0.75rem; padding: 2px 8px; border-radius: 4px; }
    .hidden { display: none; }
    @media (max-width: 900px) { .portfolio-grid { grid-template-columns: 1fr 1fr; } }
    @media (max-width: 640px) { .portfolio-grid { grid-template-columns: 1fr; } }
</style>
@endsection

@section('content')

<div class="page-header">
    <div class="container">
        <div class="label">📁 Our Work</div>
        <h1>Our <span style="color:var(--primary)">Portfolio</span></h1>
        <p>A showcase of projects we've successfully delivered for our clients across various industries.</p>
    </div>
</div>

<section>
    <div class="container">

        <div class="filter-tabs reveal">
            <button class="filter-btn active" onclick="filter('all', this)">All Projects</button>
            <button class="filter-btn" onclick="filter('web', this)">Web Development</button>
            <button class="filter-btn" onclick="filter('network', this)">Network</button>
            <button class="filter-btn" onclick="filter('security', this)">Cybersecurity</button>
            <button class="filter-btn" onclick="filter('cloud', this)">Cloud</button>
            <button class="filter-btn" onclick="filter('software', this)">Software</button>
        </div>

        <div class="portfolio-grid" id="portfolioGrid">

            <div class="portfolio-card reveal delay-1" data-cat="web">
                <div class="card-visual" style="background:#eff6ff;">🛒</div>
                <div class="card-body">
                    <span class="card-category">Web Development</span>
                    <h3>E-Commerce Platform for Retail Company</h3>
                    <p>Full-featured online shopping platform with inventory management, automatic payments, and analytics dashboard.</p>
                    <div class="card-tags">
                        <span class="tag">Laravel</span><span class="tag">MySQL</span><span class="tag">Payment Gateway</span>
                    </div>
                </div>
            </div>

            <div class="portfolio-card reveal delay-2" data-cat="network">
                <div class="card-visual" style="background:#f0fdfa;">🔗</div>
                <div class="card-body">
                    <span class="card-category">Network & Infrastructure</span>
                    <h3>Corporate Network for 500 Users</h3>
                    <p>Enterprise network design and installation for a multinational company with 3 branches and 500+ concurrent users.</p>
                    <div class="card-tags">
                        <span class="tag">Cisco</span><span class="tag">Fortinet</span><span class="tag">SD-WAN</span>
                    </div>
                </div>
            </div>

            <div class="portfolio-card reveal delay-3" data-cat="security">
                <div class="card-visual" style="background:#fef2f2;">🔒</div>
                <div class="card-body">
                    <span class="card-category">Cybersecurity</span>
                    <h3>Security Audit for Financial Institution</h3>
                    <p>Comprehensive security assessment including penetration testing, vulnerability assessment and SOC implementation.</p>
                    <div class="card-tags">
                        <span class="tag">SIEM</span><span class="tag">WAF</span><span class="tag">ISO 27001</span>
                    </div>
                </div>
            </div>

            <div class="portfolio-card reveal delay-4" data-cat="cloud">
                <div class="card-visual" style="background:#fff7ed;">☁️</div>
                <div class="card-body">
                    <span class="card-category">Cloud Services</span>
                    <h3>Cloud Migration for Logistics Company</h3>
                    <p>Zero-downtime migration from on-premise to AWS, saving 40% in annual operational costs for a logistics company.</p>
                    <div class="card-tags">
                        <span class="tag">AWS</span><span class="tag">Terraform</span><span class="tag">Docker</span>
                    </div>
                </div>
            </div>

            <div class="portfolio-card reveal delay-5" data-cat="software">
                <div class="card-visual" style="background:#faf5ff;">💻</div>
                <div class="card-body">
                    <span class="card-category">Software Development</span>
                    <h3>ERP System for Local Manufacturer</h3>
                    <p>Custom ERP system covering HR, finance, inventory, and production modules for a local manufacturing company.</p>
                    <div class="card-tags">
                        <span class="tag">PHP</span><span class="tag">Vue.js</span><span class="tag">MySQL</span>
                    </div>
                </div>
            </div>

            <div class="portfolio-card reveal delay-6" data-cat="web">
                <div class="card-visual" style="background:#f0fdf4;">🏥</div>
                <div class="card-body">
                    <span class="card-category">IT Support</span>
                    <h3>IT Support Contract for Private Hospital</h3>
                    <p>Full IT infrastructure management for a private hospital with 99.99% uptime SLA and 24/7 technical support.</p>
                    <div class="card-tags">
                        <span class="tag">Helpdesk</span><span class="tag">On-site</span><span class="tag">ITIL</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
function filter(cat, btn) {
    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    document.querySelectorAll('.portfolio-card').forEach(card => {
        if (cat === 'all' || card.dataset.cat === cat) {
            card.classList.remove('hidden');
        } else {
            card.classList.add('hidden');
        }
    });
}
</script>
@endsection