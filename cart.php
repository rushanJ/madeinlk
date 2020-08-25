<?php 
                        session_start(); ?>
<!DOCTYPE html>

<html>

<head>

<title>E commerce Store </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="styles/bootstrap.min.css" rel="stylesheet">

<link href="styles/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

<div id="top"><!-- top Starts -->

<div class="container"><!-- container Starts -->

<div class="col-md-6 offer"><!-- col-md-6 offer Starts -->

<a href="#" class="btn btn-success btn-sm" >

Welcome : ashen@gmail.com</a>

<a href="#">
Shopping Cart Total Price: <span class="subtotal-cart-price">$140</span>, Total Items 2</a>

</div><!-- col-md-6 offer Ends -->

<div class="col-md-6"><!-- col-md-6 Starts -->
<ul class="menu"><!-- menu Starts -->


<li>

<a href="vendor_dashboard/index.php"> Vendor Dashboard </a>

</li>


<li>
<a href='customer/my_account.php?my_orders'>My Account</a></li>

<li>
<a href="cart.php">
Go to Cart
</a>
</li>

<li>
<a href='logouphp'> Logout </a></li>

</ul><!-- menu Ends -->

</div><!-- col-md-6 Ends -->

</div><!-- container Ends -->
</div><!-- top Ends -->

<div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default Starts -->
<div class="container" ><!-- container Starts -->

<div class="navbar-header"><!-- navbar-header Starts -->

<a class="navbar-brand home" href="index.php" ><!--- navbar navbar-brand home Starts -->

<img src="images/logo.png" alt="computerfever logo" class="hidden-xs" >
<img src="images/logo-small.png" alt="computerfever logo" class="visible-xs" >

</a><!--- navbar navbar-brand home Ends -->

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation"  >

<span class="sr-only" >Toggle Navigation </span>

<i class="fa fa-align-justify"></i>

</button>

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search" >

<span class="sr-only" >Toggle Search</span>

<i class="fa fa-search" ></i>

</button>


</div><!-- navbar-header Ends -->

<div class="navbar-collapse collapse" id="navigation" ><!-- navbar-collapse collapse Starts -->

<div class="padding-nav" ><!-- padding-nav Starts -->

<ul class="nav navbar-nav navbar-left"><!-- nav navbar-nav navbar-left Starts -->

<li>
<a href="index.php"> Home </a>
</li>

<li>
<a href="shop.php"> Shop </a>
</li>

<li>
<a href='customer/my_account.php?my_orders'>My Account</a></li>

<li class="active" >
<a href="cart.php"> Shopping Cart </a>
</li>

<li>
<a href="abouphp"> About Us </a>
</li>

<li>

<a href="services.php"> Services </a>

</li>

<li>
<a href="contact.php"> Contact Us </a>
</li>

</ul><!-- nav navbar-nav navbar-left Ends -->

</div><!-- padding-nav Ends -->

<a class="btn btn-primary navbar-btn right" href="cart.php"><!-- btn btn-primary navbar-btn right Starts -->

<i class="fa fa-shopping-cart"></i>

<span> 2 items in cart </span>

</a><!-- btn btn-primary navbar-btn right Ends -->

<div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Starts -->

<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">

<span class="sr-only">Toggle Search</span>

<i class="fa fa-search"></i>

</button>

</div><!-- navbar-collapse collapse right Ends -->

<div class="collapse clearfix" id="search"><!-- collapse clearfix Starts -->

<form class="navbar-form" method="get" action="results.php"><!-- navbar-form Starts -->

<div class="input-group"><!-- input-group Starts -->

<input class="form-control" type="text" placeholder="Search" name="user_query" required>

<span class="input-group-btn"><!-- input-group-btn Starts -->

<button type="submit" value="Search" name="search" class="btn btn-primary">

<i class="fa fa-search"></i>

</button>

</span><!-- input-group-btn Ends -->

</div><!-- input-group Ends -->

</form><!-- navbar-form Ends -->

</div><!-- collapse clearfix Ends -->

</div><!-- navbar-collapse collapse Ends -->

</div><!-- container Ends -->
</div><!-- navbar navbar-default Ends -->

<div id="content" ><!-- content Starts -->

<div class="container-fluid"><!-- container-fluid Starts -->

<div class="col-md-12"><!--- col-md-12 Starts -->

<ul class="breadcrumb" ><!-- breadcrumb Starts -->

<li>
<a href="index.php">Home</a>
</li>

<li>Cart</li>

</ul><!-- breadcrumb Ends -->

<nav class="checkout-breadcrumbs text-center">

