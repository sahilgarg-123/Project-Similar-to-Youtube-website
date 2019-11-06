<?php
include("connect.php");
session_start();
$sku=$_GET['sku'];
$qtyy=$_GET['qtyy'];


// check skucode is already exits if exist then quantity increate

$sql="DELETE FROM `addtolist` WHERE skucode='".$sku."' && sessionid='".$_SESSION['mob']."'";
$rs=mysqli_query($conn,$sql);

?>