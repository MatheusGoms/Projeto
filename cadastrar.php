<?php

    if(isset($_POST['submit']))
    {
        /*print_r('Nome: ' . $_POST['nome']);
        print_r('<br>');
        print_r('Email: ' . $_POST['email']);
        print_r('<br>');
        print_r('Telefone: ' . $_POST['telefone']);
        print_r('<br>');
        print_r('Sexo: ' . $_POST['genero']);
        print_r('<br>');
        print_r('<br>');
        print_r('Cidade: ' . $_POST['cidade']);
        print_r('<br>');
        print_r('Endereço: ' . $_POST['endereco']);
        print_r('<br>');
        print_r('Turma: ' . $_POST['Turma']);
        print_r('<br>');*/

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $cidade = $_POST['cidade'];
        $endereco = $_POST['endereco'];
        $turma = $_POST['turma'];
        

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,telefone,sexo,cidade,endereco,turma) 
        VALUES('$nome','$email','$senha','$telefone','$sexo','$cidade','$endereco', '$turma')");

        header('Location: login.php');
    }


?>
<!doctype html>
<html lang="PT-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen"/>
    

    <title>Formulario</title>
  </head>
  <body>
  <a href="home.php">Voltar</a>
    <div class="box">
        <form action="cadastrar.php" method="POST">
            <fieldset>
            <legend><b>Cadastro de Alunos</b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Nome Completo</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput">Email</label>
            </div>
            <br>
            <br>
            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label for="senha" class="labelInput">Senha</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelInput"> Telefone</label>
            </div>
            <br>
            <p>Sexo:</p>
            <input type="radio" name="genero" value="feminino" requered>
            <label for="feminino">Feminino</label>
            <br>
            <input type="radio" name="genero" value="masculino" requered>
            <label for="masculino">Masculino</label>
            <br>
            <input type="radio" name="genero" value="outro" requered>
            <label for="outro">Outro</label>
            <br>           
            <br><br>
            <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                <label for="endereco" class="labelInput">Endereço</label>
            </div>
            <div class="inputBox">
                <input type="text" name="turma" id="turma" class="inputUser" required>
                <label for="turma" class="labelInput">Turma</label>
            </div>
            <br>
            <br>
            <input type="submit" name="submit" id="submit">
            
            

        </fieldset>
        </form>
    </div>
</body>
</html>