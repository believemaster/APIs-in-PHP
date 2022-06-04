<?php

  // In cmd run the program: php index.php and the response will be same as source code of website (this will contains HTML also)
  // $response = file_get_contents("https://example.com");
  //
  // echo $response;

  // Making first API call
  $response = file_get_contents("https://randomuser.me/api");

  // echo $response;   // This will return the JSON of data from the end point of /api


  /*************Decode API results reading JSON in PHP***************/

  $data = json_decode($response, true);     // if second argument is true then it will return associative array if no second argument then normal object response
  // var_dump($data);

  // to get the value from associative array
  echo $data["results"][0]["name"]["first"], "\n";    // give first name as response 
