<?php $perfil_pagina = "Atendente";
include_once ("topo.php");
include_once("recepcao.php") ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar dados</title>
</head>
<body>
    <h1>Inclusão dos dados</h1>

    <?php
        $cpf_cad_usuario = $_REQUEST["cpf_cad_usuario"];
        $endereco_usuario = $_REQUEST["endereco_usuario"];
        $num_res_usuario = $_REQUEST["num_res_usuario"];
        $bairro_usuario = $_REQUEST["bairro_usuario"];
        $cidade_usuario = $_REQUEST["cidade_usuario"];
        $estado_usuario = $_REQUEST["estado_usuario"];
        $cep_usuario = $_REQUEST["cep_usuario"];
        $nome_cad_usuario = $_REQUEST["nome_cad_usuario"];
        $rg_cad_usuario = $_REQUEST["rg_cad_usuario"];
        $dtn_cad_usuario = $_REQUEST["dtn_cad_usuario"];
        $sexo_usuario = $_REQUEST["sexo_usuario"];
        $senha_usuario = md5($_REQUEST["senha_usuario"]);
        $perfil_usuario = $_REQUEST["perfil_usuario"];


        $conexao = mysqli_connect('localhost', 'root', '', 'tg2')
        or die("ERROR: sem conexão");

        $sql = "INSERT INTO dados_usuario VALUES ('$cpf_cad_usuario', '$endereco_usuario', '$num_res_usuario', 
        '$bairro_usuario', '$cidade_usuario','$estado_usuario','$cep_usuario','$nome_cad_usuario',
        '$rg_cad_usuario','$dtn_cad_usuario','$sexo_usuario','$senha_usuario', '$perfil_usuario')";
        mysqli_query($conexao, $sql)
        or die("A inclusão falhou: ". mysqli_error($conexao). "<br>SQL:".$sql);
        mysqli_close($conexao);


    ?>
    <h2>Inclusão realizada com sucesso!</h2>
</body>
<p>
    <a href="paciente.php">Voltar</a>
</p>
</html>