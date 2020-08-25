

<!DOCTYPE html>

<html>

<head>

<title>Admin Panel</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">


<script src="js/jquery.min.js"></script>

<script src="js/jquery-ui.min.js"></script>


</head>

<body>

<div id="wrapper"><!-- wrapper Starts -->


<nav class="navbar navbar-inverse navbar-fixed-top"><!-- navbar navbar-inverse navbar-fixed-top Starts -->

<div class="navbar-header" ><!-- navbar-header Starts -->

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" ><!-- navbar-ex1-collapse Starts -->


<span class="sr-only" >Toggle Navigation</span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>


</button><!-- navbar-ex1-collapse Ends -->

<a class="navbar-brand" href="index.php?dashboard" >Admin Panel</a>


</div><!-- navbar-header Ends -->

<ul class="nav navbar-right top-nav" ><!-- nav navbar-right top-nav Starts -->

<li class="dropdown" ><!-- dropdown Starts -->

<a href="#" class="dropdown-toggle" data-toggle="dropdown" ><!-- dropdown-toggle Starts -->

<i class="fa fa-user" ></i>

anvesh <b class="caret" ></b>


</a><!-- dropdown-toggle Ends -->

<ul class="dropdown-menu" ><!-- dropdown-menu Starts -->

<li><!-- li Starts -->

<a href="index.php?user_profile=12" >

<i class="fa fa-fw fa-user" ></i> Profile


</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_products" >

<i class="fa fa-fw fa-envelope" ></i> Products 


</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_customers" >

<i class="fa fa-fw fa-gear" ></i> Customers

<span class="badge" >6</span>


</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_p_cats" >

<i class="fa fa-fw fa-gear" ></i> Product Categories

<span class="badge" >8</span>


</a>

</li><!-- li Ends -->

<li class="divider"></li>

<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"> </i> Log Out

</a>

</li><!-- li Ends -->

</ul><!-- dropdown-menu Ends -->




</li><!-- dropdown Ends -->


</ul><!-- nav navbar-right top-nav Ends -->

<div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Starts -->

<ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->

<li><!-- li Starts -->

<a href="index.php?dashboard">

<i class="fa fa-fw fa-dashboard"></i> Dashboard

</a>

</li><!-- li Ends -->

<li><!-- Settings li Starts -->

<a href="#" data-toggle="collapse" data-target="#settings">

<i class="fa fa-fw fa-cog"></i> Settings

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="settings" class="collapse">

<li>

<a href="index.php?general_settings"> General Settings </a>

</li>

<li>

<a href="index.php?payment_settings"> Payment Settings </a>

</li>

<li>

<a href="index.php?store_settings"> Store Settings </a>

</li>

</ul>

</li><!-- Settings li Ends -->

<li><!-- li Starts -->

<a href="index.php?vendors_commissions">

<i class="fa fa-fw fa-usd"></i> Vendors Commissions


</a>

</li><!-- li Ends -->

<li><!-- Products li Starts -->

<a href="#" data-toggle="collapse" data-target="#products">

<i class="fa fa-fw fa-table"></i> Products


<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="products" class="collapse">

<li>
<a href="index.php?insert_product"> Insert Products </a>
</li>

<li>
<a href="index.php?view_products"> View Products </a>
</li>


</ul>

</li><!-- Products li Ends -->

<li><!-- Bundles Li Starts --->

<a href="#" data-toggle="collapse" data-target="#bundles">

<i class="fa fa-fw fa-edit"></i> Bundles


<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="bundles" class="collapse">

<li>
<a href="index.php?insert_bundle"> Insert Bundle </a>
</li>

<li>
<a href="index.php?view_bundles"> View Bundles </a>
</li>

</ul>

</li><!-- Bundles Li Ends --->

<li><!-- relations li Starts -->

<a href="#" data-toggle="collapse" data-target="#relations"><!-- anchor Starts -->

