<?php

include_once('config.php');

$usuario = mysqli_real_escape_string($_POST['login_usuario']);
$senha = md5(mysqli_real_escape_string($_POST['senha_usuario']));
$entrar = $_POST['entrar'];


$sql = "SELECT * FROM dados_usuario WHERE cpf_dados_pac = '$usuario' AND senha_usuario = '$senha'";

$acao_sql = $mysqli->query($sql);

            if ($acao_sql=mysqli_num_rows($sql)>=0){

                setcookie("usuario",$usuario);
                header("Location:painel.php");

            }else{
                echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
                die();

            }


    if ($_REQUEST["tipo_usuario"] == "Paciente"){
        header("location: paciente.php");
    }

    if ($_REQUEST["tipo_usuario"] == "Medico"){
        header("location: medico.php");
    }

    if ($_REQUEST["tipo_usuario"] == "Recepção"){
        header("location: recepcao.php");
    }
?>