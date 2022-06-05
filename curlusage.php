<?php

$ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// or do it in this way:

curl_setopt_array($ch, [
  // CURLOPT_URL => "https://randomuser.me/api", // random user API
  CURLOPT_URL => "http://api.openweathermap.org/geo/1.0/direct?q=Delhi,110043&appid=226c1b54241af607992f7138913862d2",    // openweather API
  CURLOPT_RETURNTRANSFER => true
]);

$response = curl_exec($ch);

// Getting status code:
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo "Status Code: ", $status_code, "\n";

echo "Response: ", $response, "\n";
