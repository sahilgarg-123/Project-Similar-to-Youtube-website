<?php
include("connect.php");
$Pname=$_POST['pname'];
$sku=$_POST['skucode'];
$Pdesc=$_POST['pdesc'];
$cat=$_POST['pcat'];
$subcat=$_POST['addsubcat'];
$url=$_POST['purl'];
$mrp=$_POST['mrp'];
$sprice=$_POST['sprice'];

$sql="INSERT INTO `product` (`name`,`skucode`, `pdesc`, `cat`,`subcat`,`url`,`mrp`,`sprice`,`view`,`priority`) VALUES ('".$Pname."','".$sku."', '".$Pdesc."', '".$cat."', '".$subcat."', '".$url."', '".$mrp."', '".$sprice."',0,0)";
$result=mysqli_query($conn,$sql);


$sql3="SELECT * FROM `prodcat` WHERE prodcatt='".$cat."'";
$rs3=mysqli_query($conn,$sql3);
$check=mysqli_num_rows($rs3);
if($check>0)
{
}
else
{
$sql2="INSERT INTO `prodcat`(`prodcatt`) VALUES('".$cat."')";
$rs=mysqli_query($conn,$sql2);
}
echo '<script>alert("Product saved"); window.location.href="add_new_image.php";</script>';
?>