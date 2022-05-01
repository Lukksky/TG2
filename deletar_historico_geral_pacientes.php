<?php $perfil_pagina = "Atendente";
include_once("topo.php"); 
//include_once("recepcao.php") ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrderClin</title>
</head>
<body>


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
        <a class="nav-link" href="#">Historico</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?sair=1">Sair</a>
      </li>
      
    </ul>
   
  </div>
</nav>

    <h1>Exclusão de Clientes</h1>
    <?php
        $id_agend = $_REQUEST["id_agend"];
        $conexao = mysqli_connect('localhost', 'root', '', 'tg2')
        or die("ERROR: Sem conexão.");

        $sql = "DELETE from agendamento_paciente  WHERE id_agend = '$id_agend'";
        mysqli_query($conexao, $sql)
        or die("A exclusão falhou: ". mysqli_error($conexao). "<br>SQL:". $sql);
        mysqli_close($conexao);
    ?>
    <h2>Agendamento excluído com sucesso!</h2>
    
</body>
</html>