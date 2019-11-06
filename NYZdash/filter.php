<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connect.php");

$sql="SELECT * FROM `appContacts`";
$rs=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($rs))
{
if(strlen($row['Mobb'])<10)
{
	$sql1="DELETE FROM `appContacts` WHERE sr='".$row['sr']."'";
	$rs1=mysqli_query($conn,$sql1);
	echo $row['sr']."\n";
}
}

?>
</body>
</html>