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
Shopping Cart Total Price: $0, Total Items 0</a>

</div><!-- col-md-6 offer Ends -->

<div class="col-md-6"><!-- col-md-6 Starts -->

<ul class="menu"><!-- menu Starts -->


<li>

<a href="../vendor_dashboard/index.php"> Vendor Dashboard </a>

</li>


<li>
<a href='my_account.php?my_orders'>My Account</a></li>

<li>
<a href="../cart.php">
Go to Cart
</a>
</li>

<li>
<a href='logout.php'> Logout </a></li>

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
<a href='my_account.php?my_orders'>My Account</a></li>

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

<div id="content"><!-- content Starts -->

<div class="container-fluid"><!-- container-fluid Starts -->

<div class="col-md-12" ><!--- col-md-12 Starts -->

<ul class="breadcrumb" ><!-- breadcrumb Starts -->

<li><a href="index.php">Home</a></li>

<li>My Account</li>

</ul><!-- breadcrumb Ends -->

</div><!--- col-md-12 Ends -->

<div class="col-md-12"><!-- col-md-12 Starts -->


<div class="alert alert-danger"><!-- alert alert-danger Starts -->

<strong> Warning! </strong> Please Confirm Your Email and if you have not received your confirmation email

<a href="my_account.php?send_email" class="alert-link"> 

Send Email Again

</a>

</div><!-- alert alert-danger Ends -->


</div><!-- col-md-12 Ends -->

<div class="col-md-3"><!-- col-md-3 Starts -->

<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->



<center>

<img src='customer_images/ecfcbefa9bae3cbfd16e8950e77fe9e7.jpg' class='img-responsive'>

</center>

<br>

<h3 align='center' class='panel-title'> Name : ashen </h3>


</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<ul class="nav nav-pills nav-stacked"><!-- nav nav-pills nav-stacked Starts -->

<li class="active">

<a href="my_account.php?my_orders"> <i class="fa fa-list"> </i> My Orders </a>

</li>

<li class="">

<a href="my_account.php?my_addresses"> <i class="fa fa-address-card"> </i> My Addresses </a>

</li>

<li class="">

<a href="my_account.php?pay_offline"> <i class="fa fa-bolt"></i> Pay Offline </a>

</li>

<li class="">

<a href="my_account.php?edit_account"> <i class="fa fa-pencil"></i> Edit Account </a>

</li>

<li class="">

<a href="my_account.php?change_pass"> <i class="fa fa-user"></i> Change Password </a>

</li>

<li class="">

<a href="my_account.php?my_wishlist"> <i class="fa fa-heart"></i> My WishList </a>

</li>

<li class="">

<a href="my_account.php?delete_account"> <i class="fa fa-trash-o"></i> Delete Account </a>

</li>

<li>

<a href="logout.php"> <i class="fa fa-sign-out"></i> Logout </a>

</li>


</ul><!-- nav nav-pills nav-stacked Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default sidebar-menu Ends -->
</div><!-- col-md-3 Ends -->

<div class="col-md-9" ><!--- col-md-9 Starts -->

<div class="box"><!-- box Starts -->



<center><!-- center Starts -->

<h1>My Orders</h1>

<p class="lead"> Your orders on one place.</p>

<p class="text-muted" >

If you have any questions, please feel free to <a href="../contact.php" > contact us,</a> our customer service center is working for you 24/7.

</p>

</center><!-- center Ends -->

<hr>

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-bordered table-hover"><!-- table table-bordered table-hover Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Order No:</th>

<th>Invoice No</th>

<th>Order Date:</th>

<th>Order Status:</th>

<th>Order Total</th>

<th>Actions:</th>

</tr>

</thead><!-- thead Ends -->

<tbody><!--- tbody Starts --->


</tbody><!--- tbody Ends --->

</table><!-- table table-bordered table-hover Ends -->

</div><!-- table-responsive Ends -->

</div><!-- box Ends -->


</div><!--- col-md-9 Ends -->

</div><!-- container-fluid Ends -->

</div><!-- content Ends -->


<div id="footer"><!-- footer Starts -->
<div class="container"><!-- container Starts -->

<div class="row" ><!-- row Starts -->

<div class="col-md-3 col-sm-6" ><!-- col-md-3 col-sm-6 Starts -->

<h4>Pages</h4>

<ul><!-- ul Starts -->

<li><a href="../cart.php">Shopping Cart</a></li>

<li><a href="../contact.php">Contact Us</a></li>

<li><a href="../shop.php">Shop</a></li>

<li>
<a href='my_account.php?my_orders'>My Account</a></li>


<li>

<a href="../vendor_dashboard/index.php"> Vendor Dashboard </a>

</li>


</ul><!-- ul Ends -->

<hr>

<h4>User Section</h4>

<ul><!-- ul Starts -->


<li>

<a href="../vendor_dashboard/index.php"> Vendor Dashboard </a>

</li>


<li>
<a href='my_account.php?my_orders'>My Account</a>
</li>

<li><a href="../customer_register.php">Register</a></li>

<li><a href="../terms.php"> Terms And Conditions </a></li>

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

<a href="../contact.php">Go to Contact us page</a>

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

<div class="col-md-6" ><!-- col-md-6 Starts -->

<p class="pull-right" >

Template by <a href="http://www.computerfever.com" >Computerfever.com</a>

</p>


</div><!-- col-md-6 Ends -->

</div><!-- container Ends -->

</div><!-- copyright Ends -->








<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>
