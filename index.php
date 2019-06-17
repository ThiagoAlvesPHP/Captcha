<!DOCTYPE html>
<html>
<head>
  <title>Captch</title>
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
      <h3>Script de Captcha</h3><br>
      <form method="post">
        <input type="text" name="captcha" id="c" placeholder="Digite o Captcha" autofocus="" maxlength="4" class="form-control"> 
        <br>
        <input type="text" class="form-control" id="cap" value="<?=rand(1111, 9999); ?>">
        <br><br>
        <button class="btn btn-success btn-lg btn-block" id="click">Enviar</button>
        <div id="resposta"></div>
      </form>
    </div>
    <div class="col-sm-4">
      
    </div>
  </div>
</div>

</body>
</html>