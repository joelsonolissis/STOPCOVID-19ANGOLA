<?php

?>
<!DOCTYPE html>
<html>
<title>StopCovid-19 Angola</title>
  	<meta  charset="UTF-8">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      
          <link href="https://fonts.googleapis.com/css?family=Arimo|Montserrat|Noto+Sans|Open+Sans|PT+Sans|PT+Sans+Narrow|Poppins|Quicksand|Raleway|Roboto|Roboto+Mono|Roboto+Slab|Shrikhand|Slabo+27px|Source+Sans+Pro|Tajawal|Titillium+Web|Ubuntu" rel="stylesheet">
      
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           
          <link rel="stylesheet" type="text/css" href="indexcss.css">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
            <script src="https://unpkg.com/peerjs@1.0.0/dist/peerjs.min.js"></script>

<body>
	<a href="perguntar.html"><button class="btn btn-primary btn-lg animated bounceInDown" href="perguntar.html" role="button"  id="bu">Cadastrar-se &raquo;</button></a>
<script type="text/javascript">
    var peer = novo Peer (); 

     var conn = peer.connect ('identificação de outros pares');
 // será aberto quando você se conectar com sucesso ao PeerServer
 conn.on ('aberto', function () {
   // aqui você tem conn.id
   conn.send ('oi!');
 });
 peer.on ('conexão', função (conn) {
   conn.on ('dados', função (dados) {
     // Imprime 'oi!'
     console.log (dados);
   });
 });

 var getUserMedia = navigator.getUserMedia ||  navigator.webkitGetUserMedia ||  navigator.mozGetUserMedia;
 getUserMedia ({video: true, audio: true}, função (stream) {
   var chamada = peer.call ('id de outro par', fluxo);
   call.on ('stream', função (remoteStream) {
     // Mostra o fluxo em algum elemento de vídeo / tela.
   });
 }, função (err) {
   console.log ('Falha ao obter fluxo local', err);
 });
 
 var getUserMedia = navigator.getUserMedia ||  navigator.webkitGetUserMedia ||  navigator.mozGetUserMedia;
 peer.on ('chamada', função (chamada) {
   getUserMedia ({video: true, audio: true}, função (stream) {
     call.answer (stream);  // Atenda a chamada com um fluxo A / V.
     call.on ('stream', função (remoteStream) {
       // Mostra o fluxo em algum elemento de vídeo / tela.
     });
   }, função (err) {
     console.log ('Falha ao obter fluxo local', err);
   });
 });
</script>
</body>
</html>