<a href="cart.php" class="active">Shopping Cart</a>

<i class="fa fa-chevron-right"></i>

<a href="checkout.php">Checkout Details</a>

<i class="fa fa-chevron-right"></i>

<a href="#"> Order Complete </a>

</nav>

</div><!--- col-md-12 Ends -->

<div class="col-md-9" id="cart"><!-- col-md-9 Starts -->
    <div class="box"><!-- box Starts -->
        <form action="cart.php" method="post" enctype="multipart-form-data" ><!-- form Starts -->
            <h1> Shopping Cart </h1>
                <p class="text-muted" > You currently have 2 item(s) in your cart. </p>
                <div class="table-responsive" ><!-- table-responsive Starts -->
                    <table class="table" ><!-- table Starts -->
                        <thead><!-- thead Starts -->
                            <tr>
                                <th colspan="2">Product</th>
                                <th>Quantity</th>
                                <th colspan="3">Unit Price</th>
                              
                                <th colspan="2"> Sub Total </th>
                            </tr>
                        </thead><!-- thead Ends -->
                        <tbody id="cart-products-tbody"><!-- tbody Starts -->
                        <?php 
                        // session_start();
                        
                        include "php/viewCart.php";?>


                          

                                </tbody><!-- tbody Ends -->

<tfoot><!-- tfoot Starts -->

<tr>

<th colspan="4"> Total </th>

<th colspan="3"> <span class="subtotal-cart-price">LKR <?php echo  $total ?></span> </th>

</tr>

</tfoot><!-- tfoot Ends -->

</table><!-- table Ends -->

<div class="form-inline pull-right"><!-- form-inline pull-right Starts -->

<div class="form-group"><!-- form-group Starts -->

<label>Coupon Code : </label>

<input type="text" name="code" class="form-control">

</div><!-- form-group Ends -->

<input class="btn btn-primary" type="submit" name="apply_coupon" value="Apply Coupon Code" >

</div><!-- form-inline pull-right Ends -->

</div><!-- table-responsive Ends -->


<div class="box-footer"><!-- box-footer Starts -->

<div class="pull-left"><!-- pull-left Starts -->

<a href="index.php" class="btn btn-default">

<i class="fa fa-chevron-left"></i> Continue Shopping

</a>

</div><!-- pull-left Ends -->

<div class="pull-right"><!-- pull-right Starts -->

<button class="btn btn-default" type="submit" name="update" value="Update Cart">

<i class="fa fa-refresh"></i> Update Cart

</button>

<a href="php/confOrder.php" class="btn btn-primary">

Proceed to checkout <i class="fa fa-chevron-right"></i>

</a>

</div><!-- pull-right Ends -->

</div><!-- box-footer Ends -->

</form><!-- form Ends -->

</div><!-- box Ends -->



<div id="row same-height-row"><!-- row same-height-row Starts -->

<div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Starts -->

<div class="box same-height headline"><!-- box same-height headline Starts -->

<h3 class="text-center"> You also like these Products </h3>

</div><!-- box same-height headline Ends -->

</div><!-- col-md-3 col-sm-6 Ends -->



<div class='col-md-3 col-sm-6 center-responsive' >

<div class='product' >

<a href='acer-predator-helios-300-gaming-laptop' >

<img src='admin_area/product_images/acer-predator-300.jpg' class='product-img'>

</a>

<div class='text' >

<center>

<p class='btn btn-primary'> Hitlar </p>

</center>

<hr>

<h3 class='product-title'><a href='acer-predator-helios-300-gaming-laptop' >Acer Predator Helios 300 Gaming Laptop</a></h3>

<p class='price' > $2720 - $3200  </p>

<p class='buttons' >

<a href='acer-predator-helios-300-gaming-laptop' class='btn btn-default' >View details</a>

<a href='acer-predator-helios-300-gaming-laptop' class='btn btn-primary'>

<i class='fa fa-shopping-cart'></i> Add to cart

</a>


</p>

</div>



<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>Gaming</div>

<div class='label-background'> </div>

</a>




</div>

</div>



<div class='col-md-3 col-sm-6 center-responsive' >

<div class='product' >

<a href='product-url-7' >

<img src='admin_area/product_images/fur coat with button1.jpg' class='product-img'>

</a>

<div class='text' >

<center>

<p class='btn btn-primary'> Hitlar </p>

</center>

<hr>

<h3 class='product-title'><a href='product-url-7' >Nice Solid Long Coat With Lace</a></h3>

<p class='price' > <del> $200 </del> | $150 </p>

<p class='buttons' >

