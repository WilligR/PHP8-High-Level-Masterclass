<?php

$error = "";
$chars = 8;

if ($_POST) {
    $chars = (int)$_POST["charcount"];

    switch ($chars) {
        case $chars < 6:
            $chars = 6;
            $error = "Minimum 6 chars";
            break;
        case $chars > 32:
            $chars = 32;
            $error = "Maximum 32 chars";
            break;
    }

    $randomizer = new \Random\Randomizer;
    $sourcestring = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789*#$%&";
    $randompassword = $randomizer->getBytesFromString($sourcestring, $chars);
} else {
    $randompassword = "Click Generate";
}

?>

<!doctype html>
<html lang="de">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="index.css">
   <title>Random Password Generator</title>
</head>
<body>
<div class="generator-container">
   <div class="title-container">
      <h1>Password Generator</h1>
      <h3>Your password</h3>
   </div>
   <div class="password-container">
      <h5><?= $randompassword ?></h5>
   </div>

   <form action="#" method="post">
      <p>How many chars</p>
      <label for="number">How many chars</label> <br>
      <input id="number" class="number-input" type="number" name="charcount" value="<?= $chars ?>" min="6" required>
      <input class="submit-input" type="submit" value="Generate">
   </form>
</div>
<small><?= $error ?></small>
</body>
</html>