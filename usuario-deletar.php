<?php
 
echo'<h1> deletar</h1>';
$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';
$banco = new PDO($dsn, $user, $password);

 
$idFormulario = $_GET['id'];
 
$delete = 'DELETE FROM tb_pessoa WHERE id = :id';
 
$box = $banco->prepare($delete);
$box->execute([
    ':id' => $idFormulario
]);

$delete = 'DELETE FROM tb_usuario WHERE id_pessoa = :id';
$box = $banco->prepare($delete);

$box->execute([
    ':id' => $idFormulario
]);

echo
'<script>
    alert("O usuario foi apagado!")
    // aparecer uma mensagem de  apagado com sucesso
    window.location.replace("loginSucesso.php")
 
</script>';
 
// header('location:index.php');