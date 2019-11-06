<?php
include("connect.php");
$name=$_GET['name'];
$mob=$_GET['mob'];
$mail=$_GET['mail'];
$city=$_GET['city'];
$state=$_GET['state'];
$pwd=$_GET['pwd'];



$sql="SELECT * FROM `users` WHERE mob='".$mob."'";
$rs=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($rs);
if($row[0]>=1)
{
	echo "already";
}
else
{

	$sql2="INSERT INTO `users` (`name`,`mob`,`mail`,`cityy`,`statee`,`pwd`,`datee`) VALUES ('".$name."','".$mob."','".$mail."','".$city."','".$state."','".$pwd."','".date('m/d/Y')."')";
	$rs2=mysqli_query($conn,$sql2);
	echo "Done";
	
}


?>