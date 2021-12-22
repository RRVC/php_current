<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("Location: 0index.php?msg=Usuario não autenticado");
    }

?>