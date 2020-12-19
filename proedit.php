<?php  include('checklogin.php')?>
<?php
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
		<title>Edit Profile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/reg.css">
	</head>

	<body>
<div style="margin-top: 50px;margin-bottom: 50px;">
    <a href="home.php"><img src="images/download.jpg" width="50px" height="50px"></a>
		<div class="wrapper">
			<div class="inner">
				<div class="image-holder">
					<img src="images/signup-image.jpg" alt="">
				</div>
				<form action="" method="post">
					<h3>Edit Profile</h3>
					<div class="form-holder active">
						<input type="text" placeholder="name" name="name" class="form-control" value="<?php echo $sellRow['name']; ?>">
					</div>
					<div class="form-holder">
						<input type="text" placeholder="e-mail" name="email" class="form-control" value="<?php echo $sellRow['email']; ?>">
					</div>
					<div class="form-holder">
						<input type="password" placeholder="Password" name="password" class="form-control" style="font-size: 15px;" value="<?php echo $sellRow['password']; ?>">
					</div>
                    <div class="form-holder">
						<input type="text" placeholder="Address" name="address" class="form-control" style="font-size: 15px;" value="<?php echo $sellRow['address']; ?>">
					</div>
                    <div class="form-holder">
						<input type="text" placeholder="City" name="place" class="form-control" style="font-size: 15px" value="<?php echo $sellRow['city']; ?>">
					</div>
                    <div class="form-holder">
						<input type="text" placeholder="Pincode" name="pincode" class="form-control" style="font-size: 15px;" value="<?php echo $sellRow['pincode']; ?>">
					</div>
                    <div class="form-holder">
						<input type="number" placeholder="Mobile" name="mobile" class="form-control" style="font-size: 15px;" value="<?php echo $sellRow['mobile']; ?>">
					</div>
					<!--<div class="checkbox">
						<label>
							<input type="checkbox" checked> I agree all statement in <a href="#">Terms & Conditions</a>
							<span class="checkmark"></span>
						</label>
					</div>-->
					<div class="form-login" style="margin-bottom: 20px;">
						<button type="submit" name="update">UPDATE</button>
						
					</div>
				</form>
			</div>
		</div>
        </div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
         <?php
    if(isset($_POST['update']))
         {
         $name=$_POST['name'];
         $email=$_POST['email'];
         $password=$_POST['password'];
         $address=$_POST['address'];
         $city=$_POST['city'];
         $pincode=$_POST['pincode'];
         $mobile=$_POST['mobile']; 
         $query="UPDATE seller SET name='$name',email='$email',password='$password',address='$address',city='$city',pincode='$pincode',mobile='$mobile' where id=".$_SESSION['sessCustomerID'];
        if(mysqli_query($db,$query))
        {
            echo "<script>alert('Update Sucessful');</script>";
        }
        else{
            echo "<script>alert('Update Unsucessful');</script>";
        }
    }
?>                                
                           
	</body>
</html>