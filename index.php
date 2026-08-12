<?php
// Phase 5 Remediation: Removed global session_start() to keep the page stateless.

$page_title = "DigiFintech Solution Private Limited | Digital Growth Ecosystem";
$meta_desc = "Technology-driven digital growth and customer acquisition company. Connecting brands, technology, and publishers for measurable business growth.";

$extra_css = ['assets/css/contact.css'];
// Include the header which outputs the top half of the HTML document
include 'includes/header.php';
?>

<!-- 
    Phase 1: Foundation ONLY 
    Full sections will be built in Phase 2.
    Here we establish the structural placeholders to ensure the foundation works.
-->

<section id="hero" class="section">
    <div class="container hero-layout">
        <div class="hero-content">
            <span class="hero-eyebrow">Customer Acquisition Ecosystem</span>
            <h1>Powering Digital Growth Through Performance, Technology & Partnerships</h1>
            <p class="text-secondary">We connect businesses, technology, and performance partners to drive measurable customer acquisition and sustainable digital growth.</p>
            <div class="hero-actions">
                <a href="#contact" class="btn btn-primary">Partner With Us</a>
                <a href="#publishers" class="btn btn-secondary">Join Publisher Network</a>
            </div>
        </div>
        
        <div class="hero-visual" aria-hidden="true">
            <svg class="ecosystem-svg" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <radialGradient id="eco-glow" cx="50%" cy="50%" r="50%">
                        <stop offset="0%" stop-color="var(--color-accent-primary)" stop-opacity="0.15" />
                        <stop offset="100%" stop-color="var(--color-accent-primary)" stop-opacity="0" />
                    </radialGradient>
                    <linearGradient id="link-grad-1" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="var(--color-accent-primary)" stop-opacity="0.8" />
                        <stop offset="100%" stop-color="var(--color-border)" stop-opacity="0.2" />
                    </linearGradient>
                    <linearGradient id="link-grad-2" x1="100%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="var(--color-accent-primary)" stop-opacity="0.8" />
                        <stop offset="100%" stop-color="var(--color-border)" stop-opacity="0.2" />
                    </linearGradient>
                    <linearGradient id="link-grad-3" x1="100%" y1="100%" x2="0%" y2="0%">
                        <stop offset="0%" stop-color="var(--color-accent-primary)" stop-opacity="0.8" />
                        <stop offset="100%" stop-color="var(--color-border)" stop-opacity="0.2" />
                    </linearGradient>
                    <linearGradient id="link-grad-4" x1="0%" y1="100%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="var(--color-accent-primary)" stop-opacity="0.8" />
                        <stop offset="100%" stop-color="var(--color-border)" stop-opacity="0.2" />
                    </linearGradient>
                </defs>

                <!-- Background Glow -->
                <circle cx="250" cy="250" r="220" fill="url(#eco-glow)" />
                
                <!-- Orbits / Rings -->
                <circle cx="250" cy="250" r="162" class="eco-ring" />
                <circle cx="250" cy="250" r="100" class="eco-ring-inner" />

                <!-- Connective Data Lines -->
                <path d="M 135 135 L 250 250" class="eco-path" stroke="url(#link-grad-1)" />
                <path d="M 365 135 L 250 250" class="eco-path" stroke="url(#link-grad-2)" />
                <path d="M 365 365 L 250 250" class="eco-path" stroke="url(#link-grad-3)" />
                <path d="M 135 365 L 250 250" class="eco-path" stroke="url(#link-grad-4)" />
                
                <!-- Animated Data Flows -->
                <line x1="135" y1="135" x2="250" y2="250" class="eco-flow flow-1" />
                <line x1="365" y1="135" x2="250" y2="250" class="eco-flow flow-2" />
                <line x1="250" y1="250" x2="365" y2="365" class="eco-flow flow-3" />
                <line x1="250" y1="250" x2="135" y2="365" class="eco-flow flow-4" />

                <!-- Node: Brands (Top Left) -->
                <g class="eco-satellite" transform="translate(135, 135)">
                    <circle cx="0" cy="0" r="45" class="eco-node-bg" />
                    <circle cx="0" cy="0" r="36" class="eco-node-inner" />
                    <text class="eco-text-node" x="0" y="4">Brands</text>
                </g>

                <!-- Node: Channels (Bottom Left) -->
                <g class="eco-satellite" transform="translate(135, 365)">
                    <circle cx="0" cy="0" r="45" class="eco-node-bg" />
                    <circle cx="0" cy="0" r="36" class="eco-node-inner" />
                    <text class="eco-text-node" x="0" y="4">Channels</text>
                </g>

                <!-- Node: Publishers (Top Right) -->
                <g class="eco-satellite" transform="translate(365, 135)">
                    <circle cx="0" cy="0" r="45" class="eco-node-bg" />
                    <circle cx="0" cy="0" r="36" class="eco-node-inner" />
                    <text class="eco-text-node" x="0" y="4">Publishers</text>
                </g>

                <!-- Node: Customers (Bottom Right) -->
                <g class="eco-satellite" transform="translate(365, 365)">
                    <circle cx="0" cy="0" r="45" class="eco-node-bg" />
                    <circle cx="0" cy="0" r="36" class="eco-node-inner" />
                    <text class="eco-text-node" x="0" y="4">Customers</text>
                </g>

                <!-- Center Node: DigiFintech Technology -->
                <g class="eco-center">
                    <rect x="180" y="180" width="140" height="140" rx="24" class="eco-center-bg" />
                    <rect x="190" y="190" width="120" height="120" rx="16" class="eco-center-inner" />
                    
                    <!-- Tech Core Symbol -->
                    <path d="M 250 215 L 265 235 L 250 255 L 235 235 Z" fill="var(--color-accent-primary)" opacity="0.9" />
                    <circle cx="250" cy="235" r="4" fill="var(--color-bg-primary)" />
                    
                    <text class="eco-text-main" x="250" y="278">DigiFintech</text>
                    <text class="eco-text-sub" x="250" y="294">TECHNOLOGY</text>
                </g>
            </svg>
        </div>
    </div>
