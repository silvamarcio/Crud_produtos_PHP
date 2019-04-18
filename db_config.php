<?php

$connection = mysqli_connect(
    'localhost',
    'root',
     '',
     'crud_produtos'
);

if (isset($connection)) {
    echo 'banco de dados conectado' ;
}
else{
    echo 'nao conectado';
}
?>