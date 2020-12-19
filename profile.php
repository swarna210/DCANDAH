<?php  include('checklogin.php')?>
<?php
 if(isset($_SESSION['user'])){ 
   $id = $_SESSION['vid'];
 } else {
  $id = 0;
 } 
  $_SESSION['sessCustomerID'] = $id ;

// get customer details by session customer ID
$query = $db->query("SELECT * FROM seller WHERE id = ".$_SESSION['sessCustomerID']);
$sellRow = $query->fetch_assoc();
?>
<html>
    <title>profile of user</title>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        
        label{
            color: #660044;
            font-size: 35px;
        }
        .container{
           background-color: rgba(255, 102, 204,0.20);
           
            margin: auto;
  width: 50%;
  border: 3px solid #660044;
  padding: 10px;
        }
        b{
            color: #660044;
            font-size: 35px;
            font-family: Gabriola;
        }
        h2{
            text-decoration:underline;
            text-decoration-color: white;
            color: white;
        }
        .btn{
            background-color: #660044;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  /*text-decoration: none;
  display: inline-block;*/
  font-size: 16px;
  margin: 4px 2px;
  /*cursor: pointer;*/
        }
    </style>
    </head>

<body style="background-image:url(images/coffee.jpeg);">
    <!------------------------------------------------------>
    
    <div style="margin-top:50px;margin-left:50px;color: #660044;"><a class="btn" href="home.php">Home</a></div>
    
    
    <!------------------->
    
    <div class="container">
  <h2>Profile</h2>
  <form action="proedit.php" method="post">
    <div class="form-group">
      <label for="name"><b>Name:</b></label>
        <b><?php echo $sellRow['name']; ?></b>
      </div>
    <div class="form-group">
      <label for="email"><b >Email:</b></label>
       <b> <?php echo $sellRow['email']; ?></b>
    </div>
    <div class="form-group">
      <label for="pasword"><b>Password:</b></label>
        <b><?php echo $sellRow['password']; ?></b>
    </div>
      <div class="form-group">
      <label for="address"><b>Address:</b></label>
         <b><?php echo $sellRow['address']; ?></b> 
    </div>
      <div class="form-group">
      <label for="city"><b>City:</b></label>
         <b> <?php echo $sellRow['city']; ?></b>
    </div>
      <div class="form-group">
      <label for="pincode"><b>Pincode:</b></label>
         <b> <?php echo $sellRow['pincode']; ?></b>
    </div>
      <div class="form-group">
      <label for="mobile"><b>Mobile:</b></label>
         <b> <?php echo $sellRow['mobile']; ?></b>
    </div>
    <button type="submit" class="btn ">Edit</button>
  </form>
</div>
    
    </body>
</html>