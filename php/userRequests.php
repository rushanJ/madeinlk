<?php


include_once "config.php";

$sql = "SELECT * FROM `shop` WHERE `status`='WAITING' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id= $row["id"];
        $name= $row["name"];
        $email= $row["email"];
     
       

       echo "
       
       <tr>
         
         <td>$id</td>
         <td>$name</td>
         <td>$email</td>
        
      
        
        <td><a href='../php/confShop.php?id=$id'>Confirm User</a> </td>
      </tr>";


    


    }
} else {

  
}
$conn->close();



?>