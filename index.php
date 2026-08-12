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
    <div class="container text-center">
        <h2>Core Capabilities</h2>
        <p>Performance Marketing • Lead Generation • Campaign Management • BPO Solutions</p>
    </div>
</section>

<?php
// Include the footer which outputs the bottom half of the HTML document
include 'includes/footer.php';
?>
