<?php
/**
 * Configuration File
 * Contains environment settings and database connection details.
 */

// Production error reporting (DO NOT EXPOSE IN PRODUCTION)
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/../php-error.log');

// Environment Setup
define('ENVIRONMENT', 'development'); // Change to 'production' on live server
define('SITE_URL', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]");

// Database Configuration (Only used when required)
define('DB_HOST', 'localhost');
define('DB_NAME', 'digifintech_db');
define('DB_USER', 'root');
define('DB_PASS', '');

// Optional DB Connection Singleton (Uncomment when database is required)
/*
function getDB() {
    static $pdo = null;
    if ($pdo === null) {
        try {
            $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USER, DB_PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Database connection failed: " . $e->getMessage());
            die("Database connection failed securely.");
        }
    }
    return $pdo;
}
*/
?>
