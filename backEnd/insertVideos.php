<?php
include("connect.php");
$videoID=$_POST['video_id'];
$vTitle=$_POST['video_title'];
$Vdesc=$_POST['video_desc'];
$Vcat=$_POST['video_cat'];
$Vsubcat=$_POST['video_subcat'];
$Vimg=$_POST['vimage_url'];



$result=0;
$ssql="SELECT COUNT(1) FROM `videos` WHERE videoid='".$videoID."'";
$sr=mysqli_query($conn,$ssql);
$check=mysqli_fetch_row($sr);
if($check[0]>=1)
{
	$update="UPDATE `videos` SET `videoid`='".$videoID."',`videoT`='".$vTitle."',`video_desc`='".$Vdesc."',`vsubcat`='".$Vsubcat."',`video_cat`='".$Vcat."',`thumbnail`='".$Vimg."',`priority`='0' WHERE `videoid`='".$videoID."'";
	$rss=mysqli_query($conn,$update);
	echo '<script>alert("Congratulation !! You have created new video | Refresh for impacted page to see");window.location.href="add_new_video.php";</script>';
}
else
{
$sql="INSERT INTO `videos` (`videoid`, `videoT`, `video_desc`,`vsubcat`,`video_cat`,`thumbnail`,`priority`) VALUES ('".$videoID."','".$vTitle."','".$Vdesc."','".$Vsubcat."','".$Vcat."','".$Vimg."','0') ";



$result=mysqli_query($conn,$sql);


if($result !=0)
{
echo '<script>alert("Congratulation !! You have created new video | Refresh for impacted page to see");window.location.href="add_new_video.php";</script>';	
}
else
{
	echo "Issue in data saving || Contact to Developers";	
}
}
?>