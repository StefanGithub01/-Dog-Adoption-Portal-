<?php

require 'conectareDb.php';

session_start();

$pass = $_POST['pass'];
$new_pass = $_POST['new_pass'];

$nume = $_SESSION['nume'];

$sql = "UPDATE users SET password = '$new_pass' WHERE nume = '$nume' ";
$result = mysqli_query($conn, $sql);

session_unset();
session_destroy();
header('Location:index.php');
die();



?>