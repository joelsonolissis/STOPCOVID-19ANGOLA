    <?php
    require_once("conecta.php");

    $Pnome =  $_POST['namePrimeiro'];
    $Unome = $_POST['nameUltimo'];
    $nomeCompleto = $Pnome." ".$Unome;
    $senha = $_POST['senha'];
    $categoria =  $_POST['inputState'];
    $pais = $_POST['inputState1'];
    $bilhete =  $_POST['validationDefault03'];
    $email = $_POST['exampleInputEmail1'];
     if(isset($_FILES['exampleFormControlFile1'])){
        $extensao = strtolower(substr($_FILES['exampleFormControlFile1']['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "imgs/";
        move_uploaded_file($_FILES['exampleFormControlFile1']['tmp_name'], $diretorio.$novo_nome);
        
        
    $sql1 = $db->prepare("SELECT * FROM medico WHERE email = '".$_POST['exampleInputEmail1']."' OR bilhete='".$_POST['validationDefault03']."'");
    $sql1->execute();
    $contar = $sql1->fetch();
    if($contar == 0 ){
  $inserir=$db->prepare('INSERT INTO medico (nome,categoria,bilhete,pais,senha,email,arquivo) VALUES (:nomeCompleto,:inputState,:validationDefault03,:inputState1,:senha,:exampleInputEmail1,:novo_nome)');

  $inserir->bindParam(":nomeCompleto",$nomeCompleto, PDO::PARAM_STR);
  $inserir->bindParam(":exampleInputEmail1",$email, PDO::PARAM_STR);
  $inserir->bindParam(":senha",$senha, PDO::PARAM_STR);
  $inserir->bindParam(":validationDefault03",$bilhete, PDO::PARAM_STR);
  $inserir->bindParam(":inputState",$categoria, PDO::PARAM_STR);
  $inserir->bindParam(":inputState1",$pais, PDO::PARAM_STR);
    $inserir->bindParam(":novo_nome",$novo_nome, PDO::PARAM_STR);
  $inserir->execute();
  echo "<script language='javascript' type='text/javascript'> alert('Cadastro realizado com sucesso.');</script>";
  echo "<script language='javascript' type='text/javascript'>window.location.href='verificarEmail.php';</script>";


  }else{
  echo "<script language='javascript' type='text/javascript'> alert('Este usuário já existe. O email/ nº de Cédula Profissional está a ser utilizado');</script>";
    echo "<script language='javascript' type='text/javascript'>window.location.href='cadastro.php';</script>";
  }
}
    ?>

