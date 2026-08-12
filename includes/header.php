<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/functions.php';

// Set defaults if not provided by the parent file
$page_title = $page_title ?? 'DigiFintech Solution Private Limited | Digital Growth & Customer Acquisition';
$meta_desc = $meta_desc ?? 'DigiFintech is a technology-driven digital growth and customer acquisition company focused on helping businesses scale performance campaigns.';
$canonical_url = $canonical_url ?? SITE_URL . $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo escape($page_title); ?></title>
    <meta name="description" content="<?php echo escape($meta_desc); ?>">
    
    <!-- SEO & Metadata -->
    <link rel="canonical" href="<?php echo escape($canonical_url); ?>">
    <meta property="og:title" content="<?php echo escape($page_title); ?>">
    <meta property="og:description" content="<?php echo escape($meta_desc); ?>">
    <meta property="og:url" content="<?php echo escape($canonical_url); ?>">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS System -->
    <link rel="stylesheet" href="/assets/css/variables.css">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    
    <?php if (isset($extra_css)): ?>
        <?php foreach($extra_css as $css): ?>
            <link rel="stylesheet" href="<?php echo escape($css); ?>">
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "DigiFintech Solution Private Limited",
      "url": "<?php echo SITE_URL; ?>",
      "logo": "<?php echo SITE_URL; ?>/assets/images/logo.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91-97557-67170",
        "contactType": "customer support",
        "email": "support@digifintech.in"
      },
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Rewa",
        "addressRegion": "Madhya Pradesh",
        "addressCountry": "IN"
      }
    }
    </script>
</head>
<body>
    <a href="#main-content" class="skip-link">Skip to main content</a>

    <header class="topbar" data-site-header>
        <div class="container topbar-inner">
            <a href="#home" class="brand-link" data-scroll-link>
                <span class="brand" aria-label="DigiFintech home">
                    <span class="brand-mark" aria-hidden="true"></span>
                    DigiFintech
                </span>
            </a>

            <nav class="desktop-nav" aria-label="Primary navigation">
                <a href="#services" class="nav-link" data-nav-link>Capabilities</a>
                <a href="#industries" class="nav-link" data-nav-link>Industries</a>
                <a href="#technology" class="nav-link" data-nav-link>Technology</a>
                <a href="#publishers" class="nav-link" data-nav-link>Publishers</a>
                <a class="nav-cta" href="#contact" data-scroll-link>
                    Start an enquiry
                    <svg viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M4 12 12 4M5 4h7v7" />
                    </svg>
                </a>
            </nav>

            <button class="menu-button" type="button" aria-label="Open navigation menu" aria-expanded="false" aria-controls="mobile-drawer" data-menu-toggle>
                <svg class="menu-icon" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M4 7h16M4 12h16M4 17h16" />
                </svg>
                <svg class="close-icon" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="m6 6 12 12M18 6 6 18" />
                </svg>
            </button>
        </div>
    </header>

    <aside class="mobile-drawer" id="mobile-drawer" aria-label="Mobile navigation" aria-hidden="true" data-mobile-drawer>
        <div class="drawer-head">
            <span class="brand" aria-label="DigiFintech home">
                <span class="brand-mark" aria-hidden="true"></span>
                DigiFintech
            </span>
            <button class="drawer-close" type="button" aria-label="Close navigation menu" tabindex="-1" data-menu-close>
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="m6 6 12 12M18 6 6 18" />
                </svg>
            </button>
        </div>
        <nav class="drawer-links" aria-label="Mobile primary navigation">
            <a href="#services" data-drawer-link>Capabilities</a>
            <a href="#industries" data-drawer-link>Industries</a>
            <a href="#technology" data-drawer-link>Technology</a>
            <a href="#publishers" data-drawer-link>Publishers</a>
        </nav>
        <a class="button-primary drawer-cta" href="#contact" data-drawer-link>
            Start an enquiry
            <svg viewBox="0 0 16 16" aria-hidden="true">
                <path d="M4 12 12 4M5 4h7v7" />
            </svg>
        </a>
    </aside>

    <main id="main-content">
