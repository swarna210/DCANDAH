<?php  include('../checklogin.php')?>
<?php
if(!isset($_REQUEST['id'])){
    header("Location: ..http://localhost/dcandah/product.php");
}
?>
<html>
<head>
    <style>
        .container{
            margin: auto;
            width: 50%;
        }
    body{
        background-image:url(http://localhost/dcandah/images/coffee.jpeg);
        }
        h1{
            margin-top: 100px;
            text-align: center;
            color: #cc00cc;
            text-decoration: underline;
        }
        h2{
            text-align: center;
            color:#cc00cc;
        }
        .btn{
            margin-left: 300px;
            background-color: #e600e6;
            color: white;
            padding: 4px 4px 5px 5px;
            border-radius: 12px;
            font-size: 25px;
        }
    </style></head>

<body >
  <div class="container">
    
    <h1 >Order Status</h1>
    
        <p><h2>Your order has submitted successfully. Order ID is #<?php echo $_GET['id'];?>
        </h2>
    
     <form action="http://localhost/dcandah/home.php" method="post">
									<button type="submit"  class="btn">Home</button></form>
   </div>
      <?php
                 //  $C=$pid;
                //$q=$item['qty'];
               // $query="UPDATE products SET stock=20 where id='".$c."'";
    ?>
    </div>  
    </body>
</html>