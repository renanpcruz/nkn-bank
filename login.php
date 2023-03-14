<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login</title>
</head>
<body>

    <form method="post" action="control/registroCTR.php">
        <div class="col">
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Data de Nascimento</label>
                <input type="date" name="date" id="date" class="form-control" name="idade">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="whatsapp" class="form-label">Whatsapp</label>
                <input type="text" class="form-control" id="whatsapp" name="whatsapp">
            </div>
            <div class="mb-3">
              <label for="pass" class="form-label">Senha</label>
              <input type="password" class="form-control" id="pass" name="senha">
            </div>
            <button type="submit" class="btn btn-primary" name="btn-cadastro">Submit</button>
        </div>
    </form>
</body>
</html>