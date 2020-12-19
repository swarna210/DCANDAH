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
                <center><h1  style="color:white;font-size:30px;">Product Information</h1></center><br><br>

				             <?php
				                {
				               $res= mysqli_query($link,"select * from products order by id");
							   echo "<center>";
							   echo "<table>";
				                 {
							   ?>
				            
    <table class="table" cellpadding="20" style="background-color:white">
       <tr style="color:black;font-size:15px;">
         <th>#</th>
								<th>title</th>
								<th>Description</th>
								<th>Vid</th>
                                <th>Price</th>
						       <th>Image1</th>
                                <th>Image2</th>
                                <th>Image3</th>
                                <th>Image4</th>
                                <th>Category</th>
                                <th>Place</th>                      
        </tr>
        <tr>
        <?php 
								}
								  while($row=mysqli_fetch_array($res))
								  {
								    echo "<tr>";
									echo "<td>"; echo $row["id"]; echo "</td>";
								    echo "<td>"; echo $row["title"]; echo " "; 
								    echo "<td>"; echo $row["description"]; echo "</td>";
									echo "<td>"; echo $row["vid"]; echo "</td>";
        				         echo "<td>"; echo $row["price"]; echo "</td>";
                                 echo "<td>"; 
                                    echo "<img src='img/uploads/".$row['image1']."' style='width:50px; height:50px;border-radius:50px 20px;   '>";
                                      echo "</td>";
        				         echo "<td>"; 
                                      echo "<img src='img/uploads/".$row['image2']."' style='width:50px; height:50px;border-radius:50px 20px;   '>";
                                      echo "</td>";
        				         echo "<td>"; echo "<img src='img/uploads/".$row['image3']."' style='width:50px; height:50px;border-radius:50px 20px;   '>"; echo "</td>";
        				         echo "<td>"; echo "<img src='img/uploads/".$row['image4']."' style='width:50px; height:50px;border-radius:50px 20px;   '>"; echo "</td>";
        				         echo "<td>"; echo $row["category"]; echo "</td>";
        				         echo "<td>"; echo $row["place"]; echo "</td>";
                                 echo  "<td><a class='btn'style='background-color:red;color:white;padding:12px 20px;border-radius:50%;text-decoration:none' href='prodelete.php?id=".$row["id"]."'>Delete</a></td>";
									echo "</tr>";
                                     // echo $_GET['id'];
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