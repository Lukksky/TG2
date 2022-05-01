<?php $perfil_pagina = "Atendente";
include_once("topo.php"); 
include_once("recepcao.php") ?>

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

    $usuario = $_SESSION["usuario"];

    date_default_timezone_set('America/Sao_paulo');    
    $DateAndTime2 = date('d-m-Y h:i:s a', time());  
    echo "Olá $usuario, hoje é dia $DateAndTime2.<br><br>";


    $conexao = mysqli_connect('localhost', 'root', '', 'tg2')
    or die("ERRO: sem conexão");

    $sql = "SELECT id_agend, data_agend, horario_agend, modalidade_agend, especialidade_agend, 
    unidade_agend, nome_dados_pac, sexo_dados_pac 
    FROM agendamento_paciente
    inner join dados_usuario";
    $res = mysqli_query($conexao, $sql)
    or die("A consulta falhou: ". mysqli_error($conexao). "<br>SQL:".$sql);

    echo '<table class="table">
        <tr>
            
            <td>Data agendada</td>
            <td>Horário</td>
            <td>Modalidade</td>
            <td>Especialidade</td>
            <td>Unidade</td>
            <td>Nome do paciente</td>
            <td>Sexo</td>
            <td></td>
        </tr>';

    while ($campo = mysqli_fetch_array($res)) 
    {
        echo "<tr>
            
                <td>". $campo["data_agend"]. "</td>
                <td>". $campo["horario_agend"]. "</td>
                <td>". $campo["modalidade_agend"]. "</td>
                <td>". $campo["especialidade_agend"]. "</td>
                <td> ". $campo['unidade_agend'] ."</td>
                <td> ". $campo['nome_dados_pac'] ."</td>
                <td> ". $campo['sexo_dados_pac'] ."</td>
                <td><a href='deletar_historico_geral_pacientes.php?id_agend=". $campo["id_agend"]."'><img src='img/excluir.gif'></a>
                </td>
              </tr>";
        
    }
        
    mysqli_close($conexao);
?>
</body>
</html>