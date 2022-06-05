<?php

$ch = curl_init();

$headers = [
  "Authorization: token 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",
  // "User-Agent: believemaster"    // or passing header in another way below
];

curl_setopt_array($ch, [
  CURLOPT_URL => "https://api.github.com/user/starred/httpie/httpie",    // github API to check the repo is star or not
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => $headers,
  CURLOPT_USERAGENT => "believemaster",
  CURLOPT_CUSTOMREQUEST => "DELETE"     // request method to change the method to get a different result. In this case remove star from repo
]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo "Status Code: ", $status_code, "\n";

echo "Response: ", $response, "\n";
