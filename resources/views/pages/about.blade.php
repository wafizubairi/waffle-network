@extends('layouts.main')

@section('title', 'About Us — Waffle Network')

@section('styles')
<style>
    .about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; margin-bottom: 5rem; }
    .about-stats { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
    .stat-card { background: var(--bg-card); border: 1px solid var(--border); border-radius: 12px; padding: 1.5rem; text-align: center; }
    .stat-card h3 { font-size: 2rem; font-weight: 800; color: var(--primary); letter-spacing: -0.5px; }
    .stat-card p { font-size: 0.85rem; color: var(--text-secondary); margin-top: 4px; }
    .values-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; margin-top: 3rem; }
    .value-card { background: var(--bg-card); border: 1px solid var(--border); border-radius: 12px; padding: 1.75rem; text-align: center; transition: all 0.25s; }
    .value-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
    .value-icon { font-size: 2.5rem; margin-bottom: 1rem; display: block; }
    .value-card h3 { font-size: 1rem; font-weight: 700; margin-bottom: 0.5rem; }
    .value-card p { color: var(--text-secondary); font-size: 0.875rem; line-height: 1.6; }
    .team-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.5rem; margin-top: 3rem; }
    .team-card { background: var(--bg-card); border: 1px solid var(--border); border-radius: 12px; padding: 1.5rem; text-align: center; transition: all 0.25s; }
    .team-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
    .avatar { width: 72px; height: 72px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 800; margin: 0 auto 1rem; }
    .team-card h4 { font-size: 0.95rem; font-weight: 700; margin-bottom: 0.25rem; }
    .team-card .role { color: var(--primary); font-size: 0.8rem; font-weight: 600; margin-bottom: 0.5rem; }
    .team-card p { color: var(--text-secondary); font-size: 0.8rem; line-height: 1.5; }
    .timeline { position: relative; padding-left: 2rem; }
    .timeline::before { content: ''; position: absolute; left: 0; top: 0; bottom: 0; width: 2px; background: var(--border); }
    .timeline-item { position: relative; margin-bottom: 2rem; }
    .timeline-item::before { content: ''; position: absolute; left: -2.4rem; top: 4px; width: 12px; height: 12px; border-radius: 50%; background: var(--primary); border: 2px solid var(--bg); }
    .timeline-year { font-size: 0.8rem; font-weight: 700; color: var(--primary); margin-bottom: 0.25rem; }
    .timeline-item h4 { font-size: 0.95rem; font-weight: 700; margin-bottom: 0.25rem; }
    .timeline-item p { color: var(--text-secondary); font-size: 0.875rem; line-height: 1.6; }
    @media (max-width: 900px) { .about-grid { grid-template-columns: 1fr; gap: 2rem; } .values-grid { grid-template-columns: 1fr 1fr; } .team-grid { grid-template-columns: 1fr 1fr; } }
    @media (max-width: 640px) { .values-grid { grid-template-columns: 1fr; } .team-grid { grid-template-columns: 1fr 1fr; } }
</style>
@endsection

@section('content')

<div class="page-header">
    <div class="container">
        <div class="label">🏢 Who We Are</div>
        <h1>About <span style="color:var(--primary)">Waffle Network</span></h1>
        <p>Your trusted IT technology partner — delivering innovative solutions that help businesses grow and succeed in the digital era.</p>
    </div>
</div>

