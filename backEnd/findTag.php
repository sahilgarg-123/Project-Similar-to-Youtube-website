
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<textarea name="tags" id="tags" style="height:60px; width:410px; font-style:oblique; font-size:16px; animation-direction:alternate">
<?php
include("connect.php");
$videoID=$_GET['videoID'];

$sql="SELECT * FROM `videoseo` WHERE videoID='".$videoID."'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
	
echo $row['tag'];

echo ",  ";	
}


?></textarea>
</body>
</html>
