<?php

include("config.php");

if($_SERVER['REQUEST_METHOD']=="POST"){

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];

$stmt= $con->prepare('INSERT INTO users (username,email,password,confirmpassword) VALUES(?,?,?,?)');
$stmt->execute([$username,$email,$password,$confirmpassword]);
$count=$stmt->rowCount();
if($count >0){
    setcookie("user",$username,strtotime("+1 year"));
    header("location:index.php");
    exit();
}
}
else{
    header("location:index.php");
    exit();
}
?>