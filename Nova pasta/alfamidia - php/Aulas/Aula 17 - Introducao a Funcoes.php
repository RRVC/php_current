<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução a Funções</title>
</head>
<body>
    <form>
        Qual a mensagem? <input type="text" name="msg">
        <input type="submit" value="Enviar">
    </form>
    <?php
        function ExibeMensagem($mensagem){
            echo "Atenção! Temos uma mensagem para o usuario: <b>$mensagem</b>.";
        }

        if(isset($_GET["msg"])){
            ExibeMensagem($_GET["msg"]);
            echo "<br>";
            ExibeMensagem($_GET["msg"]);
        } else {
            echo "Digite um nome acima.";
        }
    ?>
    
</body>
</html>