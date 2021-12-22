<?php
    session_start();
    session_destroy();
    header("Location: 0index.php");
?>