<?php
$mob=$_COOKIE["id"];
session_start();
$_SESSION['mob']=$mob;
echo '<script>window.location.href="index.php";</script>';
?>