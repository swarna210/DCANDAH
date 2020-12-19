<?php  include('checklogin.php')?>
<html>
    <head>
        <title> Contact us page</title>
        
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>
        
        
     body{
        font-family: monospace;
        }
        
    .heading{
        text-align: center;
        font-size: 45px;
        border-bottom: 2px dotted #fff;
        
        }
        
        .container{
            background-color: hotpink;
            margin-bottom: 50px;
        }
        .btn-info{
            width=50%;
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
            width: 20%;
            color: hotpink;
        }
        
       /* Style all font awesome icons */
.fa {
  padding: 20px;
  font-size: 20px;
  width: 30px;
  text-align: center;
  text-decoration: none;
}

/* Add a hover effect if you want */
.fa:hover {
  opacity: 0.4;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
  color: blue;
}
    
/* Twitter */
.fa-twitter {
  color: blue;
}
/* instagram */
.fa-instagram {
  color: blue;
}
/* google */
.fa-google{
  color: blue;
}
/* youtube */
.fa-youtube{
  color: blue;
}
        
        
        
 </style>
    
    
    <body style="background-image:url(images/coffee.jpeg);">
    <br><br>
     <div  style="margin-left:50px;margin-top:30px;margin-bottom:50px;">
    <a class="btn" href="home.php" style="padding:12px 25px;color:white;font-size:30px;background-color: #e60099;border-radius:12px;">HOME</a>
    </div>
    <div class="container">
        <h2 class="heading">contact us </h2>
        <h2 style="text-align: center;">We'd love to help</h2>
        <p style="text-align: center;">We like to create thing with fun, open minded people.feel free to say hello!</p>
        <br><br>
    <div class="row">
        
    <div class="col-md-6">
      <?php  
            $db = mysqli_connect('localhost', 'root', '', 'dcandah');
                              if (isset($_POST["submit"]))
                          {
                                $name=mysqli_real_escape_string($db,$_POST['name']);
                                $email = mysqli_real_escape_string($db, $_POST['email']);
                                
                                $comment= mysqli_real_escape_string($db, $_POST['comment']);
                            $query = "INSERT INTO feedback ( name, email,comment) 
                             VALUES('$name', '$email','$comment')";
                             mysqli_query($db, $query);
                           }
                        ?>  
    <form method="post" action="contact.php#submitted">
 <input type="text" name="name" required="" placeholder="Your name" class="form-control" value="<?php 
			  if(isset($_SESSION['user'])){ 
			  echo $_SESSION['user'];
			  } else { 
			  echo ""; } ?>">
<br>
 <input type="text" name="email" required="" placeholder="Your e-mail" class="form-control" value="<?php 
			  if(isset($_SESSION['user'])){ 
			  echo $_SESSION['email'];
			  } else { 
			  echo ""; } ?>">
<br>
<textarea rows="6" placeholder="Comment" name="comment" required="" class="form-control"  ></textarea>
<br>
<center>
<button class="btn btn-info" type="submit" name="submit" onclick="return alert('Message is send successfully.Thanks for your feedback.')">Submit</button>
</center>
<br>
        
</form>
</div>
    <div class="col-mod-1"></div>
    
    <div class="col-md-5">
        <hr>
    <p class="icn"><i class="fa fa-map-marker"></i>&nbsp; Edapally Road,Ernakulam main street,kerala</p>
     <p class="icn"><i class="fa fa-phone"></i>&nbsp;8074556561&nbsp;9207340547</p>
     <p class="icn"><i class="fa fa-envelope"></i>&nbsp;diningcomrade.auctionhub 2gmail.com</p>
    
        <hr>
        <div class="media">
            
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Add font awesome icons -->
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-google"></a>

</div>
</div>
 </div>
</div>
</body>
</html>

    
    
    
    
    
    
    
    
    
    
        
       