<?php

    include("db_config.php");

    if (isset($_POST['gravar'])){
        $name = $_POST['nome'];
        $price = $_POST['preco'];
        $description = $_POST['descricao'];
        $image = $_FILES['imagem']['name'];
        $imagePath = "C:\xampp\htdocs\crud_produtos_php\images".$file_name;
       

        $query = "INSERT INTO produtos(nome,preco,descricao,imagem) VALUES('$name','$price','$description','$image')" ;

        $result = mysqli_query($connection,$query);
        

        if(!$result){
            die("insert falhou");
        }

        move_uploaded_file($image, $imagePath);
        $_SESSION['message'] = 'Registro Guardado com Sucesso';
        $_SESSION['message_type'] = 'success';

        header("Location: index.php");
    }

?>