<?php
 require_once("conecta.php");
 if(isset($_POST["submit"])){

 session_start();

$login = $_POST['email'];
$senha = MD5($_POST['password']);
if (!empty($_POST) AND (empty($_POST["email"]) OR empty($_POST["password"]))) {
      header("Location: login.php"); exit;
  }

if (isset($_POST['email'])) {
       $sql=$db->prepare("SELECT * FROM medico WHERE email = '".$_POST['email']."' AND senha = '".$_POST['password']."'"); 
          $sql->execute();  
      $verifica = $sql->fetch();
      if ($verifica>=1) {
         $sql3 = "SELECT * FROM medico WHERE email = '".$_POST['email']."' AND senha = '".$_POST['password']."'";
        $verifica = $db->query($sql3);
          foreach($verifica as $row){
          
          
          $_SESSION['login'] = $row['nome'];
           $_SESSION['nome'] = $login;
           $_SESSION['mail'] = $row['email'];
           $_SESSION['email'] = $login;
        
        }
        header("Location:pageMedico.php");
      }else{
         $sql1=$db->prepare("SELECT * FROM usuarios WHERE email = '".$_POST['email']."' AND senha = '".$_POST['password']."'"); 
          $sql1->execute();  
      $verifica1 = $sql1->fetch();
      if ($verifica1>=1) {
          $sql2 = "SELECT * FROM usuarios WHERE email = '".$_POST['email']."' AND senha = '".$_POST['password']."'";
        $verifica1 = $db->query($sql2);
          foreach($verifica1 as $row){
          
          
          $_SESSION['login'] = $row['nome'];
           $_SESSION['nome'] = $login;
           $_SESSION['email'] = $row['email'];
           $_SESSION['Email'] = $email;
           $_SESSION['tel'] = $row['telefone'];
           $_SESSION['telefone'] = $telefone;
        }
         header("Location:pageUtente.php");
      }else{
         echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');</script>";
      }
      }
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
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="logincss.css">
      <link rel="stylesheet" type="text/css" href="indexcss.css">
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
   <script type="text/javascript">
      $("#signup").click(function() {
$("#first").fadeOut("fast", function() {
$("#second").fadeIn("fast");
});
});

$("#signin").click(function() {
$("#second").fadeOut("fast", function() {
$("#first").fadeIn("fast");
});
});


  
         $(function() {
           $("form[name='login']").validate({
             rules: {
               
               email: {
                 required: true,
                 email: true
               },
               password: {
                 required: true,
                 
               }
             },
              messages: {
               email: "Por favor entre com um email válido",
              
               password: {
                 required: "Por favor digite sua senha ",
                
               }
               
             },
             submitHandler: function(form) {
               form.submit();
             }
           });
         });
         


$(function() {
  
  $("form[name='registration']").validate({
    rules: {
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    
    messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      password: {
        required: "Por favor digite sua senha ",
        
      },
      email: "Por favor entre com um email válido"
    },
  
    submitHandler: function(form) {
      form.submit();
    }
  });
});

   </script>
    <div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h1>Benvindo</h1>
						 </div>
					</div>
                   <form action="login.php" method="post" name="login">
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email</label>
                              <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Seu email">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Senha</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Sua senha">
                           </div>
                           
                           <div class="col-md-12 text-center ">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" name="submit" id="submit">Entrar</button>
                           </div>
                           
                           <div class="form-group">
                              <p class="text-center">Esqueceu sua senha? <a href="#" id="signup">Recupere!</a></p>
                           </div>
                        </form>
                 
				</div>
			</div>
			  <div id="second">
			      <div class="myform form ">
                        <div class="logo mb-3">
                           <div class="col-md-12 text-center">
                              <h1 >Signup</h1>
                           </div>
                        </div>
                        <form action="#" name="registration">
                           <div class="form-group">
                              <label for="exampleInputEmail1">First Name</label>
                              <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Last Name</label>
                              <input type="text"  name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Lastname">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           </div>
                           <div class="col-md-12 text-center mb-3">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Get Started For Free</button>
                           </div>
                           <div class="col-md-12 ">
                              <div class="form-group">
                                 <p class="text-center"><a href="#" id="signin">Already have an account?</a></p>
                              </div>
                           </div>
                            </div>
                        </form>
                     </div>
			</div>
		</div>
      </div>   
         
</body>
</html>