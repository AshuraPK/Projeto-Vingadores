<!-- ter acesso ao Bootstrap, com todos os estilos prontos -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    .formulario{
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 50px;
    }  
</style>
<section class="linha-formulario">
    <div class="formulario" class="text-center"9>


<?php

$id_pessoa_alterar = $_GET['id_pessoa_alterar'];
var_dump($id_pessoa_alterar);


$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';


$banco = new PDO($dsn, $user, $password);


$select = 'SELECT tb_pessoa.*, tb_usuario.* FROM tb_pessoa INNER JOIN tb_usuario ON tb_usuario.id_pessoa = tb_pessoa.id WHERE tb_usuario.id_pessoa=' . $id_pessoa_alterar;


$dados= $banco->query($select)->fetch();

?>


       
        <form action="./usuario-editar.php" method="POST">

            <h2>Editar Cadastro</h2>
            <input type="hidden" placeholder="id" name="id" value="<?= $dados ['id']?>"><br>
            <input type="text" value= "<?= $dados['nome'] ?>" disabled class="form-control"><br>
            <input type="number" value= "<?php echo $dados ['ano_nascimento'] ?>" disabled class="form-control"><br>
            <input type="cpf" value= "<?= $dados ['cpf'] ?>" disabled class="form-control"><br>
            <input type="number" value= "<?= $dados ['telefone_1'] ?>"  class="form-control"><br>
            <input type="number" value= "<?= $dados ['telefone_2'] ?>"  class="form-control"><br>
            <input type="text" value= "<?= $dados ['logradouro'] ?>"  class="form-control"><br>
            <input type="number" value= "<?= $dados ['n_casa'] ?>"  class="form-control"><br>
            <input type="text" value= "<?= $dados ['bairro'] ?>"  class="form-control"><br>
            <input type="text" value= "<?= $dados ['cidade'] ?>"  class="form-control"><br>
            <input type="text" value= "<?= $dados ['usuario'] ?>" disabled class="form-control"><br>
            <input type="text" value= "<?= $dados ['senha'] ?>"  diseabled class="form-control"><br>
            <input type="submit">
        </form>
    </div>
</section>