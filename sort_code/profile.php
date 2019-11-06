<?php
include("connect.php");
$sqll1="SELECT * FROM `users` WHERE mob='".$_SESSION['mob']."'";
$rsl1=mysqli_query($conn,$sqll1);
echo $rsl1['name'];

?>