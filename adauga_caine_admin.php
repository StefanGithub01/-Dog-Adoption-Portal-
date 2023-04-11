<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrare</title>
    <link rel="stylesheet" href="style_index.css">
</head>
<body>

<?php
require 'meniu.php';
?>

</head>
<body>

<form action = 'adaugare.php' method = 'POST'>
    <h2 class = 'title'> Introduceti Datele Cainelui: </h2>
    <br>
    <input type = 'text' id = 'nume_caine' name = 'nume_caine' placeholder = 'Nume'> <br><br>
    <input type = 'number' id = 'varsta_caine' name = 'varsta_caine' placeholder = 'Varsta'> <br><br>
    <input type = 'text' id = 'rasa_caine' name = 'rasa_caine' placeholder = 'Rasa'> <br> <br>
    <input type = 'submit' value = 'Adauga Caine'>

</form>

</body>
</html>