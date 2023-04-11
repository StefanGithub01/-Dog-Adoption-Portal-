<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vizualizare Adoptii</title>
    <link rel="stylesheet" href="style_index.css">
</head>
<body>
<?php
require 'meniu.php';
?>
<h1 class = "title"> Lista Caini Adoptati: </h1>

<?php

require 'conectareDb.php';

$id_user = $_SESSION['id_user'];

$sql = "SELECT * FROM Dogs WHERE user_id = '$id_user' ";

if ($result = mysqli_query($conn, $sql)) {

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {

            $id = $row['id'];
            $nume = $row['nume'];
            $varsta = $row['varsta'];
            $rasa = $row['rasa'];

            echo "<h3> Nume: $nume, Varsta: $varsta, Rasa: $rasa </h3>";
        }
    }
}
  ?>    