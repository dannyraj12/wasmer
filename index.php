<?php

$url = $_GET['url'] ?? '';

if (!$url) {
    echo "Add ?url=";
    exit;
}

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");

$response = curl_exec($ch);
curl_close($ch);

echo $response;
