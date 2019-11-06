<?php
include("connect.php");

$videoId=$_GET['videoId'];
$cmt=$_GET['cmt'];
$user=$_GET['user'];

$sql="INSERT INTO `comments` (`videoid`, `comment`,`user`) VALUES ('".$videoId."','".$cmt."','".$user."')";
$result=mysqli_query($conn,$sql);

?>