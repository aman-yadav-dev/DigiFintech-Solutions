<?php
header("HTTP/1.0 404 Not Found");
$page_title = "404 - Page Not Found | DigiFintech";
$meta_desc = "The page you are looking for could not be found.";

include 'includes/header.php';
?>

<section class="section" style="min-height: 60vh; display: flex; align-items: center; justify-content: center;">
    <div class="container text-center reveal">
        <h1 style="color: var(--color-accent-primary); font-size: clamp(4rem, 10vw, 8rem); margin-bottom: 0;">404</h1>
        <h2>Page Not Found</h2>
        <p class="text-secondary" style="max-width: 500px; margin: 0 auto 2rem;">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
        <a href="/" class="btn btn-primary">Return to Homepage</a>
    </div>
</section>

<?php
include 'includes/footer.php';
?>
