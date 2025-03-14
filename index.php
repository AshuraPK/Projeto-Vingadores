<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="PT-BR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
 
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #0e0e0e;
            color: #f2f2f2;
        }
 
        .card {
            background-color: #1f1f1f;
            color: #f2f2f2;
            border-radius: 15px;
            padding: 20px;
            width: 500px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);
        }
    </style>

<body>
 
    <div class="card">
        <form action="auxlogin.php" method="POST" class="mt-3">

            <h1 class="text-center">Login</h1>
            <label class="form-label">Usuário:</label>
            <input type="text" class="form-control" name="user">
            
            <label class="form-label mt-3">Senha:</label>
            <input type="password" class="form-control" name="password">

            <div class="d-flex justify-content-between mt-4">
                <input class="btn btn-success" type="submit" value="Entrar">
                <a href="cadastro.php" class="btn btn-primary">Cadastrar</a>
            </div>
        </form>
    </div>
</body>
</html>
