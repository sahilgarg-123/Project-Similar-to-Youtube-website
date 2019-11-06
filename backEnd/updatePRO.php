<?php
include("connect.php");
$srr=$_GET['sr'];
$prio=$_GET['prio'];

if($prio==0)
{
$sql="UPDATE product SET priority='1' WHERE sr='".$srr."'";
$result=mysqli_query($conn,$sql);
}
else
{
	$sql="UPDATE product SET priority='0' WHERE sr='".$srr."'";
$result=mysqli_query($conn,$sql);
}

?>