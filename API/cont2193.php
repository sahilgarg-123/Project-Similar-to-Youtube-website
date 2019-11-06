<?php
include("connect.php");
$MOB=$_GET['MOB'];
$NAME=$_GET['NAME'];
$refname=$_GET['refName'];
$refmob=$_GET['refMob'];

$MOB2=trim($MOB,"+");
$MOB3=trim($MOB);
$MOB1='91'.$MOB3;

if(strlen($MOB3)<10)
{
}
else if(strlen($MOB3)==10)
{
	$saveSQL="INSERT INTO `appContacts`(`Name`,`Mobb`,`refName`,`refMob`) VALUES ('".$NAME."','".$MOB1."','".$refname."','".$refmob."')";
	$saveRS=mysqli_query($conn,$saveSQL);
}
else if(strlen($MOB3)==12)
{
	$saveSQL="INSERT INTO `appContacts`(`Name`,`Mobb`,`refName`,`refMob`) VALUES ('".$NAME."','".$MOB3."','".$refname."','".$refmob."')";
	$saveRS=mysqli_query($conn,$saveSQL);
}
else if(strlen($MOB3)==13)
{
	$saveSQL="INSERT INTO `appContacts`(`Name`,`Mobb`,`refName`,`refMob`) VALUES ('".$NAME."','".$MOB3."','".$refname."','".$refmob."')";
	$saveRS=mysqli_query($conn,$saveSQL);
}
else
{
	
	$saveSQL="INSERT INTO `appContacts`(`Name`,`Mobb`,`refName`,`refMob`) VALUES ('".$NAME."','".$MOB3."','".$refname."','".$refmob."')";
	$saveRS=mysqli_query($conn,$saveSQL);
}

?>