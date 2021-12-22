<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        Insira um número: <input type="text" name="input">
        <input type="submit">
    </form>
    <?php
        if(isset($_GET["input"])){
            $entrada = $_GET["input"];
            $lista = explode(",", $entrada);
            echo count($lista) . " elementos.<br><hr>";
            print_r($lista); echo "<hr>";
            $total = count($lista);
            $soma = 0;
            for ($c = 0; $c < $total; $c++){
                if(is_numeric($lista[$c])){
                    $soma += $lista[$c];
                } else {
                    echo "Este valor não é numérico:  $lista[$c]. <br>";
                }                
            }
            echo $soma;
        } else {
        echo "preencha";
        }

    ?>
    
</body>
</html>