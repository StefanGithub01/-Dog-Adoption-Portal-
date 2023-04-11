<?php

session_start();



if (isset($_SESSION["logat"])) {
  $nume = strtoupper($_SESSION["nume"]);

  echo '<div class="topnav">

      <a class="active" href="logat.php"> <i class="fa-solid fa-house"></i> HOME </a>
      <a href="about.php"> <i class="fa-solid fa-address-card"></i>    ABOUT </a>
      <a href="contact.php"> <i class="fa-solid fa-phone"></i>   CONTACT </a>
      
      <div class="login-container">
      ';
      if($_SESSION['admin'] == 1) {
        echo '
        <a href = "administrare.php"> <i class="fa-solid fa-user-secret"></i> ADMIN </a> 
        ';
      }
      echo '
      <a href = "schimbari_cont.php"> <i class="fa-solid fa-user"></i> <b> '.$nume.' </b>  </a>
      <a href = "log_out.php"> <i class="fa-solid fa-right-from-bracket"></i> LOGOUT </a>
      
      </div>
      
      </div>
      ';
} else {

  echo '<div class="topnav">

      <a class="active" href="index.php"> <i class="fa-solid fa-house"></i> HOME </a>
      <a href="about.php"> <i class="fa-solid fa-address-card"></i>    ABOUT </a>
      <a href="contact.php"> <i class="fa-solid fa-phone"></i>   CONTACT </a>
      
      <div class="login-container">
      
      <a href="login.php"> <i class="fa-solid fa-key"></i>  LOGIN </a>
      <a href="register.php"> <i class="fa-solid fa-user"></i>  REGISTER </a>
      
      </div>
      
      </div>
      ';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/cda9a70747.js" crossorigin="anonymous"></script>
  <title>Adoptii Caini</title>
  <link rel="stylesheet" href="style_index.css">
</head>

<body>