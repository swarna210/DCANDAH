<?php  //include('checklogin.php')?>
<?php
$server = 'localhost';
$user = 'root' ;
$password = '' ;
$db = 'dcandah' ;

//$conn =  mysqli_connect($server, $user, $password, $db);
$conn = new mysqli($server, $user, $password, $db); 
/*
if (!$conn) {
	die('could not connected:' . mysqli_error());

}
else{
echo 'connected successfully' ;
}
*/
if($conn->connect_error) {
	die("connection failed:" . $conn->connect_error);
}
//echo("success")
 ?>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm</title>
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
				<form action="" method="post" enctype="multipart/form-data">
					<h3>Sign Up</h3>
					<div class="form-holder active">
						<input type="text" placeholder="name" name="name" class="form-control">
					</div>
					<div class="form-holder">
						<input type="text" placeholder="e-mail" name="email" class="form-control">
					</div>
					<div class="form-holder">
						<input type="password" placeholder="Password" name="password" class="form-control" style="font-size: 15px;">
					</div>
                    <div class="form-holder">
						<input type="text" placeholder="Address" name="address" class="form-control" style="font-size: 15px;">
					</div>
                    <div class="form-holder">
						<input type="text" placeholder="City" name="city" class="form-control" style="font-size: 15px";>
					</div>
                    <div class="form-holder">
						<input type="text" placeholder="Pincode" name="pincode" class="form-control" style="font-size: 15px;">
					</div>
                    <div class="form-holder">
						<input type="number" placeholder="Mobile" name="mobile" class="form-control" style="font-size: 15px;">
					</div>
                    <div class="form-holder">
						Proof(voter Id,Adhar,Pancard,License):<input type="file" placeholder="upload a proof" name="image1" class="form-control" style="font-size: 15px;">
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" checked> I agree all statement in <a href="#">Terms & Conditions</a>
							<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-login" style="margin-bottom: 20px;">
						<button name="submit" type="submit">Sign up</button>
						<p>Already Have account? <a href="#">Login</a></p>
					</div>
				</form>
			</div>
		</div>
        </div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php 
$image1 = $_FILES["image1"]["name"];
   /*$image2 =$_FILES["image2"]["name"];
   $image3 = $_FILES["image3"]["name"]; 
   $image4 =$_FILES["image4"]["name"];*/

  $target_dir = "proofpics/";
$target_file = $target_dir . basename($_FILES["image1"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
if (isset($_POST["upload"])) {

    if ($target_file == "proofpics/") {
        $msg = "cannot be empty";
        $uploadOk = 0;
    } // Check if file already exists
    else if (file_exists($target_file)) {
        $msg = "Sorry, file already exists.";
        $uploadOk = 0;
    } // Check file size
    else if ($_FILES["image1"]["size"] > 5000000) {
        $msg = "Sorry, your file is too large.";
        $uploadOk = 0;
    } // Check if $uploadOk is set to 0 by an error
    else if ($uploadOk == 0) {
        $msg = "Sorry, your file was not uploaded.";

        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file)) {
            $msg = "The file " . basename($_FILES["image1"]["name"]) . " has been uploaded.";
        }
    }
}




if (isset($_POST['submit'])) {
$name = $_POST['name'];
$email =$_POST['email'];
$password =$_POST['password'];
$address =$_POST['address'];
$city =$_POST['city'];
$pincode = $_POST['pincode'];
$mobile =$_POST['mobile'];
    $image1 =$image1;
	$sql = "INSERT INTO seller (name, email, password,address,city,pincode,mobile,image1) VALUES ('$name','$email','$password','$address','$city','$pincode','$mobile','$image1')" ;
if(mysqli_query($conn, $sql))
{
    echo "<script>alert('Register Sucessful');</script>";
}
else
{
	echo "<script>alert('Email already registered');</script>";
     echo "Error: " . $sql . "" . mysqli_error($conn);
}
}

?>