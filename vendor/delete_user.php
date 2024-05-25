<?php
require_once 'db_connect.php'; 

$id = "не определено";
if(isset($_GET["id"])){
  
    $id= $_GET["id"];
}

$sql = mysqli_query($connect, "DELETE FROM users WHERE `users`.`id` = '$id'");        
$result = mysqli_fetch_assoc($sql);
?>