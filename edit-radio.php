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
            <h3>Editar Rádio</h3>
            <a href="view.php" class="btn btn-outline-primary btn-sm">Ver rádios cadastradas</a>
        </div>

        <div class="col-md-5 mt-5 mx-auto">
        <form method="post" action="">
        <?php $list_radio_info = mysqli_fetch_array($get_radio_url); ?>
            <div class="form-group">
                <input type="text" class="form-control custom-field px-0" placeholder="Nome da Rádio" name="name_radios" value="<?php echo $list_radio_info[name_radios]; ?>">
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <input type="text" class="form-control custom-field px-0" placeholder="Cidade" name="city_radios" value="<?php echo $list_radio_info[city_radios]; ?>">
                </div>
                <div class="form-group col-6">
                    <input type="text" class="form-control custom-field px-0" placeholder="Estado" name="state_radios" value="<?php echo $list_radio_info[state_radios]; ?>">
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control custom-field px-0" placeholder="Genero" name="gender_radios" value="<?php echo $list_radio_info[gender_radios]; ?>">
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <input type="tel" class="form-control custom-field phone px-0" placeholder="Contato" name="contact_radios" value="<?php echo $list_radio_info[contact_radios]; ?>">
                </div>
                <div class="form-group col-6">
                    <input type="tel" class="form-control custom-field phone px-0" placeholder="Contato" name="contact_radios2" value="<?php echo $list_radio_info[contact_radios2]; ?>">
                </div>
                
            </div>

            <div class="form-group">
                    <input type="text" class="form-control custom-field px-0" placeholder="Email" name="email_radios" value="<?php echo $list_radio_info[email_radios]; ?>">
                </div>
            <div class="form-group">
                <input type="text" class="form-control custom-field px-0" placeholder="Responsável" name="resp_radios" value="<?php echo $list_radio_info[resp_radios]; ?>">
            </div>
            <input type="submit" class="btn btn-warning btn-block btn-lg" value="Editar Informações" name="btn_edit_radio">
        </form>
        </div> 
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.mask.js"></script>

    <script type="text/javascript">
    
   $(document).ready(function(){
  $('.date').mask('00/00/0000');
  $('.time').mask('00:00:00');
  $('.date_time').mask('00/00/0000 00:00:00');
  $('.cep').mask('00000-000');
  $('.phone').mask('(00) 00000-0000');
  $('.phone_with_ddd').mask('(00) 0000-0000');
  $('.phone_us').mask('(000) 000-0000');
  $('.mixed').mask('AAA 000-S0S');
  $('.cpf').mask('000.000.000-00', {reverse: true});
  $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
  $('.money').mask('000.000.000.000.000,00', {reverse: true});
  $('.money2').mask("#.##0,00", {reverse: true});
  $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
      'Z': {
        pattern: /[0-9]/, optional: true
      }
    }
  });
  $('.ip_address').mask('099.099.099.099');
  $('.percent').mask('##0,00%', {reverse: true});
  $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
  $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
  $('.fallback').mask("00r00r0000", {
      translation: {
        'r': {
          pattern: /[\/]/,
          fallback: '/'
        },
        placeholder: "__/__/____"
      }
    });
  $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
});

  </script>


  </body>
</html>