<?php 

echo '<h1>Aluno-deletar.php</h1>';

$dsn = 'mysql:dbname=bd_chamadinha;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

// var_dump($_GET);
// exibir as informações na tela var_dump
// GET é uma variavel global, pega todas as informações do metodo get 
$idFormulario = $_GET['id'];
// Apagando a tabela tb_alunos
$delete = 'DELETE FROM tb_alunos WHERE Id = :id';
$box = $banco-> prepare ($delete);
$box -> execute([
    ':id' => $idFormulario
]);

// Apagando a tabela tb_info_alunos
$delete = 'DELETE FROM tb_info_alunos WHERE Id_alunos = :id_alunos';
$box = $banco-> prepare ($delete);
$box -> execute([
    ':id_alunos' => $idFormulario
]);

echo '<script>
        alert("Usuario apagado com sucesso!!!")
        window.location.replace("index.php")
</script>';
//header('location:index.php');