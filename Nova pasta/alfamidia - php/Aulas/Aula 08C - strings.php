<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - o comando str_replace</title>
</head>
<body>
    <?php
        $texto = "Prezado [NOME], dirija-se a recepção.";
        $nome = "João";

        $textofinal = str_replace("[NOME]",$nome,$texto);
        echo $textofinal;    
    ?>    
</body>
</html>