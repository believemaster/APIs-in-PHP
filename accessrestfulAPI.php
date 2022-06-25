<?php

  $ch = curl_init();

  curl_setopt_array($ch, [
    CURLOPT_URL =>  "https://api.github.com/gists/5736b6d56cb9d6a2c9184a8b2424d795",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT => "believemaster"
  ]);

  $response = curl_exec($ch);

  curl_close($ch);

  $data = json_decode($response, true);

  print_r($data);

  // foreach($data as $gist) {
  //   echo $gist['id'], " - ", $gist['description'], "\n";
  // }

 ?>
