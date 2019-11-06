<?php
include("connect.php");
$name=$_GET['name'];
$mob=$_GET['mob'];
$codee=$_GET['codee'];
$pwd=$_GET['pwd'];

$sql1="SELECT * FROM `shipUser` WHERE mob='".$mob."'";
$rs1=mysqli_query($conn,$sql1);
$check=mysqli_num_rows($rs1);
if($check>0)
{
	echo "already";
}
else
{
$sql="INSERT INTO `shipUser`(`name`,`mob`,`pwdd`) VALUES ('".$name."','".$mob."','".$pwd."')";
$rs=mysqli_query($conn,$sql);
}
?>