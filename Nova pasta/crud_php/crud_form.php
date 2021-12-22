<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="crud_php.css">
    <script src="crud_php.js"></script>
    <title>CRUD PHP</title>
</head>
<body>
    <?php
        include "crud_signUp.php";
        $msg = isset($_GET["msg"]) ? $_GET["msg"] : "";
    ?>
    <form method="post" action="" onload="display()">

        <div id="all_inputs_container">
                <div id="inputs_container">
                    <h1>Dados</h1>

                <div id="rng_container">
                    <input class="input_btn" type="button" value="SET RNG" onclick="set_rng()">
                </div>
                <div class="input_container" id="name_container">
                    <span>Nome: </span>
                    <input class="inputs" type="text" name="name_input" id="name_input" placeholder="Seu nome">
                </div>
                <div class="input_container" id="phone_container">
                    <span>Telefone: </span>
                    <input class="inputs" type="text" name="tel_input" id="tel_input" placeholder="Seu telefone">
                </div>
                <div class="input_container" id="birth_container">
                    <span>Nascimento: </span>
                    <input class="inputs" type="date" name="birth_input" id="birth_input">
                </div>
                <div class="input_container" id="grade_container">
                    <span>Nota: </span>
                    <input class="inputs" type="text" name="grade_input" id="grade_input">
                </div>
                <div id="button_container">
                    <input type="submit" value="Cadastrar">
                    <input type="reset" value="Limpar">
                </div>
                <div class="error_msg">
                    <span class="out_msg"><?=$msg?></span>
                </div>
            </div>
        </div>

        <div id="all_outputs_container">

            <div class="registry_container" id="students_container">
                <h1>Alunos</h1>
                <div class="list_container">
                    <div name="userscontainer"></div>
                </div>
                <div class="btn_container">
                    <input class="input_btn" type="button" onclick="reg_clear(0)" value="Limpar registro">
                </div>
            </div>

            <div class="registry_container" id="users_container">
                <h1>Não alunos</h1>
                <div class="list_container">
                </div>
                <div class="btn_container">
                    <input class="input_btn" type="button" onclick="reg_clear(1)" value="Limpar registro">
                </div>
            </div>
        </div>
    </form>
</body>
</html>