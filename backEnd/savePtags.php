<?php
include("connect.php");
$tags=$_GET['tags'];
$srr=$_GET['sr'];
$catt=$_GET['catt'];
$subcat=$_GET['subcat'];
$newTag=explode(",",$tags);
echo '<script>alert('.$tags.');</script>';

for($x=0; $x<count($newTag); $x++)
{

$sql="INSERT INTO `pseo`(`tag`,`cat`,`subcat`,`pid`) VALUES('".$newTag[$x]."','".$catt."','".$subcat."','".$srr."')";
$result=mysqli_query($conn,$sql);
}

?>