<?php $perfil_pagina = "Paciente";
    include_once("topo.php");
    include_once("paciente.php") ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão agendamento</title>
</head>
<body>
    <h1>Agendamentos</h1>

    <?php
        $ID_agend = null;
        $data_agend = $_REQUEST["data_consulta"];
        $horario_agend = $_REQUEST["horario_consulta"];
        $modalidade_agend = $_REQUEST["atendimento_cons"];
        $especialidade_agend = $_REQUEST["especialidade_agen_pac"];
        $unidade_agend = $_REQUEST["unidade_agen_pac"];
        $convenio_agend = $_REQUEST["convenio_cons"];
        $nome_convenio_agend = $_REQUEST["opcao_convenio"];


        $conexao = mysqli_connect('localhost', 'root', '', 'tg2')
        or die("ERROR: sem conexão");

        //Executar select para verificar se existe agendamento
        $sql = "SELECT data_agend FROM agendamento_paciente WHERE data_agend = '$data_agend' and horario_agend = '$horario_agend'";
    $res = mysqli_query($conexao, $sql)
    or die("A consulta falhou: ". mysqli_error($conexao). "<br>SQL:".$sql);

    
    if($campo = mysqli_fetch_array($res)){
        echo "<h2><br><br>Não foi possível agendar esta consulta!
                  <br>Já existe um agendamento neste mesmo horário, por favor selecione outra data
                  para prosseguir com o agendamento!</h2>";
    } else{
         $sql = "INSERT INTO agendamento_paciente VALUES ('$ID_agend', '$data_agend', '$horario_agend', '$modalidade_agend', 
        '$especialidade_agend', '$unidade_agend','$convenio_agend','$nome_convenio_agend')";
        mysqli_query($conexao, $sql)
        or die("A inclusão falhou: ". mysqli_error($conexao). "<br>SQL:".$sql);
        mysqli_close($conexao);

        echo "<h2>O agendamento foi cadastrado com sucesso!</h2>";
    }
/*
        $sql = "INSERT INTO agendamento_paciente VALUES ('$ID_agend', '$data_agend', '$horario_agend', '$modalidade_agend', 
        '$especialidade_agend', '$unidade_agend','$convenio_agend','$nome_convenio_agend')";
        mysqli_query($conexao, $sql)
        or die("A inclusão falhou: ". mysqli_error($conexao). "<br>SQL:".$sql);
        mysqli_close($conexao);
*/
    ?>
    
</body>
</html>