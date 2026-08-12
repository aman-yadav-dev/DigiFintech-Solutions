<?php
/**
 * Configuration Sample File
 * 
 * Rename this file to config.php and update with your actual credentials.
 * DO NOT commit config.php to version control.
 */

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'digifintech_db');
define('DB_USER', 'root');
define('DB_PASS', '');

// SMTP Configuration (PHPMailer)
define('SMTP_HOST', 'smtp.example.com');
define('SMTP_USER', 'user@example.com');
define('SMTP_PASS', 'your-smtp-password');
define('SMTP_PORT', 587); // Typically 587 for TLS, 465 for SSL
define('SMTP_SECURE', 'tls'); // 'tls' or 'ssl'

// Application Settings
define('ADMIN_EMAIL', 'admin@example.com');
define('SITE_NAME', 'DigiFintech Solution');
