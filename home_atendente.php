
<?php 
$perfil_pagina = "Atendente";
include_once ("topo.php"); ?>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="recepcao.php">OrderClin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="historico_paciente.php">Agendamento</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastrar_novo_usuario_form.php">Cadastro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Historico</a>
      </li>
      
    </ul>
   
  </div>
</nav>
<!--
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.html">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Inicio</a></li>
        <li><a href="agendamento_paciente_form.php">Agendamento</a></li>
        <li><a href="atualizar_dados_paciente_form.php">Cadastro</a></li>
        <li><a href="dados_cadastrais_usuario.php">Atualizar dados de Cadastro</a></li>
        <li><a href="#">Histórico de consultas</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

-->

<html lang="pt-BR">
<head>
  <title>Recepção</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>

  </style>
</head>
<body>


  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="paciente.php">P</a></p>
      <p><a href="recepcao.php">R</a></p>
      <p><a href="medico.php">M</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Painel da Recepção</h1>
      <h3>Seja bem vindo!</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      <h3>Dúvidas</h3>
      <p>Estamos a disposição para melhor te atender dentro dos seguintes horários:<br />
          seg a sext - 09h00 as 18h00<br />
          sáb - 09h00 a 12h00<br />
        
        whatsapp: (11)98765-4321
      </p>
      
   

<footer class="container-fluid text-center">
  <p>&copy;OrderClin all rights reserved 2022</p>
</footer>

</body>
</html>