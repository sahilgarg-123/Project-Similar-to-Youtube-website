<?php
include("connect.php");
$tagg=$_GET['tagg'];
$catt=$_GET['catt'];
$subcatt=$_GET['subcatt'];
$videoid=$_GET['videoid'];

$sql="INSERT INTO `videoseo` (tag,cat,subcat,videoID) VALUES('".$tagg."','".$catt."','".$subcatt."','".$videoid."')";
$result=mysqli_query($conn,$sql);

$sql2="DELETE FROM newTags WHERE tag = '".$tagg."'";
$rs2=mysqli_query($conn,$sql2);


?>