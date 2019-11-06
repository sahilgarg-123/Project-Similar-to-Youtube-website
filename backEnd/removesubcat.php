<?php
include("connect.php");
$catt=$_GET['catt'];
$subcatt=$_GET['subcatt'];

$sql="DELETE FROM `videocat` WHERE cat='".$catt."' && subcat='".$subcatt."'";
$sql1="DELETE FROM `formalCat` WHERE cat='".$catt."'";
$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);



?>