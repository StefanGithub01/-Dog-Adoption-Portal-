<?php

require 'conectareDb.php';

session_start();

$nume = $_POST['nume'];
$pass = $_POST['pass'];
$email = $_POST['email'];

$_SESSION['nume'] = $nume;
$_SESSION['pass'] = $pass;




$sql = "INSERT INTO Users VALUES (NULL,'$nume', '$pass', '$email', NULL)";

$_SESSION['id'] = $id;

$result = mysqli_query($conn, $sql);


echo 'Inregistrare cu SUCCESS!';
header('Location:index.php');


?>