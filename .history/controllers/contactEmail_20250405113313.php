<?php

// Validate and sanitize input
$name = htmlspecialchars(trim($_POST['name']));
$phone = htmlspecialchars(trim($_POST['phone']));
$email = htmlspecialchars(trim($_POST['email']));
$message = htmlspecialchars(trim($_POST['message']));
$ip = htmlspecialchars(trim($_POST['ip']));
$device = htmlspecialchars(trim($_POST['device']));
$url = htmlspecialchars(trim($_POST['url']));

$api_sendEmail = "https://testing.hikalcrm.com/api/newEmail";
$mail_to = "muskan@hikalagency.ae";
$notification = "common";
$title = "$name | Enquiry from website";
$emailBody = "
<div class='card'>
    <h2>Candidate Details</h2>
    <p><strong>Full Name:</strong> $name</p>
    <p><strong>Contact:</strong> $phone</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Message:</strong> $message</p>
    <p><strong>Country:</strong> $country</p>
    <p><strong>Date of Birth:</strong> $dob</p>
    <p><strong>Gender:</strong> $gender</p>
    <p><strong>Spoken Languages:</strong> $language</p>
    <p><strong>Military Status:</strong> $military</p>
    </div>
    <br>
<div class='card'>
    <h2>Education and Experience</h2>
    <p><strong>Education:</strong> $education</p>
    <p><strong>Profession:</strong> $profession</p>
    <p><strong>Years of Experience:</strong> $experience</p>
    <p><strong>Portfolio:</strong> $portfolio</p>
    <p><strong>Last Salary:</strong> $currency $lastSalary</p>
    <p><strong>Expected Salary:</strong> $currency $expectedSalary</p>
    <p><strong>Notice Period:</strong> $notice</p>
    <p><strong>Position Applied For:</strong> $position</p>
</div>
<br>
<p><strong>IP:</strong> $ip</p>
<p><strong>Device:</strong> $device</p>
<p><strong>URL:</strong> $url</p>
";
$style = ".card { padding: 20px; border: 1px solid #EEE; border-radius: 25px; background: #FFF; box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);} h2 { text-align: center; }";

// EMAIL
$emailDataClient = array(
    "email" => $mail_to,
    "notification" => $notification,
    "title" => $title,
    "message" => $emailBody,
    "style" => $style,
);
$emailDataClientJson = json_encode($emailDataClient);
$sech = curl_init($api_sendEmail);
curl_setopt($sech, CURLOPT_RETURNTRANSFER, true);
curl_setopt($sech, CURLOPT_POST, true);
curl_setopt($sech, CURLOPT_POSTFIELDS, $emailDataClientJson);
curl_setopt($sech, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
$emailResponse = curl_exec($sech);
curl_close($sech);

$response = json_decode($emailResponse, true); // Decode response

if (isset($response['message']) && $response['message'] === 'Email sent successfully') {
    // Email sent successfully
    $response = [
        'success' => true,
        'message' => 'Application submitted successfully!'
    ];
} else {
    // Email sending failed
    $response = [
        'success' => false,
        'message' => 'Application submission failed. Please try again later.'
    ];
}

// Return response as JSON
header('Content-Type: application/json');
echo json_encode($response);

?>