<?php

    include("db_config.php");

    if (isset($_POST['gravar'])){
        $name = $_POST['nome'];
        $price = $_POST['preco'];
        $description = $_POST['descricao'];
        $image = $_FILES['imagem']['name'];
        $image_tmp = $_FILES['imagem']['tmp_name'];
        $imagePath = "images/".$image;
       

        $query = "INSERT INTO produtos(nome,preco,descricao,imagem) VALUES('$name','$price','$description','$imagePath')" ;

        $result = mysqli_query($connection,$query);
        

        if(!$result){
            die("insert falhou");
        }

        move_uploaded_file($image_tmp, $imagePath);
        $_SESSION['message'] = 'Registro Guardado com Sucesso';
        $_SESSION['message_type'] = 'success';

        header("Location: index.php");
    }

?>