<section>
    <div class="container">

        {{-- About + Stats --}}
        <div class="about-grid">
            <div>
                <h2 style="font-size:clamp(1.8rem,3vw,2.5rem); font-weight:800; letter-spacing:-0.5px; margin-bottom:1rem;" class="reveal">
                    We Build Technology That <span style="color:var(--primary)">Matters</span>
                </h2>
                <p style="color:var(--text-secondary); line-height:1.8; margin-bottom:1rem;" class="reveal delay-1">
                    Founded in 2019, Waffle Network was born from a simple belief — every business deserves reliable, professional IT support regardless of their size.
                </p>
                <p style="color:var(--text-secondary); line-height:1.8; margin-bottom:1.5rem;" class="reveal delay-2">
                    From humble beginnings as a small IT support team, we've grown into a full-service IT solutions provider serving clients across Malaysia and Southeast Asia.
                </p>
                <a href="/#contact" class="btn-primary reveal delay-3">Work With Us →</a>
            </div>
            <div class="about-stats">
                <div class="stat-card reveal delay-1">
                    <h3>100+</h3>
                    <p>Happy Clients</p>
                </div>
                <div class="stat-card reveal delay-2">
                    <h3>5+</h3>
                    <p>Years Experience</p>
                </div>
                <div class="stat-card reveal delay-3">
                    <h3>99.9%</h3>
                    <p>Uptime SLA</p>
                </div>
                <div class="stat-card reveal delay-4">
                    <h3>24/7</h3>
                    <p>Support</p>
                </div>
            </div>
        </div>

        {{-- Values --}}
        <div class="reveal">
            <h2 style="font-size:1.8rem; font-weight:800; text-align:center; margin-bottom:0.5rem;">Our Core <span style="color:var(--primary)">Values</span></h2>
            <p style="text-align:center; color:var(--text-secondary); max-width:500px; margin:0 auto;">The principles that guide everything we do at Waffle Network.</p>
        </div>

        <div class="values-grid">
            <div class="value-card reveal delay-1">
                <span class="value-icon">🎯</span>
                <h3>Client First</h3>
                <p>Every decision we make is guided by what's best for our clients. Your success is our success.</p>
            </div>
            <div class="value-card reveal delay-2">
                <span class="value-icon">💡</span>
                <h3>Innovation</h3>
                <p>We stay ahead of technology trends to bring you the most effective and modern solutions available.</p>
            </div>
            <div class="value-card reveal delay-3">
                <span class="value-icon">🤝</span>
                <h3>Integrity</h3>
                <p>Transparent pricing, honest communication, and delivering exactly what we promise — every time.</p>
            </div>
            <div class="value-card reveal delay-4">
                <span class="value-icon">⚡</span>
                <h3>Speed</h3>
                <p>We respond fast and deliver faster. In IT, every minute of downtime matters to your business.</p>
            </div>
            <div class="value-card reveal delay-5">
                <span class="value-icon">🔒</span>
                <h3>Security</h3>
                <p>Security is built into everything we do — not an afterthought. Your data and systems are always protected.</p>
            </div>
            <div class="value-card reveal delay-6">
                <span class="value-icon">📈</span>
                <h3>Growth</h3>
                <p>We grow with our clients. As your business scales, our solutions scale with you seamlessly.</p>
            </div>
        </div>

        {{-- Team --}}
        <div style="margin-top:5rem;">
            <div class="reveal">
                <h2 style="font-size:1.8rem; font-weight:800; text-align:center; margin-bottom:0.5rem;">Meet The <span style="color:var(--primary)">Team</span></h2>
                <p style="text-align:center; color:var(--text-secondary); max-width:500px; margin:0 auto;">The talented people behind Waffle Network's success.</p>
            </div>
            <div class="team-grid">
                <div class="team-card reveal delay-1">
                    <div class="avatar" style="background:#eff6ff; color:#1d4ed8;">WZ</div>
                    <h4>Wafi Zubairi</h4>
                    <div class="role">Founder & CEO</div>
                    <p>10+ years experience in IT infrastructure and business development.</p>
                </div>
                <div class="team-card reveal delay-2">
                    <div class="avatar" style="background:#f0fdf4; color:#16a34a;">AR</div>
                    <h4>Ahmad Razif</h4>
                    <div class="role">CTO</div>
                    <p>Expert in cloud architecture and software development with 8+ years experience.</p>
                </div>
                <div class="team-card reveal delay-3">
                    <div class="avatar" style="background:#faf5ff; color:#7c3aed;">SN</div>
                    <h4>Siti Nabilah</h4>
                    <div class="role">Head of Cybersecurity</div>
                    <p>Certified ethical hacker with expertise in security audits and penetration testing.</p>
                </div>
                <div class="team-card reveal delay-4">
                    <div class="avatar" style="background:#fff7ed; color:#ea580c;">HF</div>
                    <h4>Hafiz Farouk</h4>
                    <div class="role">Lead Engineer</div>
                    <p>Network specialist with Cisco and Fortinet certifications, 6+ years in the field.</p>
                </div>
            </div>
        </div>

        {{-- Timeline --}}
        <div style="margin-top:5rem; display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:start;">
            <div class="reveal">
                <h2 style="font-size:1.8rem; font-weight:800; margin-bottom:2rem;">Our <span style="color:var(--primary)">Journey</span></h2>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-year">2019</div>
                        <h4>Founded</h4>
                        <p>Waffle Network was founded with a team of 3, focusing on IT support for SMEs.</p>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year">2020</div>
                        <h4>Expanded Services</h4>
                        <p>Added web development and cybersecurity services to our portfolio.</p>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year">2021</div>
                        <h4>50 Clients Milestone</h4>
                        <p>Reached 50 active clients and expanded the team to 10 engineers.</p>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year">2023</div>
                        <h4>Cloud Division Launched</h4>
                        <p>Launched dedicated cloud services division to serve enterprise clients.</p>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year">2024</div>
                        <h4>100+ Clients</h4>
                        <p>Surpassed 100 active clients across Malaysia and Southeast Asia.</p>
                    </div>
                </div>
            </div>
            <div class="reveal delay-2" style="background:var(--bg-card); border:1px solid var(--border); border-radius:14px; padding:2rem;">
                <h3 style="font-size:1.2rem; font-weight:700; margin-bottom:1rem;">Why Clients Choose Us</h3>
                <div style="display:flex; flex-direction:column; gap:1rem;">
                    <div style="display:flex; gap:1rem; align-items:flex-start;">
                        <div style="width:36px; height:36px; border-radius:8px; background:var(--primary-bg); display:flex; align-items:center; justify-content:center; flex-shrink:0;">✓</div>
                        <div>
                            <h4 style="font-size:0.9rem; font-weight:600; margin-bottom:2px;">Certified Professionals</h4>
                            <p style="font-size:0.85rem; color:var(--text-secondary);">Our team holds industry certifications from Cisco, AWS, Microsoft, and more.</p>
                        </div>
                    </div>
                    <div style="display:flex; gap:1rem; align-items:flex-start;">
                        <div style="width:36px; height:36px; border-radius:8px; background:var(--primary-bg); display:flex; align-items:center; justify-content:center; flex-shrink:0;">✓</div>
                        <div>
                            <h4 style="font-size:0.9rem; font-weight:600; margin-bottom:2px;">Fast Response Time</h4>
                            <p style="font-size:0.85rem; color:var(--text-secondary);">SLA-guaranteed response under 1 hour for critical issues.</p>
                        </div>
                    </div>
                    <div style="display:flex; gap:1rem; align-items:flex-start;">
                        <div style="width:36px; height:36px; border-radius:8px; background:var(--primary-bg); display:flex; align-items:center; justify-content:center; flex-shrink:0;">✓</div>
                        <div>
                            <h4 style="font-size:0.9rem; font-weight:600; margin-bottom:2px;">Transparent Pricing</h4>
                            <p style="font-size:0.85rem; color:var(--text-secondary);">No hidden fees. Clear and competitive quotes based on your actual needs.</p>
                        </div>
                    </div>
                    <div style="display:flex; gap:1rem; align-items:flex-start;">
                        <div style="width:36px; height:36px; border-radius:8px; background:var(--primary-bg); display:flex; align-items:center; justify-content:center; flex-shrink:0;">✓</div>
                        <div>
                            <h4 style="font-size:0.9rem; font-weight:600; margin-bottom:2px;">Long-term Partnership</h4>
                            <p style="font-size:0.85rem; color:var(--text-secondary);">We build lasting relationships, not just one-time transactions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection