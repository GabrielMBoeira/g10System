<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title> Geral 10 Armazéns Gerais</title>
</head>

<body class="all">  
    <div class="login-card">
        <div class="header">
            <img class="logo" src="assets/images/logologin.png" alt="Logo G10">
        </div>
        <form action="g10/maintenance.php" method="post">
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" require>
                <label for="password" class="mt-2">Senha:</label>
                <input type="password" class="form-control" require>
            </div>
            <div class="form-group button">
                <button class="btn btn-primary" name="submit">Entrar</button>
            </div>
        </form>
    </div>
</body>
</html>