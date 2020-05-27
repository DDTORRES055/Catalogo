<?php include('../db.php') ?>

<?php
    if (isset($_POST["id"])) {

        $id = trim($_POST["id"]);
        
        $query = "DELETE FROM videogames WHERE id=$id;";
        $result = mysqli_query($connection,$query);
        if(!$result){
            die("Query fail");
        }
        $message = "Videojuego eliminado";
        $color = "success";

        $_SESSION["message"] = $message;
        $_SESSION["message_type"] = $color;

        header("location: ../index.php");
        
    }
?>