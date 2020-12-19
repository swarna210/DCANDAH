<?php  include('checklogin.php')?>
<?php
    $id= $_GET['id'];
$query =$db->query("SELECT * FROM products WHERE id='".$id."'");
$proRow = $query->fetch_assoc();
?>
<html>
    <head>
        <title>Product edit page</title>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>
    
         body{
           background-image:url(images/coffee.jpeg);"
           background-repeat: no-repeat;
            background-position: right;
        }
        
    .heading{
        text-align: center;
        font-size: 25px;
        font-family: sans-serif;
        color: #66004d;
        
        }
        
        .btn-info{
            width=50%;
            border-color: navy;
            outline-color: blue;
            letter-spacing: 2px;
            background: transparent;
            transition: all 0.5s ease-in-out;
        }
        .btn-info hover{
            transform: scale(1.05);
        }
        .icn{
            font-family: monospace;
            font-size: 17px;
        }
        .hr{
            color: hotpink;
            width: 20%;
        }
        .container{
            margin: auto;
            width: 50%;
            background-color:rgba(204, 0, 153,0.20);
        }
        .home{
            margin-top: 50px;
            margin-left: 50px;
            background-color: #ff99cc;
            font-size: 15px;
            padding: 5px 30px;
            border-color: white;
            border-radius: 30px 20px;
        }
    </style>
    <body>
        <div ><a class="home" href="home.php">HOME</a></div>
       <div style="margin-top:60px;"></div>
        <div class="container">
        <h2 class="heading">PRODUCT UPLOAD </h2>
        <h2 style="text-align: center;"></h2>
        <br><br>
    <div class="row"></div>
    <div class="col-md-6">
    <form action="" method="post" enctype="multipart/form-data">
 <input type="text" name="title" required="" placeholder="Product Name" class="form-control" value="<?php echo $proRow['title'];?>">
<br>
<textarea rows="6" placeholder="Product Description" name="description" required="" class="form-control" ><?php echo $proRow['description'];?></textarea>
<br>
        <input type="number" name="vid" value="<?php 
			  						if(isset($_SESSION['user'])){ 
			  						echo $_SESSION['vid'];
									} else { 
			  						echo ""; } ?>" hidden />
<input type="number" name="price" required="" placeholder="Product Price" class="form-control" value="<?php echo $proRow['price'];?>">
<br>
<input type="number" name="stock" required="" placeholder="Product Stock" class="form-control" value="<?php echo $proRow['stock'];?>">
<br>
<input type="file" name="image1" accept="image/jpeg" required>
         <?php 
          $image1 = basename( $proRow['image1'] );
                       // if($image1==null) {
					//echo "";
					//} else {
			echo "<a href='img/uploads/$image1'>";
		    echo "<img src='img/uploads/$image1' style='width:20%' ;'>"; 
            echo "</a>";
       ?>
<input type="file" name="image2" accept="image/jpeg">
         <?php                                
                                    $image2 = basename( $proRow['image2'] );
                                    if($image2==null) {
						echo "";
                                    }else {
					echo "<a href='img/uploads/$image2'>";
					echo "<img src='img/uploads/$image2' style='width:29%' ;'>"; 
					echo "</a>";
                    }
					?>
<input type="file" name="image3" accept="image/jpeg">
        <?php
					$image3 = basename( $proRow['image3'] );
					if($image3==null) {
						echo "";
					} else {
					echo "<a href='img/uploads/$image3'>";
					echo "<img src='img/uploads/$image3' style='width:29%' ;'>"; 
					echo "</a>";
                    }
					?>
<input type="file" name="image4" accept="image/jpeg">
           <?php
					$image4 = basename( $proRow['image4'] );
					if($image4==null) {
						echo "";
					} else {
					echo "<a href='img/uploads/$image4'>";
					echo "<img src='img/uploads/$image4' style='width:29%' ;'>"; 
					echo "</a>";
                    }
					?>
        <select name="category">
<option><?php echo $proRow['category'];?></option>
<option>Vegetables</option>
<option>Fruits</option>
<option>Handicrafts</option>
<option>Cakes</option>
<option>Honey</option>
<option>Jams</option>
<option>Food & Snacks</option>
<option></option>
</select>
<select  name="place">
  <option><?php echo $proRow['place'];?></option>
    <option>Karikkode</option>
    <option>Parkod</option>
    <option>Asokapuram</option>
    <option>Pattimattam</option>
    <option>Kadyiruppu</option>
    <option>Pookkattupadi</option>
    </select>
    <br><br>
<button class="btn btn-info" name="update" >UPDATE</button>
       
</form> 
</div>
        </div>
         <?php
    if(isset($_POST['update']))
         {
         $title=$_POST['title'];
         $description=$_POST['description'];
         $price=$_POST['price'];
         $stock=$_POST['stock'];
         $image1 = ($_FILES['image1']['name']);
         //$imge1="uploads/".$img1;
         //echo'<img src="'.$imge1.'">';
         $image2 =$_FILES['image2']['name'];
       // $imge2="uploads/".$img2;
         //echo'<img src="'.$imge2.'">';
         $image3 = $_FILES['image3']['name'];
       // $imge3="uploads/".$img3;
         //echo'<img src="'.$imge3.'">';
        $image4 =$_FILES['image4']['name'];
        //$imge4="uploads/".$img4;
        // echo'<img src="'.$imge4.'">';
         $category=$_POST['category'];
         $place=$_POST['place']; 
         $query="UPDATE products SET title='$title',description='$description',price='$price',stock='$stock',image1='$image1',image2='$image2',image3='$image3',image4='$image4',category='$category',place='$place' WHERE id='".$id."'";
        if(mysqli_query($db,$query))
        {
                      echo "<script>alert('Update Sucessful');</script>";
        }
        else
        {
                   echo "<script>alert('Update Unsucessful');</script>";
        }
    } 
?>  
    </body>
</html>
         
        
        
        
        
        
        
        
        
        
        
        
       