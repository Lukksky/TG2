<?php 
    //conexao ao banco de dados

$host="localhost";
$user="root";
$password="";
$dbname="tg2";
$usertable="agendamento_paciente";

$con = new mysqli($host, $user, $password, $dbname);

if ($con->connect_errno) {
    echo "<p>ERRO: (" . $con->connect_errno . ") ". 
    $con->connect_error . "</p>";
    exit;
} else{
    echo "<p>Conexão realizada com sucesso</p>";
   
}


$con->close();

?>