<?php
include("connect.php");

$user=$_GET['user'];
$value=$_GET['value'];
$name=$_GET['name'];
$phone=$_GET['phone'];
$email=$_GET['email'];
$address=$_GET['address'];
$city=$_GET['city'];
$state=$_GET['state'];
$Pincode=$_GET['Pincode'];
$uid=$_GET['uid'];
$sessionid=$_GET['sessionid'];

$orderid=date('Ymd').mt_rand(1000,9999);

$sql1="SELECT * FROM `addtolist` WHERE sessionid='".$user."'";
$rs1=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($rs1))
{
$sql2="SELECT * FROM `product` WHERE skucode='".$row1['skucode']."'";
$rs2=mysqli_query($conn,$sql2);
while($row2=mysqli_fetch_array($rs2))
{
		$sql="INSERT INTO `saleProduct`(`user`, `product`, `price`, `client`, `clientMob`, `datee`, `orderid`, `skucode`, `status`, `payment`, `address`, `qtyy`,`sessionid`,`email`,`city`,`state`,`pincode`) VALUES ('".$uid."','".$row2['name']."','".$row1['qtyy']*$row2['sprice']."','".$name."','".$phone."','".date('m/d/Y')."','".$orderid."','".$row2['skucode']."','NEW','Pending','".$address."','".$row1['qtyy']."','".$sessionid."','".$email."','".$city."','".$state."','".$Pincode."')";
		$rs=mysqli_query($conn,$sql);
		
		$sql4="INSERT INTO `topusers`(`user`, `product`, `price`, `client`, `clientMob`, `datee`, `orderid`, `skucode`, `status`, `payment`, `address`, `qtyy`,`sessionid`,`email`,`city`,`state`,`pincode`) VALUES ('".$uid."','".$row2['name']."','".$row1['qtyy']*$row2['sprice']."','".$name."','".$phone."','".date('m/d/Y')."','".$orderid."','".$row2['skucode']."','NEW','Pending','".$address."','".$row1['qtyy']."','".$sessionid."','".$email."','".$city."','".$state."','".$Pincode."')";
		$rs4=mysqli_query($conn,$sql4);
}

}
// now delete data from addtolist
$sql3="DELETE FROM `addtolist` WHERE sessionid='".$user."'";
$rs3=mysqli_query($conn,$sql3);
echo $orderid;


?>