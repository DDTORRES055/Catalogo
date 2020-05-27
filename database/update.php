<?php include('../db.php') ?>

<?php
    if (isset($_POST["id"])) {

        $id = trim($_POST["id"]);
        $title = trim($_POST["title"]);
        $description = trim($_POST["description"]);

        if(!empty($title) && !empty($description)){
            $query = "UPDATE videogames SET title='$title', description='$description' WHERE id=$id;";
            $result = mysqli_query($connection,$query);
            if(!$result){
                die("Query fail");
            }
            $message = "Videojuego actualizado";
            $color = "success";
        }else{
            $message = "Faltan campos por llenar";
            $color = "danger";
        }

        $_SESSION["message"] = $message;
        $_SESSION["message_type"] = $color;

        header("location: ../index.php");
        
    }
?>