<?php
  try{
  $db=new PDO("mysql:host=localhost;dbname=covid","root","");
    
  }catch(PDOException $e){
    echo $e->getMessage();    }
  ?>