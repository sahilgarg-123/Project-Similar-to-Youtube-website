<?php
include("connect.php");
$Pname=$_GET['name'];
$Pdesc=$_GET['desc'];
$cat=$_GET['cat'];
$subcat=$_GET['subcat'];
$url=$_GET['url'];
$mrp=$_GET['mrp'];
$sprice=$_GET['sprice'];
$srr=$_GET['srr'];

$sql="UPDATE `product` SET name='".$Pname."', pdesc='".$Pdesc."', cat='".$cat."',subcat='".$subcat."',url='".$url."',mrp='".$mrp."',sprice='".$sprice."' WHERE sr='".$srr."'" ;
$result=mysqli_query($conn,$sql);

?>