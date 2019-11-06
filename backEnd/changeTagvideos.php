<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

  <h6><select id="videoID" name="videoID" style="width:130px">
              <option value="" selected>Choose Videos</option>
             <?php
include("connect.php");
$subcatt=$_GET['subcatt'];


$sql="SELECT * FROM `videos` WHERE vsubcat='".$subcatt."'";
$rs=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($rs))
{

?>
              <option value="<?php echo $row['videoid']; ?>"><?php echo $row['videoT']; ?></option>
              <?php
			  }
			  ?>
              </select>
              </h6>
</body>
</html>