<?php 

session_start();
if(!isset($_SESSION["perfil_usuario"])) {
  include("index.php");
  die();
} else {
    if($_SESSION["perfil_usuario"] <> $perfil_pagina) {
        include("index.php");
        die();      
    }
}

?>

<html lang="pt-BR">
<head>
  <title>OrderClin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  

    

  </style>
</head>
<body>
