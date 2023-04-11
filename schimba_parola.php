<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resetare Parola</title>
    <link rel="stylesheet" href="style_index.css">
</head>
<body>

<?php
require 'meniu.php';
?>
<h1 class = "title"> Schimbare Parola </h1>


<form action = "reset_parola.php" method = "POST">
  <input type = "password", id = "pass", name = "pass", placeholder = "Parola actuala"> <br>
  <input type = "password", id = "new_pass", name = "new_pass", placeholder = "Parola noua"> <br>
  <input type = "password", id = "new_confirm_pass", name = "new_confirm_pass", placeholder = "Repeta parola noua"> <br> <br>
  <input type = "submit", value = "OK"> 

</form>

</body>
</html>