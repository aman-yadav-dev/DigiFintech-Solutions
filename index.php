<?php
$page_title = "DigiFintech Solution Private Limited | Digital Growth Ecosystem";
$meta_desc = "Technology-driven digital growth and customer acquisition company. Connecting brands, technology, and publishers for measurable business growth.";

// Include the header which outputs the top half of the HTML document
include 'includes/header.php';
?>

<!-- 
    Phase 1: Foundation ONLY 
    Full sections will be built in Phase 2.
    Here we establish the structural placeholders to ensure the foundation works.
-->

<section id="hero" class="section reveal">
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
            <svg class="ecosystem-svg" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg">
                <!-- Connective Lines -->
                <path class="eco-line" d="M 200 60 L 200 130" />
                <path class="eco-line" d="M 200 270 L 200 340" />
                <path class="eco-line" d="M 130 200 L 60 200" />
                <path class="eco-line" d="M 270 200 L 340 200" />
                
                <!-- Animated Flow Lines -->
                <path class="eco-flow" d="M 200 60 L 200 130" />
                <path class="eco-flow" d="M 340 200 L 270 200" />
                <path class="eco-flow" d="M 200 270 L 200 340" />
                <path class="eco-flow" d="M 60 200 L 130 200" />

                <!-- Node: Brands (Top) -->
                <circle class="eco-node" cx="200" cy="60" r="40" />
                <text class="eco-node-text" x="200" y="60">Brands</text>

                <!-- Node: Publishers (Right) -->
                <circle class="eco-node" cx="340" cy="200" r="40" />
                <text class="eco-node-text" x="340" y="200">Publishers</text>

                <!-- Node: Customers (Bottom) -->
                <circle class="eco-node" cx="200" cy="340" r="40" />
                <text class="eco-node-text" x="200" y="340">Customers</text>

                <!-- Node: Platforms (Left) -->
                <circle class="eco-node" cx="60" cy="200" r="40" />
                <text class="eco-node-text" x="60" y="200">Channels</text>

                <!-- Center Node: Technology -->
                <rect class="eco-node" x="130" y="130" width="140" height="140" rx="16" />
                <text class="eco-node-text" x="200" y="190" style="font-size: 16px; fill: var(--color-accent-primary);">DigiFintech</text>
                <text class="eco-node-text" x="200" y="215" style="font-size: 12px; font-weight: normal; fill: var(--color-text-secondary);">Technology</text>
            </svg>
        </div>
    </div>
</section>

<section id="services" class="section reveal">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">Our Core Capabilities</span>
            <h2>Comprehensive Digital Growth Solutions</h2>
            <p class="text-secondary">We combine technology, distribution, and operations to create measurable growth across the entire customer acquisition journey.</p>
        </div>
        
        <div class="services-grid">
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

<section id="bfsi" class="section bfsi-section reveal">
    <div class="container bfsi-container">
        <div class="section-header">
            <span class="section-eyebrow">Industry Focus</span>
            <h2>BFSI Digital Acquisition</h2>
            <p class="text-secondary">Financial services represent our core area of expertise. We power growth campaigns across a wide spectrum of digital financial products.</p>
        </div>
        
        <div class="bfsi-grid">
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

<section id="technology" class="section tech-section reveal">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">Technology & Tracking</span>
            <h2>Transparent Campaign Ecosystems</h2>
            <p class="text-secondary">Our systems and processes are designed around precise tracking, clean data, and automation to make campaign performance visible and actionable.</p>
        </div>

        <div class="tech-grid">
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

<section id="publishers" class="section publishers-section reveal">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">Publisher Partner Program</span>
            <h2>Grow With DigiFintech</h2>
            <p class="text-secondary">We create a sustainable ecosystem where quality publishers receive premium campaigns and dedicated performance support.</p>
        </div>

        <div class="publishers-layout">
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

<?php
// Include the footer which outputs the bottom half of the HTML document
include 'includes/footer.php';
?>
