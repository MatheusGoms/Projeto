<!doctype html>
<html lang="PT-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen"/>
    

    <title>Projeto</title>
  </head>
  <body>
    <a href="home.php">Voltar</a>
    <div class="tela-login">
      <h1>Login</h1>
      <form action="testLogin.php" method="POST">
        <input type="text" name="email" placeholder="email">
        <br><br>
        <input type="password" name="senha" placeholder="senha">
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>