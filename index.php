<?php

if(!empty($_GET['name'])) {

  $response = file_get_contents("https://api.agify.io?name={$_GET['name']}");

  $data = json_decode($response, true);

  $age = $data["age"];

}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>API CALL AGIFY.IO</title>
  </head>
  <body>

    <?php if(isset($age)): ?>
      Age of random Name is: <?= $age ?>
    <?php endif; ?>

    <form>
      <label for="name">Name:</label>
      <input type="text" name="name" id="name">

      <button type="submit">Guess Age</button>
    </form>
  </body>
</html>
