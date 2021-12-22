<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuários</title>
    <style>
        .capslock {
            text-transform: uppercase;
        }
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
        label {            
            text-align:center;
            display:block;            
            margin-top: 2px;
            margin-left: auto; margin-right:auto;
        }
        input {
            text-align:center;
            /*display:block;*/
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
        input[type="reset"], input[type="submit"]{
            display: inline-block;            
        }
    </style>
</head>
<body>
    <section>        
        <?php
        include '2verlogo.php';
        include '00conexao.php';

        $sql = "SELECT * FROM usuarios";
        $result = $conn->query($sql);

        echo "Numero de linhas que retornar da consulta = " . $result->num_rows . "<hr>";
        
        if($result->num_rows > 0){
            echo "<table border='1' width='100%'>";
            echo "<th>ID</th><th>Nome</th><th>Usuario</th><th>Ação</th>";
            while ($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['usuario'] . "</td>";
                echo "<td align='center'> <img src='images/edit.png'>  <img src='images/close.png' </td>";
                echo "</tr>";
            }
            echo "</table>";
        }

        /*while ($row = $result->fetch_assoc()){
            echo "ID: " . $row['id'] . "<br>";
            echo "Nome: " . $row['nome'] . "<br>";
            echo "Usuário: " . $row['usuario'] . "<br>";
            echo "<br>";
        }
        echo "<hr>";*/
        ?>
        <a href="3home.php">Voltar para home</a><br><br>
        <a href="6logoff.php">LOGOUT</a>
        <p id="c">&copy;RRVTI</p>
    </section>    
</body>
</html>

