<h1>bem vindo!!!</h1>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- link do bootstrap serve para puxar as funções que tem no site, como tags prontas  -->
<html lang="pt-br">

<!--  html lang tem como finalidade definir a linguagem do site, e selecionar seu idioma     -->

<?php
// tag php serve para definir e transformar o campo que se extende em php, então tudo que estiver dentro dessa tag é php


$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
//dsn tem como função se conectar e chamar o banco e local host
$user = 'root';
// serve para entrar no banco, o root seria o usuario administrador ou padrao
$password = '';
// aqui seria definida a senha do banco caso houvesse
$banco = new PDO($dsn, $user, $password);
// banco é uma variavel que puxa o banco de dados, o PDO (PHP Data Object) serve como conexão para o banco de dados e o php
$select = 'SELECT * FROM tb_pessoa';
// comando query, que tem como finalidade procurar coisas dentro de um banco criado, no caso ele está chamando TUDO que está dentro do banco tb_alunos
$resultado = $banco->query($select)->fetchAll();
//variavel que retorna todos os resultados da consulta dentro do banco
?>
<!-- fechando tag php -->
<main class='container my-5'>
    <!-- essa tag tem como função guardar o conteudo principal e colocar uma margem, e centralizar tudo dentro do conteiner -->
    <table class="table table-striped">
        <!-- tag  -->
        <div class="my-3 d-flex justify-content-end">
            <a href="formulario.php" class="btn btn-success"> Cadastrar Novo Usuario </a>
        </div>
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td class="text-center">Ações</td>
        </tr>

        <?php foreach ($resultado as $linha) { ?>
            <tr>
                <td> <?= $linha['id'] ?></td>
                <td> <?php echo $linha['nome'] ?> </td>
                <td class="text-center"> 
                    <a href="./ficha.php?id=<?= $linha['id'] ?>" class="btn btn-primary">Abrir</a>
                    
                    <a href="./formulario-editar.php?id_aluno_alterar=<?= $linha['id'] ?>" class="btn btn-warning">Editar</a>
                   
                    <a href="./aluno-deletar.php?id=<?= $linha['id'] ?>" class="btn btn-danger">Excluir</a>
                    <!-- na parte da esquerda caminho arquivo "?" na parte da direita variavel -->
                </td>
            </tr>
        <?php } ?>

</main>
</table>