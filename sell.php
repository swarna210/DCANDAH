<?php  include('checklogin.php')?>
<html>
    <head>
        <title>Product page</title>
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
        }
    </style>
    <body>
        <div class="home"><a href="home.php"><img src="images/download.jpg" width="50px" height="50px"></a></div>
       <div style="margin-top:60px;"></div>
        <div class="container">
        <h2 class="heading">PRODUCT UPLOAD </h2>
        <h2 style="text-align: center;"></h2>
        <br><br>
    <div class="row"></div>
    <div class="col-md-6">
    <form action="http://localhost/dcandah/img/upload.php" method="post" enctype="multipart/form-data">
 <input type="text" name="title" required="" placeholder="Product Name" class="form-control">
<br>
 <textarea rows="6" placeholder="Product Description" name="description" required="" class="form-control"></textarea>
<br>
        <input type="number" name="vid" value="<?php 
			  						if(isset($_SESSION['user'])){ 
			  						echo $_SESSION['vid'];
									} else { 
			  						echo ""; } ?>" hidden />
<input type="number" name="price" required="" placeholder="Product Price" class="form-control">
<br>
<input type="number" name="stock" required="" placeholder="Product Stock" class="form-control">
<br>
<input type="file" name="image1" accept="image/jpeg" required>
        <input type="file" name="image2" accept="image/jpeg">
								<input type="file" name="image3" accept="image/jpeg">
								<input type="file" name="image4" accept="image/jpeg">
        <select  name="category">
<option value="" disabled selected>Choose Category</option>
<option>Vegetables</option>
<option>Fruits</option>
<option>Handicrafts</option>
<option>Cakes</option>
<option>Honey</option>
<option>Jams</option>
<option>Food & Snacks</option>
</select>
      
          
<select  name="place">
<option value="" disabled selected>Choose place</option>
    <option>Karikkode</option>
    <option>Parakod</option>
    <option>Asokapuram</option>
    <option>Pattimattam</option>
    <option>Kadayiruppu</option>
    <option>Pookkattupadi</option>
    <option>kolencheri</option>
    </select>
    <br><br>
<button class="btn btn-info" name="upload" >Submit</button>
        
</form> 
</div>
        </div>
    </body>
</html>
         
        
        
        
        
        
        
        
        
        
        
        
       