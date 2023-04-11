<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="style_index.css">
</head>
<body>
<?php
require 'meniu.php';
?>
<h1 class = "title"> Lista Totalitate Caini: </h1>

<h2> <a href = "adauga_caine_admin.php"> Adauga Caine </a> </h2>

<?php


require 'conectareDb.php';
$sql = 'SELECT * FROM Dogs';

if ($result = mysqli_query($conn, $sql)) {
    
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_array($result)) {

            $id = $row['id'];
            $nume = $row['nume'];
            $user_id = $row['user_id'];
            $varsta = $row['varsta'];
            $rasa = $row['rasa'];

            echo '
            <table>
            <tr>
                <th> Nume </th>
                <th> Varsta </th>
                <th> Rasa </th>
                <th> Stapan </th>
            </tr>

            <tr>

            <td>' . $nume . '</td>
            <td>' . $varsta . '</td>
            <td>' . $rasa . '</td>
            ';
            if($user_id == NULL) {
               echo '<td> NU </td>';
            } else {

                $sql2 = "SELECT * FROM users where id = '$user_id' ";

                if ($result2 = mysqli_query($conn, $sql2)) {
                    while ($row2 = mysqli_fetch_array($result2)) {
                        $owner = $row2['nume'];
                        echo "<td> $owner </td>";
                    }
                 
                }
            }
           ' 

            </tr>

            </table>
            ';
        
            echo "<br>";
        }
    }
}
?>
