<?php $perfil_pagina = "Medico";
include_once ("topo.php");
include_once("medico.php") ?>

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

        $sql = "REPLACE dados_usuario (cpf_dados_pac, endereco_dados_pac, num_res_dados_pac, 
        bairro_dados_pac, cidade_dados_pac, estado_dados_pac, 
        cep_dados_pac, nome_dados_pac, rg_dados_pac, 
        dtn_dados_pac, sexo_dados_pac) VALUES ('$cpf_usuario', '$endereco_usuario', '$num_res_usuario', 
        '$bairro_usuario', '$cidade_usuario','$estado_usuario','$cep_usuario','$nome_cad_usuario',
        '$rg_cad_usuario','$dtn_cad_usuario','$sexo_usuario')";
        mysqli_query($conexao, $sql)
        or die("A inclusão falhou: ". mysqli_error($conexao). "<br>SQL:".$sql);
        mysqli_close($conexao);
        
    ?>

    <h2>Alteração realizada com sucesso!</h2>
   
</body>

</html>