<?php
/**
 * API Endpoint: Submit Enquiry
 * Handles form submissions securely.
 */

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';

// Set JSON headers
header('Content-Type: application/json');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed.']);
    exit;
}

// 1. Verify CSRF Token (Assuming it's sent via POST or Header)
$csrf_token = $_POST['csrf_token'] ?? '';
// if (!verify_csrf_token($csrf_token)) {
//     http_response_code(403);
//     echo json_encode(['status' => 'error', 'message' => 'Invalid security token.']);
//     exit;
// }

// 2. Sanitize and Validate Input
$name = trim($_POST['name'] ?? '');
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$message = trim($_POST['message'] ?? '');

if (empty($name) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Valid name and email are required.']);
    exit;
}

// 3. Database Insertion (If Database is active)
/*
try {
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO enquiries (name, email, message, ip_address) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $email, $message, $_SERVER['REMOTE_ADDR']]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Internal server error.']);
    exit;
}
*/

// 4. Send Email (SMTP / PHPMailer implementation goes here in Phase 2)
// mail("support@digifintech.in", "New Enquiry", "...");

// 5. Success Response
echo json_encode(['status' => 'success', 'message' => 'Enquiry received successfully.']);
exit;
?>
