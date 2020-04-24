<?php

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
           <a href="perguntar.html"><button class="btn btn-primary btn-lg animated bounceInDown" href="perguntar.html" role="button"  id="bu">Cadastrar-se &raquo;</button></a>
           <a href="login.php"><button class="btn btn-primary btn-lg animated bounceInDown" href="perguntar.html" role="button"  id="bu">Entrar &raquo;</button></a>
          </div>
      </div>
	
        <div class="container" id="cont1">
          <h1 class="display-3 animated bounceInDown" > Sintomas do Covid-19</h1>
           
            <img src="imgs/capturar.png" class="animated bounceInDown">
           <h4>Outros sintomas que são menos frequentes</h4>
            <img src="imgs/capturar3.png" class="animated bounceInDown" width="1040px" height="200px">
          </div>
     <div class="container" id="cont2">
          <h1 class="display-3 animated bounceInDown"> Formas de transmissão do Covid-19</h1>
           
            <img src="imgs/capturar1.png" class="animated bounceInDown" width="1303px" height="822px">
            <img src="imgs/capturar2.png" class="animated bounceInDown" width="1004px" height="218px">
           
          </div>
          <div class="container" id="cont3">
          <h1 class="display-3 animated bounceInDown"> Como se prevenir do COVID-19</h1>
           
            <img src="imgs/prevencao.png" class="animated bounceInDown" width="1050px" height="932px">
            
          </div>
</section>
<script type="text/javascript">
        $(document).ready(function() {
  // Check if element is scrolled into view
  function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  }
  // If element is scrolled into view, fade it in
  $(window).scroll(function() {
    $('.scroll-animations .animated').each(function() {
      if (isScrolledIntoView(this) === true) {
        $(this).addClass('fadeInLeft');
      }
    });
  });
});
</script>
<footer id="conta">
<div class="text-center" id="footer">
  <a class="up-arrow" href="#intro" data-toggle="tooltip" title="TO TOP">
    <img src="imgs\unnamed.png" width="60px" height="60px">
  </a><br><br>
  <p>© 2020. Criado por <a href="https://www.facebook.com/starweb.tec/" data-toggle="tooltip" title="Visite fanpage StarWeb">StarWeb</a></p> 
</div>
</footer>
</body>
</html>