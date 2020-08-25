<?php    
    $userId= $_SESSION['userId'];
    $trolleyId=$_SESSION['trolleyId'];
   $total=0;
    $sql = "SELECT `item`.`itemCode`,`orders`.`qty`,`item`.`name` As `itemName`,`item`.`id`AS `itemId`,`shop`.`name` As `shopName`,`item`.`unitPrice`,`item`.`imgType`,`item`.`measuringUnit`,`orders`.`id` FROM `shop`,`orders`,`item`WHERE `orders`.`item`=`item`.`id` AND `item`.`shop`=`shop`.`id` AND `orders`.`trolleyId`='$trolleyId'";


//echo $sql;
include "config.php";
$result = $conn->query($sql);
//echo $sql;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         $itemName=$row["itemName"];
         $itemCode=(int)$row["itemCode"];
         $itemId=$row["itemId"];
         $shopName=$row["shopName"];
         $qty=$row["qty"];
         $imgType=$row["imgType"];
         $unitPrice=$row["unitPrice"];
         $measuringUnit=$row["measuringUnit"];
         $id=$row["id"];
      
        $ammount= sprintf("%.2f",$qty*$unitPrice);
        echo "
        
                            <tr><!-- tr Starts -->
                                <td>
                                    <img src='images/$itemId.$imgType'>
                                </td>
                                <td width='350'>
                                    <a href='pack-of-6-multicolor-cotton-neck-tshirts-for-men' target='blank' class='bold'> $itemName </a>
                                    
                                    <p style='margin-top:8px;'> <strong> Vendor : </strong>  </p>
                                </td>
                                <td>
                                    <input type='text' name='quantity' value='$qty' data-cart_id='9' data-product_id='50' min='1' max='2' class='quantity form-control'>
                                </td>
                                <td  colspan='2'>
                                 LKR $unitPrice
                                </td>
                                
                                <td  colspan='2'>
                                    LKR $ammount
                                </td>
                            </tr><!-- tr Ends -->

";
    $total=$total+$ammount;
    }
} 
else {
  "No Items Yet";
         
}

                ?>


