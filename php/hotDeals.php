<?php
if (isset($_SESSION["nearestTown"])){
    $nearestTown=$_SESSION["nearestTown"];
$sql = "SELECT distinct (`item`.`name`)   FROM `item`,`shop` WHERE `shop`.`id`=`item`.`shop` AND `shop`.`nearestTown` LIKE '%$nearestTown%' AND `item`.`itemLock`= 0 ORDER BY `item`.`id` DESC";
}
else $sql = "SELECT distinct `item`.`name`  FROM `item`,`shop` WHERE `shop`.`id`=`item`.`shop` AND `item`.`itemLock`= 0 ORDER BY `item`.`id` DESC LIMIT 20";

//echo $sql;
include "config.php";
$result = $conn->query($sql);
//echo $sql;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         $name=$row["name"];
        

         $sql1 = "SELECT * FROM item WHERE name  LIKE '$name' limit 1";
         //echo $sql1;

         $result1 = $conn->query($sql1);
         
         if ($result1->num_rows > 0) {
             // output data of each row
             while($row1 = $result1->fetch_assoc()) {
                $id=$row1["id"];
                $imgType=$row1["imgType"];
             }
            } else {
                $id=0;
                $imgType="png";
            }

              
        echo "
        <div class='col-sm-2 col-md-4 col-sm-6 single' >
            <div class='product'>
                <a href='pack-of-6-multicolor-cotton-neck-tshirts-for-men'>
                    <img src='images/$id.$imgType' class='product-img'>
                </a>
                <div class='text'>
                    
                    <hr>
                    <h3 class='product-title'>
                        <a href='searchResult.php?itemName=iphone $name&hot'> 
                            $name
                        </a> 
                    </h3>
                    
                  
                    <p class='buttons'>
                        <a href='searchResult.php?itemName=$name&hot' style='width:100%' class='btn btn-primary'>
                            <i class='fa fa-shopping-cart'></i> Explore
                        </a>
                    </p>
                </div>
                <a class='label sale' href='#' style='color:black;'>
                    <div class='thelabel'>T-Shirt</div>
                    <div class='label-background'> </div>
                </a>
            </div>
        </div>

    "
;
     
    }
} 
else {
  "No Items Yet";
         
}

                ?>