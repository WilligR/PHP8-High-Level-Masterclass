<?php
/*************************************************
 * Copyright (c) Reinhard Willig
 * Date: 07.08.2024
 * Time: 10:40
 *************************************************/

?>
<!DOCTYPE html>
<html lang="de">
<head>
   <meta charset="utf-8">
   <title>Formular</title>
   <link rel="stylesheet" type="text/css" href="./Form/form.style.css">
</head>

<body>

<form action="#" method="post">
   <h2>Sign-Up</h2>
   <div class="input-container">
      <label for="input-username">Username</label>
      <input type="text" name="username" id="input-username" placeholder="Username" value="<?= $username ?? '' ?>" required>
   </div>

   <div class="input-container">
      <label for="input-email">E-Mail</label>
      <input type="text" name="email" id="input-email" placeholder="E-Mail" value="<?= $email ?? '' ?>" required>
   </div>

   <div class="input-container">
      <label for="input-age">Age</label>
      <input type="number" name="age" id="input-age" placeholder="Age"  value="<?= $age ?? '' ?>">
   </div>

   <div class="input-container">
      <label for="input-password">Password</label>
      <input type="password" name="password" id="input-password" placeholder="Password" required>
   </div>
   <div class="button-container">
      <button class="submit-button" type="submit" name="send-login">Send</button>
   </div>
</form>
<br><br><br>
<div style="color: #f0e0b0"> <?php  print ($errormsg); ?></div>


</body>
</html>


 