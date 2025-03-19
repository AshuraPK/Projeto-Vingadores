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


    if (!empty($resultado)&& $resultado != false){ 
        header ('location:loginSucesso.php'); 

    }   else {    
        echo"    
        <script>
            alert('Senha ou CPF inválidos');
        </script>";
        header('location:index.php');
    }