</section>

<section id="services" class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">Our Core Capabilities</span>
            <h2>Comprehensive Digital Growth Solutions</h2>
            <p class="text-secondary">We combine technology, distribution, and operations to create measurable growth across the entire customer acquisition journey.</p>
        </div>
        
        <div class="services-grid reveal-stagger">
            <!-- Service 1: Performance Marketing -->
            <article class="service-card">
                <div class="service-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M2 20h20v2H2v-2zm2-8h4v6H4v-6zm6-6h4v12h-4V6zm6 4h4v8h-4v-8z"/></svg>
                </div>
                <h3>Performance Marketing</h3>
                <p>We design and manage performance-focused campaigns where marketing activity is directly connected to measurable business outcomes.</p>
            </article>

            <!-- Service 2: Lead Generation -->
            <article class="service-card">
                <div class="service-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                </div>
                <h3>Lead Generation</h3>
                <p>Scalable digital acquisition channels delivering targeted, validated leads with a focus on high conversion potential and quality over volume.</p>
            </article>

            <!-- Service 3: Affiliate & Publisher Network -->
            <article class="service-card">
                <div class="service-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                </div>
                <h3>Affiliate Ecosystem</h3>
                <p>An expansive publisher network powered by advanced tracking, fraud prevention, and validation to distribute campaigns at scale.</p>
            </article>

            <!-- Service 4: Campaign Management -->
            <article class="service-card">
                <div class="service-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/></svg>
                </div>
                <h3>Campaign Management</h3>
                <p>End-to-end alignment between client objectives and publisher execution, supported by real-time tracking and transparent reporting.</p>
            </article>

            <!-- Service 5: Customer Operations (BPO) -->
            <article class="service-card">
                <div class="service-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/></svg>
                </div>
                <h3>Customer Operations</h3>
                <p>Inbound and outbound support combining lead verification, application assistance, and customer retention for complete acquisition journeys.</p>
            </article>

            <!-- Service 6: Mobile App Acquisition -->
            <article class="service-card">
                <div class="service-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17 1.01L7 1c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-1.99-2-1.99zM17 19H7V5h10v14z"/></svg>
                </div>
                <h3>App Acquisition</h3>
                <p>Data-driven install and user acquisition campaigns optimized for acquiring relevant, high-LTV users rather than simply maximizing installation volume.</p>
            </article>
        </div>
    </div>
