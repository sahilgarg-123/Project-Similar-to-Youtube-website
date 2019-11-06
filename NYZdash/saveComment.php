<?php
include("connect.php");
$cmt=$_GET['cmt'];
$srr=$_GET['srr'];

$sql="INSERT INTO `ordercmt` (comment,srr) VALUES ('".$cmt."','".$srr."')";
$rs=mysqli_query($conn,$sql);

?>