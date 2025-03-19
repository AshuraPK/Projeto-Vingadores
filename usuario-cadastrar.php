<?php 


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nomeFormulario = $_POST['nome'] ?? '';
    $usuarioFormulario = $_POST['usuario'] ?? '';
    $senhaFormulario = $_POST['senha'] ?? '';
    $NascimentoFormulario = $_POST['ano_nascimento'] ?? '';
    $cpfFormulario = $_POST['cpf'] ?? '';
    $telefone_1Formulario = $_POST['telefone_1'] ?? '';
    $telefone_2Formulario = $_POST['telefone_2'] ?? '';
    $logradouroFormulario = $_POST['logradouro'] ?? '';
    $n_casaFormulario = $_POST['n_casa'] ?? '';
    $bairroFormulario = $_POST['bairro'] ?? '';
    $cidadeFormulario = $_POST['cidade'] ?? '';

    $dsn = 'mysql:dbname=db_login;host=127.0.0.1';
    $user = 'root';
    $password = '';

    try {
        $banco = new PDO($dsn, $user, $password);
        $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $insert = 'INSERT INTO tb_pessoa (nome, ano_nascimento, cpf, telefone_1, telefone_2, logradouro, n_casa, bairro, cidade)  
                   VALUES (:nome, :ano_nascimento, :cpf, :telefone_1, :telefone_2, :logradouro, :n_casa, :bairro, :cidade)';
        
        $bancoprepara = $banco->prepare($insert);
        $bancoprepara->execute([
            ':nome' => $nomeFormulario,
            ':ano_nascimento' => $NascimentoFormulario,
            ':cpf' => $cpfFormulario,
            ':telefone_1' => $telefone_1Formulario,
            ':telefone_2' => $telefone_2Formulario,
            ':logradouro' => $logradouroFormulario,
            ':n_casa' => $n_casaFormulario,
            ':bairro' => $bairroFormulario,
            ':cidade' => $cidadeFormulario,
        ]);

        $id = $banco->lastInsertId();

        $insert = 'INSERT INTO tb_usuario (usuario, senha, id_pessoa) VALUES (:usuario, :senha, :id_pessoa)';
        $box = $banco->prepare($insert);
        $box->execute([
            ':id_pessoa' => $id,
            ':usuario' => $usuarioFormulario,
            ':senha' => password_hash($senhaFormulario, PASSWORD_DEFAULT),
        ]);

    } catch (PDOException $e) {
        echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #121212;
            color: #f2f2f2;
        }

        .container {
            width: 100%;
            max-width: 500px;
            padding: 20px;
            border-radius: 10px;
            background-color: #1e1e1e;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
        }

        .form-control {
            height: 35px;
            font-size: 14px;
            background-color: #2c2c2c;
            border: none;
            color: #f2f2f2;
        }

        .form-control::placeholder {
            color: #bbb;
        }

        .btn {
            height: 40px;
            font-size: 16px;
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            margin-bottom: 15px;
        }

        .form-label {
            font-weight: bold;
        }

        .d-grid {
            margin-top: 20px;
        }

        .d-grid .btn-light {
            margin-top: 30px; /* Aumentei a distância do botão voltar */
            background-color: #f1c40f; /* Cor amarela para o botão voltar */
            color: #000;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Cadastro</h2>
        <form action="usuario-cadastrar.php" method="POST">
            
            <div class="row">
                <div class="col-md-6 mb-2">
                    <label class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="Nome completo" required>
                </div>
                <div class="col-md-6 mb-2">
                    <label class="form-label">Nascimento</label>
                    <input type="date" name="ano_nascimento" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-2">
                    <label class="form-label">CPF</label>
                    <input type="text" name="cpf" class="form-control" placeholder="000.000.000-00" required>
                </div>
                <div class="col-md-6 mb-2">
                    <label class="form-label">Telefone 1</label>
                    <input type="text" name="telefone_1" class="form-control" placeholder="(xx)x-xxxx-xxxx" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-2">
                    <label class="form-label">Telefone 2</label>
                    <input type="text" name="telefone_2" class="form-control" placeholder="Opcional">
                </div>
                <div class="col-md-6 mb-2">
                    <label class="form-label">Endereço</label>
                    <input type="text" name="logradouro" class="form-control" placeholder="Logradouro" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-2">
                    <label class="form-label">Nº Casa</label>
                    <input type="number" name="n_casa" class="form-control" placeholder="N°" required>
                </div>
                <div class="col-md-6 mb-2">
                    <label class="form-label">Bairro</label>
                    <input type="text" name="bairro" class="form-control" placeholder="Bairro" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-2">
                    <label class="form-label">Cidade</label>
                    <input type="text" name="cidade" class="form-control" placeholder="Cidade" required>
                </div>
                <div class="col-md-6 mb-2">
                    <label class="form-label">Usuário</label>
                    <input type="text" name="usuario" class="form-control" placeholder="Usuário" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-2">
                    <label class="form-label">Senha</label>
                    <input type="password" name="senha" class="form-control" placeholder="Senha" maxlength="8" required>
                </div>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-success">Cadastrar</button>
                <a href="index.php" class="btn btn-light mt-2">Voltar</a>
            </div>
            
        </form>
    </div>

    <script>
        document.querySelector("form").addEventListener("submit", function(event) {
            var senha = document.querySelector("input[name='senha']").value;
            if (senha.length < 8) {
                alert("A senha deve conter no mínimo 8 dígitos!");
                event.preventDefault();
            }
        });
    </script>

</body>
</html>
