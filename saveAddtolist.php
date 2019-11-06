<?php
include("connect.php");
session_start();
$sku=$_GET['sku'];
$qtyy=$_GET['qtyy'];
$uid=$_GET['uid'];


// check skucode is already exits if exist then quantity increate
$sql51="SELECT * FROM `addtolist` WHERE `skucode`='".$sku."'";
$rs51=mysqli_query($conn,$sql51);
$check51=mysqli_num_rows($rs51);
while($row51=mysqli_fetch_array($rs51))
{
	$qty1=$row51['qtyy'];
}
if($check51>0)
{
	$newQty=$qty1+1;
	// already exist item
	$sql="UPDATE `addtolist` SET `qtyy`='".$newQty."' WHERE `skucode`='".$sku."'";
	$rs=mysqli_query($conn,$sql);
}
else
{
// not exist item in the database
$sql="INSERT INTO `addtolist` (`sessionid`,`skucode`,`qtyy`,`uid`) VALUES('".$_SESSION['mob']."','".$sku."','".$qtyy."','".$uid."')";
$rs=mysqli_query($conn,$sql);
}
?>