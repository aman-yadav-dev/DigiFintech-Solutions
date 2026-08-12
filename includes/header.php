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
    <link rel="stylesheet" href="/assets/css/global.css">
    <link rel="stylesheet" href="/assets/css/layout.css">
    <link rel="stylesheet" href="/assets/css/components.css">
    <link rel="stylesheet" href="/assets/css/services.css">
    <link rel="stylesheet" href="/assets/css/publishers.css">
    
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

    <header class="site-header" id="header">
        <div class="container header-inner">
            <a href="/" class="logo" aria-label="DigiFintech Home">
                DigiFintech.
            </a>
            
            <nav class="main-nav" aria-label="Main Navigation">
                <ul>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#ecosystem">Ecosystem</a></li>
                    <li><a href="#technology">Technology</a></li>
                    <li><a href="#publishers">Publishers</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact" class="btn btn-primary">Get Started</a></li>
                </ul>
            </nav>

            <button class="mobile-menu-toggle" aria-label="Open Mobile Menu" aria-expanded="false" aria-controls="mobile-nav">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
        </div>
        <!-- Mobile Navigation Container -->
        <div id="mobile-nav" class="mobile-nav-container" aria-hidden="true">
            <nav aria-label="Mobile Navigation">
                <ul>
                    <li><a href="#services" class="mobile-link">Services</a></li>
                    <li><a href="#ecosystem" class="mobile-link">Ecosystem</a></li>
                    <li><a href="#technology" class="mobile-link">Technology</a></li>
                    <li><a href="#publishers" class="mobile-link">Publishers</a></li>
                    <li><a href="#about" class="mobile-link">About</a></li>
                    <li><a href="#contact" class="btn btn-primary mobile-link" style="margin-top: var(--space-2);">Get Started</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main id="main-content">
