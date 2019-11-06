<?php
include("connect.php");
$sqll1="SELECT * FROM `users` WHERE mob='".$_SESSION['mob']."'";
$rsl1=mysqli_query($conn,$sqll1);
while($roww1=mysqli_fetch_array($rsl1))
{
echo $roww1['datee'];
}

?>