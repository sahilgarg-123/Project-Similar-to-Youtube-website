<?php
include("connect.php");

$IMEI=$_GET['IMEI'];
$json_array=array();
$sql="SELECT * FROM `login_users` WHERE IMEI=".$IMEI."";
$result=mysqli_query($conn,$sql);
$check=mysqli_num_rows($result);
if($check==0)
{
	$row->IMEI=9416917046;
	$json_array[]=$row;
	echo json_encode($json_array);
}
else
{
while($row=mysqli_fetch_assoc($result))
{
	$json_array[]=$row;	
}
echo json_encode($json_array);
}
?>