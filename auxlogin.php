<?php

echo '<h1> AuxLogin.php </h1>';


    $userForm = $_POST ['user']; 
    $passwordForm = $_POST ['password'];


    $dsn = 'mysql:dbname=db_login;host=127.0.0.1';
    $user = 'root';
    $password = '';
    $banco = new PDO($dsn, $user, $password);
    $queryUsuarioSenha = 'SELECT * FROM tb_usuario WHERE usuario = "' . $userForm. '"AND senha = "' .$passwordForm .'"'; 
    
    $resultado = $banco-> query($queryUsuarioSenha)->fetch(); 

    $status = $resultado['status'];
    ?>

    <?php if ($status == 'admin') { ?>

    <h1> Bem vindo Usuario ADMIN</h1>


    <?php } ?>

    <h1> Bem vindo Usuario COMUM</h1>

    <a href="#" class="btn btn-sucess"> cadastrar -comum</a>
    <a href="#" class="btn btn-primary"> Abrir -comum</a>
    <a href="#" class="btn btn-warning" <?= $status != 'admin' ? 'disabled' : '' ?> > Editar -admin</a>
    <a href="#" class="btn btn-danger"> Excluir -admin</a>

<?php
    if (!empty($resultado)&& $resultado != false){ 
        header ('location:loginSucesso.php'); 

    }   else {    
        echo"    
        <script>
            alert('Senha ou CPF inválidos');
        </script>";
        header('location:index.php');
    }