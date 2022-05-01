<?php $perfil_pagina = "Medico";
include_once ("topo.php");
include_once("medico.php");


$conexao = mysqli_connect('localhost', 'root', '', 'tg2')
or die("ERRO: sem conexão");

$sql = "SELECT ID_agend, date_format(data_agend,'%d/%m/%Y') data_agend, horario_agend,
        modalidade_agend, especialidade_agend, unidade_agend,
        convenio_agend, nome_convenio_agend, nome_dados_pac, sexo_dados_pac
    FROM agendamento_paciente 
    INNER JOIN dados_usuario on (cpf_agend = cpf_dados_pac)
    WHERE ID_agend = ". $_REQUEST["agend"] ."
    ORDER BY horario_agend";
$res = mysqli_query($conexao, $sql)
or die("A consulta falhou: ". mysqli_error($conexao). "<br>SQL:".$sql);

$campo = mysqli_fetch_array($res);

?>



    <div class="container">
        <h1 class="text-success text-center">OrderClin</h1>
        <h3>Atendimento médico</h3>
        <form action="incluir_diagnostico_medico.php" method="POST">
        <input type="hidden" name="id_agend" value="<?php echo  $_REQUEST["agend"]; ?>">

    <div class="form-group">
        <label for="id_ag_pac">Código do agendamento </label>
        <input type="search" class="form-control" id="id_ag_pac" name="id_ag_pac" value="<?php echo $_REQUEST["agend"]; ?>" readonly>
    
    </div>

    <div class="form-group">
        <label for="cpf_dados_pac">Paciente (CPF) </label>
        <input type="search" class="form-control" id="cpf_dados_pac" name="cpf_dados_pac" value="<?php echo $campo["nome_dados_pac"]; ?>" readonly> 
    
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

    <div class="form-group">
        <label for="recomendacao_med"><h3>Recomendações médicas: </h3></label><br>
        <input type="checkbox" name="recomendacao_med[]" value="Atestado"> Atestado<br />
        <input type="checkbox" name="recomendacao_med[]" value="Medicação"> Medicação<br />
        <input type="checkbox" name="recomendacao_med[]" value="Exame"> Exame<br />
        <input type="checkbox" name="recomendacao_med[]" value="Retorno"> Agendar retorno<br />
    </div>   
    
    <br />
    <br />

<div class="form-group">
    <button type="submit" class="btn btn-success">Salvar</button>
</div>


<br/>