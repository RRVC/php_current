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
        
        $Fname = "João";
        echo "Nome: <b>$Fname</b>.<br>";

        $Lname = "da Silva";
        echo "Sobrenome: <b>$Lname</b>.<br>";

        $Name = $Fname . " " . $Lname;
        echo "Nome completo: <b>$Name</b>.<br>";
    
    
    ?>
    
</body>
</html>