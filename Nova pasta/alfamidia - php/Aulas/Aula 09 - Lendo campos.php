<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Lendo Campos de Formulários HTML</title>
</head>
<body>
    <form>
        <input name="nome">
        <input type="submit">
    </form>
    <?php
        if (isset($_GET["nome"])){
            $nome = $_GET["nome"];

            $texto = "Prezado [NOME], dirija-se a recepção.";
            $textofinal = str_replace("[NOME]",$nome,$texto);
            echo $textofinal;
        };
    ?>
    
</body>
</html>