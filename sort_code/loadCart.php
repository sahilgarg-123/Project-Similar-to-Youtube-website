<?php
                                     $sql23="SELECT * FROM `addtolist` WHERE `sessionid`='".$_SESSION['mob']."'";
									 $rs23=mysqli_query($conn,$sql23);
									 $check23=mysqli_num_rows($rs23);
									 if($check23>0)
									 {
									 echo $check23;
									 }
									 else
									 {
									 }
									 ?>