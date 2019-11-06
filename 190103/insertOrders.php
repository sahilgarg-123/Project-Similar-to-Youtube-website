<?php
include("connect.php");
$pBname=$_GET['pBname'];
$pBmob=$_GET['pBmob'];
$pBqtyy=$_GET['pBqtyy'];
$pBadds=$_GET['pBadds'];
$pBcity=$_GET['pBcity'];
$pBstate=$_GET['pBstate'];
$pBpin=$_GET['pBpin'];
$pBproduct=$_GET['pBproduct'];
$pBprice=$_GET['pBprice'];

$sql="INSERT INTO `saleProduct`(`user`,`product`,`price`,`client`,`clientMob`,`datee`,`orderid`,`skucode`,`status`,`payment`,`address`,`qtyy`) VALUES('".$pBname."','".$pBproduct."','".$pBprice."','Prabhu Bhakti','".$pBmob."','".date('Y-m-d')."','NA','HRK','NEW','Pending','".$pBadds.'-'.$pBcity."','".$pBqtyy."')";
$rs=mysqli_query($conn,$sql);
if($rs==1)
{
	echo "done";
}


?>