<i class="fa fa-fw fa-retweet"></i> Assign Products To Bundles Relations

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="relations" class="collapse"><!-- collapse Starts -->

<li>

<a href="index.php?insert_rel"> Insert Relation </a>

</li>


<li>

<a href="index.php?view_rel"> View Relations </a>

</li>

</ul><!-- collapse Ends -->


</li><!-- relations li Ends -->

<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#downloads">

<i class="fa fa-fw fa-arrows-v"></i> Downloads

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="downloads" class="collapse">

<li>
<a href="index.php?insert_download"> Insert Download </a>
</li>

<li>
<a href="index.php?view_downloads"> View Downloads </a>
</li>

</ul>

</li><!-- li Ends -->

<li><!-- reviews li Starts -->

<a href="#" data-toggle="collapse" data-target="#reviews">

<i class="fa fa-fw fa-star"></i> Product Reviews

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="reviews" class="collapse">

<li>
<a href="index.php?insert_review"> Insert Review </a>
</li>

<li>
<a href="index.php?view_reviews"> View Reviews </a>
</li>

</ul>

</li><!-- reviews li Ends -->


<li><!-- Icons Li Starts -->

<a href="#" data-toggle="collapse" data-target="#shipping_zones">

<i class="fa fa-truck" aria-hidden="true"></i> Ecommerce Shipping

<i class="fa fa-fw fa-caret-down" ></i>

</a>

<ul id="shipping_zones" class="collapse"><!-- Icons Ul Starts -->


<li>

<a href="index.php?shipping_settings"> Shipping Settings </a>

</li>

<li>
<a href="index.php?insert_shipping_zone"> Insert Shipping Zone  </a>
</li>

<li>
<a href="index.php?view_shipping_zones"> View Shipping Zones </a>
</li>

<li>
<a href="index.php?insert_shipping_type"> Insert Shipping Type  </a>
</li>

<li>
<a href="index.php?view_shipping_types"> View Shipping Types </a>
</li>

</ul><!-- Icons Ul Ends -->

</li><!-- Icons Li Ends -->

<li><!-- Icons Li Starts -->

<a href="#" data-toggle="collapse" data-target="#countries">

<i class="fa fa-globe" aria-hidden="true"></i> Countries

<i class="fa fa-fw fa-caret-down" ></i>

</a>

<ul id="countries" class="collapse"><!-- Icons Ul Starts -->

<li>
<a href="index.php?insert_country"> Insert Country </a>
</li>

<li>
<a href="index.php?view_countries"> View Countries  </a>
</li>

</ul><!-- Icons Ul Ends -->

</li><!-- Icons Li Ends -->


<li><!-- Icons Li Starts -->

<a href="#" data-toggle="collapse" data-target="#icons">

<i class="fa fa-fw fa-retweet"> </i> Icons

<i class="fa fa-fw fa-caret-down" ></i>

</a>

<ul id="icons" class="collapse"><!-- Icons Ul Starts -->

<li>
<a href="index.php?insert_icon"> Insert Icon </a>
</li>

<li>
<a href="index.php?view_icons"> View Icons </a>
</li>

</ul><!-- Icons Ul Ends -->

</li><!-- Icons Li Ends -->


<li><!-- manufacturer li Starts -->

<a href="#" data-toggle="collapse" data-target="#manufacturers"><!-- anchor Starts -->

<i class="fa fa-fw fa-briefcase"></i> Manufacturers

<i class="fa fa-fw fa-caret-down"></i>


</a><!-- anchor Ends -->

<ul id="manufacturers" class="collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?insert_manufacturer"> Insert Manufacturer </a>
</li>

<li>
<a href="index.php?view_manufacturers"> View Manufacturers </a>
</li>

</ul><!-- ul collapse Ends -->


</li><!-- manufacturer li Ends -->


<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#p_cat">

<i class="fa fa-fw fa-pencil"></i> Products Categories

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="p_cat" class="collapse">

<li>
<a href="index.php?insert_p_cat"> Insert Product Category </a>
</li>

