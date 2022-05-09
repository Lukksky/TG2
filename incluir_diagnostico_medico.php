<?php $perfil_pagina = "Medico";
    include_once("topo.php");
    include_once("medico.php") ?>

<h1>Inclusão dos dados</h1>

<?php
    $id_diagnostico = $_REQUEST["id_agend"];
    $data_diag = $_REQUEST["data_at_med"];
    $horario_diag = $_REQUEST["hora_at_med"];
    $anotacoes_diag = $_REQUEST["diag_at_med"];

    $recomendacao_diag = "";
    foreach($_REQUEST['recomendacao_med'] as $checkbox) {
        $recomendacao_diag .= "$checkbox ";
     }

    $conexao = mysqli_connect('localhost', 'root', '', 'tg2')
    or die("ERROR: sem conexão");

    $sql = "REPLACE INTO diagnostico_medico VALUES ('$id_diagnostico', '$data_diag', '$horario_diag', 
    '$anotacoes_diag', '$recomendacao_diag')";

    mysqli_query($conexao, $sql)
    or die("A inclusão falhou: ". mysqli_error($conexao). "<br>SQL:".$sql);
    mysqli_close($conexao);


?>
<h2>Inclusão realizada com sucesso!</h2>