<?php 
//Sessão
session_start();

//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn_alterar'])):
  $id = mysqli_escape_string($connect, $_POST['id']);
  $marca= mysqli_escape_string($connect, $_POST['marca']);
  $modelo = mysqli_escape_string($connect, $_POST['modelo']);
  $descricao = mysqli_escape_string($connect, $_POST['descricao']);
  $modelo_fab = mysqli_escape_string($connect, $_POST['modelo_fab']);
  $cor = mysqli_escape_string($connect, $_POST['cor']);
  $placa = mysqli_escape_string($connect, $_POST['placa']);
  $valor = mysqli_escape_string($connect, $_POST['valor']);

  $sql = "UPDATE estoque SET marca= '$marca',modelo = '$modelo', descricao = '$descricao', modelo_fab = '$modelo_fab',
   cor = '$cor', placa = '$placa', valor='$valor' WHERE id = '$id'";

  if(mysqli_query($connect, $sql)) :
    header("Location: ../consultar.php?sucesso");
  else :
    header("Location: ../consultar.php?erro");
  endif;
endif;