<?php
    session_start();

    include '00conexao.php';

    $usuario = $_POST["user"];
    $senha = $_POST["pass"];

    $sql = "SELECT usuario,senha FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        $_SESSION['user'] = $row['usuario'];
        header("Location: 3home.php");
    }
    if(!isset($_SESSION['user'])){
        header("Location: 0index.php?msg=Usuário ou senha não confere");
    }
    

    /*if($usuario == "admin" && $senha == "gui"){
        $_SESSION["user"] = $usuario;
        echo "[Logon ok] => user $usuario || Senha $senha";
        header("Location: 3home.php");
    } else {
        header("Location: 0index.php?msg=Usuário ou senha não confere");
    }*/

?>