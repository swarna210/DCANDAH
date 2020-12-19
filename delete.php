<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'dcandah';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}
$id=$_GET['id'];


$sql="DELETE FROM seller WHERE id=$id";

if(mysqli_query($db,$sql)){
    mysqli_close($db);
    header('Location:admin_seller.php');
    exit;
}
else{
    echo"error deleting record";
}
 ?>
