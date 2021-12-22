<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP vs Javascript</title>
</head>
<body>
    <p>Esta página vai mostrar uma soma em PHP</p>    
    <form method="get">
        <p>
            Número 1: <input type="number" id="n1" name="numero1"><br>
            Número 2: <input type="number" id="n2" name="numero2"><br>
            <input type="submit" name="calcular" value="Calcular">
        </p>
    </form>
    <?php
        $total = $_GET["numero1"] + $_GET["numero2"];
        echo "Resultado: " . $total;
    ?>    
</body>
</html>