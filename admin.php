<?php  include('checklogin.php')?>

<html>
    <head>
    <title>Admin Page</title>
        <style>
            body{
        background-image: url(images/bg.jpg);
               
 }
            .btn{
                background-color: white;
                color: black;
                border-radius: 12px;
                padding: 6px 15px;
                font-size: 30px;
                text-decoration:none;
            }
            .link{
                color: black;
            }
             </style>
    </head>
<body>
    <div class="container" style="color:white;margin-left:30px;margin-top:30px;">DC AND AH<br><br>
    <div>
        <?php if(isset($_SESSION['user'])){ ?>
        <a class="btn" style="background-color:red;color:white;" href="logout.php">LOGOUT</a>
        <?php }else{ ?>
        <a href="adminlogin.php"><img src="images/ad.png" width="70" height="70"></a>
				<?php } ?>
        </div>
    </div>
    <div>
    <center>
   
    <h3 style="color:white;font-size:35px;">Registered Users</h3>
		<button  type="submit" name="ven" value="find" class="btn"><a style="text-decoration:none;" class="link"  href="admin_seller.php">Find</a></button></center>
							
            <br><br><br>
            <center>
             <h3 style="color:white;font-size:35px;">Registered Products</h3>
		<button  type="submit" name="ven" value="find" class="btn">
            <a class="link" href="admin_product.php" style="text-decoration:none;">Find</a></button></center>
							
            <br><br><br>
            <center>
            
    <h3 style="color:white;font-size:35px;">Users Feedback</h3>
		<button type="submit" name="go" value="find" class="btn"><a class="link"  href="admin_feedback.php" style="text-decoration:none;">Find</a></button>
							</center>
         <br><br><br>
            <center>
            
    <h3 style="color:white;font-size:35px;">Auction Details</h3>
		<button type="submit" name="go" value="find" class="btn"><a class="link"  href="admin_auction.php" style="text-decoration:none;">Find</a></button>
							</center>
    </div>
    </body>
</html>