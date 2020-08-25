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


<a href="seller" class="btn btn-success btn-sm" >
Welcome :Seller</a>

<a href="#">
Shopping Cart Total Price: $0, Total Items 0</a>

</div><!-- col-md-6 offer Ends -->

<div class="col-md-6"><!-- col-md-6 Starts -->
<ul class="menu"><!-- menu Starts -->


<li>

<a href="customer_register.php"> Register </a>

</li>


<li>
<a href='checkout.php' >My Account</a></li>

<li>
<a href="cart.php">
Go to Cart
</a>
</li>

<li>
<a href='checkout.php'> Login </a></li>

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

<li class="active" >
<a href="shop.php"> Shop </a>
</li>

<li>
<a href='checkout.php' >My Account</a></li>

<li>
<a href="cart.php"> Shopping Cart </a>
</li>

<li>
<a href="about.php"> About Us </a>
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

<span> 0 items in cart </span>

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
<div class="container" ><!-- container Starts -->

<div class="col-md-12" ><!--- col-md-12 Starts -->

<ul class="breadcrumb" ><!-- breadcrumb Starts -->

<li>
<a href="index.php">Home</a>
</li>

<li>Shop</li>

</ul><!-- breadcrumb Ends -->



</div><!--- col-md-12 Ends -->



<!--SIDEBAR START-->
	<?php 
include("includes/sidebar.php");
 ?>
	<!--SIDEBAR END-->







<div class="col-md-9" ><!-- col-md-9 Starts --->

<div class='box'>

<h1>Shop</h1>

<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using '</p>

</div>

<div class="row flex-wrap" id="Products" ><!-- row Starts -->



<div class='col-md-4 col-sm-6 center-responsive' >

<div class='product' >

<a href='pack-of-6-multicolor-cotton-neck-tshirts-for-men'>

<img src='admin_area/product_images/Variable-T-shirt.jpg' class='product-img'>



</a>

<div class='text' >

<center>

<p class='btn btn-primary'> Kaptan </p>

</center>

<hr>

<h3 class='product-title'> <a href='details.php'> Mardaz Pack of 5 - Multicolor Cotton V-Neck T-Shirts for Men </a> </h3>

<p class='star-rating'>  <img class='rating' src='images/star_blank_big.png'>  <img class='rating' src='images/star_blank_big.png'>  <img class='rating' src='images/star_blank_big.png'>  <img class='rating' src='images/star_blank_big.png'>  <img class='rating' src='images/star_blank_big.png'>  (0) </p>

<p class='price'> $60 - $80  </p>

<p class='buttons'>

<a href='details.php' class='btn btn-default' >View details</a>

<a href='details.php' class='btn btn-primary'>

<i class='fa fa-shopping-cart'></i> Add to cart

</a>


</p>

</div>



<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>T-Shirt</div>

<div class='label-background'> </div>

</a>




</div>

</div>



<div class='col-md-4 col-sm-6 center-responsive' >

<div class='product' >

<a href='pack-of-2-black-grey-cotton-tshirts-for-men'>

<img src='admin_area/product_images/T-Shirt-1.jpg' class='product-img'>



</a>

<div class='text' >

<center>

<p class='btn btn-primary'> Kaptan </p>

</center>

<hr>

<h3 class='product-title'> <a href='details.php'> Shop Quite Pack of 2 - Black & Grey Cotton Tshirts for Men </a> </h3>

<p class='star-rating'>  <img class='rating' src='images/star_blank_big.png'>  <img class='rating' src='images/star_blank_big.png'>  <img class='rating' src='images/star_blank_big.png'>  <img class='rating' src='images/star_blank_big.png'>  <img class='rating' src='images/star_blank_big.png'>  (0) </p>

<p class='price'> $70  </p>

<p class='buttons'>

<a href='details.php' class='btn btn-default' >View details</a>

<a href='details.php' class='btn btn-primary'>

<i class='fa fa-shopping-cart'></i> Add to cart

</a>


</p>

</div>



<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>T-Shirt</div>

<div class='label-background'> </div>

</a>




</div>

</div>



<div class='col-md-4 col-sm-6 center-responsive' >

<div class='product' >

<a href='apple-imac-21-macos-sierra'>

<img src='admin_area/product_images/imac-1.jpg' class='product-img'>



</a>

<div class='text' >

<center>

<p class='btn btn-primary'> Hitlar </p>

</center>

<hr>

