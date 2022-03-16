<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'cadastro-projeto';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    /*if($conexao->connect_errno)
    {
        echo "Erro";
    }
    {
        echo "Conexão Efetuada com Sucesso";
    }
    */
?>