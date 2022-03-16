<!doctype html>
<html lang="PT-BR">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    

    <title>Sistema</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
      
          <a class="nav-link active" aria-current="page" href="turma1.php">Turma1</a>
        
        
          <a class="nav-link active" aria-current="page" href="turma2.php">Turma2</a>
        
        
          <a class="nav-link active" aria-current="page" href="turma3.php">Turma3</a>

          
               
          <form class="d-flex">
          <a href="sair.php" class="btn btn-danger me-5">Sair</a>
          </form>
        </div>
    </nav>
<br>
    <?php
      echo "<h1><center>Lista de Alunos</center></h1>";
    ?>
    <div class="m-5">
    <table class="table text-white table-bg">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Nota1</th>
          <th scope="col">Nota2</th>
          <th scope="col">Nota3</th>
          <th scope="col">...</th>
        </tr>
      </thead>
     
</table>
    </div>
    
    
</body>
</html>