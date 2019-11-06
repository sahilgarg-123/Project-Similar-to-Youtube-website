<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

   <select class="form-control" name="videoID" id="videoID" onchange="findTags()">
                  <option value="" selected>Select videoID</option>
<?php
include("connect.php");
$subcat=$_GET['subcat'];

$sql="SELECT * FROM `videos` WHERE vsubcat='".$subcat."'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
	?>

                  <option value="<?php echo $row['videoid']; ?>"><?php echo $row['videoT']; ?></option>
               
               
                
				
				<?php
}
				?>
                 </select>
</body>
</html>