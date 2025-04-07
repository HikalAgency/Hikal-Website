<?php

// Read the raw POST request body
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Validate input data
if (!isset($data['agency_id']) || !isset($data['count'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Missing required parameters.'
    ]);
    exit;
}

// Convert agency_id to a string
$requestData = [
    "count" => (int) $data['count'],
    "agencyId" => (string) $data['agency_id'],
    "lastId" => $data['lastId'] ?? null,
    "lastDate" => $data['lastDate'] ?? null
];

// API URL
$apiUrl = "https://f760-154-176-129-148.ngrok-free.app/dodeal-2938d/us-central1/getRecordings";

// Initialize cURL
$ch = curl_init($apiUrl);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
]);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET"); // Force GET method
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestData)); // Send JSON body

// Execute the request
$response = curl_exec($ch);
// exit($response);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Return API response
if ($httpCode == 200) {
    echo $response;
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Failed to fetch data from API.',
        'status_code' => $httpCode
    ]);
}

?>
