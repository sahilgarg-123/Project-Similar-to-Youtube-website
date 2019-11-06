<?php
include("connect.php");
$imgUrl=$_GET['videoid'];
$imgTitle=$_GET['vtitle'];
$imgDesc=$_GET['vdesc'];
$imgCat=$_GET['vcat'];
$imgTag=$_GET['vtag'];





$result=0;
$sql="INSERT INTO `images` (`img_url`, `img_title`,`img_desc`,`img_cat`,`img_tag`,`priority`)VALUES ('".$imgUrl."','".$imgTitle."','".$imgDesc."','".$imgCat."','".$imgTag."','0') ";

$result=mysqli_query($conn,$sql);

if($result !=0)
{
echo "Image Added into the Database";	
}
else
{
	echo "Issue in data saving || Contact to Developers";	
}
?>