<li>
<a href="index.php?view_p_cats"> View Products Categories </a>
</li>


</ul>

</li><!-- li Ends -->


<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#cat">

<i class="fa fa-fw fa-arrows-v"></i> Categories

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="cat" class="collapse">

<li>
<a href="index.php?insert_cat"> Insert Category </a>
</li>

<li>
<a href="index.php?view_cats"> View Categories </a>
</li>


</ul>

</li><!-- li Ends -->


<li><!-- boxes section li Starts -->

<a href="#" data-toggle="collapse" data-target="#boxes"><!-- anchor Starts -->

<i class="fa fa-fw fa-arrows"></i> Boxes Section

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="boxes" class="collapse">

<li>

<a href="index.php?insert_box"> Insert Box </a>

</li>


<li>

<a href="index.php?view_boxes"> View Boxes </a>

</li>

</ul>

</li><!--boxes section li Ends -->

<li><!-- services section li Starts -->

<a href="#" data-toggle="collapse" data-target="#services">

<i class="fa fa-fw fa-briefcase"></i> Services

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="services" class="collapse">

<li>
<a href="index.php?insert_service"> Insert Service </a>
</li>

<li>
<a href="index.php?view_services"> View Services </a>
</li>

</ul>

</li><!-- services section li Ends -->


<li><!-- contact us li Starts -->

<a href="#" data-toggle="collapse" data-target="#contact_us"><!-- anchor Starts -->

<i class="fa fa-fw fa-pencil"> </i> Contact Us Section

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="contact_us" class="collapse">

<li>

<a href="index.php?edit_contact_us"> Edit Contact Us </a>

</li>

<li>

<a href="index.php?insert_enquiry"> Insert Enquiry Type </a>

</li>

<li>

<a href="index.php?view_enquiry"> View Enquiry Types </a>

</li>

</ul>

</li><!-- contact us li Ends -->

<li><!-- about us li Starts -->

<a href="index.php?edit_about_us">

<i class="fa fa-fw fa-edit"></i> Edit About Us Page

</a>

</li><!-- about us li Ends -->


<li><!-- Coupons Section li Starts -->

<a href="#" data-toggle="collapse" data-target="#coupons"><!-- anchor Starts -->

<i class="fa fa-fw fa-arrows-v"></i> Coupons

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="coupons" class="collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?insert_coupon"> Insert Coupon </a>
</li>

<li>
<a href="index.php?view_coupons"> View Coupons </a>
</li>

</ul><!-- ul collapse Ends -->

</li><!-- Coupons Section li Ends -->

<li><!-- slide li Starts -->

<a href="#" data-toggle="collapse" data-target="#slides">

<i class="fa fa-fw fa-gear"></i> Slides

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="slides" class="collapse">

<li>
<a href="index.php?insert_slide"> Insert Slide </a>
</li>

<li>
<a href="index.php?view_slides"> View Slides </a>
</li>


</ul>

</li><!-- slide li Ends -->

<li><!-- terms li Starts -->

<a href="#" data-toggle="collapse" data-target="#terms" ><!-- anchor Starts -->

<i class="fa fa-fw fa-table"></i> Terms

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="terms" class="collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?insert_term"> Insert Terms </a> 
</li>

<li>
<a href="index.php?view_terms"> View Terms </a> 
</li>

</ul><!-- ul collapse Ends -->


</li><!-- terms li Ends -->

<li><!-- Edit Css li Starts -->

<a href="index.php?edit_css">

<i class="fa fa-fw fa-list"></i> Edit Css File

</a>

</li><!-- Edit Css li Ends -->

<li>

<a href="index.php?view_customers">

<i class="fa fa-fw fa-edit"></i> View Customers

</a>

</li>

<li>

<a href="index.php?view_orders">

<i class="fa fa-fw fa-list"></i> View Orders

</a>

</li>

<li>

<a href="index.php?view_payments">

<i class="fa fa-fw fa-pencil"></i> View Payments

