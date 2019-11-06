<?php
session_start();

if($_SESSION['mob']=="")
{
	echo '<script>alert("Your session has been expired"); window.location.href="../loginUser.php?urlRD=Users/index.php";</script>';
}



?>
