<?php
include("connect.php");
$name=$_GET['name'];
$mob=$_GET['mob'];
$mail=$_GET['mail'];
$adds=$_GET['adds'];
$pwd=$_GET['pwd'];



$sql="SELECT * FROM `admins` WHERE mob='".$mob."'";
$rs=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($rs);
if($row[0]>=1)
{
	echo "already";
}
else
{

	$sql2="INSERT INTO `admins` (`name`,`mob`,`mail`,`adds`,`pwd`) VALUES ('".$name."','".$mob."','".$mail."','".$adds."','".$pwd."')";
	$rs2=mysqli_query($conn,$sql2);
	echo "Done";
	
}


?>