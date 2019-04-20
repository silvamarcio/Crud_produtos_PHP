<?php include ("db_config.php") ?>

<?php include("includes/header.php")?>


<!-- div para salvar-->
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

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
                        <input type="number" name="preco" onchange="setTwoNumberDecimal" min="0" value="0.00" step="0.01" class="form-control" placeholder="preço" autofocus>
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

<!-- inicio da table de listar-->
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Imagem</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Descrição</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                     $query = "SELECT * FROM produtos";
                     $result = mysqli_query($connection,$query);

                     while($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $row['IMAGEM'] ?></td>
                            <td><?php echo $row['NOME'] ?></td>
                            <td><?php echo $row['PRECO'] ?></td>
                            <td><?php echo $row['DESCRICAO'] ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['ID']?>">
                                Edit
                            </a>

                            <a href="delete.php?id=<?php echo $row['ID']?>">
                                Delete
                            </a>
                            </td>
                        </tr>
                     <?php } ?>    

                </tbody>

            </table>

        </div>
    </div>
</div>

<?php include("includes/footer.php")?>


