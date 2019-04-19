<?php

    include("db_config.php");

    if (isset($_POST['gravar'])){
        $name = $_POST['nome'];
        $price = $_POST['preco'];
        $description = $_POST['descricao'];
        $image = $_FILES['imagem']['tmp_name'];

        $query = "INSERT INTO produtos(nome,preco,descricao,imagem) VALUES('$name','$price','$description','$image')" ;

        $result = mysqli_query($connection,$query);

        if(!$result){
            die("insert falhou");
        }

        header("Location: index.php");
    }

?>