<?php
include("connect.php");
$sku1=$_GET['sku1'];
$qty1=$_GET['qty1'];

$sql="SELECT * FROM `product` WHERE skucode='".$sku1."'";
$rs=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($rs))
{
	$price=$row['sprice'];
	$total=$price*$qty1;
}
echo $total;

?>