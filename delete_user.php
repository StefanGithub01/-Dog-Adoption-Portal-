
<?php

require 'conectareDb.php';

$id_user = $_POST['user'];

$sql = "UPDATE dogs SET user_id = NULL WHERE user_id = '$id_user';";
$result = mysqli_query($conn, $sql);
$sql = "DELETE FROM users WHERE id = '$id_user' ";
$result = mysqli_query($conn, $sql);
header("Location:utilizatori_admin.php");



?>