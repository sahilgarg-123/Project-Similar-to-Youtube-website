<?php
include("connect.php");

$ipp=$_SERVER['REMOTE_ADDR'];
$date=date("Y-m-d");
$url="share";


$sql="INSERT INTO `analytics`(`ip`,`date`,`url`) VALUES ('".$ipp."','".$date."','".$url."')";
$result=mysqli_query($conn,$sql);

?>