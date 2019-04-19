<?php include ("db_config.php") ?>

<?php include("includes/header.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md4">
            <div class="card card-body">
               <form enctype="multipart/form-data" action="gravar.php" method="POST">
                    <div class="form-group">
                        <input type="text" name= "nome" class="form-control" placeholder="Nome do produto" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="number" name="preco" onchange="setTwoNumberDecimal" min="0" value="0.00" step="0.05" class="form-control" placeholder="preço" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="descricao" rows="3" class="form-control" placeholder="Descrição"></textarea>
                    </div>
                    <div>
                        <input type="file" name="imagem">
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="gravar" value="Gravar">

               </form>
            </div>

        </div>

        <div class="col-md8">


        </div>
    </div>
</div>

<?php include("includes/footer.php")?>


