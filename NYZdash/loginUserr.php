<?php
include("connect.php");
$mob=$_POST['mob'];
$pass=$_POST['pwd'];


$sql="SELECT * FROM `shipUser` WHERE mob='".$mob."'";
$rs=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($rs);

if($row[0] >= 1)
{
	
	$sql2="SELECT * FROM `shipUser` WHERE mob='".$mob."'";
	$rs2=mysqli_query($conn,$sql2);
	

	
	
		while($row3=mysqli_fetch_array($rs2))
		{
			if($row3['pwdd']==$pass)
			{
				session_start();
				$_SESSION['mob']=$mob;
				
				//setcookie("id",$mob , time() + (60 * 1), "Users/");
				echo '<script>window.location.href="index.php";</script>';
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