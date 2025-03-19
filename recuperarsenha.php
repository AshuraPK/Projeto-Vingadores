<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    body {
        background-color: #0e0e0e;
        color: #f2f2f2;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .formulario {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 30px;
    }

    .card {
        width: 500px;
        padding: 30px;
        border-radius: 10px;
        background-color: #1f1f1f;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 28px;
    }

    .form-control {
        height: 45px;
        font-size: 16px;
        background-color: #333;
        color: #fff;
        border: 1px solid #444;
        border-radius: 8px;
        margin-bottom: 15px;
        padding-left: 15px;
    }

    .form-control::placeholder {
        color: #bbb;
    }

    .form-control:focus {
        border-color: #6c757d;
        box-shadow: 0 0 5px rgba(108, 117, 125, 0.3);
    }

    .btn-primary {
        width: 100%;
        height: 45px;
        font-size: 16px;
        background-color: #007bff;
        border: none;
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-yellow {
        width: 100%;
        height: 45px;
        font-size: 16px;
        background-color: #ffc107;
        border: none;
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }

    .btn-yellow:hover {
        background-color: #e0a800;
    }

    .text-center {
        text-align: center;
    }

    .btn-spacing {
        margin-top: 15px; /* Adicionando espaçamento entre os botões */
    }
</style>

<section class="linha-formulario">
    <div class="formulario">
        <div class="card">
            <h1>Esqueci a senha</h1>

            <form action="./recuperarsenha.php" method="POST">
                <input type="text" placeholder="Insira o usuário" name="usuario" class="form-control" required><br>

                <input type="text" placeholder="Insira o CPF" name="cpf" class="form-control" required><br>

                <input type="password" placeholder="Insira sua nova senha" name="senha" class="form-control" required><br>

                <input type="submit" class="btn btn-primary" value="Recuperar Senha"><br>

                <!-- Adicionando o espaçamento entre os botões -->
                <a href="index.php" class="btn btn-yellow btn-spacing">Voltar</a>
            </form>
        </div>
    </div>
</section>
