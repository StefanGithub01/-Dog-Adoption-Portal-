<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel = "stylesheet" type = "text/css" href = "login_style.css">
</head>
<body>


<div class = "loginbox">

    <img src = "avatar.png" class = "avatar">
    <h1> Register Here: </h1>

    <form action = "save_reg.php" method = "POST">

        <input type="text" id="nume" name="nume" placeholder = "Nume"><br>

        <input type="password" id="pass" name="pass" placeholder="Parola"><br>

        <input type="email" name = "email" placeholder = "Email"> <br>

        <input type="submit" value="Register">

        <a href = "login.php"> Ai deja cont? Logheaza-te aici. </a>

    </form>

</div>

</body>
</html>