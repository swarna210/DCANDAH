<?php // include('checklogin.php')?>
<?php
include 'cart/Cart.php';
$cart = new Cart;?>
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
        <script>
    function updateCartItem(obj,id){
        $.get("cart/cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }
    </script>
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
<div class="container" style="margin-bottom:30px;">
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
        <!-------------------------cart table-------------------------------------------->
        <div class="container" style="margin:auto;">
            <?php
			 if(isset($_SESSION['user'])) { ?>
        <h2 style="text-shadow:2px 2px #800060;text-align:center;color:#ff80d5;">Shopping cart</h2><br><br>
             
         <table class="table">
                                                              
                <tr>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Subtotal</th>
                    <th></th>
				</tr>
            <?php
					if($cart->total_items() > 0){
					//get cart items from session
					$cartItems = $cart->contents();
					foreach($cartItems as $item){
				?>
             <tr>
            <td><?php echo $item["name"]; ?></td>
				<td><?php echo '₹'.$item["price"].' RS'; ?></td>
				<td><input type="number" min=0 placeholder="Qty." value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
				<td><?php echo '₹'.$item["subtotal"].' RS'; ?></td>
				<td>
				<a href="cart/cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn" onclick="return confirm('Are you sure?')" style="border-radius:50%;color:white;background-color:#ff66ff;"> DEL<i class="glyphicon glyphicon-trash"></i></a>
				</td>
			  
            </tr>
            <?php } }else{ ?>
					<tr><td colspan="5"><p>Your cart is empty.....</p></td>
				<?php } ?>
                        
				 <?php
                 /*$query=$db->query("SELECT stock FROM products WHERE id='".$id."'");
                $w=$query->fetch_assoc();
                 $b=$w['stock'];
                 $c=$item["qty"];
                 $a=$b-$c;
                  $id= $_GET['id'];*/
                // $q=$item["qty"];
         // $id=$_GET['id'];
                 
//echo $id;                 
?>  
                        <tr>
					<td><a href="product.php?nam=vegetables#menu" class="btn" style="border-radius:12px;color:white;background-color:#99004d;box-shadow: 0 24px 40px 0 rgba(204, 0, 153,0.19), 0 25px 50px 0 rgba(204, 0, 153,0.19);"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a></td>
					<td colspan="2"></td>
					<?php if($cart->total_items() > 0){ ?>
					<td class="text-center"><strong>Total <?php echo '₹'.$cart->total().' RS'; ?>+Site Charge</strong></td>
					<td>
                       <a href="cart/checkout.php?id=<?php //echo $_GET['id'] ?>,qty=<?php // echo $item["qty"] ?>" class="btn" style="border-radius:12px;color:white;background-color:#99004d;box-shadow: 0 24px 40px 0 rgba(204, 0, 153,0.19), 0 25px 50px 0 rgba(204, 0, 153,0.19);">Checkout </a>
                            
                         
                            
                            
                            
                            
                            </td>
					<?php } ?>
				</tr>
            </table>   
            <?php } else { ?>
     <h3><center><b style="text-shadow:2px 2px #800060;text-align:center;color:#ff80d5;"> Login Please...</b></center></h3><br><br>
                                            <form action="login.php" method="post">
									<button type="submit"  class="btn" style="color:white;background-color:#66004d;border-radius:50%;margin-left:500px;">Log In</button></form>
							<?php }?>
        </div>
        
        
                <!-------------------------cart table-------------------------------------------->

    </body></html>