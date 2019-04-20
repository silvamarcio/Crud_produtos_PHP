<?php

include("db_config.php");


if(isset($_GET['id'])){
    $id= $_GET['id'];
    $query ="SELECT * FROM produtos WHERE ID = $id";
    $result = mysqli_query($connection,$query);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $name = $row['NOME'];
        $price =  $row['PRECO'];
        $description = $row['DESCRICAO'];
        $image =  $row['IMAGEM'];
    }
}

if(isset($_POST['update'])){
    $id= $_GET['id'];
    $name = $_POST['nome'];
    $price = $_POST['preco'];
    $description =$_POST['descricao'];
    $image = $_POST['imagem'];

   $query = "UPDATE produtos set NOME ='$name',PRECO ='$price', DESCRICAO ='$description', IMAGEM ='$image'
   WHERE ID = $id";

   mysqli_query($connection,$query);

   $_SESSION['message']=' Registro Atualizado com Sucesso ';
   $_SESSION['message_type']='warning';
   header("Location: index.php");
}

?>

<?php include("includes/header.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">    
                <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="nome" value="<?php echo $name;?>" class="form-control">       
                    </div>    
                    <div class="form-group">
                        <input type="number" name="preco" onchange="setTwoNumberDecimal" min="0"
                         value="<?php echo $price;?>" step="0.01" class="form-control" >
                    </div>
                    <div class="form-group">
                        <textarea name="descricao" rows="3" class="form-control"><?php echo $description; ?></textarea>
                    </div>
                    <div>
                        <input type="file" name="imagem">
                    </div>
                    <button class="btn btn-success" name="update">
                        Update
                    </button>
                 </form>
            </div>
        </div>    
    </div>
</div>

<?php include("includes/footer.php")  ?>







