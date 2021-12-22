<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC - Prática</title>
    <style>
        body {
            text-align:center;
            font-family: sans-serif;
            font-weight: bold; 
        }
        section {
            margin-top: 50px;
            margin-left: auto; margin-right: auto;
            border-radius: 10px;
            border: 2px solid black;
            width: 400px;
            background-color: gray;
            padding: 2px;
        }
        form {
            text-align: center;
            margin-top: 15px;
        }
        input {
            text-align:center;
            display:block;
            border-radius: 5px;
            border: 2px solid black;
            margin-top: 2px;
            margin-left: auto; margin-right:auto;
            height: 25px;
        }
        div {
            margin-top: 50px; margin-bottom: 50px;
        }
        #c {
            font-style:italic;
            font-size:12px;
        }

    </style>
</head>
<body>
    <?php
        include "2verlogo.php"
    ?>
    <section>
        <h1>Calculo do IMC</h1>
        <form action="" method="post">            
            Altura: <input type="text" name="altura" placeholder="insira sua altura">
            Peso: <input type="text" name="peso" placeholder="insira seu peso">
            <input type="submit">
        </form>
        <div id="php">
            <?php
                if(isset($_POST['altura']) && isset($_POST['peso'])){
                    if(strlen($_POST['altura']) <= 0 || strlen($_POST['peso']) <= 0 ){
                        echo "ERRO! Faltam dados";
                    } else {
                        $alturaV = $_POST['altura'];
                        $altura = str_replace(',','.',$alturaV);
                        $peso = $_POST['peso'];
                        if($altura <= 1 || $peso <= 20){
                            echo "Dados fora do parametro";
                        } else {
                            $imcres = $peso / ($altura * $altura);
                            $imc = number_format($imcres, 2);
                            echo "Seu IMC é: " . $imc . "<br>";
                            if($imc < 17){
                                echo "Muito abaixo do peso";
                            } else if($imc <= 18.49){
                                echo "Abaixo do peso";
                            } else if ($imc <= 24.99){
                                echo "Peso Normal";
                            } else if ($imc <= 29.99){
                                echo "Acima do peso";
                            } else if ($imc <= 34.99){
                                echo "Obesidade grau I";
                            } else if ($imc <= 39.99){
                                echo "Obesidade grau II";
                            } else if ($imc > 40){
                                echo "Obesidade grau III";
                            }
                        }   
                    }
                } else {
                    echo "Preencha os campos!";
                }        
            ?>
        </div>        
        <a href="3home.php">Voltar para home</a><br><br>
        <a href="6logoff.php">LOGOUT</a>
        <p id="c">&copy;RRVTI</p>
        
    </section>
</body>
</html>