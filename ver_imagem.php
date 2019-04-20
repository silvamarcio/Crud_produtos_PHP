<?php
 include("db_config.php");
    
  $id_imagem = $_GET['ID'];
  $querySelecionaPorCodigo = "SELECT ID, Imagem FROM produtos WHERE ID = $id_imagem";
  $resultado = mysqli_query($connection,$querySelecionaPorCodigo);
  $imagem = mysqli_fetch_object($resultado);
  header( "Content-type: image/gif");
  echo $imagem->imagem;
  ?>