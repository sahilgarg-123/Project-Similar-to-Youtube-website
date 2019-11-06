<?php
include("connect.php");
$srr=$_GET['sr'];
$sqlD1="DELETE FROM `addtolist` WHERE sr='".$srr."'";
$rsD1=mysqli_query($conn,$sqlD1);

?>