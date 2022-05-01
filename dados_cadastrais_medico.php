<?php $perfil_pagina = "Medico";
include_once("topo.php"); 
include_once("medico.php") ?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de cadastro dos pacientes</title>

</head>
<body>
    <h1>Atualizar dados de cadastro</h1>

    <?php
        $usuario = $_SESSION["usuario"];

        $conexao = mysqli_connect('localhost', 'root', '', 'tg2')
        or die("ERRO: sem conexão");

        $sql = "SELECT endereco_dados_pac, num_res_dados_pac, bairro_dados_pac, cidade_dados_pac, 
        estado_dados_pac, cep_dados_pac, nome_dados_pac, rg_dados_pac, dtn_dados_pac, sexo_dados_pac
        FROM dados_usuario WHERE cpf_dados_pac = $usuario";
        $res = mysqli_query($conexao, $sql)
        or die("A consulta falhou: ". mysqli_error($conexao). "<br>SQL:".$sql);

        echo '<table class="table">
        <tr>
            <td>Nome</td>
            <td>RG</td>
            <td>Data de nascimento</td>
            <td>Sexo</td>
            <td>Endereço</td>
            <td>Número</td>
            <td>Bairro</td>
            <td>Cidade</td>
            <td>Estado</td>
            <td>CEP</td>
            <td></td>
        </tr>';
        
        while ($campo = mysqli_fetch_array($res)) 
        {
            echo "<tr>
        <td>". $campo["nome_dados_pac"]. "</td>
        <td>". $campo["rg_dados_pac"]. "</td>
        <td>". $campo["dtn_dados_pac"]. "</td>
        <td>". $campo["sexo_dados_pac"]. "</td>
        <td>". $campo["endereco_dados_pac"]. "</td>
        <td>". $campo["num_res_dados_pac"]. "</td>
        <td>". $campo["bairro_dados_pac"]. "</td>
        <td>". $campo["cidade_dados_pac"]. "</td>
        <td>". $campo["estado_dados_pac"]. "</td>
        <td> ". $campo['cep_dados_pac'] ."</td>
        </tr>";

        }
            
        mysqli_close($conexao);
    ?>



</body>
</html>