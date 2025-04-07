<?php
require_once __DIR__ . '/../config/env.php';
require_once __DIR__ . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$smtpHost = $GLOBALS['env']['SMTP_HOST'] ?? 'mail.hikal.ae';
$smtpPort = $GLOBALS['env']['SMTP_PORT'] ?? '465';
$smtpUsername = $GLOBALS['env']['SMTP_USERNAME'] ?? 'enquiry@hikal.ae';
$smtpPassword = $GLOBALS['env']['SMTP_PASSWORD'] ?? 'Enquiry@Hikal1610';
$smtpEncryption = $GLOBALS['env']['SMTP_ENCRYPTION'] ?? 'ssl';
$fromEmail = $GLOBALS['env']['FROM_EMAIL'] ?? 'enquiry@hikal.ae';
$fromName = $GLOBALS['env']['FROM_NAME'] ?? 'Hikal Enquiry';
$mailTo = $GLOBALS['env']['MAIL_TO'] ?? 'muskan@hikal.ae';

$name = htmlspecialchars(trim($_POST['name'] ?? ''));
$phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
$email = htmlspecialchars(trim($_POST['email'] ?? ''));
$country = htmlspecialchars(trim($_POST['country'] ?? ''));
$message = htmlspecialchars(trim($_POST['message'] ?? ''));
$ip = htmlspecialchars(trim($_POST['ip'] ?? ''));
$device = htmlspecialchars(trim($_POST['device'] ?? ''));
$url = htmlspecialchars(trim($_POST['url'] ?? ''));

if (empty($name) || empty($phone) || empty($email) || empty($message)) {
    $response = [
        'success' => false,
        'message' => 'Please fill all required fields.'
    ];
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

// Prepare email body
$title = "$name | Enquiry from Website";
$emailBody = "
<div style='padding: 20px; border: 1px solid #EEE; border-radius: 25px; background: #FFF; box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);'>
    <h2 style='text-align: center;'>Enquiry Details</h2>
    <p><strong>Full Name:</strong> $name</p>
    <p><strong>Contact:</strong> $phone</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Message:</strong> $message</p>
</div>
<br>
<div style='padding: 20px; border: 1px solid #EEE; border-radius: 25px; background: #FFF; box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);'>
    <p><strong>Country:</strong> $country</p>
    <p><strong>IP:</strong> $ip</p>
    <p><strong>Device:</strong> $device</p>
    <p><strong>URL:</strong> $url</p>
</div>
";

// Initialize PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
    $mail->SMTPSecure = $smtpEncryption;
    $mail->Port = $smtpPort;

    // Recipients
    $mail->setFrom($fromEmail, $fromName);
    $mail->addAddress($mailTo);

    // Content
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $emailBody;

    // Send email
    $mail->send();
    $response = [
        'success' => true,
        'message' => 'Form submitted successfully!'
    ];
} catch (Exception $e) {
    $response = [
        'success' => false,
        'message' => "Form submission failed: {$mail->ErrorInfo}"
    ];
}

// Return response as JSON
header('Content-Type: application/json');
echo json_encode($response);