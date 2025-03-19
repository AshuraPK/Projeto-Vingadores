<?php

$editarId = $_POST['id'];
$editarSenha = $_POST['senha'];
$editarTelefone_1 = $_POST['telefone_1'];
$editarTelefone_2 = $_POST['telefone_2'];
$editarLogradouro = $_POST['logradouro'];
 
 
$dsn = 'mysql:dbname=db_login;host=127.0.0.1'; 
$user = 'root';
$password = '';
$banco = new PDO($dsn, $user, $password);
$update = 'UPDATE tb_usuario set senha = :senha where id_pessoa = :id' ;
$banco->prepare($update)->execute([
    ':id'=> $editarId,
    ':senha'=>$editarSenha,
]);
 
// --------------------------------------
$update = 'UPDATE tb_pessoa set telefone_1 = :telefone_1, telefone_2 = :telefone_2, logradouro = :logradouro where id = :id' ;
 
$banco->prepare($update)->execute([
 
    ':id'=> $editarId,
    ':telefone_1' => $editarTelefone_1,
    ':telefone_2' => $editarTelefone_2,
    ':logradouro' => $editarLogradouro,
]);
 
header('location:loginSucesso.php');