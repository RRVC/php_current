<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - PHP</title>
    <link rel="stylesheet" type="text/css" href="LA1.css">
</head>
<body>
    <?php
        $msg = isset($_GET["msg"]) ? $_GET["msg"] : "";
    ?>
    <section>
        <div id="form">
            <form method="post" action="1logon.php">
                <div id="inputs">
                    <label for="user">
                        Usuário <input type="text" name="user" id="user" value="" class="user" tabindex="1">
                    </label>
                    <br>
                    <label for="pass">
                        Senha <input type="password" name="pass" id="pass">
                    </label>
                    <br>
                    <input name="entrar" type="submit" class="bt" value="Entrar">
                    <input name="limpar" type="reset" class="bt" value="Limpar">
                    <p id="msg"><?=$msg?></p>
                </div>
            </form>
        </div>
    </section>
    
</body>
</html>