<?php
echo '<h1> Aluno editar </h1>';
var_dump($_POST);

$editarId = $_POST['id'];
$editarNome = $_POST['nome'];





$dsn = 'mysql:dbname=bd_chamadinha;host=127.0.0.1';
$user = 'root';
$password = '';
$banco = new PDO($dsn, $user, $password);

$update = 'UPDATE tb_alunos SET nomeCompleto = :nomeCompleto WHERE Id = :Id';

// o box vai guardar o banco preparado.
$banco->prepare($update)->execute([
    ':Id' => $editarId,
    ':nomeCompleto' => $editarNome

]);




$editarIdAlunos = $_POST['Id_alunos'];
$editarTelefone = $_POST['telefone'];
$editarEmail = $_POST['email'];
$editarNascimento = $_POST['Nascimento'];
$frequenteFormulario = $_POST['frequente'];


$dsn = 'mysql:dbname=bd_chamadinha;host=127.0.0.1';
$user = 'root';
$password = '';
$banco = new PDO($dsn, $user, $password);

$update = 'UPDATE tb_info_alunos SET telefone = :telefone, email = :email, Nascimento = :Nascimento, frequente = :frequente : WHERE Id_alunos = :Id_alunos';

// o box vai guardar o banco preparado.
$banco->prepare($update)->execute([
    ':Id_alunos'=> $editarIdAlunos,
    ':telefone'=>$editarTelefone,
    ':email'=>$editarEmail,
    ':nascimento'=>$editarNascimento,
    ':frequente'=>$frequenteFormulario

]);

