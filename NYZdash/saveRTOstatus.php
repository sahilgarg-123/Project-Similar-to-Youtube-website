<?php
include("connect.php");
$orderID=$_GET['orderID'];
$data=$_GET['data'];


$sql="UPDATE `saleProduct` SET status='".$data."' WHERE orderid='".$orderID."'";
$rs=mysqli_query($conn,$sql);


?>