<?php // include('../checklogin.php')?>
<?php
// include database configuration file
include 'dbConfig.php';

// initializ shopping cart class
include 'Cart.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: ..http://localhost/dcandah/product.php");
}

// set customer ID in session
  if(isset($_SESSION['user'])){ 
   $id = $_SESSION['vid'];
 } else {
  $id = 0;
 } 
  $_SESSION['sessCustomerID'] = $id ;

// get customer details by session customer ID
$query = $db->query("SELECT * FROM seller WHERE id = ".$_SESSION['sessCustomerID']);
$sellRow = $query->fetch_assoc();
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="http://localhost/localmarket/img/favicon.png" type="image/png">
        <title>LocalMarket</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="http://localhost/localmarket/css/bootstrap.css">
        <link rel="stylesheet" href="http://localhost/localmarket/vendors/linericon/style.css">
        <link rel="stylesheet" href="http://localhost/localmarket/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://localhost/localmarket/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="http://localhost/localmarket/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="http://localhost/localmarket/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="http://localhost/localmarket/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="http://localhost/localmarket/vendors/jquery-ui/jquery-ui.css"> 
        <!-- main css -->
        <link rel="stylesheet" href="http://localhost/localmarket/css/style.css">
          <link rel="stylesheet" href="http://localhost/localmarket/css/pro.css">
          <link rel="stylesheet" href="http://localhost/localmarket/css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
           	<div class="top_menu row m0">
           		<div class="container">
					<div class="float-left">
						<a href="mailto:support@localmarket.com">support@localmarket.com</a>
						<a href="#">Welcome 
						<?php if(isset($_SESSION['user'])){
						echo " ";
						echo $_SESSION['user'];
						} else {
						echo "to LocalMarket" ;
						}?>
						</a>
					</div>
					<div class="float-right">
						<ul class="header_social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li>
						</ul>
					</div>
           		</div>	
           	</div>	
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light main_box">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.php"><img src="http://localhost/localmarket/img/leaf.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="http://localhost/localmarket/index.php">Home</a></li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="http://localhost/localmarket/product.php?nam=agriculture#menu">Agriculture</a></li>
										<li class="nav-item"><a class="nav-link" href="http://localhost/localmarket/product.php?nam=handicraft#menu">Handicrafts</a></li>
										<li class="nav-item"><a class="nav-link" href="http://localhost/localmarket/product.php?nam=food#menu">Food & Beverages</a></li>
										<li class="nav-item"><a class="nav-link" href="http://localhost/localmarket/product.php?nam=fruits#menu">Fruits</a></li>
									</ul>
								</li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Place</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="http://localhost/localmarket/category.php?nam=alakode#menu">Alakode</a></li>
										<li class="nav-item"><a class="nav-link" href="http://localhost/localmarket/category.php?nam=cherupuzha#menu">Cherupuzha</a></li>
										<li class="nav-item"><a class="nav-link" href="http://localhost/localmarket/category.php?nam=karthikapuram#menu">Karthikapuram</a></li>
										<li class="nav-item"><a class="nav-link" href="http://localhost/localmarket/category.php?nam=thaliparamba#menu">Thaliparamba</a></li>
										<li class="nav-item"><a class="nav-link" href="http://localhost/localmarket/category.php?nam=udayagiri#menu">Udayagiri</a></li>
									</ul>
								</li> 
								<?php if(isset($_SESSION['user'])){ 
								//if($_SESSION['type'] == 2) 
                                {?>
								<li class="nav-item"><a class="nav-link" href="http://localhost/localmarket/sell.php">Item to sell</a></li>
								<?php } }?>
								<li class="nav-item"><a class="nav-link" href="http://localhost/localmarket/contact.pho">Contact</a></li>
								<?php if(isset($_SESSION['user'])){ ?>
								<li class="nav-item"><a class="nav-link" href="http://localhost/localmarket/logout.php">LogOut</a></li>
								<?php }else{ ?>
								<li class="nav-item"><a class="nav-link" href="http://localhost/localmarket/login.php">LogIn</a></li>
								<?php } ?>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li class="nav-item"><a href="" class="cart"><i class="lnr lnr lnr-cart"></i></a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        
        							<!--<section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
                
                					<div class="banner_content text-center">-->
        
        <section>
						<div style="height:200px">
						
	</div></section>
       <div style="background:#CCC;
    max-width: 500px;  /*form table size*/
    margin: 0 auto;
    padding: 3em;
    border-radius: 10px;
    box-sizing: border-box;font-size:18px;">
         <font color="white">
	<p>Your payment is processing.........</p>
             <p>Our quarrier department will call you soon.......</p>
           </font></div>
               
    </body></html>