<?php
  require_once("conecta.php");
  if(isset($_POST["submit"])){
$enviado = $_POST['inlineFormInput'];
$sql=$db->prepare("SELECT * FROM codigos WHERE codigo = '".$_POST['inlineFormInput']."'"); 
      $sql->execute();  
      $verifica = $sql->fetch();
      if ($verifica>=1) {
        echo"<script language='javascript' type='text/javascript'>alert('Código Correcto. Efetue o seu login.');</script>";
      header("Location:login.php");
}else{

  echo"<script language='javascript' type='text/javascript'>alert('Código incorrecto. Verifique o seu código enviado no email ele pode estar na caixa de spam dê uma olhada.');</script>";
}
  }
 
  ?>
  <!DOCTYPE html>
<html>
<head>
	<title>StopCovid-19 Angola</title>
	<meta  charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Arimo|Montserrat|Noto+Sans|Open+Sans|PT+Sans|PT+Sans+Narrow|Poppins|Quicksand|Raleway|Roboto|Roboto+Mono|Roboto+Slab|Shrikhand|Slabo+27px|Source+Sans+Pro|Tajawal|Titillium+Web|Ubuntu" rel="stylesheet">
    
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         
        <link rel="stylesheet" type="text/css" href="cssperguntar.css">
          <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
</head>
<body>
	<section id="escolha">
		<h1><center>Digite o código que foi enviado no seu email</center></h1>
<form action="verificarEmail.php" method="post">

  <div class="form-row align-items-center">
  	<center>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Código</label>
      <input type="text" class="form-control mb-2" name="inlineFormInput" placeholder="Código">
    </div>
    </center>
    <center>
    <div class="col-auto">
      <button type="submit" name="submit" class="btn btn-primary mb-2">Verificar</button>
    </div>
  </div>
</center>
</form>
 </section>
<footer id="conta">
  <div class="text-center" id="footer">
    <a class="up-arrow" href="#estilo" data-toggle="tooltip" title="TO TOP">
      <img src="imagens\icons8-divisa-circulada-acima-64.png">
    </a><br><br>
    <p>© 2020. Criado por <a href="https://www.facebook.com/starweb.tec/" data-toggle="tooltip" title="Visite fanpage StarWeb">StarWeb</a></p> 
  </div>
  </footer>
</body>
</html>