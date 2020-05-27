<?php include('db.php') ?>
<?php include('includes/header.php') ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <?php if(isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION["message_type"]; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION["message"]; ?> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
            <?php session_unset(); } ?>

            <div class="card card-body">
                <form action="database/save.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Titulo" required>
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Descripcion" required></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" name="save" value="Agregar">
                </form>
            </div>
        </div>
        <div class="col-md-8">
                <?php 
                    $query = "SELECT * FROM videogames;";
                    $result_videogames = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_array($result_videogames)){
                        ?>
                            <div class="card" style="margin:10px;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row["title"]?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $row["created_at"]?></h6>
                                <p class="card-text"><?php echo $row["description"]?></p>
                                <button type="button" class="card-link btn btn-success" data-toggle="modal" data-target="#modal-edit" onclick="llenarModalEdit('<?php echo $row["id"]?>')">Editar</button>
                                <button type="button" class="card-link btn btn-danger" data-toggle="modal" data-target="#modal-delete" onclick="llenarModalDelete('<?php echo $row["id"]?>')">Eliminar</button>
                            </div>
                            </div>
                        <?php
                    }
                ?>
        </div>
    </div>
</div>

<?php include('includes/modal.php') ?>
<?php include('includes/footer.php') ?>