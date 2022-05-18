<?php $perfil_pagina = "Paciente";
include_once ("topo.php");
include_once("paciente.php") ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar dados</title>
</head>
<body>
    <h1>Alteração dos dados</h1>

    <?php
        $cpf_usuario = $_REQUEST['cpf'];
        $endereco_usuario = $_REQUEST["endereco"];
        $num_res_usuario = $_REQUEST["num"];
        $bairro_usuario = $_REQUEST["bairro"];
        $cidade_usuario = $_REQUEST["cidade"];
        $estado_usuario = $_REQUEST["estado"];
        $cep_usuario = $_REQUEST["cep"];
        $nome_cad_usuario = $_REQUEST["nome"];
        $rg_cad_usuario = $_REQUEST["rg"];
        $dtn_cad_usuario = $_REQUEST["dtn"];
        $sexo_usuario = $_REQUEST["sexo"];
        

        $conexao = mysqli_connect('localhost', 'root', '', 'tg2')
        or die("ERROR: sem conexão");


        $sql = "UPDATE dados_usuario SET
        endereco_dados_pac = '$endereco_usuario'
        , num_res_dados_pac = '$num_res_usuario'
        , bairro_dados_pac = '$bairro_usuario'
        , cidade_dados_pac = '$cidade_usuario'
        , estado_dados_pac = '$estado_usuario'
        , cep_dados_pac = '$cep_usuario'
        , nome_dados_pac = '$nome_cad_usuario'
        , rg_dados_pac = '$rg_cad_usuario'
        , dtn_dados_pac = '$dtn_cad_usuario'
        , sexo_dados_pac  = '$sexo_usuario'
        WHERE cpf_dados_pac = '$cpf_usuario'";
        mysqli_query($conexao, $sql)
        or die("A inclusão falhou: ". mysqli_error($conexao). "<br>SQL:".$sql);
        mysqli_close($conexao);
        
    ?>

    <h2>Alteração realizada com sucesso!</h2>
   
</body>

</html>