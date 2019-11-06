<?php
include("connect.php");
  
$useragent = $_SERVER['HTTP_USER_AGENT'];
$iPod = stripos($useragent, "iPod");
$iPad = stripos($useragent, "iPad");
$iPhone = stripos($useragent, "iPhone");
$Android = stripos($useragent, "Android");
$iOS = stripos($useragent, "iOS");
//-- You can add billion devices
@$DEVICE = ($iPod||$iPad||$iPhone||$Android||$iOS||$webOS||$Blackberry||$IEMobile||$OperaMini);



$ipp=$_SERVER['REMOTE_ADDR'];
$date=date("Y-m-d");
$url=$_SERVER['PHP_SELF'];

if (!$DEVICE) {
$sql="INSERT INTO `analytics`(`ip`,`date`,`url`,`device`) VALUES ('".$ipp."','".$date."','".$url."','Desktop')";
$result=mysqli_query($conn,$sql);
}
else
{
$sql="INSERT INTO `analytics`(`ip`,`date`,`url`,`device`) VALUES ('".$ipp."','".$date."','".$url."','Mobile')";
$result=mysqli_query($conn,$sql);	
}


?>
