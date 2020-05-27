<?php include('../db.php') ?>

<?php
    if (isset($_POST["save"])) {

        $title = trim($_POST["title"]);
        $description = trim($_POST["description"]);

        if(!empty($title) && !empty($description)){
            $query = "INSERT INTO videogames(title,description) VALUES ('$title','$description');";
            $result = mysqli_query($connection,$query);
            if(!$result){
                die("Query fail");
            }
            $message = "Videojuego guardado";
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