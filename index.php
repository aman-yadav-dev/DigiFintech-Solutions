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

<section class="hero" id="home" aria-labelledby="hero-heading">
    <div class="container hero-grid">
        <div class="hero-copy reveal">
            <span class="eyebrow">Customer Acquisition Ecosystem</span>
            <h1 id="hero-heading" class="display">
                Powering Digital Growth Through Performance, Technology & Partnerships
            </h1>
            <p class="hero-body">
                We connect businesses, technology, and performance partners to drive measurable customer acquisition and sustainable digital growth.
            </p>
            <div class="hero-actions">
                <a class="button-primary" href="#contact" data-scroll-link>
                    Partner With Us
                    <svg viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M4 12 12 4M5 4h7v7" />
                    </svg>
                </a>
                <a class="button-secondary" href="#publishers" data-scroll-link>
                    Join Publisher Network
                    <svg viewBox="0 0 16 16" aria-hidden="true">
                        <path d="m6 3 5 5-5 5" />
                    </svg>
                </a>
            </div>
            <p class="hero-note mono">
                Performance marketing / lead generation / partner ecosystems
            </p>
        </div>

        <div class="infrastructure-visual" aria-label="Abstract campaign flow visual">
            <div class="visual-frame"></div>
            <div class="visual-label">Growth infrastructure / 01</div>
            <div class="visual-status">
                <span class="status-dot"></span>
                systems aligned
            </div>
            <svg class="flow-svg" viewBox="0 0 520 360" role="img" aria-label="Connected campaign, publisher, tracking and reporting nodes">
                <path class="flow-path soft" d="M28 290 C115 250 114 110 225 105 S355 205 490 76" />
                <path class="flow-path" d="M32 80 C125 170 180 38 288 112 S386 270 490 260" />
                <path class="flow-path soft" d="M52 195 C130 190 160 260 255 245 S355 70 470 120" />
                <circle class="flow-node" cx="32" cy="80" r="12" />
                <circle class="flow-node-core" cx="32" cy="80" r="4" />
                <circle class="flow-node" cx="225" cy="105" r="12" />
                <circle class="flow-node-core" cx="225" cy="105" r="4" />
                <circle class="flow-node" cx="288" cy="112" r="12" />
                <circle class="flow-node-core" cx="288" cy="112" r="4" />
                <circle class="flow-node" cx="255" cy="245" r="12" />
                <circle class="flow-node-core" cx="255" cy="245" r="4" />
                <circle class="flow-node" cx="490" cy="260" r="12" />
                <circle class="flow-node-core" cx="490" cy="260" r="4" />
                <circle class="flow-node" cx="490" cy="76" r="12" />
                <circle class="flow-node-core" cx="490" cy="76" r="4" />
                <text class="flow-caption" x="15" y="56">CAMPAIGN</text>
                <text class="flow-caption-muted" x="204" y="82">PUBLISHER</text>
                <text class="flow-caption" x="270" y="143">TRACKING</text>
                <text class="flow-caption-muted" x="231" y="278">VALIDATION</text>
                <text class="flow-caption" x="447" y="294">REPORTING</text>
                <text class="flow-caption-muted" x="446" y="52">CRM</text>
            </svg>
        </div>
    </div>
</section>

<section class="section light-section" id="services" aria-labelledby="services-heading">
    <div class="container">
        <div class="section-top">
            <div>
                <span class="eyebrow">01 / Our Core Capabilities</span>
                <h2 id="services-heading" class="section-heading">
                    Comprehensive Digital Growth Solutions
                </h2>
                <p class="section-intro">
                    We combine technology, distribution, and operations to create measurable growth across the entire customer acquisition journey.
                </p>
            </div>
            <span class="section-index">DGF / 001</span>
        </div>
        <div class="capabilities-layout">
            <div class="capability-feature">
                <span class="feature-num">01 — FEATURED CAPABILITY</span>
                <h3>Performance Marketing</h3>
                <p>
                    We design and manage performance-focused campaigns where marketing activity is directly connected to measurable business outcomes.
                </p>
                <a href="#technology" class="feature-arrow" aria-label="Explore performance tracking" data-scroll-link>
                    <svg viewBox="0 0 28 28" aria-hidden="true">
                        <path d="M5 23 23 5M8 5h15v15" />
                    </svg>
                </a>
            </div>
            <div class="capabilities-list">
                <article class="capability-row">
                    <span class="row-number">02</span>
                    <div>
                        <h4>Lead Generation</h4>
                        <p>Scalable digital acquisition channels delivering targeted, validated leads with a focus on high conversion potential and quality over volume.</p>
                    </div>
                    <span class="row-symbol" aria-hidden="true">↗</span>
                </article>
                <article class="capability-row">
                    <span class="row-number">03</span>
                    <div>
                        <h4>Affiliate Ecosystem</h4>
                        <p>An expansive publisher network powered by advanced tracking, fraud prevention, and validation to distribute campaigns at scale.</p>
                    </div>
                    <span class="row-symbol" aria-hidden="true">○</span>
                </article>
                <article class="capability-row">
                    <span class="row-number">04</span>
                    <div>
                        <h4>Campaign Management</h4>
                        <p>End-to-end alignment between client objectives and publisher execution, supported by real-time tracking and transparent reporting.</p>
                    </div>
                    <span class="row-symbol" aria-hidden="true">≡</span>
                </article>
                <article class="capability-row">
                    <span class="row-number">05</span>
                    <div>
                        <h4>Customer Operations</h4>
                        <p>Inbound and outbound support combining lead verification, application assistance, and customer retention for complete acquisition journeys.</p>
                    </div>
                    <span class="row-symbol" aria-hidden="true">□</span>
                </article>
                <article class="capability-row">
                    <span class="row-number">06</span>
                    <div>
                        <h4>App Acquisition</h4>
                        <p>Data-driven install and user acquisition campaigns optimized for acquiring relevant, high-LTV users rather than simply maximizing installation volume.</p>
                    </div>
                    <span class="row-symbol" aria-hidden="true">⌁</span>
                </article>
            </div>
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
