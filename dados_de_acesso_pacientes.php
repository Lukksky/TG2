<?php include_once("topo.php"); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de cadastro dos pacientes</title>

</head>
<body>
    <h1>Tabela de cadastro de pacientes</h1>

    <?php
        $conexao = mysqli_connect('localhost', 'root', '', 'tg2')
        or die("ERRO: sem conexão");

        $sql = "SELECT id_usuario, tipo_usuario, login_usuario, senha_usuario FROM acessos";
        $res = mysqli_query($conexao, $sql)
        or die("A consulta falhou: ". mysqli_error($conexao). "<br>SQL:".$sql);

        
        while ($campo = mysqli_fetch_array($res)) 
        {
            echo "Identificação do usuário: ". $campo["id_usuario"]. "<br>Tipo usuário: ". $campo["tipo_usuario"]. 
            "<br>Login do acesso: ". $campo["login_usuario"]. "<br>Senha de acesso: ". $campo["senha_usuario"]. "<br><br>";
        }
            
        mysqli_close($conexao);
    ?>



</body>
<p>
    <a href="recepcao.php">Voltar</a>
    <a href="form_novo_cadastro.php">Incluir novo paciente</a>
</p>
</html>