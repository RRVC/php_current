<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Codificação de Strings I</title>
</head>
<body>
    <form action="">
        <input type="text" name="entrada" value="<?php if(isset($_GET["entrada"])) echo $_GET["entrada"];; ?>">
        <input type="submit">
    </form>
    <?php
        if (isset($_GET["entrada"])){
            $entrada = $_GET["entrada"];
            echo "Entrada: " . $entrada . "<br>";
            for ($c = 0 ; $c < mb_strlen($entrada) ; $c++){
                echo "caractere $c: ($entrada[$c]) <br>";
                echo "código do caractere: " . ord($entrada[$c]) . "<br>";
            }           
        } else {
            echo "Campo ainda não preenchido.";
        }
    ?>
</body>
</html>