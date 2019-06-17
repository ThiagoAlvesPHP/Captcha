<?php
session_start();
//SE NÃO EXISTIRA SESSÃO captcha
if(!isset($_SESSION['captcha'])) {
  //CRIANDO UM NÚMERO ALEATORIO
  $n = rand(1000, 9999);
  $_SESSION['captcha'] = $n;
}

//SE O O CAMPO CODIGO ESTIVER PREENCHIDO
if(!empty($_POST['codigo'])) {

  $codigo = $_POST['codigo'];

  //SE O CODIGO DIGITADO BATER COM O CAPTCHA EXIBIDO
  if($codigo == $_SESSION['captcha']) {
    $alert = '<div class="alert alert-success">Captcha Correto!</div>';
  } 
  //CASO CONTRARIO
  else {
    $alert = '<div class="alert alert-danger">Captcha Incorreto!</div>';
    //GERANDO NOVO CAPTCHA
    $n = rand(1000, 9999);
    $_SESSION['captcha'] = $n;
  }
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Captcha</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <style type="text/css">
  #cap{
    height: 60px;
    font-size: 30px;
    text-align: center;
    text-decoration: line-through;
  }
  </style>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      
    </div>
    <div class="col-sm-4 text-center">
      <?php
      if (isset($alert)) {
        echo $alert;
      }
      ?>
        <h3>Script de Captcha</h3><br>
        <form method="POST">
      <img src="imagem.php" width="200" height="100">
      <br><br>
      <input type="text" name="codigo" class="form-control" autofocus=""><br>
      <input type="submit" value="Entrar" />
    </form>
    </div>
    <div class="col-sm-4">
      
    </div>
  </div>
</div>

</body>
</html>