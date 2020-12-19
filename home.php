<?php  include('checklogin.php')?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, navbar, hover nav menu CSS examples" />
<meta name="description" content="Bootstrap navbar hover examples for any type of project, Bootstrap 4" />  

<title>DCANDAH </title>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
crossorigin="anonymous"></script>

<!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<style>
    @media all and (min-width: 992px) {
	.navbar .nav-item .dropdown-menu{ display: none; }
	.navbar .nav-item:hover .nav-link{ color: #fff;  }
	.navbar .nav-item:hover .dropdown-menu{ display: block; }
	.navbar .nav-item .dropdown-menu{ margin-top:0; }
}	
/* ============ desktop view .end// ============ */
    .navbar{
       /* background-color: rgba(255, 51, 204,0.9);*/
        background-color: #660044;
        color: black;
    }
    .nav-item{
        font-size: 20px;
    }
    .search-box{
    /*width: 45%;
    display: flex;
    padding-bottom: 3px;*/
    border-bottom: 1px solid #ddd;
   /* margin: 10px 0 30px;*/
}
.search-box img{
    height: 25px;
    width: 25px;
    cursor: pointer;
}
.search-box input{
   /* width: 100%;*/
    margin-left: 10px;
   /* font-size: 25px;*/
    border: 0;
    outline-color: #005ce6;
}
    .btn button{
    padding: 7px 30px;
    margin-right: 15px;
    outline: none;
    border: 1px solid #005ce6 ;
    border-radius: 20px;
    cursor: pointer;
    color:white;
    background: transparent;
}
.btn {
    /*margin-bottom: 50px;
    margin-top: 50px;*/
}
    .btn .primary-btn{
    background: linear-gradient(#0066ff,#1a75ff);
    box-shadow: 0 2px 15px rgba(0, 191, 255,0.26);
    margin-left: 70px;
    
}
    .sidenav {
  width: 140px;
  position: fixed;
  z-index: 1;
  top: 20px;
  left: 10px;
  background: white;
  overflow-x: hidden;
  padding: 8px 0;
        margin-top: 220px;
        box-shadow: 5px 10px 18px #ff80ff;
        border-color: #660044;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #2196F3;
  display: block;
}

.sidenav a:hover {
  color: #064579;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
    .main
    { margin-left: 145px; 
  
}
    
  /*footer styles*/
    .footer-area{
        background-color:#4d0026;
        color: white;
        margin-top: 50px;
    }
        /*footer styles*/  
    </style>


</head>
<!--<body class="bg-light">-->
    <body style="background-image:url(images/coffee.jpeg);">

<header class="section-header py-4">
<div class="container">
	<h2 style="color:#ff66cc;font-family:Forte;">welcome
        <?php if(isset($_SESSION['user'])){
        echo $_SESSION['user'];
						} else {
						echo "to our fam!!!" ;}?>
                            </h2>
</div>
</header> <!-- section-header.// -->

<!-- ========================= SECTION CONTENT ========================= -->

<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="home.php">DC & AH</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="main_nav">
	<ul class="navbar-nav">
		<li class="nav-item active"> <a class="nav-link" href="home.php">Home </a> </li>
		<li class="nav-item"><a class="nav-link" href="contact.php"> Contact </a></li>
		<li class="nav-item dropdown">
			<a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  Catergory  </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="category.php?nam=vegetables#menu"> Vegetables</a></li>
			  <li><a class="dropdown-item" href="category.php?nam=fruits#menu">Fruits </a></li>
			  <li><a class="dropdown-item" href="category.php?nam=handicrafts#menu"> Handicrafts </a></li>
                <li><a class="dropdown-item" href="category.php?nam=cakes#menu"> Cakes </a></li>
                <li><a class="dropdown-item" href="category.php?nam=honey#menu"> Honey </a></li>
                <li><a class="dropdown-item" href="category.php?nam=jams#menu"> Jams</a></li>
                <li><a class="dropdown-item" href="category.php?nam=food#menu">Food & Snacks </a></li>
		    </ul>
		</li>
        <li class="nav-item dropdown">
			<a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  Places </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="place.php?nam=karikkode#menu"> Karikkode</a></li>
			  <li><a class="dropdown-item" href="place.php?nam=parakod#menu"> Parakod </a></li>
			  <li><a class="dropdown-item" href="place.php?nam=asokapuram#menu"> Asokapuram </a></li>
                 <li><a class="dropdown-item" href="place.php?nam=kolencheri#menu"> Kolencheri </a></li>
                 <li><a class="dropdown-item" href="place.php?nam=pattimattam#menu"> Pattimattam </a></li>
                 <li><a class="dropdown-item" href="place.php?nam=kadayiruppu#menu"> Kadayiruppu </a></li>
                 <li><a class="dropdown-item" href="place.php?nam=pookkattupadi#menu"> Pookkattupadi </a></li>
		    </ul>
		</li>
        <li class="nav-item dropdown">
			<a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">
              <?php if(isset($_SESSION['user'])){ ?>         
                <?php echo $_SESSION['user'];?>    
                <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="profile.php">View Profile</a></li>
			  <li><a class="dropdown-item" href="seller_product.php">Your Products </a></li>
            <li><a class="dropdown-item" href="cus_orders.php">Your Orders </a></li>
			  <li><a class="dropdown-item" href="customer_order.php">Product Orders </a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout </a></li>

		    </ul>
                 <?php }else  {  ?>
                <img src="images/user1.jpg"> </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="login.php">Login</a></li>
			  <li><a class="dropdown-item" href="register.php">Register </a></li>
		    </ul>
		</li><?php }?>
	</ul>
	<ul class="navbar-nav ml-auto">
		<li class="nav-item"><a class="nav-link" href="product_summary.php"><img src="images/cart1.png"> </a></li>
        <?php if(isset($_SESSION['user'])){   {?>
		<li class="nav-item"><a class="nav-link" href="sell.php"> Sell </a></li>
        <?php }}?>
		<!--<li class="nav-item dropdown">
			<a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Dropdown right </a>
		    <ul class="dropdown-menu dropdown-menu-right">
			  <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
			  <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
		    </ul>
		</li>-->
	</ul>
  </div> <!-- navbar-collapse.// -->
</nav>
</div><!-- container //  -->
<!-- banner-->
       <section>
        <div>
       <!-- <div class="search-box" style="margin-top:30px;margin-bottom:30px;margin-right:900px;">
                     <img src="images/search.png" style="margin-left: 50px;">
                <input type="text" placeholder="Find me...">
                </div>-->
        </div>
         

          <div class="sidenav">
  <a href="auction_home.php"><img src="images/Bidding.png" width="100px" height="100px;" style="background-color:#ffe6f7;"></a><br><br>
 <a href="policy.php" style="background-color:#ff80d5;color:white">Site Policy</a> 
</div>
            
      
           <!----------------------------product display----------------------------------------------->
          
              <section class="feature_product_area" style="margin-left:200px;">
        	<div class="main_box">
				<div class="container">
<div class="feature_product_inner">
		  <div class="main_title">
         <h3 style="text-align:center;margin-bottom:30px;">What's New<br>
		  </h3>
                    				<div class="latest_product_inner row">
			<?php
			$db = mysqli_connect("localhost", "root", "", "dcandah");
			$sql = "SELECT * FROM products";
			$result = mysqli_query($db, $sql); 
		    $ro = $result->num_rows;
			$query = $db->query("SELECT * FROM products ORDER BY id DESC LIMIT 9");
			if($query->num_rows > 0){ 
			while($row = $query->fetch_assoc()){  
			?>
           <div class="col-lg-4 col-md-4 col-sm-6" style="margin-bottom:50px;">
			  <div class="f_p_item">
									<div class="f_p_img">
                            <div class="card" style="width: 18rem;">
  <a href="product_details.php?id=<?php  echo $row['id'];?>" class="card-img-top">
      <?php  echo "<img src='img/uploads/".$row['image1']."' style='width:200px; height:200px;border-radius:50px 20px; margin-left:40px;  border: 6px solid #660044;'>"; ?>
        </a>
  <div class="card-body">
    <h5 class="card-title" ><a href="product_details.php?id=<?php echo $row['id'];?>">
        <?php echo "<h4   style='color: #800040;font-family:Lucida Bright;font-size:20px;'>".$row['title']."</h4>"; ?></a>
                                                                                      
      </h5>
    <p class="card-text">
        <?php echo "<h5 style='color: #800040;font-family:Lucida Bright;font-size:35px;' >₹ ".$row['price']."</h5>" ; ?></p>
    <a href="cart/cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn " style="margin-bottom:10px;color:white; background-color:#800040;">Add to Cart</a>
      <a href="cart/cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn " style="margin-bottom:10px;color:white;background-color:#800040;">Buy Now</a>
  </div>
          </div>
									
                
                  
								</div>
    </div></div><?php// }?>
			<?php } } else {?>
			<p><center>Product(s) not found.....</center></p>
			<?php } ?>
              </div></div></div></div></div></section></section>
    
   
         <!--------------------------product display------------------------------------------------->
        
       <!------------------------footer----------------------------------------> 
     <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6" >
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Us</h6>
                            <p>DINNING COMRADE AND AUCTION HUB<br>
								AZZ complex
								Ernakulam District
								Kerala
								<br>
								Pin:670002
								Email:dinningcomrade.auctionhub.ac.in
								Enquiry Number:<br>9207340547<br>8074556561
							</p>
							</div>
                    </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">Administrator</h6>
                           <?php// if(isset($_SESSION['user'])){ ?>
				<!--<a href="logout.php"><span class="btn btn-primary">Logout</span></a>-->
				<?php //}else{ ?>
				<a href="adminlogin.php"><img src="images/Admin.png" width="70" height="70"></a>
				<?php //} ?>
                        </div>
                    </div>	
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">Write to us for the queries and feedback</h6>
                            <ul class="list instafeed d-flex flex-wrap">
                                <li><a href="contact.php"><img src="images/feed.png" width="100px" height="100px" alt=""></a></li>
                                
                            </ul>
                        </div>
                    </div>	
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget f_social_wd">
                            <h6 class="footer_title">Follow Us</h6>
                            <p>Let us be social</p>
                            <div class="f_social">
                            	<img src="images/Social-Media-Icons-1.jpg">
                            </div>
                        </div>
                    </div>						
                </div>
                
            </div>
        </footer>
          <!------------------------footer----------------------------------------> 
     
</body>
</html>