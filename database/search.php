<?php include('../db.php') ?>

<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $query = "SELECT * FROM videogames WHERE id='".$id."';";
    $result_videogames = mysqli_query($connection,$query);
    while($row = mysqli_fetch_array($result_videogames)){
        echo '{"title":"'.$row["title"].'","description":"'.$row["description"].'"}';
    }
}else{
    echo '{"message":"Error"}';
}
header("Content-type:application/json");
?>