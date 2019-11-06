<?php
session_start();
if($_SESSION['mobb']=="")
{
	echo '<script>alert("Your session has been expired"); window.location.href="loginUser.php";</script>';
}


?>
