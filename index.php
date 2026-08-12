<?php
// Phase 5 Remediation: Removed global session_start() to keep the page stateless.

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

<section class="section industries" id="industries" aria-labelledby="industries-heading">
    <div class="container">
        <div class="section-top">
            <div>
                <span class="eyebrow">02 / BFSI industries</span>
                <h2 id="industries-heading" class="section-heading">
                    BFSI Digital Acquisition
                </h2>
                <p class="section-intro">
                    Financial services represent our core area of expertise. We power growth campaigns across a wide spectrum of digital financial products.
                </p>
            </div>
            <span class="section-index">DGF / 002</span>
        </div>
        <div class="industry-layout">
            <div class="industry-list" role="tablist" aria-label="BFSI industries">
                <button class="industry-item active" type="button" role="tab" aria-selected="true" data-industry="0" data-title="Banking &amp; Lending" data-detail="Savings &amp; Current Accounts, Digital Banking Products, Personal &amp; Business Loans, and Credit-related Products.">
                    <span class="industry-marker">01</span>
                    <h3>Banking &amp; Lending</h3>
                    <svg viewBox="0 0 18 18" aria-hidden="true"><path d="m6 3 5 5-5 5" /></svg>
                </button>
                <button class="industry-item" type="button" role="tab" aria-selected="false" data-industry="1" data-title="Investment" data-detail="Demat Accounts, Stock Broking, Mutual Funds, and Investment Platforms.">
                    <span class="industry-marker">02</span>
                    <h3>Investment</h3>
                    <svg viewBox="0 0 18 18" aria-hidden="true"><path d="m6 3 5 5-5 5" /></svg>
                </button>
                <button class="industry-item" type="button" role="tab" aria-selected="false" data-industry="2" data-title="Insurance" data-detail="Insurance Products, Insurance Enquiries, Customer Acquisition, and Policy Lead Generation.">
                    <span class="industry-marker">03</span>
                    <h3>Insurance</h3>
                    <svg viewBox="0 0 18 18" aria-hidden="true"><path d="m6 3 5 5-5 5" /></svg>
                </button>
                <button class="industry-item" type="button" role="tab" aria-selected="false" data-industry="3" data-title="Fintech &amp; Digital" data-detail="Financial Applications, Digital Financial Products, Payment Solutions, and NBFC Campaigns.">
                    <span class="industry-marker">04</span>
                    <h3>Fintech &amp; Digital</h3>
                    <svg viewBox="0 0 18 18" aria-hidden="true"><path d="m6 3 5 5-5 5" /></svg>
                </button>
            </div>
            <div class="industry-detail" role="tabpanel" aria-live="polite" data-industry-panel>
                <span class="detail-kicker">Sector focus / 01</span>
                <h3 data-industry-title>Banking &amp; Lending</h3>
                <p data-industry-detail>
                    Savings &amp; Current Accounts, Digital Banking Products, Personal &amp; Business Loans, and Credit-related Products.
                </p>
                <span class="detail-corner">DGF / BFSI</span>
            </div>
        </div>
        <div class="bfsi-disclosure" style="margin-top: 3rem; font-size: 0.85rem; color: var(--text-tertiary); max-width: 800px;">
            <strong>Important:</strong> Individual financial products are distributed as partner campaigns and marketing offerings. DigiFintech Solution Private Limited is a digital acquisition ecosystem, not a direct issuer or guarantor of regulated financial products unless explicitly authorized.
        </div>
    </div>
</section>

