<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $sexo = $user_data['sexo'];
                $cidade = $user_data['cidade'];
                $endereco = $user_data['endereco'];
                $turma = $user_data['turma'];
            }            
        }
        else
        {
            header('Locartion: sistema.php');
        }
    }
         else{
             header('Location: sistema.php');
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
  <a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
            <legend><b>Cadastro de Alunos</b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                <label for="nome" class="labelInput">Nome Completo</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
                <label for="email" class="labelInput">Email</label>
            </div>
            <br>
            <br>
            <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone ?>" required>
                <label for="telefone" class="labelInput"> Telefone</label>
            </div>
            <br>
            <p>Sexo:</p>
            <input type="radio" name="genero" value="feminino" <?php echo $sexo == 'feminino' ? 'checked' : '' ?> requered>
            <label for="feminino">Feminino</label>
            <br>
            <input type="radio" name="genero" value="masculino" <?php echo $sexo == 'masculino' ? 'checked' : '' ?> requered>
            <label for="masculino">Masculino</label>
            <br>
            <input type="radio" name="genero" value="outro" <?php echo $sexo == 'outros' ? 'checked' : '' ?> requered>
            <label for="outro">Outro</label>          
            <br><br>
            <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade ?>" required>
                <label for="cidade" class="labelInput">Cidade</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco ?>" required>
                <label for="endereco" class="labelInput">Endereço</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="turma" id="turma" class="inputUser" value="<?php echo $turma ?>" required>
                <label for="turma" class="labelInput">Turma</label>
            </div>
            <br>
            <input type="hidden" name="id" value=<?php echo $id;?>>
            <input type="submit" name="update" id="submit">

        </fieldset>
        </form>
    </div>
</body>
</html>