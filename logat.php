<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/cda9a70747.js" crossorigin="anonymous"></script>
    <title>Logged</title>
    <link rel="stylesheet" href="style_index.css">
</head>
<body>


<?php
require 'meniu.php';
?>
<h1 class = "title"> Caini Disponibili Pentru Adoptie: </h1>

<?php

require 'conectareDb.php';
$sql = 'SELECT * FROM Dogs WHERE user_id is NULL';

if ($result = mysqli_query($conn, $sql)) {

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
      
      $id = $row['id'];
      $nume = $row['nume'];
      $varsta = $row['varsta'];
      $rasa = $row['rasa'];

      echo "<h3> Nume: $nume, Varsta: $varsta, Rasa: $rasa </h3>";

      echo "
        <form action = 'alegereCaine.php' method = POST>
        <input type = 'checkbox' id = 'caine' name = 'caine' value = '$id'> 
        <input type = 'submit' value = 'Alege'>
        </form>
      
      ";
    }
  }
}




?>





</body>
</html>