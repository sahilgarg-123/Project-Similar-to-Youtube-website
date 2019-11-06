<?php
include("connect.php");
$cat=$_GET['catName'];

$result=0;
$sql="INSERT INTO `imagecat` (`cat`)VALUES ('".$cat."') ";
$result=mysqli_query($conn,$sql);
if($result !=0)
{
echo "New Image Category Added in DATABASE";	
}
else
{
	echo "Issue in collecting new Tag || Contact to Developers";	
}

?>