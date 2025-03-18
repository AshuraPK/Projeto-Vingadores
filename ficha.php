<?php

$id_pessoa = $_GET['id_pessoa'];


$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = 'SELECT tb_usuario.*, tb_pessoa.nome FROM tb_usuario INNER JOIN tb_pessoa ON tb_pessoa.id = tb_usuario.id_pessoa WHERE tb_usuario.id_pessoa = ' . $id_pessoa;

$dados = $banco->query($select)->fetch();



?>




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    main {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    form {
        width: 600px;
    }
</style>

<main class="container text-center my-5">
    <img src="./img/<?= $dados['Img'] ?>" alt="imagem de perfil" class="img-thumbnail">
    <form action="#">
        <label for="nome">nome</label>
        <input type="text" value = "<?= $dados['nomeCompleto'] ?>" disabled class="form-control">
        <div class="row mt-2">
            <div class="col">
                <label for="telefone">telefone</label>
                <input type="number" value="<?php echo $dados ['telefone']?>" disabled class="form-control">
            </div>
            <div class="col">
                <label for="email">email</label>
                <input type="email" value="<?= $dados ['email']?>" disabled class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="data_nascimento">data_nascimento</label>
                <input type="date" value="<?= $dados ['nascimento']?>" disabled class="form-control">
            </div>
            <div class="col my-4 pt-2">
                <label for="checkbox" class="form-check-input">frequencia</label>
                <input type="checkbox" checked disabled class="form-checkbox">
            </div>
        </div>
    </form>
</main>
