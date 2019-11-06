<?php
include("connect.php");
// check how many view we have on this product
$sql40="SELECT * FROM `product` WHERE `sr`='".$prod_type."'";
$rs40=mysqli_query($conn,$sql40);
while($row40=mysqli_fetch_array($rs40))
{
	$count=$row40['view'];
}
$new_count=$count+1;
$sql41="UPDATE `product` SET `view`='".$new_count."' WHERE `sr`='".$prod_type."'";
$rs41=mysqli_query($conn,$sql41);


?>