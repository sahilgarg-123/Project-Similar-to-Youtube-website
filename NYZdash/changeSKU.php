<?php
include("connect.php");

$prod=$_GET['value'];
$sql="SELECT * FROM `product` WHERE name='".$prod."'";
$rs=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($rs))
{
	$skucode=$row['skucode'];
}
echo $skucode;

?>