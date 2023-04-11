<?php

require 'conectareDb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel = "stylesheet" type = "text/css" href = "login_style.css">
</head>
<body>

<div class = "loginbox">
    <img src = "avatar.png" class = "avatar">
    <h1> Login Here: </h1>

  <form action="save_log.php" method = "POST">

    
    <input type="text" id="nume" name="nume" placeholder = "Nume"><br>

    <input type="password" id="pass" name="pass" placeholder="Parola"><br><br>

    <input type="submit" value="Login">

    <a href = "register.php"> Nu ai cont? Inregistreaza-te aici. </a>

  </form>
  
  </div>

</body>
</html>


