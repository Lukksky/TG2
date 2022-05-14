<?php $perfil_pagina = "Medico";
include_once("topo.php");
include_once("medico.php");

if(isset($_REQUEST["data"])) {
    $data = $_REQUEST["data"];
} else {
    $data = date("d/m/Y");
}
?>


<h1>Agenda médica - Atendimentos diários</h1>

<form>
    Data: <input type="text" name="data" value="<?php echo $data; ?>">
    <input type="submit" value="Consultar">
</form>

<?php

    $usuario = $_SESSION["usuario"];

    date_default_timezone_set('America/Sao_paulo');    
    $DateAndTime2 = date('d-m-Y h:i:s a', time());  
    echo "Olá Dr(a).$usuario, hoje é dia $DateAndTime2.<br><br>";


    $conexao = mysqli_connect('localhost', 'root', '', 'tg2')
    or die("ERRO: sem conexão");

    $sql = "SELECT ID_agend, date_format(data_agend,'%d/%m/%Y') data_agend, horario_agend,
            modalidade_agend, especialidade_agend, unidade_agend,
            convenio_agend, nome_convenio_agend, nome_dados_pac, sexo_dados_pac, cpf_agend
        FROM agendamento_paciente 
        INNER JOIN dados_usuario on (cpf_agend = cpf_dados_pac)
        WHERE date_format(data_agend,'%d/%m/%Y') = '$data'
        ORDER BY horario_agend";
    $res = mysqli_query($conexao, $sql)
    or die("A consulta falhou: ". mysqli_error($conexao). "<br>SQL:".$sql);

    echo '<table class="table">
        <tr>
            <td>Data agendada</td>
            <td>Horário</td>
            <td>Especialidade</td>
            <td>Nome do paciente</td>
            <td>Sexo</td>
            <td></td>
        </tr>';
    while ($campo = mysqli_fetch_array($res)) 
    {
        echo "<tr>
            <td>". $campo["data_agend"]."</td>
            <td>". $campo["horario_agend"]."</td>
            <td>". $campo["especialidade_agend"]. "</td>
            <td>". $campo["nome_dados_pac"]. "</td>
            <td>". $campo["sexo_dados_pac"]. "</td>
            <td><a href='atendimento_medico_form.php?agend=". $campo["ID_agend"]."' class='btn btn-primary'>Abrir</a>
            <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal' data-cpf='".$campo['cpf_agend']."'>Ver histórico</button></td>
        </tr>";
    }
    echo "</table>";
        
    mysqli_close($conexao);
?>

<div class="modal" tabindex="-1" id="exampleModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Histórico do paciente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="historico">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var cpf = button.data('cpf') // Extract info from data-* attributes
  var modal = $(this)
  $("#historico").load("historico_individual_pacientes.php?cpf="+cpf);
})
</script>

</body>
</html>