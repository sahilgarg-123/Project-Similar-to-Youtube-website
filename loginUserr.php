<?php
include("connect.php");
$mob=$_POST['mob'];
$pass=$_POST['pwd'];
$urlData=$_POST['urlData'];

$sql="SELECT * FROM `users` WHERE mob='".$mob."'";
$rs=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($rs);

if($row[0] >= 1)
{
	
	$sql2="SELECT * FROM `users` WHERE mob='".$mob."'";
	$rs2=mysqli_query($conn,$sql2);
	

	
	
		while($row3=mysqli_fetch_array($rs2))
		{
			if($row3['pwd']==$pass)
			{
				session_start();
				$_SESSION['mob']=$mob;
				
				setcookie("id",$mob , time() + (60 * 1), "Users/");
				if($urlData=="")
				{
				echo '<script>window.location.href="Users/redirect.php";</script>';
				}
				else
				{
					echo '<script>window.location.href="'.$urlData.'";</script>';
				}
			}
			else
			{
					echo '<script>alert("Wrong Credential"); window.location.href="loginUser.php";</script>';

		
			}
		}
	
	
}
else
{
	echo '<script>alert("You are not registered | Please Register yourself"); window.location.href="signUp.php";</script>';
	
}

?>