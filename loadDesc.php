
<?php
include("connect.php");

$vid=$_GET['vid'];
$val=$_GET['val'];

if($val==1)
{
$sql="SELECT * FROM `videos` WHERE `videoid`='".$vid."'";
$rs=mysqli_query($conn,$sql);
$check=mysqli_num_rows($rs);
if($check>0)
{
	while($row=mysqli_fetch_array($rs))
	{
?>	
<div id="video_desc_mobile">
 				            <?php echo substr($row['video_desc'],0,430); ?>
 				          </div>
                          <?php
	}
	}
}
else if($val==2)
{
$sql="SELECT * FROM `videos` WHERE `videoid`='".$vid."'";
$rs=mysqli_query($conn,$sql);
$check=mysqli_num_rows($rs);
if($check>0)
{
	while($row=mysqli_fetch_array($rs))
	{
?>	
<div id="video_desc_mobile">
 				            <?php echo substr($row['video_desc'],0,5000); ?>
 				          </div>
                          <?php
	}
	}
}
if($val==3)
{
$sql="SELECT * FROM `videos` WHERE `videoid`='".$vid."'";
$rs=mysqli_query($conn,$sql);
$check=mysqli_num_rows($rs);
if($check>0)
{
	while($row=mysqli_fetch_array($rs))
	{
?>	
<div id="video_desc_mobile">
 				            <?php echo substr($row['video_desc'],0,430); ?>
 				          </div>
                          <?php
	}
	}
}
?>



