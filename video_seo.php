<?php
include("connect.php");
$tag=$_GET['tag'];
$cat=$_GET['cat'];

$result=0;
$sql="INSERT INTO `videoseo` (`tag`, `cat`)VALUES ('".$tag."','".$cat."') ";
$result=mysqli_query($conn,$sql);
if($result !=0)
{
echo "New Tag Added in DATABASE";	
}
else
{
	echo "Issue in collecting new Tag || Contact to Developers";	
}
?>