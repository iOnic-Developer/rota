<?php
// Simple Rota API - Just upload this file to your server
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

$dataFile = 'rota-data.json';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Load data
    if (file_exists($dataFile)) {
        echo file_get_contents($dataFile);
    } else {
        http_response_code(404);
        echo json_encode(['error' => 'No data found']);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Save data
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    if ($data) {
        file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT));
        echo json_encode(['success' => true]);
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid data']);
    }
}
?>
