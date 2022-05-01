<?php 

session_start();
if(isset($_REQUEST["sair"])) {
    session_abort();
    $_SESSION = array();
}

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


<?php
if(isset($_GET["msg"])) {
    echo "<h3>".$_GET["msg"]."</h3>";
}

?>

        <form action="login.php" method="POST">
            
    
    <div class="form-outline mb-4">
        <label for="login_usuario">Login: </label>
        <input type="text" class="form-control" id="login_usuario" name="login_usuario" placeholder="CPF somente número">
    </div>
    

    <div class="form-form-outline mb-4">
        <label for="senha_usuario">Senha: </label>
        <input type="password" class="form-control" id="senha_usuario" name="senha_usuario" placeholder="Digite a senha">
    </div>

    <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="#!">Register</a></p>
    <p>or sign up with:</p>
    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
</form>


    <!--

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

-->
</body>

</html>