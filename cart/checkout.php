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
        background-image:url(http://localhost/dcandah/images/coffee.jpeg);
    }
    
    .table th{
        color: white;
        font-size: 25px;
        background-color:  #4d004d;
    }
    .table td{
        color: #3d0f2e;
        font-size: 20px;
        font-weight: bolder;
        background-color: #ffb3ec;
    }
        </style>
    </head>
    <body>
<div class="container">
       <a href="http://localhost/dcandah/home.php" class="btn" style="color:white;background-color:#800060;margin-bottom:20px;">HOME</a>
        </div>
        <!--------------------------------------------------------->
        <div class="container" style="margin-bottom:30px;margin-top:30px;">
            <h3 style="text-shadow:2px 2px #800060;text-align:center;color:#ff80d5;"> CHECKOUT</h3>	
	<hr class="soft"/>
			<?php
			 if($_SESSION['sessCustomerID'] == 0) { ?>
				<h3><center><b style="text-shadow:2px 2px #800060;text-align:center;color:#ff80d5;"> Login Please...</b></center></h3>
			<?php } else { ?>
             
         <table class="table">
                                                              
                <tr>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Subtotal</th>
                    
				</tr>
           <?php
        			if($cart->total_items() > 0){
						//get cart items from session
						$cartItems = $cart->contents();
            		foreach($cartItems as $item){
        			?>
             <tr>
            		<td><?php echo $item["name"]; ?></td>
            		<td><?php echo '₹'.$item["price"].' RS' ; ?></td>
            		<td><?php echo $item["qty"]; ?></td>
            		<td><?php echo '₹'.$item["subtotal"].' RS'; ?></td>
                 <?php
                        $amt= $item['subtotal'];
                 ?>
       			 </tr>
       		 <?php } }else{ ?>
             <tr><td colspan="4"><p>No items in your cart......</p></td></tr>
        	<?php } ?>
           
					
					<tr>
            	<td colspan="3"></td>
            	<?php if($cart->total_items() > 0){ ?>
            	<td class="text-center"><strong>Total <?php echo '₹'.$cart->total().' RS' ; ?>+Site Charge</strong></td>
            	<?php } ?>
       			 </tr>

            </table>   
            
        </div>
        <div class="container" >
        
        <div class="shipAddr" style="background-color:#66004d;margin-right:600px;margin-bottom:50px;border-radius:50px 20px;">
        		<h3 style="color:white;text-align:center;">DELIVERY DETAILS</h3>
        		<p style="padding-left:50px;color:white;"><?php echo $sellRow['name']; ?></p>
        		<p style="padding-left:50px;color:white;"><?php echo $sellRow['address']; ?></p>
                 <p style="padding-left:50px;color:white;"><?php echo $sellRow['city']; ?></p>
                 <p style="padding-left:50px;color:white;"><?php echo $sellRow['pincode']; ?></p>
                 <p style="padding-left:50px;color:white;"><?php echo $sellRow['mobile']; ?></p>
    		
            
            <a style="margin-bottom:50px;margin-left:50px;background-color:#ffe6ff;" href="http://localhost/dcandah/product.php?nam=agriculture#menu" class="btn"> Continue Shopping</a>
        
           <!-- <a style="margin-bottom:50px;margin-left:50px;background-color:#ffe6ff;" href="cartAction.php?action=placeOrder"  class="btn">Place Order </a>-->
            <a style="margin-bottom:50px;margin-left:50px;background-color:#ffe6ff;" href="payment.php?amt=<?php echo $amt;?>"  class="btn">PAYMENT </a>
            </div>
        </div>
        <?php } ?>
        <!---------------------------------------------->
    </body></html>