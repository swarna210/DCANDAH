<html>
    <head>
    <title>Admin Login</title>
        <style>
        input[type=text] {
  /*width: 100%;*/
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid white;
  border-radius: 4px;
}
            input[type=password] {
  /*width: 100%;*/
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid white;
  border-radius: 4px;
}
 body{
        background-image: url(images/bg.jpg);
               
 }
            .btn{
                background-color: white;
                color: black;
                border-radius: 12px;
                padding: 6px 15px;
                font-size: 15px;
            }
        </style>
    </head>
<body >
    <div class="container" style="color:white;margin-left:30px;margin-top:30px;">DC AND AH
    <br><br><a href="home.php" class="btn" style="color:black;text-decoration:none;">HOME</a>
    </div>
    <div class="container" style="margin-top:50px;width:50%;margin-left:300px;background-color:rgba(255,255,255,0.15);">
    <center> <img src="images/ad.png" width="70" height="70" style="margin-top:50px;"></center>
              <center style="margin-bottom:50px;color:white;">Admin Login</center>
              <form action="http://localhost/dcandah/adminlogincheck.php" method="post">
                        <center>   <div class="col-md-12">
                               <input type="text" class="form-control" name="email" placeholder="Email" required>
                  </div></center>
                  <br>
                 <center>  <div class="col-md-12 ">
                               <input type="password" class="form-control" name="password" placeholder="Password" required></div></center><br>
<div class="col-md-12 form-group">
<center><button type="submit" name="submit" class="btn " style="margin-bottom:50px;">Sign In</button></center>
								</div>

              </form>
    </div>
    </body>
</html>