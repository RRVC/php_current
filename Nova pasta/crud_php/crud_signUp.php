<?php
    //include "connection.php";
    session_start();

    if (!isset($_POST["name_input"]) && !isset($_POST["tel_input"]) && !isset($_POST["birth_input"]) && !isset($_POST["grade_input"])){
        return false;
    } else {

        $name = $_POST["name_input"];
        $tel = $_POST["tel_input"];
        $birth = $_POST["birth_input"];
        $grade = $_POST["grade_input"];

        if(validate($name, $tel, $birth)){
            echo "<script>function display(){document.getElementById('all_outputs_container').style.display='flex';}</script>";
            $edit = "<input class='input_btn' type='button' value='Editar' onclick='editar()'>";
            $del = "<input class='input_btn' type='button' value='Excluir cadastro' onclick='remove()'>";
            $users_container = "ID id: <br>
                                Nome: $name <br>
                                Telefone: $tel <br>
                                Nascimento: $birth <br>
                                Nota: <br>
                                Data de registro: <br>
                                Ultima edição: <br>
                                <div class='btn_container'>$edit | $del</div>
                                ";

        };




        /*$reg_students = "INSERT INTO `students` (`id`, `name`, `phone`, `birth`, `grade`) VALUES (NULL, '$name', '$phone', '$birth', '$grade')";

        $conn->query($reg_students);*/

    };

    function validate($name, $tel, $birth){
        $txt = "/^[\D ]+$/";
        $num = "/^[\d ,.-]+$/";

        if(mb_strlen($name, 'UTF-8') == 0 || mb_strlen($tel, 'UTF-8') == 0 || mb_strlen($birth, 'UTF-8') == 0){
            header("Location: crud_form.php?msg=Preencha todos os dados!");

        } else if ( preg_match($txt, $name) == 0 ){
            header("Location: crud_form.php?msg=Nome inválido");
            return false;
        } else if ( preg_match($num, $tel) == 0 ||preg_match($num, $birth) == 0 ){
            header("Location: crud_form.php?msg=Telefone ou nascimento inválido, apenas números!");
            return false;
        } else {
            return true;
        };
    };

?>