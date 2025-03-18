<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    .formulario {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 50px;  
    }
img {
    width: 300px;
}
</style>
<section class="linha-formulario">
    <div class="formulario" class="text-center" 9>
        <h1>Formulario</h1>
        <!-- metodo de envio -> GET: manda informações atraves da url E POST: manda informações atraves do corpo -->
        <!-- Action: ele é para onde deve enviar os dados -->
        <?php

        $id_aluno_alterar = $_GET['id_aluno_alterar'];

        var_dump($id_aluno_alterar);

        $dsn = 'mysql:dbname=bd_chamadinha;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $banco = new PDO($dsn, $user, $password);

        $select = 'SELECT tb_info_alunos.*, tb_alunos.nomeCompleto FROM tb_info_alunos INNER JOIN tb_alunos ON tb_alunos.id = tb_info_alunos.Id_alunos WHERE tb_info_alunos.Id_alunos = ' . $id_aluno_alterar;

        $dados = $banco->query($select)->fetch();

        ?>

        <form action="./aluno-editar.php" method="POST">


            <h2>Editar Cadastro</h2>
            <img src="./img/<?= $dados['Img']?>" alt="">

            <input type="hidden"   placeholder="id"         name="id"            value="<?= $dados['Id']?>"><br>

            <input type="text"   placeholder="nome"         name="nome"            value="<?= $dados['nomeCompleto']?>"><br>
            <input type="number" placeholder="telefone"     name="telefone"        value="<?= $dados['telefone']?>"><br>
            <input type="email"  placeholder="email"        name="email"           value="<?= $dados['email']?> "><br>
            <input type="date"   placeholder="Nascimento"   name="nascimento"      value="<?= $dados['nascimento']?>"><br>
            <div>
                <label>Frequente?</label>
                <input type="checkbox" placeholder="frequente" name="frequente"><br>
            </div>
            <input type="file" accept="imagem/*" name="Img"><br>
            <input type="submit">
        </form>
    </div>
</section>