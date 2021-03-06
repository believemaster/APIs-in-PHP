<?php

$ch = curl_init();

$headers = [
  "Authorization: Client-ID aMGhP4pOKUFL1jbDeQM8R7qohF5D_hJ74FSUF6bkk9Y"
];

$response_headers = [];

$header_callback = function($ch, $header) use (&$response_headers){
  $len = strlen($header);
  $parts = explode(":", $header, 2);

  if(count($parts) < 2) {
    return $len;
  }

  $response_headers[$parts[0]] = trim($parts[1]);

  // $response_headers[] = $header;

  return $len;
};

curl_setopt_array($ch, [
  CURLOPT_URL => "https://api.unsplash.com/photos/random",    // unsplash API
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => $headers,
  // CURLOPT_HEADER => true      // response headers included
  CURLOPT_HEADERFUNCTION => $header_callback
]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// $content_type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
//
// $content_length = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);

curl_close($ch);

echo "Status Code: ", $status_code, "\n";
// echo "Content Type: ", $content_type, "\n";
// echo "Content Length: ", $content_length, "\n";

print_r($response_headers);

echo "Response: ", $response, "\n";