<a href='product-url-7' class='btn btn-default' >View details</a>

<a href='product-url-7' class='btn btn-primary'>

<i class='fa fa-shopping-cart'></i> Add to cart

</a>


</p>

</div>



<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>Sale</div>

<div class='label-background'> </div>

</a>




</div>

</div>



<div class='col-md-3 col-sm-6 center-responsive' >

<div class='product' >

<a href='product-url-3' >

<img src='admin_area/product_images/United-Colors-of-Benetton-White-Polo-Shirt-0608-0914361-1-pdp_slider_l.jpg' class='product-img'>

</a>

<div class='text' >

<center>

<p class='btn btn-primary'> Hitlar </p>

</center>

<hr>

<h3 class='product-title'><a href='product-url-3' >BENETTON White Polo Shirt</a></h3>

<p class='price' > $120 - $120  </p>

<p class='buttons' >

<a href='product-url-3' class='btn btn-default' >View details</a>

<a href='product-url-3' class='btn btn-primary'>

<i class='fa fa-shopping-cart'></i> Add to cart

</a>


</p>

</div>



<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>New</div>

<div class='label-background'> </div>

</a>




</div>

</div>


</div><!-- row same-height-row Ends -->

</div><!-- col-md-9 Ends -->

<div class="col-md-3"><!-- col-md-3 Starts -->

<div class="box" id="order-summary"><!-- box Starts -->

<div class="box-header"><!-- box-header Starts -->

<h3>Order Summary</h3>

</div><!-- box-header Ends -->

<p class="text-muted">
Shipping and additional costs are calculated based on the values you have entered.
</p>

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table"><!-- table Starts -->

<tbody id="cart-summary-tbody"><!-- tbody Starts -->

<tr>

<td> Order Subtotal: </td>

<th> $140.00 </th>

</tr>


<tr>

<th colspan="2">

<p class="shipping-header text-muted"> Cart Total Weight: 2.5 Kg </p>

<p class="shipping-header text-muted"> <i class="fa fa-truck"></i> Shipping: </p>

<ul class="shipping-ul-list list-unstyled">


<div class="shipping-vendor-header">  Shipping: </div>



<li> 

<p> There are no shipping types available. Please double check your address, or contact us if you need any help. </p> 

</li>




<div class="shipping-vendor-header"> Roshni Shipping: </div>



<li> 

<p> There are no shipping types available. Please double check your address, or contact us if you need any help. </p> 

</li>




</ul>

</th>

</tr>


<tr>

<td>Tax:</td>

<th>$0.00</th>

</tr>

<tr class="total">

<td>Total:</td>


<th class="total-cart-price">$140.00</th>


</tr>

</tbody><!-- tbody Ends -->

</table><!-- table Ends -->

</div><!-- table-responsive Ends -->

</div><!-- box Ends -->

</div><!-- col-md-3 Ends -->

</div><!-- container Ends -->

</div><!-- content Ends -->



<div id="footer"><!-- footer Starts -->

<div class="container"><!-- container Starts -->

<div class="row" ><!-- row Starts -->

<div class="col-md-3 col-sm-6" ><!-- col-md-3 col-sm-6 Starts -->

<h4>Pages</h4>

<ul><!-- ul Starts -->

<li><a href="cart.php">Shopping Cart</a></li>

<li><a href="contact.php">Contact Us</a></li>

<li><a href="shop.php">Shop</a></li>

<li>

<a href='customer/my_account.php?my_orders'>My Account</a>
</li>


<li>

<a href="vendor_dashboard/index.php"> Vendor Dashboard </a>

</li>


</ul><!-- ul Ends -->

<hr>

<h4>User Section</h4>

<ul><!-- ul Starts -->


<li>

<a href="vendor_dashboard/index.php"> Vendor Dashboard </a>

</li>


<li>

<a href='customer/my_account.php?my_orders'>My Account</a>
</li>

<li><a href="customer_register.php">Register</a></li>

<li><a href="terms.php">Terms And Conditions </a></li>



</ul><!-- ul Ends -->

<hr class="hidden-md hidden-lg hidden-sm" >

</div><!-- col-md-3 col-sm-6 Ends -->

<div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Starts -->

<h4> Top Products Categories </h4>

<ul><!-- ul Starts -->

<li> <a href='shop.php?p_cat=4'> Coats </a> </li><li> <a href='shop.php?p_cat=5'> T-Shirts </a> </li><li> <a href='shop.php?p_cat=6'> Sweater </a> </li><li> <a href='shop.php?p_cat=7'> jackets </a> </li><li> <a href='shop.php?p_cat=8'> Microsoft Windows </a> </li><li> <a href='shop.php?p_cat=9'> Pents </a> </li><li> <a href='shop.php?p_cat=10'> Laptops </a> </li><li> <a href='shop.php?p_cat=11'> Wedevs </a> </li>
</ul><!-- ul Ends -->

