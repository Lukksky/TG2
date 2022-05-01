
<?php 
$perfil_pagina = "Atendente";
include_once ("topo.php"); ?>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home_atendente.php">OrderClin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="historico_geral_pacientes.php">Gerenciar agenda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastrar_novo_usuario_form.php">Cadastro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="historico_geral_pacientes.php">Historico</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?sair=1">Sair</a>
      </li>
      
    </ul>
   
  </div>
</nav>

<?php 
        $usuario = $_SESSION["usuario"];
    ?>

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


  
      <h1>Painel da Recepção</h1>
      <h3>Seja bem vindo <?php echo "$usuario" ?>!</h3>
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