<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Desafio com o comando FOR</title>
</head>
<body>
    <form>
        Entre com uma lista de números separados por virgula para serem somados:<input type="text" name="input">
        <input type="submit">
    </form>
    
    <?php
        if(isset($_GET["input"])){
            $num = $_GET["input"];
            $lista = explode(",",$num);            
            $total = count($lista);
            $resultado = 0;
            for($i = 0; $i < $total;$i++){
                $resultado += $lista[$i];
                echo "valor " . ($i+1) . ": " . $lista[$i] . ".<br>";
            }
            echo "O total da soma é: " . $resultado . "<br><br>";
        }
    ?>
    
</body>
</html>