<hr class="hidden-md hidden-lg">

</div><!-- col-md-3 col-sm-6 Ends -->


<div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Starts -->

<h4>Where to find us</h4>

<p><!-- p Starts -->
<strong>XXXXXXXXXXXX</strong>
<br>XXXXXXXXXXXX
<br>XXXXXXXXXX
<br>XXXXXXXXXXX
<br>XXXXXXXXXXXXXXX
<br>
<strong>XXXXXXXXXXXXXX</strong>

</p><!-- p Ends -->

<a href="contact.php">Go to Contact us page</a>

<hr class="hidden-md hidden-lg">

</div><!-- col-md-3 col-sm-6 Ends -->

<div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Starts -->

<h4>Get the news</h4>

<p class="text-muted">
Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
</p>

<form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=computerfever', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><!-- form Starts -->

<div class="input-group"><!-- input-group Starts -->

<input type="text" class="form-control" name="email">

<input type="hidden" value="computerfever" name="uri"/>
<input type="hidden" name="loc" value="en_US"/>

<span class="input-group-btn"><!-- input-group-btn Starts -->

<input type="submit" value="subscribe" class="btn btn-default">

</span><!-- input-group-btn Ends -->

</div><!-- input-group Ends -->

</form><!-- form Ends -->

<hr>

<h4> Stay in touch </h4>

<p class="social"><!-- social Starts --->

<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-instagram"></i></a>
<a href="#"><i class="fa fa-google-plus"></i></a>
<a href="#"><i class="fa fa-envelope"></i></a>

</p><!-- social Ends --->

</div><!-- col-md-3 col-sm-6 Ends -->

</div><!-- row Ends -->

</div><!-- container Ends -->
</div><!-- footer Ends -->

<div id="copyright"><!-- copyright Starts -->

<div class="container" ><!-- container Starts -->

<div class="col-md-6" ><!-- col-md-6 Starts -->

<p class="pull-left"> &copy; Softmatic Technologies </p>

</div><!-- col-md-6 Ends -->

<div class="col-md-6"><!-- col-md-6 Starts -->

<p class="pull-right"> Template by <a href="http://www.softmatic.in" >Softmatic Technologies</a> </p>

</div><!-- col-md-6 Ends -->

</div><!-- container Ends -->

</div><!-- copyright Ends -->
<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

<script>

$(document).ready(function(){

$(document).on('keyup', '.quantity', function(){
	
var value = parseInt($(this).val(), 10);

var max = parseInt($(this).attr("max"), 10);

var min = parseInt($(this).attr("min"), 10);

if(value > max){
	
value = max;

$(this).val(value);
	
}else if(value < min){
	
value = min;

$(this).val(value);

}

var quantity = $(this).val();

var cart_id = $(this).data("cart_id");

var product_id = $(this).data("product_id");

if ( $( "input[name=shipping_type]" ).length ) {
	
var shipping_type = $("input[name=shipping_type]:checked").val();

var shipping_cost = Number($("input[name=shipping_type]:checked").data("shipping_cost"));

var post_data = {cart_id:cart_id, product_id:product_id, quantity:quantity, shipping_type: shipping_type, shipping_cost: shipping_cost};

}else{

var post_data = {cart_id:cart_id, product_id:product_id, quantity:quantity};	
	
}

if(quantity != ''){
	
$("table").addClass("wait-loader");

$.ajax({

url:"change.php",

method:"POST",

data:post_data,

success:function(data){
	
$(".subtotal-cart-price").html(data);
	
$("#cart-products-tbody").load('cart_body.php');

$("#cart-summary-tbody").load('cart_summary_body.php');

$("table").removeClass("wait-loader");

}

});

}

});

	
$(document).on("change", ".shipping_type", function(){
	
var total_shipping_cost = Number(0);
	
	
var shipping_cost = Number($("input[name='[6][shipping_type]']:checked").data("shipping_cost"));

total_shipping_cost += shipping_cost;

	
var shipping_cost = Number($("input[name='[admin_2][shipping_type]']:checked").data("shipping_cost"));

total_shipping_cost += shipping_cost;


var total = Number(140);

var total_cart_price = total + total_shipping_cost;

$(".total-cart-price").html("$" + total_cart_price + ".00");
	
});


});

</script>

</body>

</html>