</section>

<section id="bfsi" class="section bfsi-section">
    <div class="container bfsi-container">
        <div class="section-header">
            <span class="section-eyebrow">Industry Focus</span>
            <h2>BFSI Digital Acquisition</h2>
            <p class="text-secondary">Financial services represent our core area of expertise. We power growth campaigns across a wide spectrum of digital financial products.</p>
        </div>
        
        <div class="bfsi-grid reveal-stagger">
            <!-- BFSI Category 1 -->
            <div class="bfsi-item">
                <div class="bfsi-item-header">
                    <div class="bfsi-item-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11m16-11v11M8 14v3m4-3v3m4-3v3"/></svg>
                    </div>
                    <span>Banking & Lending</span>
                </div>
                <ul class="bfsi-list">
                    <li>Savings & Current Accounts</li>
                    <li>Digital Banking Products</li>
                    <li>Personal & Business Loans</li>
                    <li>Credit-related Products</li>
                </ul>
            </div>

            <!-- BFSI Category 2 -->
            <div class="bfsi-item">
                <div class="bfsi-item-header">
                    <div class="bfsi-item-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                    </div>
                    <span>Investment</span>
                </div>
                <ul class="bfsi-list">
                    <li>Demat Accounts</li>
                    <li>Stock Broking</li>
                    <li>Mutual Funds</li>
                    <li>Investment Platforms</li>
                </ul>
            </div>

            <!-- BFSI Category 3 -->
            <div class="bfsi-item">
                <div class="bfsi-item-header">
                    <div class="bfsi-item-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <span>Insurance</span>
                </div>
                <ul class="bfsi-list">
                    <li>Insurance Products</li>
                    <li>Insurance Enquiries</li>
                    <li>Customer Acquisition</li>
                    <li>Policy Lead Generation</li>
                </ul>
            </div>

            <!-- BFSI Category 4 -->
            <div class="bfsi-item">
                <div class="bfsi-item-header">
                    <div class="bfsi-item-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/></svg>
                    </div>
                    <span>Fintech & Digital</span>
                </div>
                <ul class="bfsi-list">
                    <li>Financial Applications</li>
                    <li>Digital Financial Products</li>
                    <li>Payment Solutions</li>
                    <li>NBFC Campaigns</li>
                </ul>
            </div>
        </div>

        <div class="bfsi-disclosure">
            <strong>Important:</strong> Individual financial products are distributed as partner campaigns and marketing offerings. DigiFintech Solution Private Limited is a digital acquisition ecosystem, not a direct issuer or guarantor of regulated financial products unless explicitly authorized.
        </div>
    </div>
</section>