<h3 class='product-title'> <a href='details.php'> Apple iMac 21.5 Core i5 2.7GHz, 8GB Memory, 1TB Hard Drive, MacOS 10 Sierra </a> </h3>

<p class='star-rating'>  <img class='rating' src='images/star_full_big.png'>  <img class='rating' src='images/star_full_big.png'>  <img class='rating' src='images/star_full_big.png'>  <img class='rating' src='images/star_blank_big.png'>  <img class='rating' src='images/star_blank_big.png'>  (11) </p>

<p class='price'> $900 - $1400  </p>

<p class='buttons'>

<a href='details.php' class='btn btn-default' >View details</a>

<a href='details.php' class='btn btn-primary'>

<i class='fa fa-shopping-cart'></i> Add to cart

</a>


</p>

</div>



<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>iMac</div>

<div class='label-background'> </div>

</a>




</div>

</div>



<div class='col-md-4 col-sm-6 center-responsive' >

<div class='product' >

<a href='variable-product-test'>

<img src='admin_area/product_images/download.jpg' class='product-img'>

 <div class='out-of-stock-label'>Out of stock</div> 

</a>

<div class='text' >

<center>

<p class='btn btn-primary'> Pankaj Mishra </p>

</center>

<hr>

<h3 class='product-title'> <a href='details.php'> Dell Inspiron 15 7000 Laptop </a> </h3>

<p class='star-rating'>  <img class='rating' src='images/star_full_big.png'>  <img class='rating' src='images/star_full_big.png'>  <img class='rating' src='images/star_full_big.png'>  <img class='rating' src='images/star_full_big.png'>  <img class='rating' src='images/star_blank_big.png'>  (2) </p>

<p class='price'> $2500 - $3000  </p>

<p class='buttons'>

<a href='details.php' class='btn btn-default' >View details</a>

<a href='details.php' class='btn btn-primary'>

<i class='fa fa-shopping-cart'></i> Add to cart

</a>


</p>

</div>




</div>

</div>



<div class='col-md-4 col-sm-6 center-responsive' >

<div class='product' >

<a href='hp-envy-15t-laptop-15-6'>

<img src='admin_area/product_images/hp envy 15t.png' class='product-img'>



</a>

<div class='text' >

<center>

<p class='btn btn-primary'> Hitlar </p>

</center>

<hr>

<h3 class='product-title'> <a href='details.php'> HP Envy 15t Laptop - 15.6-in LED Screen Windows 10 (Non-Touch) </a> </h3>

<p class='star-rating'>  <img class='rating' src='images/star_full_big.png'>  <img class='rating' src='images/star_full_big.png'>  <img class='rating' src='images/star_full_big.png'>  <img class='rating' src='images/star_full_big.png'>  <img class='rating' src='images/star_blank_big.png'>  (4) </p>

<p class='price'> $1000 - $5900  </p>

<p class='buttons'>

<a href='details.php' class='btn btn-default' >View details</a>

<a href='details.php' class='btn btn-primary'>

<i class='fa fa-shopping-cart'></i> Add to cart

</a>


</p>

</div>



<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>Hp</div>

<div class='label-background'> </div>

</a>




</div>

</div>



<div class='col-md-4 col-sm-6 center-responsive' >

<div class='product' >

<a href='acer-predator-helios-300-gaming-laptop'>

<img src='admin_area/product_images/acer-predator-300.jpg' class='product-img'>



</a>

<div class='text' >

<center>

<p class='btn btn-primary'> Hitlar </p>

</center>

<hr>

<h3 class='product-title'> <a href='details.php'> Acer Predator Helios 300 Gaming Laptop </a> </h3>

<p class='star-rating'>  <img class='rating' src='images/star_full_big.png'>  <img class='rating' src='images/star_full_big.png'>  <img class='rating' src='images/star_full_big.png'>  <img class='rating' src='images/star_full_big.png'>  <img class='rating' src='images/star_full_big.png'>  (1) </p>

<p class='price'> $2720 - $3200  </p>

<p class='buttons'>

<a href='details.php' class='btn btn-default' >View details</a>

<a href='details.php' class='btn btn-primary'>

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


</div><!-- row Ends -->

<center><!-- center Starts -->

<ul class="pagination" ><!-- pagination Starts -->

