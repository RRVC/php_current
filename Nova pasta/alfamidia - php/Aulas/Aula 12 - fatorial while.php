<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP- Fatorial usando While</title>
</head>
<body>
    <form action="" method="get">
        <input type="number" name="num">
        <input type="submit">
    </form>
    <?php
        if(isset($_GET["num"])){
            $num1 = $_GET["num"];
            if($num1 == 1 || $num1 == 2){
                echo "Fatorial de $num1 é $num1";
            } else {
                $n = $num1;
                $fat = 1;
                while ($n > 1){
                    $fat = $fat * $n;
                    $n--;
                }
                echo "O fatorial de $num1 é $fat";
            }
        } else {
            echo "Insira um valor para calcular fatorial";
        }    
    ?>    
</body>
</html>