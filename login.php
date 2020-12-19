<?php  include('checklogin.php')?>
<html>
<head>
<title>Login Form Design</title>
   <!-- <link rel="stylesheet" type="text/css" href="css/log.css">-->
    <style>
    body{
    margin: 0;
    padding: 0;
   /* background :url(images/coffee.jpeg);*/
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

.loginbox{
    width: 320px;
    height: 420px;
    background:rgba(255,255,255,0.8);
    color: #333333;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}

.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: black;
    font-size: 16px;
}
.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #cc0099;
    color: #000;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background:#660044;
    color: #000;
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color:#660044;
}

.loginbox a:hover
{
    color:#660044;
}
        .btn{
            color:white;
            background-color:#ff66ff ;
            font-size: 28px;
            padding: 10px 20px;
            border-radius: 12px;
            text-decoration: none;
        }   
        .container{
            margin-left: 50px;
            margin-top: 50px;
        }

    </style>
<body style="background:url(images/coffee.jpeg)">
    <div class="container">
    <a class="btn" href="home.php">HOME</a>
    </div>
    <div class="loginbox">
    <img src="images/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form action="http://localhost/dcandah/checklogin.php" method="post" enctype="multipart/form=data">
            <p>Username</p>
            <input type="text" name="email"  placeholder="Enter email">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="login" value="Login">
            <a href="forgot.php">Forget password?</a><br>
            <a href="register.php">Don't have an account?</a>
        </form>
    </div>
    
</body>
</head>
</html>