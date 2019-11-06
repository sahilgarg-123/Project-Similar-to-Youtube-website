<?php
include("connect.php");
$cat=$_GET['catt'];

$sql="DELETE FROM `videocat` WHERE cat='".$cat."'";
$sql1="DELETE FROM `formalCat` WHERE cat='".$cat."'";

$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);



?>