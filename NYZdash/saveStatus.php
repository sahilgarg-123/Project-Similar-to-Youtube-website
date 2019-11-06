<?php
include("connect.php");
$newStatus=$_GET['newStatus'];
$srr=$_GET['srr'];
if($newStatus==" ")
{
}
else
{
$sql="UPDATE `saleProduct`SET status='".$newStatus."' WHERE sr='".$srr."'";
$rs=mysqli_query($conn,$sql);
}


?>