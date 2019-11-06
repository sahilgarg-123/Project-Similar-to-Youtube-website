<?php
include("connect.php");

$cat=$_GET['cat'];
$subcat=$_GET['subcat'];
$tag=$_GET['tag'];
$tagg=explode(",",$tag);
$videoID=$_GET['videoID'];

for($x = 0; $x < count($tagg); $x++)
{
$sql="INSERT INTO `videoseo` (`tag`,`cat`,`subcat`,`videoID`) VALUES ('".$tagg[$x]."','".$cat."','".$subcat."','".$videoID."') ";
$result=mysqli_query($conn,$sql);

}


?>