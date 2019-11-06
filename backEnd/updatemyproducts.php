<?php
include("connect.php");
$psr=$_POST['psr'];
$Pname=$_POST['pname'];
$sku=$_POST['skucode'];
$Pdesc=$_POST['pdesc'];
$cat=$_POST['pcat'];
$subcat=$_POST['addsubcat'];
$url=$_POST['purl'];
$mrp=$_POST['mrp'];
$sprice=$_POST['sprice'];

$sql="UPDATE `product` SET `name`='".$Pname."',`skucode`='".$sku."',`pdesc`='".$Pdesc."',`cat`='".$cat."',`subcat`='".$subcat."',`url`='".$url."',`mrp`='".$mrp."',`sprice`='".$sprice."',`view`=0,`priority`=0 WHERE sr='".$psr."'";

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