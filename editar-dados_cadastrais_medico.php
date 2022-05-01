<?php $perfil_pagina = "Medico";
include_once("topo.php"); 
include_once("medico.php") ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orderclin</title>
</head>
<body>
    <h1>Edição de Clientes</h1>
    <?php
        $cpf = $_SESSION["cpfusuario"];
        $conexao = mysqli_connect('localhost', 'root', '', 'tg2')
        or die("ERRO: Sem conexão.");

        $sql = "SELECT nome_dados_pac, rg_dados_pac, dtn_dados_pac, sexo_dados_pac, endereco_dados_pac, num_res_dados_pac, bairro_dados_pac, cidade_dados_pac, estado_dados_pac, cep_dados_pac FROM dados_usuario WHERE cpf_dados_pac = '$cpf'";
        $res = mysqli_query($conexao, $sql)
        or die("A consulta falhou: ". mysqli_error($conexao). "<br>SQL:" .$sql);

        if ($campo = mysqli_fetch_array($res)) {
            $nome = $campo['nome_dados_pac'];
            $rg = $campo['rg_dados_pac'];
            $dtn = $campo['dtn_dados_pac'];
            $sexo = $campo['sexo_dados_pac'];
            $endereco = $campo['endereco_dados_pac'];
            $num = $campo['num_res_dados_pac'];
            $bairro = $campo['bairro_dados_pac'];
            $cidade = $campo['cidade_dados_pac'];
            $estado = $campo['estado_dados_pac'];
            $cep = $campo['cep_dados_pac'];
        
    ?>
    <form action="alterar_dados_medico.php" method="POST">
    <p>
        Nome: <input type="text" name="nome" value="<?php echo $nome_dados_pac;?>" readonly />
    </p>

    <p>
        RG: <input type="text" name="rg" value="<?php echo $rg_dados_pac;?>" readonly />
    </p>

    <p>
        Data de nascimento: <input type="text" name="dtn" value="<?php echo $dtn_dados_pac;?>" readonly />
    </p>


    <p>
        Sexo: <input type="text" name="sexo" value="<?php echo $sexo_dados_pac;?>" />
    </p>

    <p>
        Endereço: <input type="text" name="endereco" value="<?php echo $endereco_dados_pac;?>" />
    </p>

    <p>
        Número: <input type="text" name="num" value="<?php echo $num_res_dados_pac;?>" />
    </p>

    <p>
        Bairro: <input type="text" name="bairro" value="<?php echo $bairro_dados_pac;?>" />
    </p>

    <p>
        Cidade: <input type="text" name="cidade" value="<?php echo $cidade_dados_pac;?>" />
    </p>

    <p>
        Estado: <input type="text" name="estado" value="<?php echo $estado_dados_pac;?>" />
    </p>

    <p>
        CEP: <input type="text" name="cep" value="<?php echo $cep_dados_pac;?>" />
    </p>

    <p><input type="submit" value="Salvar" /></p>
    </form>

    <?php
    }
    ?>
</body>
</html>