<?php  include('checklogin.php')?>
 
<html>
    <head>
    <title>Admin Page</title>
        <style>
            body{
        background-image: url(images/bg.jpg);
 }
     
            </style>
    </head>
<body>
    <div class="container" style="color:white;margin-left:30px;margin-top:30px;">DC AND AH<br><br>

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
				               $res= mysqli_query($link,"select * from auction order by id");
							   echo "<center>";
							   echo "<table border=1>";
				                 {
							   ?>
    <table class="table" cellpadding="20" style="background-color:white">
       <tr style="color:black;font-size:30px;">
                                <th>Id</th>
								<th>Title</th>
								<th>Price</th>
                                <th>Vid</th>
								<th>Start Time</th>
								<th>End Time</th>
                                <th>Image</th>
                                    <th>Payment</th>
        </tr>
        <tr>
        <?php 
								}
								  while($row=mysqli_fetch_array($res))
                                  {
								    echo "<tr style='color:black;font-size:20px;'>";
									echo "<td>"; echo $row["id"]; echo "</td>";
								    echo "<td>"; echo $row["title"]; echo "</td>";
									echo "<td>"; echo $row["price"]; echo "</td>";
        				            echo "<td>"; echo $row["vid"]; echo "</td>";
									echo "<td>"; echo $row["start"]; echo "</td>";
									echo "<td>"; echo $row["end"]; echo "</td>";
                                      echo "<td>";
                                      //$image =$row["image1"];
                                      //echo $row["image1"]; 
       echo "<img src='img/uploads/".$row['image1']."' style='width:50px; height:50px;border-radius:50px 20px;   '>";
                                          echo "</td>";
                                      
                                      
                                      
                                      echo "<td>"; echo $row["payment"]; echo "</td>";
                                   

									echo "</tr>";
								  }
								  echo " </tbody>";
								  echo "</table>"; 
								  echo "</center>";
								}
                                    ?> 
        </tr>
       </table>
    </div>
    
    
    </body></html>