<?php
include("connect.php");
$status=$_GET['status'];


$font="white";
$back="black";


$output = '';

$sql="SELECT * FROM `saleProduct` WHERE status='".$status."'";
$rs=mysqli_query($conn,$sql);
if(mysqli_num_rows($rs)>0)
{
$output .= '
<table class="table" bordered="1">
<tr>
<td style="background-color:'.$back.';"><font color="'.$font.'"><center>Sr</center></font></td>
<td style="background-color:'.$back.'"><font color="'.$font.'"><center>Publisher</center></font></td>
<td style="background-color:'.$back.'"><font color="'.$font.'"><center>Product</center></font></td>
<td style="background-color:'.$back.'"><font color="'.$font.'"><center>Price</center></font></td>
<td style="background-color:'.$back.'"><font color="'.$font.'"><center>client</center></font></td>
<td style="background-color:'.$back.'"><font color="'.$font.'"><center>client Mob</center></font></td>
<td style="background-color:'.$back.'"><font color="'.$font.'"><center>Date</center></font></td>
<td style="background-color:'.$back.'"><font color="'.$font.'"><center>Order_ID</center></font></td>
<td style="background-color:'.$back.'"><font color="'.$font.'"><center>SKU_Code</center></font></td>
<td style="background-color:'.$back.'"><font color="'.$font.'"><center>Status</center></font></td>
<td style="background-color:'.$back.'"><font color="'.$font.'"><center>Payment</center></font></td>
<td style="background-color:'.$back.'"><font color="'.$font.'"><center>Address</center></font></td>
</tr>	

';
while($row=mysqli_fetch_array($rs))
{

$output .=' 
<tr>
<td>'.$row['sr'].'</td>
<td bgcolor="'.$light.'">'.$row['user'].'</td>
<td>'.$row['product'].'</td>
<td>'.$row['price'].'</td>
<td>'.$row['client'].'</td>
<td>'.$row['clientMob'].'</td>
<td>'.$row['datee'].'</td>
<td>'.$row['orderid'].'</td>
<td>'.$row['skucode'].'</td>
<td>'.$row['status'].'</td>
<td>'.$row['payment'].'</td>
<td>'.$row['address'].'</td>

</tr>	
';
}
$output .='</table>';
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=download.xls");
echo $output;

}




?>