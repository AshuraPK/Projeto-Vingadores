<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #0e0e0e;
            color: #f2f2f2;
        }

        .card {
            width: 400px;
            background-color: #1c1c1c;
            color: #f2f2f2;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
        }

        .form-control {
            background-color: #2c2c2c;
            border: none;
            color: #f2f2f2;
        }

        .form-control::placeholder {
            color: #bbb;
        }

        .btn {
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <div class="card text-center">
        <h1 class="mb-4">Login</h1>
        <form action="auxlogin.php" method="POST">

            <input type="text" class="form-control mb-3" placeholder="Usuário/E-mail" name="user" required>
            
            <input type="password" class="form-control mb-3" placeholder="Senha" name="password" required>

            <div class="d-grid gap-2">
                <input class="btn btn-success" type="submit" value="Entrar">
                <a class="btn btn-primary" href="./usuario-cadastrar.php">Cadastrar</a>
                <a class="btn btn-warning" href="./recuperarsenha.php">Esqueci a senha</a>
            </div>

        </form>
    </div>

</body>
</html>