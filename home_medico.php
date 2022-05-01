<?php 
$perfil_pagina = "Medico";
include_once ("topo.php"); ?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="medico.php">OrderClin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="agenda_medica_diaria.php">Consultas do dia</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="dados_cadastrais_medico.php">Atualizar cadastro</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="atendimento_medico_form.php">Diagnóstico</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Histórico</a>
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
  
<div class="col-sm-8 text-left"> 
    <fieldset>
        <h1>Painél do Médico</h1>
        <h3>Seja bem vindo <?php echo "$usuario" ?>!</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <hr>
        </fieldset>

      <p>
          <h3>Dúvidas</h3>
      <p>
        
      Estamos a disposição para melhor te atender dentro dos seguintes horários:<br />
          seg a sext - 09h00 as 18h00<br />
          sáb - 09h00 a 12h00<br />
        
        whatsapp: (11)98765-4321
    </div>
   
  </div>
</div>

<footer class="container-fluid text-center">
  <p>&copy;OrderClin all rights reserved 2022</p>
</footer>

</body>
</html>
