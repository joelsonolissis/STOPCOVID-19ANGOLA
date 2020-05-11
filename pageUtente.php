<?php
session_start();
$login_cookie = $_SESSION['logi'];
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
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<section id="intro">

  	<div class="jumbotron animated bounceInDown">
           <img src="imgs/STOPCOVID-19.png" class="animated bounceInDown">
          <div class="container" id="cont">
            <h1 class="display-3 animated bounceInDown" > Basta Covid-19, vamos ajudar a enradicar o Covid-19 em Angola.</h1>
            <p class="animated bounceInDown">A pandemia de COVID-19 é uma pandemia em curso de COVID-19, uma doença respiratória aguda causada pelo coronavírus da síndrome respiratória aguda grave 2 (SARS-CoV-2). <br> Este portal foi criado para teleconsultas para pessoas que aparentam ter os sintomas e têm dúvida. Não saia de casa faça a sua consulta a partir da internet.</p>
             <a href="perguntar.html"><button class="btn btn-primary btn-lg animated bounceInDown" href="perguntar.html" role="button"  id="bu">Realizar consulta &raquo;</button></a>
        </div>
       
      </div>
    </section>
    
    <section id="exame">
    	<center>
    	<div>
    	<h1>Exame por questionário</h1>
    	<p>Neste exmame vai assinalar alguns sintomas e fatores para ver qual é o risco que você tem de estar infectado, assinale todos os sintomas que está a sentir nesse exato momento.</p>
    	</div>
    	</center>
    <script type="text/javascript">
    
    function ShowHideDiv(customCheck) {
        var total=0;
        // var dvPassport = document.getElementById("dvPassport");
        // dvPassport.style.display = customCheck.checked ? "block" : "none";
        if (customCheck.checked==true) { 
          total = total + 15;  
        }else{ 
          total =  total - 15;
        }

       
          alert(total);
    }
</script>
<script type="text/javascript">
    
    function ShowHideDiv3(customCheck3) {
        var total1=0;
        // var dvPassport = document.getElementById("dvPassport");
        // dvPassport.style.display = customCheck.checked ? "block" : "none";
        if (customCheck3.checked==true) { 
          total1 = total1 + 15;  
        }else{ 
          total1 =  total1 - 15;
        }
        
       
          alert(total1);
    }
</script>
<script type="text/javascript">
    
    function ShowHideDiv2(customCheck2) {
        var total2=0;
        // var dvPassport = document.getElementById("dvPassport");
        // dvPassport.style.display = customCheck.checked ? "block" : "none";
        if (customCheck2.checked==true) { 
          total2 = total2 + 20;  
        }else{ 
          total2 =  total2 - 20;
        }
        
       
          alert(total2);
    }
</script>
<script type="text/javascript">
    
    function ShowHideDiv4(customCheck4) {
        var total3=0;
        // var dvPassport = document.getElementById("dvPassport");
        // dvPassport.style.display = customCheck.checked ? "block" : "none";
        if (customCheck4.checked==true) { 
          total3 = total3 + 30;  
        }else{ 
          total3 =  total3 - 30;
        }
        
       
          alert(total3);
    }
</script>
<script type="text/javascript">
    
    function ShowHideDiv5(customCheck5) {
        var total4=0;
        // var dvPassport = document.getElementById("dvPassport");
        // dvPassport.style.display = customCheck.checked ? "block" : "none";
        if (customCheck5.checked==true) { 
          total4 = total4 + 5;  
        }else{ 
          total4 =  total4 - 5;
        }
        
       
          alert(total4);
    }
</script>
<script type="text/javascript">
    
    function ShowHideDiv6(customCheck6) {
        var total5=0;
        // var dvPassport = document.getElementById("dvPassport");
        // dvPassport.style.display = customCheck.checked ? "block" : "none";
        if (customCheck6.checked==true) { 
          total5 = total5 + 5;  
        }else{ 
          total5 =  total5 - 5;
        }
        
       
          alert(total5);
    }
</script>
<script type="text/javascript">
    
    function ShowHideDiv7(customCheck7) {
        var total6=0;
        // var dvPassport = document.getElementById("dvPassport");
        // dvPassport.style.display = customCheck.checked ? "block" : "none";
        if (customCheck7.checked==true) { 
          total6 = total6 + 5;  
        }else{ 
          total6 =  total6 - 5;
        }
        
       
          alert(total6);
    }
</script>
<script type="text/javascript">
    
    function ShowHideDiv8(customCheck8) {
        var total7=0;
        // var dvPassport = document.getElementById("dvPassport");
        // dvPassport.style.display = customCheck.checked ? "block" : "none";
        if (customCheck8.checked==true) { 
          total7 = total7 + 5;  
        }else{ 
          total7 =  total7 - 5;
        }
        
       
          alert(total7);
    }
</script>
    	<div  class="container" style="">
    		<form action="pageUtente.php" method="POST">
    			
    <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1" onclick="ShowHideDiv(this)">
    <label class="custom-control-label" for="customCheck" id="customCheck">Estive em um país com alto risco de contágio.</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck3" name="example3" onclick="ShowHideDiv3(this)">
    <label class="custom-control-label" for="customCheck3">Febre acima de 37&deg;.</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck2" name="example2" onclick="ShowHideDiv2(this)">
    <label class="custom-control-label" for="customCheck2">Tosse.</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck4" name="example4" onclick="ShowHideDiv4(this)">
    <label class="custom-control-label" for="customCheck4">Dificuldade em respirar.</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck5" name="example5" onclick="ShowHideDiv5(this)">
    <label class="custom-control-label" for="customCheck5">Dores no corpo.</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck6" name="example6" onclick="ShowHideDiv6(this)">
    <label class="custom-control-label" for="customCheck6">Inflamação na garganta.</label>
  </div>
  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck7" name="example7" onclick="ShowHideDiv7(this)">
    <label class="custom-control-label" for="customCheck7">Diarreira.</label>
  </div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck8" name="example8" onclick="ShowHideDiv8(this)">
    <label class="custom-control-label" for="customCheck8">Congestionamento nasal.</label>
  </div>
  </center>

    		</form>
    	</div>
    	<center>
    	<div class="card shadow mb-4" style="width: 500px; margin-top: 100px">
                <div class="card-header py-3">
                  <center>
                  	<h6 class="m-0 font-weight-bold text-primary">Risco de contágio</h6>
                  </center>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">Risco de estar contaminado<span class="float-right"><script>document.write(total1)</script>%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>
          </div>
          
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