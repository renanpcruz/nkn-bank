<?php
    if( $_GET['status'] == 'success'){
        echo 'Obrigado!';
        header('location: https://nknbank.com.br/');
    }else{
        echo 'Falha ao registrar';
        header('location: registrar.php');
    }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Registrar</title>
</head>
<body>
        <form method="post" action="registroCTR.php">
            <img src="./imgs/nkn-logo.png" alt="">
            <div class="col">
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Data de Nascimento</label>
                    <input type="text" class="form-control" id="datanascimento" name="datanascimento" placeholder="dd/mm/yyyy" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="whatsapp" class="form-label">Whatsapp</label>
                    <input type="text" class="form-control" id="whatsapp" name="whatsapp"placeholder="(00)00000-0000">
                </div>
                <div class="mb-3">
                  <label for="pass" class="form-label">Senha</label>
                  <input type="password" class="form-control" id="pass" name="senha" required minlength="8" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$">
                  <small>Senha deve conter 8 dígitos, e 1 número</small>
                </div>
                <button type="submit" class="btn btn-primary" name="btn-cadastro">Submit</button>
            </div>
        </form>
</body>
</html>