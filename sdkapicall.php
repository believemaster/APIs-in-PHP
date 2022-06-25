<?php

  $api_key = "YOUR_API_KEY";

  $data = [
    "name" => "Alice",
    "email" => "alice@example.com"
  ];

// SDK api call -creating new customer (SDK is much easier to make api call)
require __DIR__ . "/vendor/autoload.php";

$stripe = new \Stripe\StripeClient($api_key);

$customer = $stripe->customers->create($data);

echo $customer;

/*
// Normal API call using curl
  $ch = curl_init();

  curl_setopt_array($ch, [
    CURLOPT_URL =>  "https://api.stripe.com/v1/customers",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERPWD => $api_key,
    CURLOPT_POSTFIELDS => http_build_query($data)
  ]);

  $response = curl_exec($ch);

  curl_close($ch);

  echo $response;

*/

 ?>
