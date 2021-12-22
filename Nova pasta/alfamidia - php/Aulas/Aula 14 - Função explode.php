<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - explode()</title>
</head>
<body>
    <form>
        <input type="text" name="input">
        <input type="submit">
    </form>
    <?php
        if(isset($_GET["input"])){
            $lista = $_GET["input"];
            $nomes = explode(",",$lista);
            echo count($nomes) . "<br>";
            $total_elementos = count($nomes);            
            $i = 0;
            while ($i < $total_elementos){
                echo "Este é o nome " . ($i+1) . ": " . $nomes[$i];
                echo "<br>";
                $i++;
            }            
            echo "<hr>";

            for($c = 0; $c < $total_elementos; $c++){
                echo "Este é o nome " . ($c+1) . ": " . $nomes[$c];
                echo "<br>";
            }
        }    
    ?>
    
</body>
</html>