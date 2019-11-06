<?php
include("connect.php");
$mob=$_GET['MOBS'];
$otp=$_GET['otp'];

$sql="SELECT * FROM `login_users` WHERE id='".$mob."'";
$rs=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($rs))
{
	if($row['otp']==$otp)
	{
		$sql1="INSERT INTO `otpuser`(`imei`) VALUES ('".$row['IMEI']."')";
		$rs1=mysqli_query($conn,$sql1);
		header('Location: https://prabhubhakti.com');
	}
	else
	{
		echo '<script>alert("Your OTP not matched"); window.location.href="https://prabhubhakti.com/otp.php?pp=11";</script>';
	}
}


?>