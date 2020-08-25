<!DOCTYPE html>
<html>

<head>

<title>E commerce Store </title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="styles/bootstrap.min.css" rel="stylesheet">

<link href="styles/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

<script src="js/jquery.min.js"> </script>

<script src="js/jquery-ui.min.js"></script>

</head>

<body>

<div id="top"><!-- top Starts -->

<div class="container"><!-- container Starts -->

<div class="col-md-6 offer"><!-- col-md-6 offer Starts -->

<a href="#" class="btn btn-success btn-sm" >
Welcome : ashen@gmail.com</a>

<a href="#">
Shopping Cart Total Price: $0, Total Items 0</a>

</div><!-- col-md-6 offer Ends -->

<div class="col-md-6"><!-- col-md-6 Starts -->
<ul class="menu"><!-- menu Starts -->


<li>
<a href='../customer/my_account.php?my_orders'>My Account</a></li>

<li>
<a href="../cart.php">
Go to Cart
</a>
</li>

<li>
<a href='../customer/logout.php'> Logout </a></li>

</ul><!-- menu Ends -->

</div><!-- col-md-6 Ends -->

</div><!-- container Ends -->
</div><!-- top Ends -->

<div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default Starts -->
<div class="container" ><!-- container Starts -->

<div class="navbar-header"><!-- navbar-header Starts -->

<a class="navbar-brand home" href="../index.php" ><!--- navbar navbar-brand home Starts -->

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
<a href="../index.php"> Home </a>
</li>

<li>
<a href="../shop.php"> Shop </a>
</li>

<li class="active">
<a href='../customer/my_account.php?my_orders'>My Account</a></li>

<li>
<a href="../cart.php"> Shopping Cart </a>
</li>

<li>
<a href="../about.php"> About Us </a>
</li>

<li>

<a href="../services.php"> Services </a>

</li>

<li>
<a href="../contact.php"> Contact Us </a>
</li>

</ul><!-- nav navbar-nav navbar-left Ends -->

</div><!-- padding-nav Ends -->

<a class="btn btn-primary navbar-btn right" href="../cart.php"><!-- btn btn-primary navbar-btn right Starts -->

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

<div id="content" class="container-fluid"><!-- container Starts -->

<div class="row"><!-- row Starts -->

<div class="col-md-12" ><!--- col-md-12 Starts -->

<ul class="breadcrumb" ><!-- breadcrumb Starts -->

<li><a href="index.php">Home</a></li>

<li> Vendor Dashboard </li>

</ul><!-- breadcrumb Ends -->

</div><!--- col-md-12 Ends -->

<div class="col-md-12"><!-- col-md-12 Starts -->


</div><!-- col-md-12 Ends -->

<div class="col-md-3"><!-- col-md-3 Starts -->


<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->



<center>

<img src='../customer/customer_images/' class='img-responsive img-circle'>

</center>

<br>

<h3 align='center' class='panel-title'> Name :  </h3>


</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<ul class="nav nav-pills nav-stacked" id="dashboard-sidebar"><!-- nav nav-pills nav-stacked Starts -->

<li class="active">

<a href="index.php"> <i class="fa fa-tachometer"> </i> Dashboard </a>

</li>

<li class="">

<a href="index.php?products"> <i class="fa fa-briefcase"> </i> Products </a>

</li>

<li class="">

<a href="index.php?bundles"> <i class="fa fa-tasks"> </i> Bundles </a>

</li>

<li class="">

<a href="index.php?downloads"> <i class="fa fa-download"> </i> Downloads </a>

</li>

<li class="">

<a href="index.php?orders"> <i class="fa fa-list"> </i> Orders </a>

</li>

<li class="">

<a href="index.php?coupons"> <i class="fa fa-gift"> </i> Coupons </a>

</li>

<li class="">

<a href="index.php?reviews"> <i class="fa fa-comments-o"></i> Reviews </a>

</li>

<li class="">

<a href="index.php?payments"> <i class="fa fa-credit-card"></i> Payments </a>

</li>

<!-- <li class=""> -->

<!-- <a href="index.php?withdraw"> <i class="fa fa-upload"></i> (Useless-Delete) Withdraw </a> -->

<!-- </li> -->

<li>

<a href="#" id="settings-link"> 

<i class="fa fa-cog"></i> Settings <i class="fa fa-angle-right pull-right"></i> 

</a>

</li>

</ul><!-- nav nav-pills nav-stacked Ends -->

<ul class="nav nav-pills nav-stacked" id="settings-sidebar"><!-- nav nav-pills nav-stacked Starts -->

<li>

<a href="#" id="dashboard-link"> 

<i class="fa fa-arrow-left"></i>  Back to Dashboard 

</a>

</li>

<li class="">

<a href="index.php?store_settings"> <i class="fa fa-university"></i> Store Settings </a>

</li>

<!-- <li class=""> -->

<!-- <a href="index.php?payment_settings"> <i class="fa fa-credit-card"></i> (Useless-Delete) Payment Settings </a> -->

<!-- </li> -->

<li class=""><!-- shipping_settings li Starts -->

<a href="#" class="shipping_settings" data-toggle="collapse" data-target="#shipping_settings"> 

<i class="fa fa-truck"></i> Shipping Settings  <span class="caret"></span>

