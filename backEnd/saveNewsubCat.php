<?php
include("connect.php");

$catt=$_GET['catt'];
$subcat=$_GET['subcat'];

$sql="INSERT INTO `videocat` (`cat`,`subcat`) VALUES ('".$catt."','".$subcat."') ";;
$result=mysqli_query($conn,$sql);
?>