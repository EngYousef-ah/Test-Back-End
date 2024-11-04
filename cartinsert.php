<?php  


include("config.php");

if($_SERVER['REQUEST_METHOD']=="GET"){
$name=$_GET['name'];
$image=$_GET['image'];
$price=$_GET['price'];
$userid=$_GET['userid']; 


$stmt= $con->prepare('INSERT INTO cart (name,image,price,userid) VALUES(?,?,?,?)');
$stmt->execute([$name,$image,$price,$userid]);
$count=$stmt->rowCount();
if($count >0){
    //setcookie("user",$username,strtotime("+1 year"));
   // header("location:index.php");
   // exit();
   echo "DONE";
}
}
else{
    header("location:index.php");
    exit();
}


?>