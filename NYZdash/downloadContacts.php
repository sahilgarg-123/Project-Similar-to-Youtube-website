<?php
include("connect.php");
$status=$_GET['status'];


$font="white";
$back="black";

if($status=='All')
{
$output = '';

$sql="SELECT * FROM `appContacts`";
$rs=mysqli_query($conn,$sql);
if(mysqli_num_rows($rs)>0)
{
$output .= '
<table class="table" bordered="1">
<tr>
<td style="background-color:'.$back.';"><font color="'.$font.'"><center>Sr</center></font></td>
<td style="background-color:'.$back.'"><font color="'.$font.'"><center>Name</center></font></td>
<td style="background-color:'.$back.'"><font color="'.$font.'"><center>Contact</center></font></td>
<td style="background-color:'.$back.'"><font color="'.$font.'"><center>Reference</center></font></td>
<td style="background-color:'.$back.'"><font color="'.$font.'"><center>Reference Mobile No</center></font></td>
</tr>	

';
while($row=mysqli_fetch_array($rs))
{

$output .=' 
<tr>
<td>'.$row['sr'].'</td>
<td bgcolor="'.$light.'">'.$row['Name'].'</td>
<td>'.$row['Mobb'].'</td>
<td>'.$row['refName'].'</td>
<td>'.$row['refMob'].'</td>


</tr>	
';
}
$output .='</table>';
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=download.xls");
echo $output;

}
}
else if($status=='donater')
{
	$output = '';

$sql="SELECT * FROM `ContactIdentifier`";
$rs=mysqli_query($conn,$sql);
if(mysqli_num_rows($rs)>0)
{
$output .= '
<table class="table" bordered="1">
<tr>
<td style="background-color:'.$back.';"><font color="'.$font.'"><center>Sr</center></font></td>
<td style="background-color:'.$back.'"><font color="'.$font.'"><center>Name</center></font></td>
<td style="background-color:'.$back.'"><font color="'.$font.'"><center>Contact</center></font></td>

</tr>	

';
while($row=mysqli_fetch_array($rs))
{

$output .=' 
<tr>
<td>'.$row['sr'].'</td>
<td bgcolor="'.$light.'">'.$row['user_name'].'</td>
<td>'.$row['MOB'].'</td>



</tr>	
';
}
$output .='</table>';
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=download.xls");
echo $output;

}
}


?>