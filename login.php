<?php

include_once('config.php');

$usuario = ($_POST['login_usuario']);
$senha = md5($_POST['senha_usuario']);
$entrar = $_POST['entrar'];


$sql = "SELECT * FROM dados_usuario WHERE cpf_dados_pac = '$usuario' AND senha_usuario = '$senha'";

if ($_POST['entrar']) {

$acao_sql = $mysqli->query($sql);

            if ($acao_sql->num_rows == 1)
            {

                setcookie("usuario",$usuario);
                header("Location:painel.php");

            }else{
                echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
                die();

            }
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