<?php  include('checklogin.php')?>
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
    .container{
        margin-top: 50px;
    }
    body{
        background-image:url(images/coffee.jpeg);
    }
     .table th{
        color: #4d004d;
        font-size: 25px;
        background-color: white;
    }
    .table td{
        color: #3d0f2e;
        font-size: 20px;
        font-weight: bolder;
        background-color: rgba(204, 102, 255,0.10)
    }
        </style>
    </head>
    <body>
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
</div>
<!-- container //  -->
        <div class="container">
        <div >Your Order details</div>
         <?php if(isset($_SESSION['user'])){ 
				$vid=$_SESSION['vid'];
				$db = mysqli_connect("localhost", "root", "", "dcandah");
				$query = $db->query("SELECT * FROM orders WHERE customer_id='".$vid."' ORDER BY id");
				if($query->num_rows > 0){ 
				?>
				<?php
				$z=0;
					$sql1="SELECT * FROM orders WHERE customer_id='".$vid."' ORDER BY id";
					$q1=$db->query($sql1);
					while($r1=$q1->fetch_assoc())
					{
						$oid=$r1["id"];
						$sql2="SELECT * FROM order_items WHERE order_id='".$oid."'";
						$q2=$db->query($sql2);
						while($r2=$q2->fetch_assoc())
						{
							$pid=$r2["product_id"];
							$sql3="SELECT * FROM products WHERE id='".$pid."'";
							$q3=$db->query($sql3);
							while($r3=$q3->fetch_assoc())
							{
								$title[$z]=$r3["title"];
								$z=$z+1;
							}
						}
					}
				?>
            <table class="table">
                                                              
                <tr>
                  <th>#</th>
                  <th>Order_id</th>
                  <th>Product_Name</th>
                  <th>Total_Price</th>
				</tr>
           <?php
				$x=1;
				$y=0;
				while($row = $query->fetch_assoc()){ 
				?>
             <tr>
            <td><?php echo $x ?></td>
			  <td><?php echo $row["id"]; ?></td>
			  <td><?php echo $title[$y]; ?></td>
			  <td><?php echo '₹'.$row["total_price"].' RS'; ?></td>
            </tr>
            <?php $x=$x+1; $y=$y+1;  } }else{  ?>
                  <p><center><h3>You have no orders.....</h3></center></p>
			  <?php } }else { ?>
                  <p><center><h3>Login first for order details.....</h3></center></p>
			  <?php } ?>
				
                        <tr>
					
				</tr>
            </table>   
        </div>
    </body></html>