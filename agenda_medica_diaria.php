<?php include_once("topo_paciente.php"); ?>

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


    date_default_timezone_set('America/Sao_paulo');    
    $DateAndTime2 = date('d-m-Y h:i:s a', time());  
    echo "Olá, hoje é dia $DateAndTime2.<br><br>";


    $conexao = mysqli_connect('localhost', 'root', '', 'tg2')
    or die("ERRO: sem conexão");

    $sql = "SELECT data_agend FROM agendamento_paciente ORDER BY STR_TO_DATE(data_agend, '%d-%m-%Y')";
    $res = mysqli_query($conexao, $sql)
    or die("A consulta falhou: ". mysqli_error($conexao). "<br>SQL:".$sql);

    
    while ($campo = mysqli_fetch_array($res)) 
    {
        echo "Data agendada: ". $campo["data_agend"]. /*"<br>Horário agendado: ". $campo["horario_agend"]. 
        "<br>Especialidade: ". $campo["especialidade_agend"].*/ "<br><br>";
    }
        
    mysqli_close($conexao);
?>
</body>
</html>