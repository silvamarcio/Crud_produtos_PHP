<?php include ("db_config.php") ?>

<?php include("includes/header.php")?>


<!-- div para salvar-->
<div class="container p-4">
    <div class="row">
        <div class="col-md4">

            <?php if(isset($_SESSION['message'])) {?>
            
                <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            
            <?php session_unset(); } ?>    

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
<!--fim da div para salvar -->
        <div class="col-md8">
                

        </div>
    </div>
</div>

<?php include("includes/footer.php")?>


