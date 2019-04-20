<?php

include("db_config.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM produtos WHERE ID = $id";
    $result = mysqli_query($connection,$query);

    if(!$result){
        die("Delete Falhou");
    }

    $_SESSION[ 'message'] = 'Registro Removido com Sucesso';
    $_SESSION['message_type']= 'danger';
    header("Location: index.php");

}

?>