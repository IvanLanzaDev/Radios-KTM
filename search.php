<?php include("functions.class.php"); ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Cadastro de Rádios KTM</title>
  </head>
  <body class="bg-dark text-light">
    <div class="container text-center">
       <div class="row">
       <div class="col-6 ml-1 mt-5 mb-3">
            <div class="form-inline">
            <h4>Rádios Cadastradas</h4>
            <a href="index.php" class="btn btn-primary ml-3 btn-sm">Cadastrar Rádios</a> 
             
            </div>     
       </div>

       <div class="form-inline">
       <form method="post" action="search.php" class="mt-4 ml-5">
              <input class="form-control" type="text" name="name_radios_search" placeholder="Pesquiser Rádios ">
              <button type="submit" class="btn btn-success" name="btn_search">Buscar</button>
            </form> 
        </div>
       </div>
      
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Rádio</th>
      <th scope="col">Ações</th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>

  <?php



    $count = 1;
    while($list_radios = mysqli_fetch_array($get_radios)){
        echo "
        <tr>
        <th scope='row'> $count</th>
        <td>$list_radios[name_radios]</td>
        <td><a href='info-radio.php?id_radio=$list_radios[id_radios]' class='btn btn-primary btn-sm'>Ver Informações</a></td>
        <td><a href='edit-radio.php?id_radio=$list_radios[id_radios]' class='btn btn-warning btn-sm'>Editar Informações</a></td>
      </tr>
        ";
        $count++;
    }
    
  ?>
   
  </tbody>
</table>

<?php
   if($count_radios == 0){
    echo "<h3>Não há rádios cadastradas</h3>";
  }

?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>