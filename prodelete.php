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
$query =$db->query("SELECT vid FROM products WHERE id='".$id."'");
$cid= $query->fetch_assoc();
$sid=$cid['vid'];
$sql = "INSERT INTO notification (pid,vid) VALUES ('$id','$sid')";


$sql="DELETE FROM products WHERE id=$id";

if(mysqli_query($db,$sql)){
    mysqli_close($db);
    header("Location:admin_product.php?cid=$sid");
    exit;
}
else{
    echo"error deleting record";
}
 ?>
