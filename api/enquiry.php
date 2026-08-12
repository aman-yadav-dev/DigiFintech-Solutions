<?php
/**
 * API: Process Contact/Enquiry Form
 * Handles form validation, database insertion, and email notification.
 */
session_start();
header('Content-Type: application/json');

// Disable error display for production (log them instead)
ini_set('display_errors', 0);
ini_set('log_errors', 1);

// Utility to send JSON response
function sendResponse($status, $message, $httpCode = 200) {
    http_response_code($httpCode);
    echo json_encode(['status' => $status, 'message' => $message]);
    exit;
}

// 1. Method Validation
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendResponse('error', 'Method not allowed.', 405);
}

// 2. CSRF Validation
if (empty($_POST['csrf_token']) || empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
    sendResponse('error', 'Invalid request token. Please refresh the page and try again.', 403);
}

// 3. Honeypot (Spam Prevention)
// If the hidden 'website_url' field is filled out, it's a bot.
if (!empty($_POST['website_url'])) {
    // Fake success to fool the bot
    sendResponse('success', 'Your message has been sent successfully.');
}

// Load Dependencies (Config & PHPMailer)
if (!file_exists(__DIR__ . '/../includes/config.php')) {
    error_log('Configuration file missing.');
    sendResponse('error', 'Service unavailable. Please try again later.', 500);
}
require_once __DIR__ . '/../includes/config.php';

// If composer autoload exists (for PHPMailer)
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Initialize PDO early for rate limiting
$pdo = null;
try {
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
    $pdo = new PDO($dsn, DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
} catch (PDOException $e) {
    error_log('Database Connection Error: ' . $e->getMessage());
    sendResponse('error', 'Service unavailable. Please try again later.', 500);
}

// 4. Rate Limiting (IP based via MySQL)
$ipAddress = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
try {
    // Cleanup old rate limits (older than 24 hours) to prevent unbounded growth
    $pdo->exec("DELETE FROM rate_limits WHERE last_submit_time < DATE_SUB(NOW(), INTERVAL 24 HOUR)");

    // Check rate limit for this IP (1 submission per 30 seconds)
    $stmt = $pdo->prepare("SELECT UNIX_TIMESTAMP(last_submit_time) as last_time FROM rate_limits WHERE ip_address = :ip");
    $stmt->execute([':ip' => $ipAddress]);
    $row = $stmt->fetch();
    
    $currentTime = time();
    if ($row && ($currentTime - $row['last_time']) < 30) {
        sendResponse('error', 'You are submitting too fast. Please wait a moment.', 429);
    }
    
    // Update or insert rate limit record
    $updStmt = $pdo->prepare("INSERT INTO rate_limits (ip_address) VALUES (:ip) ON DUPLICATE KEY UPDATE last_submit_time = CURRENT_TIMESTAMP");
    $updStmt->execute([':ip' => $ipAddress]);

} catch (PDOException $e) {
    error_log('Rate Limit DB Error: ' . $e->getMessage());
    // Fail closed or open? We fail closed to prevent spam if DB has an issue.
    sendResponse('error', 'Service unavailable. Please try again later.', 500);
}

// 5. Input Extraction & Validation
// Clean inputs and remove newlines to prevent email header injection
function sanitizeInput($input) {
    $clean = trim($input ?? '');
    $clean = str_replace(["\r", "\n"], '', $clean);
    return htmlspecialchars($clean, ENT_QUOTES, 'UTF-8');
}

$name = sanitizeInput($_POST['name']);
$email = sanitizeInput($_POST['email']);
$phone = sanitizeInput($_POST['phone']);
$type = sanitizeInput($_POST['enquiry_type']);
// Message can have newlines, so we don't strip \r\n here, but we escape it.
$message = htmlspecialchars(trim($_POST['message'] ?? ''), ENT_QUOTES, 'UTF-8');

// Basic Server-Side Validation
if (empty($name) || strlen($name) > 100) {
    sendResponse('error', 'Please provide a valid name (max 100 characters).', 400);
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    sendResponse('error', 'Please provide a valid email address.', 400);
}

if (!empty($phone) && !preg_match('/^[0-9\+\-\(\)\s]{7,20}$/', $phone)) {
    sendResponse('error', 'Please provide a valid phone number.', 400);
}

if (empty($message) || strlen($message) > 1000) {
    sendResponse('error', 'Please provide a message (max 1000 characters).', 400);
}

$validTypes = ['Brand/Advertiser', 'Publisher/Affiliate', 'Other'];
if (!in_array($type, $validTypes)) {
    $type = 'Other';
}

// 6. Database Storage (Primary)
$dbInserted = false;
$emailSentStatus = 0;
$dbId = null;

try {
    $stmt = $pdo->prepare("INSERT INTO enquiries (name, email, phone, enquiry_type, message) VALUES (:name, :email, :phone, :enquiry_type, :message)");
    
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':enquiry_type', $type);
    $stmt->bindParam(':message', $message);
    
    $stmt->execute();
    $dbId = $pdo->lastInsertId();
    $dbInserted = true;

} catch (PDOException $e) {
    // Database failure -> Log internally, return generic error. No data exposed.
    error_log('Database Insert Error: ' . $e->getMessage());
    sendResponse('error', 'Service unavailable. Please try again later.', 500);
}

// 7. Email Notification (Secondary)
// We only attempt email if DB insertion was successful.
if ($dbInserted && defined('SMTP_HOST') && class_exists('PHPMailer\PHPMailer\PHPMailer')) {
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USER;
        $mail->Password   = SMTP_PASS;
        $mail->SMTPSecure = defined('SMTP_SECURE') ? SMTP_SECURE : PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = defined('SMTP_PORT') ? SMTP_PORT : 587;

        $mail->setFrom(SMTP_USER, SITE_NAME . ' System');
        $mail->addAddress(ADMIN_EMAIL);
        $mail->addReplyTo($email, $name);

        $mail->isHTML(false);
        $mail->Subject = 'New Enquiry: ' . $type . ' - ' . $name;
        
        $emailBody = "A new enquiry has been submitted.\n\n";
        $emailBody .= "Name: $name\n";
        $emailBody .= "Email: $email\n";
        $emailBody .= "Phone: " . ($phone ?: 'Not provided') . "\n";
        $emailBody .= "Type: $type\n\n";
        $emailBody .= "Message:\n" . html_entity_decode($message, ENT_QUOTES, 'UTF-8') . "\n";
        
        $mail->Body = $emailBody;

        if ($mail->send()) {
            $emailSentStatus = 1;
        }
    } catch (Exception $e) {
        // Email failed, but DB succeeded. Log email failure and proceed.
        error_log('Mailer Error: ' . $mail->ErrorInfo);
    }
}

// Update DB with email status if email was sent successfully
if ($dbInserted && $emailSentStatus === 1 && $dbId) {
    try {
        $updStmt = $pdo->prepare("UPDATE enquiries SET email_sent = 1 WHERE id = :id");
        $updStmt->execute([':id' => $dbId]);
    } catch (PDOException $e) {
        // Ignore secondary update error
    }
}

// 8. Final Success Response
// Even if email fails, if DB stored it, it's a success to the user.
sendResponse('success', 'Your message has been sent successfully. Our team will be in touch shortly.');