</a>

</li>

<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#users">

<i class="fa fa-fw fa-gear"></i> Users

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="users" class="collapse">

<li>
<a href="index.php?insert_user"> Insert User </a>
</li>

<li>
<a href="index.php?view_users"> View Users </a>
</li>

<li>
<a href="index.php?user_profile=12"> Edit Profile </a>
</li>

</ul>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"></i> Log Out

</a>

</li><!-- li Ends -->

</ul><!-- nav navbar-nav side-nav Ends -->

</div><!-- collapse navbar-collapse navbar-ex1-collapse Ends -->

</nav><!-- navbar navbar-inverse navbar-fixed-top Ends -->


<div id="page-wrapper"><!-- page-wrapper Starts -->

<div class="container-fluid"><!-- container-fluid Starts -->


<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<h1 class="page-header">Dashboard</h1>

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-primary"><!-- panel panel-primary Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-tasks fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> 0 </div>

<div> <span class="badge">Pending</span> Products/Bundles </div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_products">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-green"><!-- panel panel-green Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-comments fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> 6 </div>

<div>Customers</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_customers">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-green Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-yellow"><!-- panel panel-yellow Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-shopping-cart fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> 8 </div>

<div>Products Categories</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_p_cats">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-yellow Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-red"><!-- panel panel-red Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-support fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> 2 </div>

<div>Orders</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_orders">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-red Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


</div><!-- 2 row Ends -->

<div class="row" ><!-- 3 row Starts -->

<div class="col-lg-8" ><!-- col-lg-8 Starts -->

<div class="panel panel-primary" ><!-- panel panel-primary Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> New Orders

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Order No:</th>

<th>Customer Email:</th>

<th>Invoice No:</th>

<th>Total:</th>

<th>Date:</th>

<th>Status:</th>

</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->


<tr>

<td>1</td>

<td>
</td>

<td>#324135198</td>

<td>$5900.0</td>

<td>August 08, 2020 02:21</td>

<td>
pending</td>

</tr>


<tr>

<td>2</td>

<td>
</td>

<td>#1263289004</td>

<td>$70.0</td>

<td>August 08, 2020 02:05</td>

<td>
pending</td>

</tr>


</tbody><!-- tbody Ends -->


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

<div class="text-right" ><!-- text-right Starts -->

<a href="index.php?view_orders" >

View All Orders <i class="fa fa-arrow-circle-right" ></i>

</a>

</div><!-- text-right Ends -->


</div><!-- panel-body Ends -->

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-8 Ends -->

<div class="col-md-4"><!-- col-md-4 Starts -->

<div class="panel"><!-- panel Starts -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="thumb-info mb-md"><!-- thumb-info mb-md Starts -->

<img src="admin_images/anvesh.jpg" class="rounded img-responsive">

<div class="thumb-info-title"><!-- thumb-info-title Starts -->

<span class="thumb-info-inner"> anvesh </span>

<span class="thumb-info-type"> CEO </span>

</div><!-- thumb-info-title Ends -->

</div><!-- thumb-info mb-md Ends -->

<div class="mb-md"><!-- mb-md Starts -->

<div class="widget-content-expanded"><!-- widget-content-expanded Starts -->

<i class="fa fa-user"></i> <span>Email: </span> anvesh@softmatic.in  <br>
<i class="fa fa-user"></i> <span>Country: </span> India   <br>
<i class="fa fa-user"></i> <span>Contact: </span> 9956494544   <br>

</div><!-- widget-content-expanded Ends -->

<hr class="dotted short">

<h5 class="text-muted">About</h5>

<p>
XYZ </p>

</div><!-- mb-md Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel Ends -->

</div><!-- col-md-4 Ends -->

</div><!-- 3 row Ends -->


</div><!-- container-fluid Ends -->

</div><!-- page-wrapper Ends -->

</div><!-- wrapper Ends -->

<script src="js/bootstrap.min.js"></script>

</body>

</html>

