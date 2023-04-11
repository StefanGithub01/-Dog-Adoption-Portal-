<?php

session_start();
require 'conectareDb.php';

$id_dog = $_POST['caine'];
$id_user = $_SESSION['id_user'];


$sql = "UPDATE dogs SET user_id = $id_user WHERE id = '$id_dog' ";
$result = mysqli_query($conn, $sql);
header("Location:logat.php");



?>