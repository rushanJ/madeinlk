<?php
session_start();
$id=$_REQUEST["id"];

include 'config.php';
    $sql = "UPDATE `shop` SET 
    `status` = 'ACTIVE'
     WHERE `shop`.`id`='$id';";

if ($conn->query($sql) === TRUE) {
   
} else {
  
}
 header("Location: ../admin"); /* Redirect browser */
 exit();
?>
