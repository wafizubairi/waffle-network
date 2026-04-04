@extends('layouts.main')

@section('title', 'Our Services — Waffle Network')

@section('styles')
<style>
    .services-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; }
    .service-card {
        background: var(--bg-card); border: 1px solid var(--border);
        border-radius: 14px; padding: 2rem; transition: all 0.25s; position: relative; overflow: hidden;
    }
    .service-card::before {
        content: ''; position: absolute; top: 0; left: 0; right: 0;
        height: 3px; background: var(--primary); transform: scaleX(0); transition: transform 0.3s;
    }
    .service-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); border-color: rgba(29,78,216,0.2); }
    .service-card:hover::before { transform: scaleX(1); }
    .service-icon { width: 52px; height: 52px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 1.2rem; }
    .service-card h3 { font-size: 1.1rem; font-weight: 700; margin-bottom: 0.75rem; }
    .service-card p { color: var(--text-secondary); font-size: 0.9rem; line-height: 1.7; margin-bottom: 1rem; }
    .service-tag { display: inline-block; background: var(--primary-bg); color: var(--primary); font-size: 0.75rem; font-weight: 600; padding: 3px 10px; border-radius: 100px; margin-right: 4px; margin-bottom: 4px; }
    .features-list { list-style: none; margin-top: 1rem; display: flex; flex-direction: column; gap: 8px; }
    .features-list li { display: flex; align-items: center; gap: 8px; font-size: 0.875rem; color: var(--text-secondary); }
    .features-list li::before { content: '✓'; color: var(--primary); font-weight: 700; flex-shrink: 0; }
    .cta-banner { background: var(--primary); border-radius: 16px; padding: 3rem; text-align: center; margin-top: 4rem; }
    .cta-banner h3 { color: white; font-size: 1.8rem; font-weight: 800; margin-bottom: 0.75rem; }
    .cta-banner p { color: rgba(255,255,255,0.8); margin-bottom: 2rem; }
    .btn-white { background: white; color: var(--primary-dark); padding: 12px 28px; border-radius: 7px; font-weight: 700; text-decoration: none; transition: all 0.2s; display: inline-block; }
    .btn-white:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0,0,0,0.2); }
    @media (max-width: 900px) { .services-grid { grid-template-columns: 1fr 1fr; } }
    @media (max-width: 640px) { .services-grid { grid-template-columns: 1fr; } }
</style>
@endsection

@section('content')

<div class="page-header">
    <div class="container">
        <div class="label">⚡ What We Do</div>
        <h1>Our <span style="color:var(--primary)">Services</span></h1>
        <p>Comprehensive IT solutions tailored to your business needs. From web development to cybersecurity — we've got you covered.</p>
    </div>
</div>

<section>
    <div class="container">
        <div class="services-grid">

            <div class="service-card reveal delay-1">
                <div class="service-icon" style="background:#eff6ff;">🌐</div>
                <h3>Web Development</h3>
                <p>Modern, fast, and responsive websites and web applications built with the latest technologies to drive your business forward.</p>
                <ul class="features-list">
                    <li>Custom website design & development</li>
                    <li>E-commerce platforms</li>
                    <li>Web application development</li>
                    <li>API integration & development</li>
                    <li>Performance optimization</li>
                </ul>
                <div style="margin-top:1.25rem;">
                    <span class="service-tag">Laravel</span>
                    <span class="service-tag">React</span>
                    <span class="service-tag">PHP</span>
                    <span class="service-tag">MySQL</span>
                </div>
            </div>

            <div class="service-card reveal delay-2">
                <div class="service-icon" style="background:#f0fdfa;">🔗</div>
                <h3>Network & Infrastructure</h3>
                <p>Design, installation, and maintenance of stable and secure corporate networks for businesses of all sizes.</p>
                <ul class="features-list">
                    <li>Network design & implementation</li>
                    <li>LAN/WAN setup & management</li>
                    <li>WiFi infrastructure</li>
                    <li>Network monitoring</li>
                    <li>Disaster recovery planning</li>
                </ul>
                <div style="margin-top:1.25rem;">
                    <span class="service-tag">Cisco</span>
                    <span class="service-tag">Mikrotik</span>
                    <span class="service-tag">SD-WAN</span>
                </div>
            </div>

            <div class="service-card reveal delay-3">
                <div class="service-icon" style="background:#fef2f2;">🔒</div>
                <h3>Cybersecurity</h3>
                <p>Protect your business from cyber threats with comprehensive security assessments, monitoring, and response solutions.</p>
                <ul class="features-list">
                    <li>Security audit & assessment</li>
                    <li>Penetration testing</li>
                    <li>Firewall & endpoint security</li>
                    <li>Security awareness training</li>
                    <li>Incident response</li>
                </ul>
                <div style="margin-top:1.25rem;">
                    <span class="service-tag">Firewall</span>
                    <span class="service-tag">VPN</span>
                    <span class="service-tag">SOC</span>
                    <span class="service-tag">ISO 27001</span>
                </div>
            </div>

            <div class="service-card reveal delay-4">
                <div class="service-icon" style="background:#faf5ff;">☁️</div>
                <h3>Cloud Services</h3>
                <p>Migrate to the cloud, manage infrastructure, and optimize costs with our expert cloud solutions across major platforms.</p>
                <ul class="features-list">
                    <li>Cloud migration strategy</li>
                    <li>Infrastructure as Code (IaC)</li>
                    <li>Cloud cost optimization</li>
                    <li>DevOps & CI/CD pipelines</li>
                    <li>Container orchestration</li>
                </ul>
                <div style="margin-top:1.25rem;">
                    <span class="service-tag">AWS</span>
                    <span class="service-tag">Azure</span>
                    <span class="service-tag">GCP</span>
                    <span class="service-tag">Docker</span>
                </div>
            </div>

            <div class="service-card reveal delay-5">
                <div class="service-icon" style="background:#fff7ed;">🛠️</div>
                <h3>IT Support & Maintenance</h3>
                <p>24/7 technical support, regular system maintenance, and fast IT problem resolution to keep your business running smoothly.</p>
                <ul class="features-list">
                    <li>24/7 helpdesk support</li>
                    <li>On-site & remote support</li>
                    <li>Preventive maintenance</li>
                    <li>Hardware procurement</li>
                    <li>SLA-guaranteed response time</li>
                </ul>
                <div style="margin-top:1.25rem;">
                    <span class="service-tag">Helpdesk</span>
                    <span class="service-tag">On-site</span>
                    <span class="service-tag">ITIL</span>
                </div>
            </div>

            <div class="service-card reveal delay-6">
                <div class="service-icon" style="background:#f0fdf4;">💻</div>
                <h3>Software Development</h3>
                <p>Custom software solutions, ERP systems, mobile applications, and API integrations tailored to your specific business needs.</p>
                <ul class="features-list">
                    <li>Custom software development</li>
                    <li>ERP & CRM systems</li>
                    <li>Mobile app development</li>
                    <li>System integration</li>
                    <li>Legacy system modernization</li>
                </ul>
                <div style="margin-top:1.25rem;">
                    <span class="service-tag">Mobile</span>
                    <span class="service-tag">ERP</span>
                    <span class="service-tag">API</span>
                    <span class="service-tag">Vue.js</span>
                </div>
            </div>

        </div>

        <div class="cta-banner reveal">
            <h3>Not Sure Which Service You Need?</h3>
            <p>Our team will help you identify the best IT solutions for your business. Get a free consultation today.</p>
            <a href="/#contact" class="btn-white">Get Free Consultation →</a>
        </div>
    </div>
</section>

@endsection