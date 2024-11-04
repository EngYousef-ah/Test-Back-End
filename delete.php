<?php 
    include("config.php");

    $id=$_GET['id'];
    
    $stmt=$con->prepare('DELETE FROM cart WHERE id=?');
    $stmt->execute([$id]);
    $count=$stmt->rowCount();
    if($count >0){
        header("location:cart.php");
        exit();
    }


?>