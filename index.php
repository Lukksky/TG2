<?php 

include_once('config.php');


    /*$res = mysqli_query($conexao, $sql)
    or die("A consulta falhou: ". mysqli_error($conexao). "<br>SQL:".$sql);

    
    while ($campo = mysqli_fetch_array($res)) 
    {
        echo "Data agendada: ". $campo["data_agend"]. "<br>Horário agendado: ". $campo["horario_agend"]. 
        "<br>Especialidade: ". $campo["especialidade_agend"]."<br><br>";
    }
*/

?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrderClin</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <h1 class="text-success text-center">OrderClin</h1>
        <h3>Painel de acesso</h3>
        <form action="login.php" method="POST">
            

    <div class="form-group">
        <label for="tipo_usuario">Escolha a área que desejar acessar: </label>
        <select class="form-control" id="tipo_usuario" name="tipo_usuario">
            <option>(Nenhum)</option checked>
            <option>Recepção</option>
            <option>Medico</option>
            <option>Paciente</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="login_usuario">Login: </label>
        <input type="text" class="form-control" id="login_usuario" name="login_usuario" placeholder="CPF somente número">
    
    </div>
    

    <div class="form-group">
        <label for="senha_usuario">Senha: </label>
        <input type="password" class="form-control" id="senha_usuario" name="senha_usuario" placeholder="Digite a senha">
    
    </div>

    <div class="form-check" style="margin-bottom: 12px">
        <label class="form-check-label" for="opc1">
        <input type="checkbox" class="form-check-input" name="opcao" id="opc1">
        Lembrar senha.
    </label>
    </div>
<br/>
    <div class="form-check">
        <label class="form-check-label" for="opc2">
        <input type="checkbox" class="form-check-input" name="opcao" id="opc2">
        Recuperar acesso.
    </label>
</div>
<br/>
    


<button type="submit" class="btn btn-success" name="entrar">Acessar</button>
</div>
</form>
</body>

</html>