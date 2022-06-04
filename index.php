<?php

// In cmd run the program: php index.php and the response will be same as source code of website

  // $response = file_get_contents("https://example.com");
  //
  // echo $response;

  // Making first API call
  $response = file_get_contents("https://randomuser.me/api");

  echo $response;   // This will return the JSON of data from the end point of /api
