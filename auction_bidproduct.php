<?php  include('checklogin.php')?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Bidding product</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body >
<div class="container" style="margin-left:50px;margin-top:30px;"><a  href="auction_home.php" class="btn" style="text-decoration:none;background-color:#66004d;color: #ff1ac6;border-radius:12px;font-size:30px;padding:8px 10px;">back</a></div>
		<div class="wrapper" style="background-image:url(images/coffee.jpeg);">
			<div class="inner" style="background-color:rgba(255, 153, 204,0.12);">
                
                
				<form action="http://localhost/dcandah/auction/upload.php" method="post" enctype="multipart/form-data">
					<h3 style="color:#cc0099;font-size:25px;text-shadow:2px 2px hotpink;">PRODUCT UPLOAD</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Title</label>
							<input type="text" name="title" class="form-control" required>
						</div>
						<div class="form-wrapper">
							<label for="">Product Price</label>
							<input type="text" name="price" class="form-control" required>
						</div>
					</div>
					<div class="form-wrapper">
						<label for="">Description</label>
						<input type="text"  name="description" class="form-control" required>
					</div>
                    <input type="number" name="vid" value="<?php 
			  						if(isset($_SESSION['user'])){ 
			  						echo $_SESSION['vid'];
									} else { 
			  						echo ""; } ?>" hidden />
					<div class="form-wrapper">
						<label for="">Bid Starting time</label>
                        <?php
                            date_default_timezone_set('Asia/Kolkata');?>
						<input type="datetime" name="start" class="form-control" value="<?php echo date( 'Y/m/d h:i:s', strtotime("now")); ?>" readonly>
					</div>
					<div class="form-wrapper">
						<label for="">Bid End time</label>
						<input type="datetime" name="end" class="form-control" required>
					</div>
                    <div class="form-wrapper">
						<label for="">Upload Image</label>
						<input type="file" name="image1" class="form-control" required>
                        
					</div>
					
					<button name="upload">UPLOAD</button>
				</form>
			</div>
		</div>
		
	</body>
</html>