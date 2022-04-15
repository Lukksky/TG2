<?php $perfil_pagina = "Medico";
include_once ("topo.php"); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atendimento médico</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <h1 class="text-success text-center">OrderClin</h1>
        <h3>Atendimento médico</h3>
        <form action="#" method="POST">

    <div class="form-group">
        <label for="id_ag_pac">Código do agendamento </label>
        <input type="search" class="form-control" id="id_ag_pac" name="id_ag_pac" placeholder="SELECT BD ID_AGENDAMENTO_PACIENTE">
    
    </div>

    <div class="form-group">
        <label for="cpf_dados_pac">Código do paciente (CPF) </label>
        <input type="search" class="form-control" id="cpf_dados_pac" name="cpf_dados_pac" placeholder="SELECT BD CPF_DADOS_PACIENTE">
    
    </div>

   

    <h3>Atendido em:</h3>

    <div class="form-group">
        <label for="data_at_med">Data do atendimento: </label>
        <input type="date" class="form-control" id="data_at_med" name="data_at_med" placeholder="Digite o número do seu CPF">
    
    </div>

    <div class="form-group">
        <label for="hora_at_med">Hora do atendimento: </label>
        <input type="time" class="form-control" id="hora_at_med" name="hora_at_med" placeholder="Digite o número do seu CPF">
    
    </div>

    <h3>Diagnóstico médico:</h3>

    <div class="form-group">
        <label for="diag_at_med">Diagnóstico: </label>
        <input type="text" class="form-control" id="diag_at_med" name="diag_at_med" placeholder="Informe o diagnóstico médico">
    
    </div>

    <div>

    <input type="checkbox" name="recomend_at_med" value="atestar"> Atestar<br />
    <input type="checkbox" name="recomend_at_med" value="medicar"> Medicar<br />
    <input type="checkbox" name="recomend_at_med" value="solicitacao"> Solicitação de exame<br />
    <input type="checkbox" name="recomend_at_med" value="retorno"> Retorno<br />
    </div>   
    
    <br />
    <br />

<div class="form-group">
    <button type="submit" class="btn btn-success">Salvar</button>
</div>

<a href="medico.php">Voltar</a>
   


<br/>