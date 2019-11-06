<?php
include("connect.php");
$mobb=$_GET['mobb'];
$msgg=$_GET['msgg'];
$ipp=$_SERVER['REMOTE_ADDR'];

// check the code for invalid mobile or mobile is registered on server or not
$sql1="SELECT COUNT(*) FROM `users` WHERE mob='".$mobb."'";
$rs1=mysqli_query($conn,$sql1);
$r1=mysqli_fetch_row($rs1);
if($r1[0]>=1)
{
$sql="INSERT INTO `feedback` (`mobb`,`msgg`,`ipp`) VALUES('".$mobb."','".$msgg."','".$ipp."')";
$rs=mysqli_query($conn,$sql);
echo "done";
}
else
{
	echo "not";
}


?>