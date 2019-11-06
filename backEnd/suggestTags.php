<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="form-group">
                <label class="control-label col-sm-3">Applied Tags</label>
                <div class="col-sm-9">
            
<textarea id="suggestTagg" style="width:400px; height:50px">
<?php
include("connect.php");
$prod=$_GET['product'];

$sql2="SELECT * FROM `pseo` WHERE pid='".$prod."'";	
$result=mysqli_query($conn,$sql2);
while($row=mysqli_fetch_array($result))
{
	echo $row['tag'];
	echo ",";

}
?>
</textarea>
 </div>
              </div>
</body>
</html>