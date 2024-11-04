<?php

$host="mysql:host=sql106.infinityfree.com ;dbname=if0_37651016_yousef";
$user="if0_37651016";
$password="cjrk5duUR43BfPq ";

try{
    $con=NEW PDO($host,$user,$password);
    
}
catch(PDOException $e){
$e->getMessage();
}
?>
