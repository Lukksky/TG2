<?php $perfil_pagina = "Paciente";
 include_once("topo.php");
 include_once("paciente.php") ?>

    <div class="container">
        <h1 class="text-success text-center">OrderClin</h1>
        <h3>Agendamento de consultas on-line</h3>
        <form action="incluir_agendamento_paciente.php" method="POST">

    <!--<div class="form-group">
        <label for="data_consulta">ID agendamento: </label>
        <input type="text" class="form-control" id="ID_consulta" name="ID_consulta">
    
    </div>
-->
    <div class="form-group">
        <label for="data_consulta">Data da consulta: </label>
        <input type="date" class="form-control" id="data_consulta" name="data_consulta" placeholder="Escolha a data da consulta">
    
    </div>

    <div class="form-group">
        <label for="horario_consulta">Horário: </label>
        <input type="time" class="form-control" id="horario_consulta" name="horario_consulta" placeholder="Escolha o horário da consulta">
    
    </div>

    <h3>
        Tipo de atendimento
    </h3>

    <div class="form-group">
            Modalidade: <br />
            <input type="radio" name="atendimento_cons" value="presencial">Presencial<br/>
            <input type="radio" name="atendimento_cons" value="remoto">Remoto<br/>
    </div>  

    <div class="form-group">
        <label for="especialidade_agen_pac">Especialidade: </label>
        <select class="form-control" id="especialidade_agen_pac" name="especialidade_agen_pac">
            <option>(Nenhum)</option checked>
            <option>Especialidade 1</option>
            <option>Especialidade 2</option>
            <option>Especialidade 3</option>
            <option>Especialidade 4</option>
            <option>Especialidade 5</option>
        </select>
    </div>

    <div class="form-group">
        <label for="unidade_agen_pac">Unidade de atendimento: </label>
        <select class="form-control" id="unidade_agen_pac" name="unidade_agen_pac">
            <option>(Nenhum)</option checked>
            <option>Unidade 1</option>
            <option>Unidade 2</option>
            <option>Unidade 3</option>
            <option>Unidade 4</option>
            <option>Unidade 5</option>
        </select>
    </div>

    <div class="form-group">
            Possui convênio?<br />
            <input type="radio" name="convenio_cons" value="Sim">Sim<br/>
            <input type="radio" name="convenio_cons" value="Não">Não<br/>
    </div>  

    <div class="form-group">
        <label for="opcao_convenio">Escolha o convênio: </label>
        <select class="form-control" id="opcao_convenio" name="opcao_convenio">
            <option>(Nenhum)</option checked>
            <option>Convênio 1</option>
            <option>Convênio 2</option>
            <option>Convênio 3</option>
            <option>Convênio 4</option>
            <option>Convênio 5</option>
        </select>
    </div>   



<br/>
    


<button type="submit" class="btn btn-success">Enviar</button>
</div>
</form>
</body>


<a href="paciente.php">Voltar</a>

</html>