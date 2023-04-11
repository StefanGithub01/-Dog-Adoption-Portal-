<?php

require 'conectareDb.php';

$nume = $_POST['nume_caine'];
$varsta = $_POST['varsta_caine'];
$rasa = $_POST['rasa_caine'];

echo $nume;

$sql = "INSERT INTO dogs VALUES (NULL, NULL, '$nume' , '$varsta' , '$rasa')";
$result = mysqli_query($conn, $sql);
header("Location:caini_admin.php");


?>