<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Aula 1</title>
    <style>
        td,tr {
            padding:8px;
            text-align: center;
            /*border:solid 4px red;
            border-collapse: collapse;*/
        }
    </style>
</head>
<body>
    <?php
    /*
    echo "hello","<br>";
    echo "world","<br>";
    echo "<hr>";
    */

    $var_a = 10;
    $var_b = 15;

    /*
    echo "Variável a = ", $var_a , "<br>";
    echo "Variável a = $var_a <hr>";
    echo 'Variável a = $var_a <hr>';
    echo "Variável a = \"$var_a\" <hr>";
    */

    $resultado = "";
    
    $soma = $var_a + $var_b;
    echo "Soma de A+B = $soma <hr>";
    

    // ===================================== HR ===================================== 

    $ehpositivo = $soma >= 0;    
    echo "A soma é positiva? $ehpositivo <hr>";    

    // ===================================== HR ===================================== 

    $amaiorqueb = $var_a < $var_b;
    echo "A é maior que B? $amaiorqueb <hr>";

    // ===================================== HR ===================================== 

    $maiorque20 = ($soma > 20) ? "Sim, é maior." : "Não, não é maior.";
    echo "A soma de $var_a e $var_b é maior que 40? " . $maiorque20 . "<hr>";

    // ===================================== HR =====================================
    
    $tabela = "<table border=1>";
    $tabela = $tabela . "<tr>";
    $tabela .= "<td>";
    $tabela .= "Resultado da soma:";
    $tabela .= "</td>";
    $tabela .= "<td>";
    $tabela .= "$soma";
    $tabela .= "</td>";
    $tabela .= "</tr>";
    $tabela = $tabela . "<tr>";
    $tabela .= "<td>";
    $tabela .= "É maior que 20? ";
    $tabela .= "</td>";
    $tabela .= "<td>";
    $tabela .= "{Resultado}";
    $tabela .= "</td>";
    $tabela .= "</tr>";
    $tabela .= "</table>";

    $tabela_saida = str_replace("{Resultado}",$maiorque20,$tabela);

    echo $tabela_saida . "<br>" . "<hr>";
    // ===================================== HR =====================================

    if (($soma % 2) == 0){
        echo "Resultado é par." . "<br>" . "<hr>";
    } else {
        echo "Resultado é impar." . "<br>" . "<hr>";
    }
    // ===================================== HR =====================================
    
    switch($soma){
        case (($soma%2) == 0):
            $resultado .= "[SW]=> é par";
            break;
        default:
            $resultado .= "[SW]=> é impar";
            break;
    }
    echo $resultado;


    ?>
    
</body>
</html>