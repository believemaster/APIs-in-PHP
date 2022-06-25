<?php

  require __DIR__ . "/vendor/autoload.php";

  $client = new GuzzleHttp\Client;

  $response = $client->request("GET", "https://api.gihub.com/user/repos", [
    "headers" => [
      "Authorization" => "token YOUR_TOKEN",
      "User-Agent" => "believemaster"
    ]
  ]);

// getting status code
  echo $response->getStatusCode(), "\n";
// getting headers
  echo $response->getHeader("content-type")[0], "\n";
// getting response body
  echo substr($response->getBody(), 0, 200), "..\n";



 ?>
