<?php

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $cidade = $_POST['cidade'];
        $endereco = $_POST['endereco'];
        $turma = $_POST['turma'];

        $sqlUpdate = "UPDATE usuarios SET nome='$nome',email='$email', senha='$senha', telefone='$telefone', sexo='$sexo', cidade='$cidade', endereco='$endereco', turma='$turma'
        WHERE id='$id'";
        $result = $conexao->query($sqlUpdate);
        print_r($result);
    }

header('Location: sistema.php');

?>