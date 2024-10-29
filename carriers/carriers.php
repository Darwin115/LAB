<?php

$baseUrl = 'http://localhost:8080/api/carriers'; 
$wsKey = 'M7H1H78946MU2KFI8K83YEBN53C5217D'; 

// Configuración de la solicitud
$options = [
    'http' => [
        'header' => "Authorization: Basic " . base64_encode($wsKey . ':'),
        'method'  => 'GET',
    ]
];

$context = stream_context_create($options);

// Resultadoss

$response = file_get_contents($baseUrl, false, $context);


if ($response === FALSE) {
    die('Error al acceder al Endpoint Carriers');
}

$data = json_decode($response, true);
header('Content-Type: application/json');
echo json_encode($data, JSON_PRETTY_PRINT);
?>

