<?php
include("connect.php");
$MOB=$_GET['MOB'];
$NAME=$_GET['NAME'];

$sql="SELECT * FROM `ContactIdentifier` WHERE MOB='".$MOB."'";
$rs=mysqli_query($conn,$sql);
$check=mysqli_fetch_row($rs);
if($check[0]>=1)
{
	$row->MOB=1;
	$data[]=$row;
	
}
else
{
	$saveSQL="INSERT INTO `ContactIdentifier`(`MOB`,`user_name`) VALUES ('".$MOB."','".$NAME."')";
	$saveRS=mysqli_query($conn,$saveSQL);
	$row->MOB=0;
	$data[]=$row;
}
echo json_encode($data);

?>