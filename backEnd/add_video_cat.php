<?php
include("connect.php");
$cat=$_GET['catName'];

$result=0;
$sql="INSERT INTO `videocat` (`cat`)VALUES ('".$cat."') ";
$result=mysqli_query($conn,$sql);
if($result !=0)
{
echo "New Video Category Added in DATABASE";	
}
else
{
	echo "Issue in collecting new Tag || Contact to Developers";	
}

?>