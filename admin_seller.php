<?php  include('checklogin.php')?>
 
<html>
    <head>
    <title>Admin Page</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            body{
        background-image: url(images/bg.jpg);
 }
     
            </style>
    </head>
<body>
    <div class="container-fluid" style="color:white;margin-left:30px;margin-top:30px;">DC AND AH<br><br>

        <div>
        <?php if(isset($_SESSION['user'])){ ?>
        <a class="btn" style="color:white;background-color:red;text-decoration:none;padding:10px 15px;border-radius:12px;" href="logout.php">LOGOUT</a>
        <?php }else{ ?>
        <a href="adminlogin.php"><img src="images/ad.png" width="70" height="70"></a>
				<?php } ?>
        <a href="admin.php" class="btn" style="background-color:white;font-size:30px;color:black;margin-left:100px;padding:12px 20px;border-radius:50%;text-decoration:none">back</a>
        </div>
        
    </div>
   <div >
         <?php
			                 $link=mysqli_connect("localhost","root","");
			                 mysqli_select_db($link,"dcandah");
			                 ?>
                <center><h1  style="color:white;font-size:30px;">User Information</h1></center><br><br>

				             <?php
				                {
				               $res= mysqli_query($link,"select * from seller order by id");
							   
                                }
							   ?>
       <!---->
       <?php 
								
 while($row=mysqli_fetch_array($res))
                         {?>
       <div class="container-fluid" style="margin-bottom:20px;background-color:white;margin-left:30px;margin-right:300px;">
       <div class="row">
           <div class="col-sm-3 col-md-6 col-lg-4"><?php echo "<img src='proof/proofpics/".$row['image1']."' style='width:300px; height:200px;   '>";?></div>
           <div class="col-sm-9 col-md-6 col-lg-8" >Id:<?php echo $row['id'];?><br>
           Name:<?php echo $row['name'];?><br>
           Email:<?php echo $row['email'];?><br>
               Address:<?php echo $row['address'];?><br>
               City:<?php echo $row['city'];?><br>
               Pincode:<?php echo $row['pincode'];?><br>
               Mobile:<?php echo $row['mobile'];?><br>
              <?php echo  "<a class='btn'style='background-color:red;color:white;padding:12px 20px;border-radius:50%;text-decoration:none' href='delete.php?id=".$row["id"]."'>Delete</a>"; ?>
           </div>
           </div>
       </div>
       
<?php }?>
       <!-------------->
       
    
    
       
    </div>
    
    
    </body></html>