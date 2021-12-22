<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Introdução ao comando IF</title>
</head>
<body>
    <?php
        /*
        isto é um comentario
        */
        $i = 1;
        echo "{$i}<br>";
        $i = 3;
        echo "{$i}<br>";

        if ($i == 3)
            echo "i é igual a 3<br>";
        else {
            echo "i não é igual a 3<br>";
        }        
        if ($i == 4)
            echo "i é igual a 4<br>";
        else 
            echo "i não é igual a 4<br>";
        
        $i = $i + 1;
        echo "{$i}<br>";
    ?>    
</body>
</html>