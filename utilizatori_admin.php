<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/cda9a70747.js" crossorigin="anonymous"></script>
    <title>Admin</title>
    <link rel="stylesheet" href="style_index.css">
</head>
<body>

<?php
require 'meniu.php';
?>


<?php

require 'conectareDb.php';
$sql = 'SELECT * FROM Users';

if ($result = mysqli_query($conn, $sql)) {

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {

            $id = $row['id'];
            $nume = $row['nume'];
            $parola = $row['password'];
            $email = $row['email'];

            echo "<h3> $id, $nume, $parola, $email </h3>";
            echo "
            <form action = 'delete_user.php' method = POST>
            <input type = 'checkbox' id = 'user' name = 'user' value = '$id'>
            <input type = 'submit' value = 'Sterge'>
            </form>";
        }
    }
}
?>
