
<?php 
$perfil_pagina = "Paciente";
include_once("topo.php"); ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home_paciente.php">OrderClin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="agendamento_paciente_form.php">Agendamento</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dados_cadastrais_paciente.php">Atualizar cadastro</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="historico_individual_pacientes.php">Historico</a>
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

      <h1>Painel do paciente</h1>
      <h3>Seja bem vindo <?php echo "$usuario"; ?> !</h3>
      <p>Complete o seu cadastro atualizando seus dados na aba ATUALIZAR DADOS CADASTRAIS antes de solicitar um agendamento médico.</p>
      <hr>
      <h3>Dúvidas</h3>
      <p>Estamos a disposição para melhor te atender dentro dos seguintes horários:<br />
          seg a sext - 09h00 as 18h00<br />
          sáb - 09h00 a 12h00<br />
        
        whatsapp: (11)98765-4321
      </p>
    </div>
    
  </div>
</div>

<footer class="container-fluid text-center">
  <p>&copy;OrderClin all rights reserved 2022</p>
</footer>

</body>
</html>