<section class="section technology" id="technology" aria-labelledby="technology-heading">
    <div class="container">
        <div class="section-top">
            <div>
                <span class="eyebrow">03 / Technology &amp; Tracking</span>
                <h2 id="technology-heading" class="section-heading">
                    Transparent Campaign Ecosystems
                </h2>
                <p class="section-intro">
                    Our systems and processes are designed around precise tracking, clean data, and automation to make campaign performance visible and actionable.
                </p>
            </div>
            <span class="section-index">DGF / 003</span>
        </div>
        <div class="tech-layout">
            <div class="tech-list">
                <article class="tech-item">
                    <span class="tech-icon" aria-hidden="true">
                        <svg viewBox="0 0 18 18"><path d="M2 9h3l2-5 3 10 2-5h4" /></svg>
                    </span>
                    <div>
                        <h3>Performance Tracking</h3>
                        <p>Comprehensive lead, campaign, conversion, and publisher tracking to monitor real-time acquisition performance.</p>
                    </div>
                </article>
                <article class="tech-item">
                    <span class="tech-icon" aria-hidden="true">
                        <svg viewBox="0 0 18 18"><ellipse cx="9" cy="4" rx="6" ry="2.5" /><path d="M3 4v5c0 1.4 2.7 2.5 6 2.5S15 10.4 15 9V4M3 9v5c0 1.4 2.7 2.5 6 2.5s6-1.1 6-2.5V9" /></svg>
                    </span>
                    <div>
                        <h3>CRM &amp; Data Integration</h3>
                        <p>Seamless CRM integration and custom data reporting to ensure tight alignment with internal client operations.</p>
                    </div>
                </article>
                <article class="tech-item">
                    <span class="tech-icon" aria-hidden="true">
                        <svg viewBox="0 0 18 18"><path d="M9 2 15 4v4c0 4-2.5 6.5-6 8-3.5-1.5-6-4-6-8V4l6-2Z" /><path d="m6.5 9 1.7 1.7L12 7" /></svg>
                    </span>
                    <div>
                        <h3>Quality &amp; Fraud Prevention</h3>
                        <p>Rigorous duplicate-data detection, device/IP-level monitoring, and suspicious activity identification to protect campaign integrity.</p>
                    </div>
                </article>
            </div>
            <div class="pipeline" aria-label="Campaign technology flow">
                <div class="pipeline-heading">
                    <span>Campaign flow</span>
                    <span>Live visibility</span>
                </div>
                <div class="pipeline-track">
                    <div class="pipeline-node"><span>1</span>Campaign</div>
                    <div class="pipeline-node"><span>2</span>Tracking</div>
                    <div class="pipeline-node"><span>3</span>Validation</div>
                    <div class="pipeline-node"><span>4</span>CRM</div>
                    <div class="pipeline-node"><span>5</span>Reporting</div>
                </div>
                <div class="pipeline-foot">
                    <strong>Quality is designed into the path.</strong>
                    <span>Transparent campaign visibility / lead tracking / duplicate-data detection</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section light-section" id="publishers" aria-labelledby="publishers-heading">
    <div class="container">
        <div class="section-top">
            <div>
                <span class="eyebrow">04 / Publisher Partner Program</span>
                <h2 id="publishers-heading" class="section-heading">
                    Grow With DigiFintech
                </h2>
                <p class="section-intro">
                    We create a sustainable ecosystem where quality publishers receive premium campaigns and dedicated performance support.
                </p>
            </div>
            <span class="section-index">DGF / 004</span>
        </div>
        <div class="publisher-layout">
            <div>
                <div class="join-panel">
                    <span class="eyebrow">Partner Benefits</span>
                    <h3>Bring the right audience into the growth loop.</h3>
                    <p>
                        Work with a team that values clear campaign context, reliable operations and useful reporting.
                    </p>
                    <a class="button-primary" href="#contact" data-scroll-link>
                        Apply to Join Network
                        <svg viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M4 12 12 4M5 4h7v7" />
                        </svg>
                    </a>
                </div>
                <div class="who-join">
                    <span class="eyebrow">Who can join</span>
                    <h3>Built for partners who know their audience.</h3>
                    <div class="audience-list">
                        <span class="audience-tag">Affiliate &amp; Digital Marketers</span>
                        <span class="audience-tag">Lead-Generation Agencies</span>
                        <span class="audience-tag">Social-Media Marketers</span>
                        <span class="audience-tag">Content Creators &amp; Websites</span>
                        <span class="audience-tag">Mobile App Owners</span>
                    </div>
                </div>
            </div>
            <div class="benefit-stack">
                <div class="benefit-row"><span class="benefit-num">01</span><div><strong>Multiple Campaigns</strong></div></div>
                <div class="benefit-row"><span class="benefit-num">02</span><div><strong>Competitive Payouts</strong></div></div>
                <div class="benefit-row"><span class="benefit-num">03</span><div><strong>Performance Tracking</strong></div></div>
                <div class="benefit-row"><span class="benefit-num">04</span><div><strong>Dedicated Support</strong></div></div>
                <div class="benefit-row"><span class="benefit-num">05</span><div><strong>Digital Reporting</strong></div></div>
                <div class="benefit-row"><span class="benefit-num">06</span><div><strong>Transparent Validation</strong></div></div>
                <div class="benefit-row"><span class="benefit-num">07</span><div><strong>Promotional Resources</strong></div></div>
                <div class="benefit-row"><span class="benefit-num">08</span><div><strong>Performance Incentives</strong></div></div>
            </div>
        </div>
    </div>
