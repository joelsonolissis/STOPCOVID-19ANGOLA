<?php
  require_once("conecta.php");
 require 'mailer/PHPMailerAutoload.php';
if(isset($_POST["submit"])){
$enviar = $_POST['inlineFormInput'];
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 'pintomorais24@gmail.com';
$mail->Password = 'Neidegloria28';
$mail->Port = 587; 

$mail->setFrom('$enviar');
$mail->addReplyTo('pintomorais24@gmail.com');
$mail->addAddress('$enviar', $enviar);
$mail->addAddress("$enviar", '$enviar');

 $codigo = range(10000, 9999);
 $string = implode("",$codigo);
$mail->isHTML(true);
$mail->Subject = 'StopCovid-19 verificação de email.';
$mail->Body    = ' O seu código de confirmação é: $string ';
$mail->AltBody = ' O seu código de confirmação é: $string ';


if(!$mail->send()) {
    echo 'Não foi possível enviar a mensagem.<br>';
    echo 'Erro: ' . $mail->ErrorInfo;
} else {
    echo"<script language='javascript' type='text/javascript'>alert('Email enviado.');</script>";
    header("Location:codigoEmail.php");
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
		<h1><center>Verifique o seu email. Para confirmamos que é válido. (deve utilizar o email que se registrou)</center></h1>
<form action="verificarEmail.php" method="post">

  <div class="form-row align-items-center">
  	<center>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">email</label>
      <input type="email" class="form-control mb-2" name="inlineFormInput" placeholder="exemplo1@email.com">
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