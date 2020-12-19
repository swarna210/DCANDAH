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
          <!--=================home below bar============================== -->	
         <div class="container">
        <ul class="breadcrumb" style="margin-top:30px;background-color: #800040;">
  	 <?php
			$id= $_GET['id'];
			$db = mysqli_connect("localhost", "root", "", "dcandah");
			$query = $db->query("SELECT * FROM products WHERE id='".$id."'");
		//$query = $db->query("SELECT * FROM products");
			if($query->num_rows > 0){ 
			while($row = $query->fetch_assoc()){  
		?>
   
    <li style="color:white"><a style="color:white" href="home.php">Home</a> <span class="divider">/</span></li>
    <li style="color:white"><a style="color:white" href="product.php?nam=<?php echo $row['category']; ?>#menu"><?php echo $row['category']; ?></a> <span class="divider" style="color:white">/</span></li>
    <li style="color:white" class="active"><?php echo $row['title']; ?></li>
    </ul>	
        </div>
        <!--=================home below bar============================== -->	
      <!--=================product details============================== -->	    
        <!--=================product details============================== -->	
<div class="container" style="background-color:rgba(255,255,255,0.4);margin-top:20px;margin-bottom:20px;">
        <div class="row" style="margin-top:20px;margin-bottom:20px;">
    <div class="col-lg-6" style="margin-top:20px;margin-bottom:20px;">
        <?php
			$img1 = basename( $row['image1'] );
			echo "<a href='img/uploads/$img1'>";
		    echo "<img src='img/uploads/$img1' style='width:200px;height:200px;width:200px; height:200px;border-radius:50px 20px; margin-left:40px;  border: 6px solid #660044;';'>"; 
            echo "</a>";
			?>	
			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
				  <?php
					$img2 = basename( $row['image2'] );
					if($img2==null) {
						echo "";
					} else {
					echo "<a href='img/uploads/$img2'>";
					echo "<img src='img/uploads/$img2' style='width:200px;height:200px;width:200px; height:200px;border-radius:50px 20px; margin-left:40px;  border: 6px solid #660044;' ;'>"; 
					echo "</a>";
					} 
					$img3 = basename( $row['image3'] );
					if($img3==null) {
						echo "";
					} else {
					echo "<a href='img/uploads/$img3'>";
					echo "<img src='img/uploads/$img3' style='width:200px;height:200px;width:200px; height:200px;border-radius:50px 20px; margin-left:40px;  border: 6px solid #660044;' ;'>"; 
					echo "</a>";
					}
					$img4 = basename( $row['image4'] );
					if($img4==null) {
						echo "";
					} else {
					echo "<a href='img/uploads/$img4'>";
					echo "<img src='img/uploads/$img4' style='width:200px;height:200px;width:200px; height:200px;border-radius:50px 20px; margin-left:40px;  border: 6px solid #660044;' ;'>"; 
					echo "</a>";
					}
					?>				
                  </div>
                </div>
              </div>
        <h3 style="color: #800040;font-family:Lucida Bright;font-size:20px;margin-left:50px;"><?php echo $row['title']; ?></h3>
        <a class="btn btn-primary" style="margin-bottom:10px;margin-left:50px;color:white; background-color:#800040;" href="cart/cartAction.php?action=addToCart&id=<?php echo $row["id"] ; ?>">Add to Cart </a>
				 
                    <a class="btn btn-primary" style="margin-bottom:10px;margin-left:50px;color:white; background-color:#800040;" href="cart/cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Buy Now </a> 
                        <hr class="soft"/>
                        
     </div><!------------col-lg-6 left------------------------->
            <div class="col-lg-6">
             
			  <h4 style="color: #800040;font-family:Lucida Bright;font-size:35px;"><?php echo $row['category']; ?></h4>
			  <hr class="soft"/>
			 <!-- <form class="form-horizontal qtyFrm">
				  <div class="control-group">-->
					<label class="control-label"><span style="color: #800040;font-family:Lucida Bright;font-size:35px;">₹ <?php echo $row['price']; ?>-1kg/1lt/count</span></label><br>
                  <hr class="soft"/>
			  <?php
                
                $query=$db->query("SELECT stock FROM products WHERE id='".$id."'");
                $w=$query->fetch_assoc();
                echo "<h4 style='color:#800040;font-family:Lucida Bright;font-size:20px;'>";
                echo  $w['stock'];
                echo "&nbsp";
                echo "stock-kg/lt/count";
                echo "</h4>";
                ?>
			  <hr class="soft clr"/>
			  <p style="color: #800040;font-family:Lucida Bright;font-size:20px;"><?php echo $row['description']; ?></p>
					  <?php } } ?>
                   <hr class="soft"/>
                <div class="row">
                    <?php if(isset($_SESSION['user'])){?>
                        <a class="btn btn-primary" style="margin-bottom:10px;color:white; background-color:#800040;margin-right:20px;" href="view_seller.php?id=<?php echo $_GET["id"];?>">View Seller</a>
                           <?php }?>
                        
                 <a class="btn btn-primary" style="margin-bottom:10px;color:white; background-color:#800040;" href="product_review.php?id=<?php echo $_GET["id"];?>">Product Review</a> 
            </div>
                <hr class="soft clr"/>
            <!------------col-lg-6 right------------------------->
     <?php  
                             $db = mysqli_connect('localhost', 'root', '', 'dcandah');
                          if(isset($_SESSION['user'])) {   
                if (isset($_POST['submit']))
                                
                          {
                                  $id =$_GET['id'];
                                  $sid=$_SESSION['vid'];
                                
                            $comment=$_POST['comment'];

                            $query = "INSERT INTO review (pid,vid,comment) VALUES('$id','$sid','$comment')";
                             //$query;
                             mysqli_query($db, $query);

                           }
                   
                    }
                         else{
                             echo "<h3 style='color:#800040;'>";
                        echo "LOGIN PLEASE..........";
                        echo "</h3>";
                        echo "<br>";
                          }
                        ?>
         <form method="post">  
           <input type="text" name="comment" placeholder="comments">
<input  style="
color:white;background:#800040; border-radius: 20px;font-size:20px;" type="submit" name="submit" value="submit"> 
             </form> 
            </div>
        </div>     

            </div>
        
        
        
        
        
        
        
        
        
        
    </body></html>