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
        <div class="col-md-12 mt-5 mb-4">
            <img src="imgs/radio-icon.png" class="img-fluid">
        </div>
        <div class="col-md-12">
            <h3>Detalhes da Rádio</h3>
            <a href="view.php" class="btn btn-outline-primary btn-sm">Ver rádios cadastradas</a>
        </div>

        <div class="col-md-5 mt-5 mx-auto">

        <?php
            $list_radio_info = mysqli_fetch_array($get_radio_url);
        ?>  
            <p class="text-warning">Nome da Rádio: <?php echo "<span class='text-white'>$list_radio_info[name_radios]</span>"; ?></p>
            <p class="text-warning">Genero: <?php echo "<span class='text-white'>$list_radio_info[gender_radios]</span>"; ?></p>
            <p class="text-warning">Cidade: <?php echo "<span class='text-white'>$list_radio_info[city_radios]</span>"; ?></p>
            <p class="text-warning">Estado: <?php echo "<span class='text-white'>$list_radio_info[state_radios]</span>"; ?></p>
            <p class="text-warning">Contato: <?php echo "<span class='text-white'>$list_radio_info[contact_radios]</span>"; ?></p>
            <p class="text-warning">Contato: <?php echo "<span class='text-white'>$list_radio_info[contact_radios2]</span>"; ?></p>
            <p class="text-warning">Email: <?php echo "<span class='text-white'>$list_radio_info[email_radios]</span>"; ?></p>
            <p class="text-warning">Responsavel: <?php echo "<span class='text-white'>$list_radio_info[resp_radios]</span>"; ?></p>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.mask.js"></script>

    
  </body>
</html>