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
		<li class="nav-item active"> <a class="nav-link" href="auction_home.php">Home </a> </li>
		<li class="nav-item"><a class="nav-link" href="contact.php"> Contact </a></li>
		
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
		<!--<li class="nav-item"><a class="nav-link" href=""><img src="images/cart1.png"> </a></li>-->
        <?php if(isset($_SESSION['user'])){   {?>
		<li class="nav-item"><a class="nav-link" href="auction_bidproduct.php"> Sell </a></li>
        <?php }}?>
        
		
	</ul>
  </div> <!-- navbar-collapse.// -->
    </nav></div>
   <div class="container">
  	 <?php
			$id= $_GET['id'];
			$db = mysqli_connect("localhost", "root", "", "dcandah");
			$query = $db->query("SELECT * FROM auction WHERE id='".$id."'");
		//$query = $db->query("SELECT * FROM products");
			if($query->num_rows > 0){ 
			while($row = $query->fetch_assoc()){  
		?>
 
        
    
        </div>
       <div class="container" style="background-color:rgba(255,255,255,0.4);margin-top:20px;margin-bottom:20px;">
        <div class="row" style="margin-top:20px;margin-bottom:20px;">
    <div class="col-lg-6" style="margin-top:20px;margin-bottom:20px;">
        <?php
			$img1 = basename( $row['image1'] );
			echo "<a href='auction/bidpics/$img1'>";
		    echo "<img src='auction/bidpics/$img1' style='width:200px;height:200px;width:200px; height:200px;border-radius:50px 20px; margin-left:40px;  border: 6px solid #660044;';'>"; 
            echo "</a>";
			?>	
			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
				  
                  </div>
                </div>
              </div>
        <h3 style="color: #800040;font-family:Lucida Bright;font-size:20px;margin-left:50px;"><?php echo $row['title']; ?></h3>
       <!-- <a class="btn btn-primary" style="margin-bottom:10px;margin-left:50px;color:white; background-color:#800040;" href="cart/cartAction.php?action=addToCart&id=<?php // echo $row["id"] ; ?>">Add to Cart </a>
				 
                    <a class="btn btn-primary" style="margin-bottom:10px;margin-left:50px;color:white; background-color:#800040;" href="cart/cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Buy Now </a> -->
                        <hr class="soft"/>
                        
     </div><!------------col-lg-6 left------------------------->
            <div class="col-lg-6">
             
			  <h4 style="color: #800040;font-family:Lucida Bright;font-size:20px;"><?php echo $row['description']; ?></h4>
			  <hr class="soft"/>
			 <!-- <form class="form-horizontal qtyFrm">
				  <div class="control-group">-->
					<label class="control-label"><span style="color: #800040;font-family:Lucida Bright;font-size:20px;">₹ <?php echo $row['price']; ?></span></label><br>
			  <?php
                
               /* $query=$db->query("SELECT stock FROM products WHERE id='".$id."'");
                $w=$query->fetch_assoc();
                echo "<h4 style='color:#800040;font-family:Harlow Solid;font-size:35px;'>";
                echo  $w['stock'];
                echo "&nbsp";
                echo "stock";
                echo "</h4>";  */
                ?>
			  <hr class="soft clr"/>
			  <p style="color: #800040;font-family:Lucida Bright;font-size:20px;">Start time:<?php echo $row['start']; ?></p><br>
                 <p style="color: #800040;font-family:Lucida Bright;font-size:20px;">End time:<?php echo $row['end']; ?></p>
                   <hr class="soft"/>
                <?php
         date_default_timezone_set('Asia/Kolkata');
                $current=strtotime("now");
                $end=$row['end'];
                 ?>
      <p id="demo" style="font-size:25px;font-weight:900;color: #660033;background-color:white;" value="expired"></p>
               <script>
                   var end1="<?php echo $end?>"; 
// Set the date we're counting down to
//var countDownDate = new Date("nov 5, 2020 15:37:25").getTime();
var countDownDate = new Date(end1).getTime();
// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
    document.getElementById("pay").style.display = "block";  
  }
    else{
        document.getElementById("bid1").style.display = "block";
    }
}, 1000);
</script> 
                  <?php } } ?>   
                <hr class="soft clr"/>
    <!----------------------------------product bid details--------------------------------------->
                <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dcandah";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$pid = $id; //demo //get frm product page


$sql = "SELECT * FROM auction WHERE id = $pid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	 $title = $row["title"];
	 $price = $row["price"];
	 $description = $row["description"];
	 
  }
} else {
  echo "0 results";
}
?>
<style>
/*.toprow{
	background-color:grey;
	color:white;
}*/

</style>
<!--<h1><?php //echo $title; ?></h1>
<h3><?php //echo $price; ?></h3>
<p><?php //echo $description; ?></p>-->

