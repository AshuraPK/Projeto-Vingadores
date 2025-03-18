<?php
//tag - php
echo '<h1>Cadastro de aluno</h1>';
// ordem importa o <pre> precisa estar encima do vardump
echo '<pre>';
// $_post -> variavel global, ela funciona em todo o projeto.
var_dump($_POST);
 
$nomeFormulario = $_POST['nome'];
$telefoneFormulario = $_POST['telefone'];
$emailFormulario = $_POST['email'];
$nascimentoFormulario = $_POST['nascimento'];
$frequenteFormulario = $_POST['frequente'];
$imgFormulario = $_POST['Img'];
 
$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';
$banco = new PDO($dsn, $user, $password);
 
$insert = 'INSERT INTO tb_pessoa (nome, ano_nascimento, cpf, telefone_1, telefone_2, logradouro, n_casa, bairro, cidade) VALUES (:nome, :ano_nascimento, :cpf, :telefone_1, :telefone_2, :logradouro, :n_casa, :bairro, :cidade)' ;
 
// o box vai guardar o banco preparado.
$box = $banco->prepare($insert);
 
// o box vai executar
$box->execute([
    ':nome' => $nomeFormulario
    ':ano_nascimento' => $ano_nascimentoFormulario,
    ':cpf' => $cpfFormulario,
    ':telefone_1' => $telefone_1Formulario,
    ':telefone_2' => $telefone_2Formulario,
    ':logradouro' => $logradouroFormulario,
    ':n_casa' => $n_casaFormulario,
    ':bairro' => $bairroFormulario,
    ':cidade' => $cidadeFormulario
]);
 
$id_pessoa = $banco -> lastInsertId();
 
echo $id_pessoa;
 
// ---------------------------------------------------------------
$insert = 'INSERT INTO tb_usuario (usuario, senha, id_pessoa)  VALUES (:usuario, :senha, :id_pessoa)';
 
$bancoprepara = $banco->prepare($insert);
 
$bancoprepara->execute([
    ':telefone' => $telefoneFormulario,
    ':email' => $emailFormulario,
    ':nascimento' => $nascimentoFormulario,
    ':frequente' => $frequenteFormulario,
    ':id_alunos' => $id_aluno,
    ':Img' => $imgFormulario
]);
 