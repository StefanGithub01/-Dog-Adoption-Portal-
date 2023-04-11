<?php

require 'conectareDb.php';

session_start();

$nume = $_POST['nume'];
$pass = $_POST['pass'];
$_SESSION['nume'] = $nume;

$sql = "SELECT * FROM users WHERE nume = '$nume' AND password = '$pass' ";

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {

  $row = mysqli_fetch_array($result);
  $_SESSION['id_user'] = $row['id'];
  $_SESSION['admin'] = $row['admin'];
  $_SESSION["logat"] = 1;

  if ($_SESSION['admin']) {
    header("Location:logat.php");
    
  } else {
    $_SESSION["logat"] = 1;
    header("Location:logat.php");
  }


} else {

  echo '<script> alert("Nume sau Parola incorect!") </script>';
  die();
  }





?>

