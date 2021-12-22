<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Trabalhando com Strings</title>
</head>
<body>
    <?php
        
        $nome = "Pedro da Silva";
        echo "Total de caracteres de {$nome}:" . strlen($nome);
        echo "<br>";

        $nome = "Pedro da Silva  ";
        echo "Total de caracteres de {$nome}:" . strlen($nome);
        echo "<br>";

        $nome2 = trim($nome);
        echo "Total de caracteres de {$nome2}:" . strlen($nome2);
        echo "<br>";    

        echo "podemos também fazer: " . strlen(trim($nome));
    ?>    
</body>
</html>