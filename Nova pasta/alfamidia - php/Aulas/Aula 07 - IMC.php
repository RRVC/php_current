<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - trabalhando com o comando IF</title>
</head>
<body>
    
    
    
    <?php
    /*
        Teste simples de IMC
        Abaixo de 17        Muito abaixo do peso
        Entre 17 e 18,49    Abaixo do peso
        Entre 18,5 e 24,99  Peso normal
        Entre 25 e 29,99    Acima do peso
        Entre 30 e 34,99    Obesidade I
        Entre 35 e 39,99    Obesidade II
        Acima de 40         Obesidade III
    */

// ================================== Exemplo 1 ================================== //
    
    $imc1 = 17;
    echo "<p>Exemplo 1<p>";

    if ($imc1 < 17){
        echo "Muito abaixo do peso";
    }
    if ($imc1 >= 17 && $imc1 <= 18.49){
        echo "Abaixo do peso";
    }
    if ($imc1 >= 18.5 && $imc1 <= 24.99){
        echo "Peso Normal";
    }
    if ($imc1 >= 25 && $imc1 <= 29.99){
        echo "Acima do peso";
    }
    if ($imc1 >= 30 && $imc1 <= 34.99){
        echo "Obesidade I";
    }
    if ($imc1 >= 35 && $imc1 <= 39.99){
        echo "Obesidade II";
    };
    if ($imc1 > 40){
        echo "Obesidade III";
    }

// ================================== Exemplo 2 ================================== //
    
    $imc2 = 41;
    echo "<p>Exemplo 2<p>";

    if ($imc2 < 17){
        echo "Muito abaixo do peso";
    } else if ($imc2 <= 18.49){
        echo "Abaixo do peso";
    } else if ($imc2 <= 24.99){
        echo "Peso Normal";
    } else if ($imc2 <= 29.99){
        echo "Acima do peso";
    } else if ($imc2 <= 34.99){
        echo "Obesidade I";
    } else if ($imc2 <= 39.99){
        echo "Obesidade II";
    } else if ($imc2 > 40){
        echo "Obesidade III";
    }

// ================================== Exemplo 3 ================================== //

    $imc3 = 41;
    echo "<p>Exemplo 3<p>";
    echo "<p>Seu IMC é {$imc3}</p>";

    if ($imc3 < 17){
        echo "Muito abaixo do peso";
    } else {
        if ($imc3 <= 18.49){
            echo "Abaixo do peso";
        } else {
            if ($imc3 <= 24.99){
                echo "Peso Normal";
            } else {
                if ($imc3 <= 29.99){
                    echo "Acima do peso";
                } else {
                    if ($imc3 <= 35.99){
                        echo "Obesidade I";
                    } else {
                        if ($imc3 <= 39.99){
                            echo "Obesidade II";
                        } else {                            
                                echo "Obesidade III";                                                      
                        }
                    }
                }
            }
        }
    }
    ?>    
</body>
</html>