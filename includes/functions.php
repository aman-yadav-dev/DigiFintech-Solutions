<?php
/**
 * Global Helper Functions
 */

// Utility to escape HTML and prevent XSS
function escape($string) {
    return htmlspecialchars($string ?? '', ENT_QUOTES, 'UTF-8');
}

// Generate a CSRF token for forms
function generate_csrf_token() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

// Verify CSRF token
function verify_csrf_token($token) {
    if (!empty($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token)) {
        return true;
    }
    return false;
}
?>
