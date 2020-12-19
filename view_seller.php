<?php  include('checklogin.php')?>
<?php
$id=$_GET['id'];      
$query =$db->query("SELECT vid FROM products WHERE id='".$id."'");
$view1=$query->fetch_assoc();
?>
<?php
$di=$view1['vid'];?>
<?php
$query=$db->query("SELECT * FROM seller WHERE id='".$di."'");
$view = $query->fetch_assoc(); 
?>
<html>
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
    /*.container{
        margin-top: 50px;
    }*/
    body{
        background-image:url(images/coffee.jpeg);
    }
    label{
            color: #660044;
            font-size: 35px;
        }
        /*.container{
           background-color: rgba(255, 102, 204,0.20);
           
            margin: auto;
  width: 50%;
  border: 3px solid #660044;
  padding: 10px;
        }*/
        b{
            color: #660044;
            font-size: 35px;
            font-family: Gabriola;
        }
        h2{
            text-decoration:underline;
            text-decoration-color: white;
            color: white;
        }
        .btn{
            background-color: #660044;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
        }
        </style>
    </head>
    <body>
<div class="container" style="margin-top:50px;margin-bottom:100px;">
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
</div>
<!-- container //  -->
        <!__============================seller view===========================================->
          <div class="container" style="background-color: rgba(255, 102, 204,0.20);
          
            margin: auto;
  width: 50%;
  border: 3px solid #660044;
  padding: 10px;">
  <h2>Seller Information</h2>
  <form action="view_seller.php#view" method="post">
    <div class="form-group">
      <label for="name"><b>Name:</b></label>
        <b><?php echo $view['name']; ?></b>
      </div>
    
      <div class="form-group">
      <label for="address"><b>Address:</b></label>
         <b><?php echo $view['address']; ?></b> 
    </div>
      <div class="form-group">
      <label for="city"><b>City:</b></label>
         <b> <?php echo $view['city']; ?></b>
    </div>
      
      <div class="form-group">
      <label for="mobile"><b>Mobile:</b></label>
         <b> <?php echo $view['mobile']; ?></b>
    </div>
  </form>
</div>
        <div class="container" style="margin-top:50px;margin-bottom:50px;color:#660022;font-size:30px;text-shadow:2px 2px;text-decoration:underline;background-color:white;">OTHER PRODUCTS</div>
<?php
			$sql = "SELECT * FROM products";
			$result = mysqli_query($db, $sql); 
		    $ro = $result->num_rows;
	$query = $db->query("SELECT * FROM products WHERE vid='".$di."' ORDER BY id DESC");
     if($query->num_rows > 0){ 
     while($row = $query->fetch_assoc()){  
	?>
        
        <!----------------------------product display----------------------------------------------->
           <div class="container">
    <div class="row" style="float:left;">
      <div class="col-lg-4 col-md-4 col-sm-6"  style="margin-bottom:30px;margin-right:30px;">  
    <div class="card" style="width: 18rem;">
  <a href="product_details.php?id=<?php  echo $row['id'];?>" class="card-img-top">
      <?php  echo "<img src='img/uploads/".$row['image1']."' style='width:200px; height:200px;border-radius:50px 20px; margin-left:40px;  border: 6px solid #660044;'>"; ?>
        </a>
  <div class="card-body">
    <h5 class="card-title" ><a href="product_details.php?id=<?php echo $row['id'];?>">
        <?php echo "<h4   style='color: #800040;font-family:Harlow Solid;font-size:35px;'>".$row['title']."</h4>"; ?></a>
                                                                                      
      </h5>
    <p class="card-text"><?php echo "<h5 style='color: #800040;font-family:Harlow Solid;font-size:35px;' >₹ ".$row['price']."</h5>" ; ?></p>
    <a href="cart/cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn " style="margin-bottom:10px;color:white; background-color:#800040;">Add to Cart</a>
      <a href="cart/cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn " style="margin-bottom:10px;color:white;background-color:#800040;">Buy Now</a>
  </div>
          </div>
        
    </div></div></div>
                  
           
                    <?php } }else{  ?>  
                                        <section class="banner_area">
           					 <div class="banner_inner d-flex align-items-center">
							<div class="container">
							<div class="banner_content text-center">
							<h2 style="color:#800040;font-size:40px;text-shadow: 2px 2px #ff80bf; ">Product(s) not found.....!</h2>
							</div>
							</div>
           				    </div>
       					 </section>
                     
             <?php } ?>
         <!------------------------------product display------------------------------------------------->
         
    </body></html>