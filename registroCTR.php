<?php
    require_once 'db_connect.php';

    if(isset($_POST['btn-cadastro'])){
        $nome = mysqli_escape_string($connect, $_POST['nome']);

        $datanascimento = mysqli_escape_string($connect, $_POST['datanascimento']);
        $datanascimento = date('Y-m-d', strtotime($datanascimento));

        $email = mysqli_escape_string($connect, $_POST['email']);
        $whatsapp = mysqli_escape_string($connect, $_POST['whatsapp']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);



        $sql = "INSERT INTO user (nome, datanascimento, email, whatsapp, senha, datalog) VALUES ('$nome','$datanascimento', '$email', '$whatsapp', '$senha', 'GETDATE()')";

        if(mysqli_query($connect, $sql)){
            header('Location: registrar.html?sucesso');
        }else{
            header('Location: registrar.html?falha');
        }
    }
?>