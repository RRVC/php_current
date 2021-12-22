<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática PHP 01</title>
</head>
<body>
    <form>
        <input type="text" name="FirstName" placeholder="Nome"> - 
        <input type="text" name="LastName" placeholder="Sobrenome">
        <input type="submit">
    </form>
    <?php
        if (isset($_GET["FirstName"]) && isset($_GET["LastName"])){
            if (strlen($_GET["FirstName"]) <= 0 || strlen($_GET["LastName"]) <= 0){
                echo "ERRO! Preencha todos os campos!";
            } else {
                $FirstName = $_GET["FirstName"];
                $LastName = $_GET["LastName"];
                $FullName = trim($FirstName) . " " . trim($LastName);
                $Text = "Nome completo: [NOME]<br>";
                $FinalText = str_replace("[NOME]" , $FullName , $Text);
                echo $FinalText;
                echo "O nome <b>$FullName</b> possui " . strlen($FullName) . " caracteres <br>";
            }        
        } else {
                echo "Campos ainda não preenchidos!";
            }            
    ?>    
</body>
</html>