<?php
include("connect.php");
$sku=$_GET['sku'];
$sessionid=$_GET['sessionid'];
$qtyy=$_GET['qtyy'];
$newQty=$qtyy+1;
$minusQty=$qtyy-1;
$ops=$_GET['ops'];
if($ops=="add")
{
$sql1="UPDATE `addtolist` SET qtyy='".$newQty."' WHERE sessionid='".$sessionid."' && skucode='".$sku."'";

$rs1=mysqli_query($conn,$sql1);
}
else if($ops=="minus")
{
	$sql1="UPDATE `addtolist` SET qtyy='".$minusQty."' WHERE sessionid='".$sessionid."' && skucode='".$sku."'";

$rs1=mysqli_query($conn,$sql1);
}

?>