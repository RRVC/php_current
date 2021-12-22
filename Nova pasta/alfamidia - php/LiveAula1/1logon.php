<?php
    session_start();
    $usuario = $_POST["user"];
    $senha = $_POST["pass"];

    if($usuario == "admin" && $senha == "gui"){
        $_SESSION["user"] = $usuario;
        echo "[Logon ok] => user $usuario || Senha $senha";
        header("Location: 3home.php");
    } else {
        header("Location: 0index.php?msg=Usuario ou senha não confere");
    }

?>