<?php
include("connect.php");
$videoID=$_GET['videoID'];
$status=$_GET['status'];

if($status==0)
{
$sql="UPDATE videos SET priority='1' WHERE videoid='".$videoID."'";
$result=mysqli_query($conn,$sql);
}
else
{
	$sql="UPDATE videos SET priority='0' WHERE videoid='".$videoID."'";
$result=mysqli_query($conn,$sql);
}

?>