<h2 style="color:#66004d;text-decoration:underline;font-family:Lucida Bright;">Bid Rates</h2>
<!--<table >
<tr>
<th>Name</th>
<th>Amount</th>
</tr>-->
<?php
$topamt = 0;
$sql = "SELECT * FROM bid WHERE pid = $pid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	 $bid = $row["bid"];
	 $vid = $row["vid"];
	 
	 $sql2 = "SELECT * FROM seller WHERE id = $vid";
	 $result2 = $conn->query($sql2);
	 if ($result2->num_rows > 0) {
		// output data of each row
		while($row2 = $result2->fetch_assoc()) {
			$bname = $row2["name"];
			$bemail = $row2["email"];
            
		}
	 }
      /*      taking seller id            */
    $sql5 = "SELECT * FROM auction WHERE id = $id";
$result5 = $conn->query($sql5);

if ($result5->num_rows > 0) {
  // output data of each row
  while($row5 = $result5->fetch_assoc()) {
	 /*$title = $row5["title"];
	 $price = $row5["price"];
	 $description = $row5["description"]; */
    $sellid = $row5['vid'] ;
      //echo $sellid;
  }
}
      /*    taking seller id       */
      /* seller taBLE*/
       $sql6 = "SELECT * FROM seller WHERE id = $sellid";
$result6 = $conn->query($sql6);

if ($result6->num_rows > 0) {
  // output data of each row
  while($row6 = $result6->fetch_assoc()) {
    $name = $row6['name'] ;
    $address=$row6['address'];
      $city=$row6['city'];
      $mobile=$row6['mobile'];
  }
}
      /*  seller taBLE    */
	 $amount = $row["amount"];
	 if($amount > $topamt){
		 $topamt = $amount;
		 $topbn = $bname;
		 $topbe = $bemail;
		 //$toprow = "toprow";
         
	 }
	 else{
		 $toprow = "";
	 }
      if ($id ==$pid){
	 echo "<h5 style='color:#cc0099;'>$bname:&nbsp;&nbsp;₹$amount</h5>";
      echo "</br>";}
     /*$sql3 = "SELECT * FROM auction WHERE id = $id";
	 $result3 = $conn->query($sql3);
	 if ($result2->num_rows > 0) {
		// output data of each row
		while($row3 = $result3->fetch_assoc()) {
                $amt =$row3["payment"];
            
		}
	 }  
    */  
  }
    
} else {
  echo "0 results";
}
       //echo "aa",$bname;        
                echo "<hr class='soft clr'/>";
              
                  echo "<h4 style='color:#66004d;text-decoration:underline;font-family:Lucida Bright;'>Top Bidder</h4>";
                echo "<h5 style='color:#cc0099;'>";
             if ($id ==$pid){
                 if(empty($topbn)){
                     echo "";
                 }
                 else{
                echo "$topbn : Rs.$topamt";
                 }
}
                else{
                    echo "nobody.....be the first one to win...";
                }
               if(isset($_SESSION['user'])){
                   if(empty($topbn)){
                       
                   }
                  elseif ($_SESSION['user'] ==$topbn )
                       
                  /* echo "&nbsp;&nbsp;&nbsp;<button style='color:white;background-color:#990099;border:none;border-radius:20px;'><a id='pay' href='bidpay.php?amt=",$topamt,"&id=",$id,"' style='text-decoration:none;color:white;display:none;'>Pay</a></button></h5>";*/
              echo "<div style='background-color:black;margin-right:250px;padding-left:30px;margin-top:20px;'>";
                   echo "<h5 style='text-decoration:underline;'>Contact Details</h5>";
                   echo "<h5>Name:$name</h5>";
                   echo "<h5>Address:$address</h5>";
                   echo "<h5>City:$city</h5>";
                   echo "<h5>Mobile:$mobile</h5>";
                   echo "</div>";
               }
   /*             
      if(empty($amt)){
      }
                elseif($amt >0){
                    if($_SESSION['user'] ==$topbn){
 echo "<h5 style='color:#cc0088;'>payment is over!!!!!!!!!!!!!</h5>";
                    }
                }*/
   $conn->close();             
?>
                
                
                <hr class='soft clr'/>
         <!--------------------------------product bid details------------------------------------------>

            <!------------col-lg-6 right------------------------->
     <?php  
                            $db = mysqli_connect('localhost', 'root', '', 'dcandah');
                          if(isset($_SESSION['user'])) {   
                if (isset($_POST['submit']))
                                
                          {
                                  $id =$_GET['id'];
                                  $sid=$_SESSION['vid'];
                                
                            $amount=$_POST['amount'];

                            $query = "INSERT INTO bid (pid,vid,amount) VALUES('$id','$sid','$amount')";
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
               <!---------------------------->
              
                               <!---------------------------->

        <form method="post" id="bid1" style="display:none;" >  
           <input type="text" name="amount" placeholder="bid here...">
<input  style="
color:white;background:#800040; border-radius: 20px;font-size:20px;padding:10px 12px;" type="submit" name="submit" value="BID"> 
             </form> 
               
            </div>
        </div>     

            </div>
        
       </body></html>