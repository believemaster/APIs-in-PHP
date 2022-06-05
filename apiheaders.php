<?php

$ch = curl_init();

$headers = [
  "Authorization: Client-ID aMGhP4pOKUFL1jbDeQM8R7qohF5D_hJ74FSUF6bkk9Y"
];

curl_setopt_array($ch, [
  CURLOPT_URL => "https://api.unsplash.com/photos/random",    // unsplash API
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => $headers
]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo "Status Code: ", $status_code, "\n";

echo "Response: ", $response, "\n";
