<?php




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