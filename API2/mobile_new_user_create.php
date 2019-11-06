<?php
include("connect.php");

$id=$_GET['mob'];
$name=$_GET['name'];
$type="agent";
$IMEI=$_GET['imei'];
$state=$_GET['city'];
$rdate=date('Y/m/d');
$amount=26;
$total_unseen=0;
$share_times="0";
$seen="unseen";
$result=0;
$pass='okay';
$otp=mt_rand(111111,999999);

$sqli="SELECT * FROM `login_users` WHERE id='".$id."'";
$res=mysqli_query($conn,$sqli);
$check=mysqli_num_rows($res);
echo $check;
if($check<=0)
{


$sql="INSERT INTO `login_users`(`id`, `name`, `type`, `pass`, `IMEI`, `state`, `rdate`, `amount`, `total_unseen`, `share_times`, `seen`, `holdby`, `detect_date`, `scode`,`otp`) VALUES ('".$id."','".$name."','".$type."','".$pass."','".$IMEI."','".$state."','".$rdate."','".$amount."','".$total_unseen."','".$share_times."','seen','All','".$rdate."','0','".$otp."')";
$result=mysqli_query($conn,$sql);


	$sql1="CREATE TABLE `".$id."` (
sr INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
id VARCHAR(30) NOT NULL,
name VARCHAR(30) NOT NULL,
msg VARCHAR(800),
time VARCHAR(50),
seen VARCHAR(50),
type VARCHAR(50),
holdby VARCHAR(50)
)";
$result1=mysqli_query($conn,$sql1);
$sql="UPDATE `login_users` SET IMEI='".$IMEI."' WHERE id='".$id."'";
$rs=mysqli_query($conn,$sql);
echo "Done";
}
else
{
	echo "already";
}

	

echo '<script>window.location.href="https://prabhubhakti.com/otp.php"</script>';
?>