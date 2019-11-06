
<?php
include("connect.php");

$json_array=array();
$sql="SELECT * FROM `update_check`";

$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result))
{
	
	$json_array[]=$row;
	
}
echo json_encode($json_array);


?>