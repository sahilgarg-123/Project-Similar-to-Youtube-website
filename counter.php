<?php

include("connect.php");

$ipp="1234";
$date="no";
$url="hello";

$sql="INSERT INTO `analytics`(`ip`,`date`,`url`) VALUES ('".$ipp."','".$date."','".$url."')";
$result=mysqli_query($conn,$sql);




?>