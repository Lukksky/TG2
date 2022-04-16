<?php
session_start();
include_once('config.php');

$usuario = ($_POST['login_usuario']);
$senha = md5($_POST['senha_usuario']);
$entrar = $_POST['entrar'];

$sql = "SELECT * FROM dados_usuario WHERE cpf_dados_pac = '$usuario' AND senha_usuario = '$senha'";


    $acao_sql = $con->query($sql);

    if ($acao_sql->num_rows == 1)
    {
        $registro = $acao_sql->fetch_array(MYSQLI_ASSOC);

        //setcookie("usuario",$usuario);
        $_SESSION["usuario"] = $registro["nome_dados_pac"];
        $_SESSION["perfil_usuario"] = $registro["perfil_usuario"];
        if ($registro["perfil_usuario"] == "Paciente"){
            header("location: home_paciente.php");
        }
    
        if ($registro["perfil_usuario"] == "Medico"){
            header("location: medico.php");
        }
    
        if ($registro["perfil_usuario"] == "Atendente"){
            header("location: home_atendente.php");
        }

    }else{
        header("location: index.php?msg=Usuário ou senha inválido!");

    }

die();
?>