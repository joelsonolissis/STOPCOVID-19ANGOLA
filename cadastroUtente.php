<?php
require_once("conecta.php");
  if(isset($_POST["submit"])){
    $Pnome =  $_POST['namePrimeiro'];
    $Unome = $_POST['nameUltimo'];
    $nomeCompleto = $Pnome." ".$Unome;
    $senha = $_POST['senha'];
    $Telefone =  $_POST['validationDefault03'];
    $email = $_POST['exampleInputEmail1'];

    $sql1 = $db->prepare("SELECT * FROM usuarios WHERE email = '".$_POST['exampleInputEmail1']."' OR telefone='".$_POST['validationDefault03']."'");
    $sql1->execute();
    $contar = $sql1->fetch();
    if($contar == 0 ){
  $inserir=$db->prepare('INSERT INTO usuarios (nome,telefone,senha,email) VALUES (:nomeCompleto,:validationDefault03,:senha,:exampleInputEmail1)');

  $inserir->bindParam(":nomeCompleto",$nomeCompleto, PDO::PARAM_STR);
  $inserir->bindParam(":exampleInputEmail1",$email, PDO::PARAM_STR);
  $inserir->bindParam(":senha",$senha, PDO::PARAM_STR);
  $inserir->bindParam(":validationDefault03",$Telefone, PDO::PARAM_STR);
  $inserir->execute();
  echo "<script language='javascript' type='text/javascript'> alert('Cadastro realizado com sucesso.');</script>";
  echo "<script language='javascript' type='text/javascript'>window.location.href='v.php';</script>";


  }else{
  echo "<script language='javascript' type='text/javascript'> alert('Este email ou telefone está sendo utilizado por alguém. Verifique os seus dados.');</script>";
    echo "<script language='javascript' type='text/javascript'>window.location.href='cadastroUtente.php';</script>";
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
           
          <link rel="stylesheet" type="text/css" href="indexcss.css">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
  </head>
  <body>
  <section id="intro">

  	<div class="jumbotron animated bounceInDown">
           <img src="imgs/STOPCOVID-19.png" class="animated bounceInDown">
          <div class="container" id="cont">
            <h1 class="display-3 animated bounceInDown" > Basta Covid-19, vamos ajudar a enradicar o Covid-19 em Angola.</h1>
            <p class="animated bounceInDown">A pandemia de COVID-19 é uma pandemia em curso de COVID-19, uma doença respiratória aguda causada pelo coronavírus da síndrome respiratória aguda grave 2 (SARS-CoV-2). <br> Este portal foi criado para teleconsultas para pessoas que aparentam ter os sintomas e têm dúvida. Não saia de casa faça a sua consulta a partir da internet.</p>
             
        </div>
       
      </div>
    </section>
    <section id="cadastrar">
      <center><h4>Utenta  regista-te aqui.</h4></center>
      <form action="cadastroUtente.php" method="POST" enctype="multipart/form-data">
        <div class="container" id="minhaDiv">
      
    <div class="form-row">
      <div class="col">
        <input type="text" class="form-control" placeholder="Primeiro nome" id="namePrimeiro" name="namePrimeiro" required>
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Último nome" name="nameUltimo" required>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="exemplo1@email.com" required>
      <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu email com ninguém.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Senha</label>
      <input type="password" class="form-control" id="senha" name="senha" required>
    </div>
    
   <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationDefault03">Telefone</label>
        <input type="text" class="form-control" name="validationDefault03" maxlength="9" minlength="9" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
      </div> 

    
    </div>
      <button type="submit" class="btn btn-primary" name="submit" id="submit">Cadastrar</button>
 
  </div>
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