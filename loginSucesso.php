



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



<?php



$dsn = 'mysql:dbname=db_login;host=127.0.0.1';
$user = 'root';
$password = '';


$banco = new PDO($dsn, $user, $password);

$select = 'SELECT * FROM tb_pessoa';

$resultado = $banco->query($select)->fetchAll();


?>


<main class="container my-5"> 

</style>
        
    <table class="table table-striped">
      
        <div class="my-3 d-flex justify-content-end">
           

            <a href="usuario-cadastrar.php" class="btn btn-sucess"> Cadastrar </a>
        </div>
        <tr> 
            <td>
                id
            </td>
            <td>
                nome
            </td>
            <td class="text-center">
                Ações
            </td>
        </tr>
      
        <?php foreach ($resultado as $linha) { ?>
            <tr>
                <td> <?php echo $linha['id'] ?> </td>
                <td> <?= $linha['nome'] ?> </td>
                <td class="text-center"> 
              
                <a class="btn btn-primary" href="./ficha.php?id_pessoa=<?= $linha['id'] ?>" role="button">Abrir</a>
                <a class="btn btn-warning" href="./formulario-editar.php?id_pessoa_alterar=<?= $linha['id'] ?>" role="button">Editar</a>
                <a class="btn btn-danger" href="./usuario-deletar.php?id=<?= $linha['id'] ?>" role="button">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</main>
