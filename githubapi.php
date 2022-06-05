<?php

$ch = curl_init();

$headers = [
  "Authorization: token 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",
  // "User-Agent: believemaster"    // or passing header in another way below
];

$payload = json_encode([
  "name" => "Created from API",
  "description" => "And example API-created repo"
]);

curl_setopt_array($ch, [
  CURLOPT_URL => "https://api.github.com/user/repos",    // github API to check the repo is star or not
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => $headers,
  CURLOPT_USERAGENT => "believemaster",
  // CURLOPT_CUSTOMREQUEST => "DELETE",     // request method to change the method to get a different result. In this case remove star from repo
  // CURLOPT_CUSTOMREQUEST => "POST",     // this will create a new repo in the users github
  CURLOPT_POST => true,               // another way to request POST method (this is also not required as payload is set)
  CURLOPt_POSTFIELDS => $payload
]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo "Status Code: ", $status_code, "\n";

echo "Response: ", $response, "\n";
