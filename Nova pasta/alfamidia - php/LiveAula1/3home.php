<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC - Prática</title>
    <style>
        body {
            text-align:center;
            font-family: sans-serif;
            font-weight: bold; 
        }        
        section {
            margin-top: 50px;
            margin-left: auto; margin-right: auto;
            border-radius: 10px;
            border: 2px solid black;
            width: 400px;
            background-color: gray;
            padding: 2px;
        }
        form {
            text-align: center;
            margin-top: 15px;
        }
        input {
            text-align:center;
            display:block;
            border-radius: 5px;
            border: 2px solid black;
            margin-top: 2px;
            margin-left: auto; margin-right:auto;
            height: 25px;
        }
        div {
            margin-top: 50px; margin-bottom: 50px;
        }
        #c {
            font-style:italic;
            font-size:12px;
        }

    </style>
</head>
<body>
    <?php
        include "2verlogo.php"
    ?>
    <section>
        <h1>Bem vindo <?=$_SESSION["user"];?></h1>
        <menu align="left">
            <h2>Menu:</h2>
            <p>1. <a id="usuarios" href="4usuarios.php">Usuarios</a></p>
            <p>2. <a id="imc" href="5imc.php">Calculo IMC</a></p>
        </menu>        
        <a href="6logoff.php">LOGOUT</a>
        <p id="c">&copy;RRVTI</p>
    </section>
</body>
</html>