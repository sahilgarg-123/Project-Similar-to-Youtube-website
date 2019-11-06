<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>

     <div class="container">        
  <table class="table table-bordered" style="width:1600px;height:70px; border:groove" cellpadding="5" cellspacing="5">
    <thead>
      <tr>
                    <th>Sr.</th>
                    <th>Product Order ID</th>
                    <th>Product Name</th>
                    <th>Customer Name</th>
                   <th>Customer Mobile No</th>
                   <th>SR Order Status</th>
                    <th>-----------</th>
                    <th>Our Order Status</th>
                    <th>Update Status</th>
                                                   
                  </tr>
                  </thead>
                  <tbody>
				  <?php
include("connect.php");
include("config.php");
$dateto=$_GET['dateto'];
$datefrom=$_GET['datefrom'];



$sql1="SELECT COUNT(*) FROM `shipallorders`";
$rs1=mysqli_query($conn,$sql1);
$check=mysqli_fetch_row($rs1);
if($check[0]==0)
{
	
$headers[]='Authorization: Bearer '.$token;
$url='https://apiv2.shiprocket.in/v1/external/orders?page=1&per_page=400&sort=ASC&sort_by=id&to='.$dateto.'&from='.$datefrom.'&filter=cod';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_HTTPHEADER,$headers );
$result = curl_exec($curl);
curl_close($curl);
$data=json_decode($result, true);
for($i=0;$i<=400;$i++)
{
if($i%2==0)
{
	$bg="#CCC";
}
else
{
	$bg="#FFF";
}



$coi=$data['data'][$i]['channel_order_id'];
if($coi=="")
{
	break;
}
$customer_name=$data['data'][$i]['customer_name'];
$customer_email=$data['data'][$i]['customer_email'];
$customer_phone=$data['data'][$i]['customer_phone'];
$total=$data['data'][$i]['total'];
$status=$data['data'][$i]['status'];
$payment_method=$data['data'][$i]['payment_method'];
$channel_created_at=$data['data'][$i]['channel_created_at'];
$created_at=$data['data'][$i]['created_at'];
$product_id=$data['data'][$i]['products'][0]['product_id'];
$name=$data['data'][$i]['products'][0]['name'];
$channel_sku=$data['data'][$i]['products'][0]['channel_sku'];
$quantity=$data['data'][$i]['products'][0]['quantity'];
$courier=$data['data'][$i]['shipments'][0]['courier'];
$weight=$data['data'][$i]['shipments'][0]['weight'];
$dimensions=$data['data'][$i]['shipments'][0]['dimensions'];
$pickup_scheduled_date=$data['data'][$i]['shipments'][0]['pickup_scheduled_date'];


$sql="SELECT * FROM `saleProduct` WHERE orderid='".$coi."'";
$rs=mysqli_query($conn,$sql);
while($Rsrow=mysqli_fetch_array($rs))
{
	echo $Rsrow['orderid'];


if($coi==$Rsrow['orderid'])
{
if($status=="RTO DELIVERED" || $status=="RTO INITIATED")
{
?>

 <tr style="width:500px; background-color:<?php echo $bg; ?>; height:1px">
                    <td><?php echo $i+1; ?></td>
                    <td><?php echo $coi ?></td>
                    <td style="background-color:#996"><?php echo $name; ?></td>
                    <td><?php echo $customer_name; ?></td>
                    <td style="background-color:#CFF"><?php echo $customer_phone; ?></td>
                   <td style="background-color:#996"><?php echo $status; ?></td>
                    <td>-------------</td>
                    <td><?php echo $Rsrow['status']; ?></td>
                    <td><select id="rtoStatus">
                    <option value="">Select Status</option>
                    <option value="RTO CONFIRM" >RTO Confirmed</option>
                    <option value="RTO PENDING">RTO Pending</option>
                    </select>
                    <button type="button" onclick="saveRTOstatus(<?php echo $Rsrow['orderid']?>)">Save Status</button></td>
                    
                    
                  </tr>
                  
                  <?php
}
}
}
}
}
?>                              
                  </tbody>
                </table>
         </div>
           

</div>
</div>
</body>
</html>