<li><a href='shop.php?page=1' >First Page</a></li><li class='active'>
	<a href='shop.php?page=1' >1</a></li><li class=''>
		<a href='shop.php?page=2' >2</a></li><li class=''>
			<a href='shop.php?page=3' >3</a></li><li class=''>
				<a href='shop.php?page=4' >4</a></li><li class=''>
					<a href='shop.php?page=5' >5</a></li><li><a href='shop.php?page=5' >Last Page</a></li>
</ul><!-- pagination Ends -->

</center><!-- center Ends -->

</div><!-- col-md-9 Ends --->

<div id="wait" style="position:absolute;top:40%;left:45%;padding:100px;padding-top:200px;"><!--- wait Starts -->

</div><!--- wait Ends -->

</div><!-- container Ends -->
</div><!-- content Ends -->





<!-- FOOTER START -->
<?php 
include("includes/footer.php");
 ?>

<!-- FOOTER END -->

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

<script>

$(document).ready(function(){

/// Hide And Show Code Starts ///

$('.nav-toggle').click(function(){

$(".panel-collapse,.collapse-data").slideToggle(700,function(){

if($(this).css('display')=='none'){

$(".hide-show").html('Show');

}
else{

$(".hide-show").html('Hide');

}

});

});

/// Hide And Show Code Ends ///

/// Search Filters code Starts /// 

$(function(){

$.fn.extend({

filterTable: function(){

return this.each(function(){

$(this).on('keyup', function(){

var $this = $(this), 

search = $this.val().toLowerCase(), 

target = $this.attr('data-filters'), 

handle = $(target), 

rows = handle.find('li a');

if(search == '') {

rows.show(); 

} else {

rows.each(function(){

var $this = $(this);

$this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();

});

}

});

});

}

});

$('[data-action="filter"][id="dev-table-filter"]').filterTable();

});

/// Search Filters code Ends /// 

});

 

</script>


<script>


$(document).ready(function(){
 
  // getProducts Function Code Starts 

  function getProducts(){
  
  // Manufacturers Code Starts 

    var sPath = ''; 

var aInputs = $('li').find('.get_manufacturer');

var aKeys = Array();

var aValues = Array();

iKey = 0;

$.each(aInputs,function(key,oInput){

if(oInput.checked){

aKeys[iKey] =  oInput.value

};

iKey++;

});

if(aKeys.length>0){

var sPath = '';

for(var i = 0; i < aKeys.length; i++){

sPath = sPath + 'man[]=' + aKeys[i]+'&'; 

}

}

// Manufacturers Code ENDS 

// Products Categories Code Starts 

var aInputs = Array();

var aInputs = $('li').find('.get_p_cat');

var aKeys = Array();

var aValues = Array();

iKey = 0;

$.each(aInputs,function(key,oInput){

if(oInput.checked){

aKeys[iKey] =  oInput.value

};

iKey++;

});

if(aKeys.length>0){

for(var i = 0; i < aKeys.length; i++){

sPath = sPath + 'p_cat[]=' + aKeys[i]+'&';

}

}

// Products Categories Code ENDS 

   // Categories Code Starts 

var aInputs = Array();

var aInputs = $('li').find('.get_cat');

var aKeys  = Array();

var aValues = Array();

iKey = 0;

    $.each(aInputs,function(key,oInput){

    if(oInput.checked){

    aKeys[iKey] =  oInput.value

};

    iKey++;

});

if(aKeys.length>0){

    for(var i = 0; i < aKeys.length; i++){

    sPath = sPath + 'cat[]=' + aKeys[i]+'&';

}

}

   // Categories Code ENDS 
   
   // Loader Code Starts 

$('#wait').html('<img src="images/load.gif">'); 

// Loader Code ENDS

// ajax Code Starts 

$.ajax({

url:"load.php", 
 
method:"POST",
 
data: sPath+'sAction=getProducts&vendor_id=', 
 
success:function(data){
 
 $('#Products').html('');  
 
 $('#Products').html(data);
 
 $("#wait").empty(); 
 
}  

});  

    $.ajax({
url:"load.php",  
method:"POST",  
data: sPath+'sAction=getPaginator&vendor_id=',  
success:function(data){
$('.pagination').html('');  
$('.pagination').html(data);
}  

    });

// ajax Code Ends 
   
   }

   // getProducts Function Code Ends    

$('.get_manufacturer').click(function(){ 

getProducts(); 

});


  $('.get_p_cat').click(function(){ 

getProducts();

}); 

$('.get_cat').click(function(){ 

getProducts(); 

});
 
 
 }); 

</script>

</body>

</html>