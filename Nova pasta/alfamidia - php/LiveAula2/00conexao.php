<?php

    $user = "root";
    $pass = "";

    $conn = new mysqli("localhost", "$user", "$pass", "aula");

    /*if ($conn->connect_error){
        echo $conn->connect_error;
    } else {
        echo "estamos conectados ao mysqli <hr>";
    }

    /*
    $sql = "SELECT * FROM usuarios";
    $result = $conn->query($sql);

    echo "Numero de linhas que retornar da consulta = " . $result->num_rows . "<hr>";

    while ($row = $result->fetch_assoc()){
        echo "ID: " . $row['id'] . "<br>";
        echo "Nome: " . $row['nome'] . "<br>";
        echo "Usuário: " . $row['usuario'] . "<br>";
        echo "<br>";
    }
    echo "<hr>";
    */

?>