<section id="technology" class="section tech-section">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">Technology & Tracking</span>
            <h2>Transparent Campaign Ecosystems</h2>
            <p class="text-secondary">Our systems and processes are designed around precise tracking, clean data, and automation to make campaign performance visible and actionable.</p>
        </div>

        <div class="tech-grid reveal-stagger">
            <div class="tech-features">
                <div class="tech-feature-card">
                    <div class="tech-feature-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M12 20v-6M6 20V10M18 20V4"/></svg>
                    </div>
                    <div class="tech-feature-content">
                        <h3>Performance Tracking</h3>
                        <p>Comprehensive lead, campaign, conversion, and publisher tracking to monitor real-time acquisition performance.</p>
                    </div>
                </div>
                
                <div class="tech-feature-card">
                    <div class="tech-feature-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                    </div>
                    <div class="tech-feature-content">
                        <h3>CRM & Data Integration</h3>
                        <p>Seamless CRM integration and custom data reporting to ensure tight alignment with internal client operations.</p>
                    </div>
                </div>

                <div class="tech-feature-card">
                    <div class="tech-feature-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
                    </div>
                    <div class="tech-feature-content">
                        <h3>Quality & Fraud Prevention</h3>
                        <p>Rigorous duplicate-data detection, device/IP-level monitoring, and suspicious activity identification to protect campaign integrity.</p>
                    </div>
                </div>
            </div>

            <!-- Decorative visual placeholder for Tech/Dashboard -->
            <div class="tech-visual-container" aria-hidden="true" style="text-align: center; opacity: 0.8;">
                <svg viewBox="0 0 400 300" role="presentation" aria-hidden="true" style="max-width: 100%; height: auto; border-radius: var(--radius-lg); background: var(--color-bg-surface); border: 1px solid var(--color-border); box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
                    <rect x="20" y="20" width="360" height="40" rx="4" fill="rgba(255,255,255,0.05)"/>
                    <rect x="40" y="32" width="60" height="16" rx="4" fill="var(--color-accent-primary)" opacity="0.8"/>
                    <rect x="120" y="32" width="40" height="16" rx="4" fill="rgba(255,255,255,0.2)"/>
                    
                    <rect x="20" y="80" width="110" height="80" rx="8" fill="rgba(255,255,255,0.03)"/>
                    <rect x="35" y="100" width="40" height="8" rx="4" fill="rgba(255,255,255,0.1)"/>
                    <rect x="35" y="125" width="80" height="12" rx="4" fill="rgba(255,255,255,0.8)"/>
                    
                    <rect x="145" y="80" width="110" height="80" rx="8" fill="rgba(255,255,255,0.03)"/>
                    <rect x="160" y="100" width="50" height="8" rx="4" fill="rgba(255,255,255,0.1)"/>
                    <rect x="160" y="125" width="60" height="12" rx="4" fill="rgba(255,255,255,0.8)"/>

                    <rect x="270" y="80" width="110" height="80" rx="8" fill="rgba(255,255,255,0.03)"/>
                    <rect x="285" y="100" width="45" height="8" rx="4" fill="rgba(255,255,255,0.1)"/>
                    <text x="285" y="140" fill="var(--color-accent-secondary)" font-size="24" font-weight="bold">↑</text>
                    
                    <path d="M20 220 Q 100 180 200 240 T 380 180" fill="none" stroke="var(--color-accent-primary)" stroke-width="3"/>
                    <path d="M20 250 Q 100 210 200 270 T 380 210" fill="none" stroke="var(--color-accent-secondary)" stroke-width="2" opacity="0.5"/>
                </svg>
            </div>
        </div>
    </div>
</section>

