<?php
include("connect.php");
session_start();
$sku=$_GET['sku'];
$qtyy=$_GET['qtyy'];


// check skucode is already exits if exist then quantity increate

$sql="INSERT INTO `wishlist` (`sessionid`,`skucode`,`qtyy`) VALUES('".$_SESSION['mob']."','".$sku."','".$qtyy."')";
$rs=mysqli_query($conn,$sql);

?>