</a>

<ul id="shipping_settings" class="nav nav-pills nav-stacked sidebar-dropdown collapse">

<li>

<a href="index.php?shipping_zones"> Shipping Zones </a>

</li>

<li>

<a href="index.php?shipping_types"> Shipping Types </a>

</li>

</ul>

</li><!-- shipping_settings li Ends -->

<li class="">

<a href="index.php?seo_settings"> <i class="fa fa-globe"></i> Store SEO Settings </a>

</li>

</ul><!-- nav nav-pills nav-stacked Ends -->

<ul class="nav nav-pills nav-stacked"><!-- nav nav-pills nav-stacked Starts -->

<li>

<a href="../store/" class="pull-left"> <i class="fa fa-external-link"></i> Vist Store </a>

<a href="../logout.php" class="pull-right"> <i class="fa fa-sign-out"></i> Logout </a>

</li>

</ul><!-- nav nav-pills nav-stacked Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default sidebar-menu Ends -->

<script>

$(document).ready(function(){


$("#settings-sidebar").hide(0);


$("#settings-link").click(function(){

event.preventDefault();
	
$("#dashboard-sidebar").hide(0);

$("#settings-sidebar").show(0);
	
});

$("#dashboard-link").click(function(){

event.preventDefault();
	
$("#settings-sidebar").hide(0);

$("#dashboard-sidebar").show(0);
	
});

$(".shipping_settings").click(function(){

event.preventDefault();
	
});

});

</script>


</div><!-- col-md-3 Ends -->

<div class="col-md-9" ><!--- col-md-9 Starts -->

<div class="box"><!-- box Starts -->



<div class="row"><!-- row Starts -->

<div class="col-md-6"><!-- col-md-6 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-body text-center"><!-- panel-body Starts -->

<h4 class="text-muted"> Sales </h4>

<h3> $0 </h3>

<hr>

<h4 class="text-muted"> Earnings </h4>

<h3> $0 </h3>

<hr>

<h4 class="text-muted"> Pageviews </h4>

<h3> 0 </h3>

<hr>

<h4 class="text-muted"> Orders </h4>

<h3>  </h3>

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-list"> </i> Orders

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<ul class="list-group">

<li class="list-group-item">

All <span class="badge"></span>

</li>

<li class="list-group-item list-group-item-primary">

Processing <span class="badge">  </span>

</li>

<li class="list-group-item list-group-item-success">

Completed <span class="badge">  </span>

</li>

<li class="list-group-item list-group-item-info">

Pending <span class="badge">  </span>

</li>

<li class="list-group-item list-group-item-warning">

Cancelled <span class="badge">  </span>

</li>

<li class="list-group-item list-group-item-danger">

Refunded <span class="badge">  </span>

</li>

</ul>

<hr>

<div class="text-right"><!-- text-right Starts -->

<a href="index.php?orders">

View All Orders <i class="fa fa-arrow-circle-right" ></i>

</a>

</div><!-- text-right Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!--- col-md-6 Ends -->

<div class="col-md-6"><!-- col-md-6 Starts -->


<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-list"></i> Products & Bundles

<span class="pull-right"> <a href="index.php?insert_product"> + Insert New Product </a> </span> 

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<ul class="list-group">

<li class="list-group-item">

All <span class="badge">  </span>

</li>

<li class="list-group-item list-group-item-success">

Active <span class="badge">  </span>

</li>

<li class="list-group-item list-group-item-info">

Paused <span class="badge">  </span>

</li>

<li class="list-group-item list-group-item-danger">

Pending Review <span class="badge">  </span>

</li>

</ul>

<hr>

<div class="text-right"><!-- text-right Starts -->

<a href="index.php?products">

View All Products <i class="fa fa-arrow-circle-right"></i>

</a>

</div><!-- text-right Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-list"></i> Reviews 

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<ul class="list-group">

<li class="list-group-item">

All <span class="badge">  </span>

</li>

<li class="list-group-item list-group-item-success">

Active <span class="badge">  </span>

</li>

<li class="list-group-item list-group-item-success">

Pending <span class="badge">  </span>

</li>

<li class="list-group-item list-group-item-info">

Spam <span class="badge">  </span>

</li>

<li class="list-group-item list-group-item-danger">

Trash <span class="badge">  </span>

</li>

</ul>

<hr>

<div class="text-right"><!-- text-right Starts -->

<a href="index.php?reviews">

View All Reviews <i class="fa fa-arrow-circle-right"></i>

</a>

</div><!-- text-right Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!--- col-md-6 Ends -->

</div><!-- row Ends -->



</div><!-- box Ends -->

</div><!--- col-md-9 Ends -->

</div><!-- row Ends -->

</div><!-- container Ends -->


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


</ul><!-- ul Ends -->

<hr>

<h4>User Section</h4>

<ul><!-- ul Starts -->


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

<p class="pull-left"> &copy; 2016 Mohammed Tahir Ahmed </p>

</div><!-- col-md-6 Ends -->

<div class="col-md-6"><!-- col-md-6 Starts -->

<p class="pull-right"> Template by <a href="http://www.computerfever.com" >Computerfever.com</a> </p>

</div><!-- col-md-6 Ends -->

</div><!-- container Ends -->

</div><!-- copyright Ends -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>

