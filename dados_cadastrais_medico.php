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
        $conexao = mysqli_connect('localhost', 'root', '', 'tg2')
        or die("ERRO: sem conexão");

        $sql = "SELECT endereco_dados_pac, num_res_dados_pac, bairro_dados_pac, cidade_dados_pac, 
        estado_dados_pac, cep_dados_pac, nome_dados_pac, rg_dados_pac, dtn_dados_pac, sexo_dados_pac FROM dados_usuario";
        $res = mysqli_query($conexao, $sql)
        or die("A consulta falhou: ". mysqli_error($conexao). "<br>SQL:".$sql);

        
        while ($campo = mysqli_fetch_array($res)) 
        {
            echo "<br>Nome: ". $campo["nome_dados_pac"]. "<br>RG: ". $campo["rg_dados_pac"]. 
            "<br>Data de nascimento: ". $campo["dtn_dados_pac"]. "<br>Sexo: ". $campo["sexo_dados_pac"]. 
            "<br>Endereço: ". $campo["endereco_dados_pac"]."<br>Número: ". $campo["num_res_dados_pac"].
            "<br>Bairro: ". $campo["bairro_dados_pac"]. "<br>Cidade: ". $campo["cidade_dados_pac"]. 
            "<br>Estado: ". $campo["estado_dados_pac"]. "<br>CEP: ". $campo["cep_dados_pac"]."<br><br>";
        }
            
        mysqli_close($conexao);
    ?>



</body>
<p>
    <a href="paciente.php">Voltar</a>
</p>
</html>