<section id="publishers" class="section publishers-section">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">Publisher Partner Program</span>
            <h2>Grow With DigiFintech</h2>
            <p class="text-secondary">We create a sustainable ecosystem where quality publishers receive premium campaigns and dedicated performance support.</p>
        </div>

        <div class="publishers-layout reveal-stagger">
            <div class="publishers-box">
                <h3>
                    <svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    Publisher Benefits
                </h3>
                <ul class="check-list two-col">
                    <li><svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Multiple Campaigns</li>
                    <li><svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Competitive Payouts</li>
                    <li><svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Performance Tracking</li>
                    <li><svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Dedicated Support</li>
                    <li><svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Digital Reporting</li>
                    <li><svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Transparent Validation</li>
                    <li><svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Promotional Resources</li>
                    <li><svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Performance Incentives</li>
                </ul>
            </div>

            <div class="publishers-box">
                <h3>
                    <svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    Who Can Join?
                </h3>
                <ul class="check-list">
                    <li><svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg> Affiliate & Digital Marketers</li>
                    <li><svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg> Lead-Generation Agencies</li>
                    <li><svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg> Social-Media Marketers & Influencers</li>
                    <li><svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg> Content Creators & Website Owners</li>
                    <li><svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg> Mobile App Owners</li>
                </ul>
                <div class="publisher-cta-wrapper">
                    <a href="#publishers" class="btn btn-primary" style="width: 100%; justify-content: center;">Apply to Join Network</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="section contact-section">
    <div class="container">
        <div class="contact-layout">
            <div class="contact-info">
                <span class="section-eyebrow">Get In Touch</span>
                <h2>Let's Discuss Your Growth</h2>
                <p class="text-secondary">Whether you're a brand looking to acquire customers or a publisher seeking premium campaigns, our team is ready to help.</p>
                
                <div class="contact-trust-points">
                    <div class="trust-point">
                        <svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                        <span>digifintech.in</span>
                    </div>
                    <div class="trust-point">
                        <svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <span>Rewa, Madhya Pradesh, India</span>
                    </div>
                </div>
            </div>

            <div class="contact-form-card">
                <form id="contactForm" method="POST" action="api/enquiry.php" novalidate>
                    <!-- CSRF Token -->
                    <input type="hidden" name="csrf_token" id="csrf_token" value="">
                    
                    <!-- Honeypot -->
                    <div class="honeypot-field" aria-hidden="true">
                        <label for="website_url">Leave this field empty</label>
                        <input type="text" id="website_url" name="website_url" tabindex="-1" autocomplete="off">
                    </div>

                    <div id="formAlert" class="form-alert form-alert-error" role="alert" tabindex="-1">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                        <span class="form-alert-text">An error occurred.</span>
                    </div>

                    <div class="form-group">
                        <label for="name" class="form-label">Full Name <span class="required" aria-hidden="true">*</span></label>
                        <input type="text" id="name" name="name" class="form-control" required autocomplete="name">
                        <div class="invalid-feedback" id="nameError"></div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email Address <span class="required" aria-hidden="true">*</span></label>
                        <input type="email" id="email" name="email" class="form-control" required autocomplete="email">
                        <div class="invalid-feedback" id="emailError"></div>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="form-label">Phone Number <span class="optional">(Optional)</span></label>
                        <input type="tel" id="phone" name="phone" class="form-control" autocomplete="tel">
                        <div class="invalid-feedback" id="phoneError"></div>
                    </div>

                    <div class="form-group">
                        <label for="enquiry_type" class="form-label">I am a... <span class="required" aria-hidden="true">*</span></label>
                        <select id="enquiry_type" name="enquiry_type" class="form-control" required>
                            <option value="Brand/Advertiser">Brand / Advertiser</option>
                            <option value="Publisher/Affiliate">Publisher / Affiliate Partner</option>
                            <option value="Other">Other Enquiry</option>
                        </select>
                        <div class="invalid-feedback" id="typeError"></div>
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">How can we help you? <span class="required" aria-hidden="true">*</span></label>
                        <textarea id="message" name="message" class="form-control" required></textarea>
                        <div class="invalid-feedback" id="messageError"></div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-submit">
                        <span class="btn-text">Send Message</span>
                        <span class="btn-loader" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg>
                        </span>
                    </button>
                </form>

                <div id="formSuccess" class="form-success-state" role="status" tabindex="-1">
                    <div class="success-icon-wrapper" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    <h3>Message Sent</h3>
                    <p class="text-secondary">Thank you for reaching out. Our team will review your enquiry and get back to you shortly.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$extra_js = ['assets/js/contact.js'];
// Include the footer which outputs the bottom half of the HTML document
include 'includes/footer.php';
?>
