<?php
include("connect.php");
$catt=$_GET['catt'];

$sql="INSERT INTO `formalCat` (`cat`) VALUES ('".$catt."') ";
$result=mysqli_query($conn,$sql);
?>