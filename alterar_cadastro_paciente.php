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

        $sql = "UPDATE dados_usuario VALUES (''$endereco_usuario', '$num_res_usuario', 
        '$bairro_usuario', '$cidade_usuario','$estado_usuario','$cep_usuario','$nome_cad_usuario',
        '$rg_cad_usuario','$dtn_cad_usuario','$sexo_usuario')";
        mysqli_query($conexao, $sql)
        or die("A inclusão falhou: ". mysqli_error($conexao). "<br>SQL:".$sql);
        mysqli_close($conexao);
        
    ?>

    <h2>Alteração realizada com sucesso!</h2>
   
</body>

</html>