<?php $perfil_pagina = "Paciente";
include_once("topo.php"); 
include_once("paciente.php") ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico</title>
</head>
<body>
<h1>Histórico de agendamento</h1>

<?php


    date_default_timezone_set('America/Sao_paulo');    
    $DateAndTime2 = date('d-m-Y h:i:s a', time());  
    echo "Olá, hoje é dia $DateAndTime2.<br><br>";


    $conexao = mysqli_connect('localhost', 'root', '', 'tg2')
    or die("ERRO: sem conexão");

    $sql = "SELECT data_agend, horario_agend, modalidade_agend, especialidade_agend, unidade_agend, 
        anotacao_diag, recomendacao_diag
    FROM agendamento_paciente
    LEFT JOIN diagnostico_medico ON (id_agend = id_dignostico)
    WHERE cpf_agend = '".$_SESSION["cpfusuario"]."'";
    $res = mysqli_query($conexao, $sql)
    or die("A consulta falhou: ". mysqli_error($conexao). "<br>SQL:".$sql);

    echo '<table class="table">
        <tr>
            <td>Data agendada</td>
            <td>Horário</td>
            <td>Especialidade</td>
            <td>Nome do paciente</td>
            <td>Sexo</td>
            <td>Anotações</td>
            <td>Recomendações</td>
        </tr>';

    while ($campo = mysqli_fetch_array($res)) 
    {
        echo "<tr>
        <td>". $campo["data_agend"]. "</td>
        <td>". $campo["horario_agend"]. "</td>
        <td>". $campo["modalidade_agend"]. "</td>
        <td>". $campo["especialidade_agend"]. "</td>
        <td> ". $campo['unidade_agend'] ."</td>
        <td> ". $campo['anotacao_diag'] ."</td>
        <td> ". $campo['recomendacao_diag'] ."</td>
        </tr>";
        
    }
        
    mysqli_close($conexao);
?>
</body>
</html>