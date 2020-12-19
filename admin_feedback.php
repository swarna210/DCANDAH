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
      <div class="container">
        <?php
			                 $link=mysqli_connect("localhost","root","");
			                 mysqli_select_db($link,"dcandah");
			                 ?>
                <center><h1  style="color:white;font-size:30px;">Feedback Information</h1></center><br><br>

				               <?php
				                {
				               $res= mysqli_query($link,"select * from feedback order by id");
							   echo "<center>";
							   echo "<table >";
				                 {
							   ?>
    <table class="table" cellpadding="20" style="background-color:white">
       <tr style="color:black;font-size:15px;">
         <th>#</th>
								<th>Name</th>
								<th>E-Mail</th>
                                <th>Feedback</th>				                    
        </tr>
        <tr>
        <?php 
								}
								  while($row=mysqli_fetch_array($res))
								  {
								    echo "<tr>";
									echo "<td>"; echo $row["id"]; echo "</td>";
								    echo "<td>"; echo $row["name"]; echo " "; 
								    echo "<td>"; echo $row["email"]; echo "</td>";
        				         echo "<td>"; echo $row["comment"]; echo "</td>";
									echo "</tr>";
								  }
								  echo " </tbody>";
								  echo "</table>"; 
								  echo "</center>";
								}
                                    ?>
        </tr>
       </table>
    </div></div>
    
    
    </body></html>