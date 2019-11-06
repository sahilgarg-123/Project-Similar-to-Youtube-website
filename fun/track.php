<?php
include("connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prabhu Bhakti : Viral tracking System</title>
</head>


<body>
<span>Total Open users</span>
<button class="btn btn-facebook">
Clicks(
<?php
$sr=0;
$sh="/wishes/index.php";
$sql="SELECT * FROM `analytics` WHERE url='".$sh."'";
$rs=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($rs))
{
	$sr=$sr+1;
	
}
echo $sr;
?>)
</button>
<br />
<span>Total Edit Names </span>
<button class="btn btn-facebook">
Clicks(
<?php
$srr=0;
$sh="/wishes/nyName.php";
$sql="SELECT * FROM `analytics` WHERE url='".$sh."'";
$rs=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($rs))
{
	$srr=$srr+1;
	
}
echo $srr;
?>)
</button>
<br />
<span>Total No of share</span>
<button class="btn btn-facebook">
No of Shares(
<?php
$srr1=0;
$sh="share";
$sql="SELECT * FROM `analytics` WHERE url='".$sh."'";
$rs=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($rs))
{
	$srr1=$srr1+1;
	
}
echo $srr1;
?>)
</button>
</body>
</html>