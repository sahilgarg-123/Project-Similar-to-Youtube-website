<?php
include("connect.php");
$videoID=$_GET['videoId'];
$rs=0;

$sql="SELECT COUNT(1) FROM `likeme` WHERE videoid='".$videoID."'";
$rs=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($rs);
if($row[0]==1)
{
		$sql4="SELECT * FROM `likeme` WHERE videoid='".$videoID."'";
$result4=mysqli_query($conn,$sql4);
while($row4=mysqli_fetch_array($result4))
{
	
	$totalLike=$row4['vlike'];
	$count=$totalLike+1;
$sql3 = "UPDATE `likeme` SET vlike='".$count."' WHERE videoid='".$videoID."'";
$result3=mysqli_query($conn,$sql3);	

}
}
else
{
	$sql2 = "INSERT INTO `likeme` (videoid, vlike) VALUES ('".$videoID."', '1')";
	$result2=mysqli_query($conn,$sql2);
}










?>