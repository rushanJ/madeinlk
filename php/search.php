<?php
if (isset($_SESSION["nearestTown"])){
    $nearestTown=$_SESSION["nearestTown"];
    $itemName= $_REQUEST['itemName'];
$sql = "SELECT `item`.`id`,`item`.`itemCode`,`item`.`shop`,`item`.`name`,`item`.`description`,`item`.`qty`,`item`.`measuringUnit`,`item`.`imgType`, `item`.`unitPrice` ,`shop`.`name` as `sName`,`shop`.`nearestTown` FROM `item`,`shop` WHERE `shop`.`id`=`item`.`shop` AND `shop`.`nearestTown` LIKE '%$nearestTown%'AND `item`.`name` LIKE '%$itemName%' AND `item`.`itemLock`= 0 ORDER BY `item`.`id` DESC LIMIT 4";
}
else if(isset($_REQUEST["hot"])){ 
    $itemName= $_REQUEST['itemName'];
   
    $sql = "SELECT `item`.`id`,`item`.`itemCode`,`item`.`shop`,`item`.`name`,`item`.`description`,`item`.`qty`,`item`.`measuringUnit`, `item`.`unitPrice` ,`item`.`imgType` ,`shop`.`name` as `sName`,`shop`.`nearestTown` FROM `item`,`shop` WHERE `shop`.`id`=`item`.`shop` AND `item`.`name` LIKE '%$itemName%' AND `item`.`itemLock`= 0 ORDER BY `item`.`id`";
}
else if(isset($_REQUEST["drawar"])){ 
    $itemName= $_REQUEST['itemName'];
   
    $sql = "SELECT `item`.`id`,`item`.`itemCode`,`item`.`shop`,`item`.`name`,`item`.`description`,`item`.`qty`,`item`.`measuringUnit`, `item`.`unitPrice` ,`item`.`imgType` ,`shop`.`name` as `sName`,`shop`.`nearestTown` FROM `item`,`shop` WHERE `shop`.`id`=`item`.`shop` AND `item`.`name` LIKE '%$itemName%' AND `item`.`itemLock`= 0 ORDER BY `item`.`id`";
}
else{ 
    $district= $_REQUEST['district'];
    $itemName= $_REQUEST['itemName'];
    $nearestTown= $_REQUEST['nearestTown'];
    
    $sql = "SELECT `item`.`id`,`item`.`itemCode`,`item`.`shop`,`item`.`name`,`item`.`description`,`item`.`qty`,`item`.`measuringUnit`,`item`.`imgType`, `item`.`unitPrice` ,`shop`.`name` as `sName`,`shop`.`nearestTown` FROM `item`,`shop` WHERE `shop`.`id`=`item`.`shop` AND `shop`.`nearestTown` LIKE '%$nearestTown%'AND `item`.`name` LIKE '%$itemName%' AND `item`.`itemLock`= 0";
}
//echo $sql;
include "config.php";
$result = $conn->query($sql);
//echo $sql;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         $name=$row["name"];
         $id=(int)$row["id"];
         $unitPrice=$row["unitPrice"];
         $measuringUnit=$row["measuringUnit"];
         $qty=$row["qty"];
         $unitPrice=$row["unitPrice"];
         $unitPrice=$row["unitPrice"];
         $unitPrice=$row["unitPrice"];
         $imgType=$row["imgType"];

       
        echo "

        <div class='col-sm-2 col-md-4 col-sm-6 single' >
            <div class='product'>
                <a href='pack-of-6-multicolor-cotton-neck-tshirts-for-men'>
                    <img src='images/$id.$imgType' class='product-img'>
                </a>
                <div class='text'>
                    
                    <hr>
                    <h3 class='product-title'>
                        <a href='details.php?itemName=$id'> 
                            $name
                        </a> 
                    </h3>
                    
                  
                    
                    <p class='price'> LKR $unitPrice  </p>
                    <p class='price'>  $qty  $measuringUnit(s) Left </p>	
                    <p class='buttons'>
                        <a href='details.php?itemName=$id'  style='width:100%'class='btn btn-primary' >View details</a>
                        
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