</section>

<section class="section contact" id="contact" aria-labelledby="contact-heading">
    <div class="container">
        <div class="section-top">
            <div>
                <span class="eyebrow">05 / Contact &amp; enquiry</span>
                <h2 id="contact-heading" class="section-heading">
                    Tell us where the growth system needs to work harder.
                </h2>
            </div>
            <span class="section-index">DGF / 005</span>
        </div>
        <div class="contact-layout">
            <div class="contact-copy">
                <p>
                    Whether you represent a BFSI brand, performance team or
                    publisher business, start with the context. We will route
                    your enquiry to the right conversation.
                </p>
                <p class="mono contact-channel">ENQUIRY CHANNEL / READY</p>
            </div>

            <div>
                <form
                    id="contactForm"
                    class="form-shell"
                    action="api/enquiry.php"
                    method="post"
                    novalidate
                    aria-label="DigiFintech enquiry form"
                >
                    <!-- CSRF Token -->
                    <input type="hidden" name="csrf_token" id="csrf_token" value="">

                    <!-- Honeypot -->
                    <div class="honeypot" aria-hidden="true" style="display: none;">
                        <label for="website_url">Website</label>
                        <input id="website_url" name="website_url" type="text" tabindex="-1" autocomplete="off" />
                    </div>

                    <div id="formAlert" class="form-alert form-alert-error" role="alert" tabindex="-1" style="display: none; margin-bottom: 2rem;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                        <span class="form-alert-text">An error occurred.</span>
                    </div>

                    <div class="form-grid">
                        <div class="field">
                            <label for="name">Name <span class="required" aria-hidden="true">*</span></label>
                            <input id="name" name="name" type="text" placeholder="Your name" autocomplete="name" required class="form-control" />
                            <span class="form-error invalid-feedback" id="nameError" role="alert"></span>
                        </div>
                        <div class="field">
                            <label for="email">Email <span class="required" aria-hidden="true">*</span></label>
                            <input id="email" name="email" type="email" placeholder="you@company.com" autocomplete="email" required class="form-control" />
                            <span class="form-error invalid-feedback" id="emailError" role="alert"></span>
                        </div>
                        <div class="field">
                            <label for="phone">Phone</label>
                            <input id="phone" name="phone" type="tel" placeholder="Your phone number" autocomplete="tel" class="form-control" />
                            <span class="form-error invalid-feedback" id="phoneError" role="alert"></span>
                        </div>
                        <div class="field">
                            <label for="enquiry_type">Enquiry type <span class="required" aria-hidden="true">*</span></label>
                            <select id="enquiry_type" name="enquiry_type" required class="form-control">
                                <option value="">Choose one</option>
                                <option value="Brand/Advertiser">Brand / Advertiser</option>
                                <option value="Publisher/Affiliate">Publisher / Affiliate Partner</option>
                                <option value="Other">Other Enquiry</option>
                            </select>
                            <span class="form-error invalid-feedback" id="typeError" role="alert"></span>
                        </div>
                        <div class="field field-full">
                            <label for="message">Message <span class="required" aria-hidden="true">*</span></label>
                            <textarea id="message" name="message" placeholder="Tell us what you are building or looking to improve." required class="form-control"></textarea>
                            <span class="form-error invalid-feedback" id="messageError" role="alert"></span>
                        </div>
                    </div>
                    <div class="form-foot">
                        <p class="form-note">
                            Your details stay within this enquiry flow.<br />
                            We will only use them to respond to your request.
                        </p>
                        <button class="button-primary btn-submit" type="submit">
                            Send enquiry
                            <svg viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M4 12 12 4M5 4h7v7" />
                            </svg>
                        </button>
                    </div>
                </form>

                <div id="formSuccess" class="form-success-state" role="status" tabindex="-1" style="display: none; padding: 2rem; border-radius: 8px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1);">
                    <div class="success-icon-wrapper" aria-hidden="true" style="color: #4ade80; margin-bottom: 1rem;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    <h3 style="margin-bottom: 0.5rem;">Message Sent</h3>
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
