<?php
include("connect.php");
$videoID=$_GET['videoID'];

$sql="DELETE FROM `videos` WHERE videoid='".$videoID."'";
$result=mysqli_query($conn,$sql);


$sql1="DELETE FROM `videoseo` WHERE videoID='".$videoID."'";
$result1=mysqli_query($conn,$sql1);


?>