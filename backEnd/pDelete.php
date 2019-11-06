<?php
include("connect.php");
$srr=$_GET['srr'];

$sql="DELETE FROM `product` where sr='".$srr."'";
$result=mysqli_query($conn,$sql);
$sql2="DELETE FROM `pseo` where pid='".$srr."'";
$r2=mysqli_query($conn,$sql2);

?>