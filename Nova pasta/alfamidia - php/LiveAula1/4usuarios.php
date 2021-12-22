<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
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
    <?php
        include "2verlogo.php";        
    ?>
    <section>
        <h1 class="capslock">Cadastramento</h1>
        <form action="" method="post">
            <label for="nome">
                Nome: <input type="text" name="nome" id="nome" placeholder="Insira seu nome" required><br>
            </label>
            <label for="usuario">
                Usuário: <input type="text" name="usuario" id="usuario" placeholder="Insira um usuario" required><br>
            </label>
            <label for="senha">
                Senha: <input type="password" name="senha" id="senha" placeholder="Insira uma senha" required><br>
            </label>
                <input type="submit" name="enviar" id="enviar" value="Enviar" onclick="testar()">
                <input type="reset" name="reset" id="reset" value="limpar">
        </form>
        <div id="php">
            <?php
                $nome = "";
                $usuario = "";
                $senha = "";
                if(isset($_POST["nome"]) && isset($_POST["usuario"]) && isset($_POST["senha"])){
                    $nome = $_POST["nome"];
                    $usuario = $_POST["usuario"];
                    $senha = $_POST["senha"];
                    echo "Echo dos dados acima: $nome $usuario $senha";
                } else {
                    echo "Preencha os dados acima.";
                }
                /*$nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
                $usuario = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
                $senha = isset($_POST["senha"]) ? $_POST["senha"] : "";*/
            ?>            
        </div>
        <a href="3home.php">Voltar para home</a><br><br>
        <a href="6logoff.php">LOGOUT</a>
        <p id="c">&copy;RRVTI</p>   
    </section>    
    <script>
        function testar(){
            var nome = document.getElementById("nome").value;
            var usuario = document.getElementById("usuario").value;
            var senha = document.getElementById("senha").value;
            if (nome.length == 0 || usuario.length == 0 || senha.length == 0){
                alert("Preencha todos os dados")
            }
        }        
    </script>
</body>
</html>