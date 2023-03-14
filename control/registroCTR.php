<?php

    require_once "connection.php";


    if(isset($_POST['btn-cadastro'])){
        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $idade = mysqli_escape_string($connect, $_POST['idade']);
        $email = mysqli_escape_string($connect, $_POST['email']);
        $whatsapp = mysqli_escape_string($connect, $_POST['whatsapp']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);

        $sql = "INSERT INTO user (nome, idade, email, whatsapp, senha) VALUES ('$nome', '$idade', '$email', '$whatsapp', '$senha')";

        if(mysqli_query($connect, $sql)){
            header('Location: login.php?sucesso');
        }else{
            header('Location: login.php?erro');
        }  
    } 
?>