<?php
/**
 * API: Generate CSRF Token
 * Called asynchronously by the frontend to keep the main landing page stateless.
 */
session_start();
header('Content-Type: application/json');

// Disable error display for production
ini_set('display_errors', 0);

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

echo json_encode(['csrf_token' => $_SESSION['csrf_token']]);
