<?php
include("connect.php");
include("config.php");
$orderid=$_GET['orderid'];
$name=$_GET['name'];
$lname=$_GET['lname'];
$Mob=$_GET['Mob'];
$mail=$_GET['mail'];
$city=$_GET['city'];
$state=$_GET['state'];
$pincode=$_GET['pincode'];
$weight2=$_GET['weight2'];
$length=$_GET['length'];
$base=$_GET['base'];
$height=$_GET['height'];
$adds=$_GET['adds'];

$prod1=$_GET['prod1'];
$skucode1=$_GET['skucode1'];
$qty1=$_GET['qty1'];
$price1=$_GET['price1'];
$prod2=$_GET['prod2'];
$skucode2=$_GET['skucode2'];
$qty2=$_GET['qty2'];
$price2=$_GET['price2'];


// set time zone for india
date_default_timezone_set("Asia/Kolkata");
$datee=date('Y-n-j H:i');
$pV=$_GET['pV'];
// aply condition if we choose two or more products at the same time

echo $prod2;

	
	$total2=$price1+$price2;
	$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://apiv2.shiprocket.in/v1/external/orders/create');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \"order_id\": \"".$orderid."\", \"pickup_code\": \"Primary\", \"order_date\": \"".$datee."\", \"channel_id\": \"7825\", \"billing_customer_name\": \"".$name."\", \"billing_last_name\": \"".$lname."\", \"billing_address\": \"".$adds."\", \"billing_address_2\": \"".$adds."\", \"billing_city\": \"".$city."\", \"billing_state\": \"".$state."\", \"billing_country\": \"India\", \"billing_pincode\": \"".$pincode."\", \"billing_email\": \"".$mail."\", \"billing_phone\": \"".$Mob."\", \"shipping_is_billing\": true, \"shipping_customer_name\": \"".$name."\", \"shipping_last_name\": \"".$lname."\", \"shipping_address\": \"".$adds."\", \"shipping_address_2\": \"".$adds."\", \"shipping_city\": \"".$city."\", \"shipping_country\": \"India\", \"shipping_pincode\": \"".$pincode."\", \"shipping_state\": \"".$state."\", \"shipping_email\": \"".$mail."\", \"shipping_phone\": \"".$Mob."\", \"order_items\": [{ \"sku\": \"".$skucode1."\", \"name\": \"".$prod1."\", \"units\": ".$qty1.", \"selling_price\": ".$price1.", \"discount\": 0, \"HSN\": \"string\" },{ \"sku\": \"".$skucode2."\", \"name\": \"".$prod2."\", \"units\": ".$qty2.", \"selling_price\": ".$price2.", \"discount\": 0, \"HSN\": \"string\" }], \"payment_method\": \"COD\", \"shipping_charges\": \"".$total2."\", \"giftwrap_charges\": \"0\", \"transaction_charges\": \"0\", \"total_discount\": \"0\", \"sub_total\": 0, \"length\":".$length.", \"breadth\": ".$base.", \"height\": ".$height.", \"weight\": ".$weight2."}");
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = 'Accept: application/json';
$headers[] = 'Authorization: Bearer '.$token;
$headers[] = 'Content-Type: application/json';


curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);


print_r($result);
$data2=json_decode($result,true);
echo $data2['status_code'];

if($pV==3)
{
	$total3=$price1+$price2+$price3;
	$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://apiv2.shiprocket.in/v1/external/orders/create');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \"order_id\": \"".$orderid."\", \"pickup_code\": \"Primary\", \"order_date\": \"".$datee."\", \"channel_id\": \"7825\", \"billing_customer_name\": \"'".$name."'\", \"billing_last_name\": \"'".$lname."'\", \"billing_address\": \"'".$adds."'\", \"billing_address_2\": \"'".$adds."'\", \"billing_city\": \"'".$city."'\", \"billing_state\": \"'".$state."'\", \"billing_country\": \"India\", \"billing_pincode\": \"'".$pincode."'\", \"billing_email\": \"'".$mail."'\", \"billing_phone\": \"'".$Mob."'\", \"shipping_is_billing\": true, \"shipping_customer_name\": \"'".$name."'\", \"shipping_last_name\": \"'".$lname."'\", \"shipping_address\": \"'".$adds."'\", \"shipping_address_2\": \"'".$adds."'\", \"shipping_city\": \"'".$city."'\", \"shipping_country\": \"India\", \"shipping_pincode\": \"'".$pincode."'\", \"shipping_state\": \"'".$state."'\", \"shipping_email\": \"'".$mail."\", \"shipping_phone\": \"'".$Mob."'\", \"order_items\": [ { \"sku\": \"'".$skucode1."'\", \"name\": \"'".$prod1."'\", \"units\": '".$qty1."', \"selling_price\": '".$price1."', \"discount\": 0, \"HSN\": \"string\" },{ \"sku\": \"'".$skucode2."'\", \"name\": \"'".$prod2."'\", \"units\": '".$qty2."', \"selling_price\": '".$price2."', \"discount\": 0, \"HSN\": \"string\" },{ \"sku\": \"'".$skucode3."'\", \"name\": \"'".$prod3."'\", \"units\": '".$qty3."', \"selling_price\": '".$price3."', \"discount\": 0, \"HSN\": \"string\" } ], \"payment_method\": \"COD\", \"shipping_charges\": \"'".$total3."'\", \"giftwrap_charges\": \"0\", \"transaction_charges\": \"0\", \"total_discount\": \"0\", \"sub_total\": 0, \"length\":'".$length."', \"breadth\": '".$base."', \"height\": '".$height."', \"weight\": '".$weight2."'}");
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = 'Accept: application/json';
$headers[] = 'Authorization: Bearer '.$token;
$headers[] = 'Content-Type: application/json';


curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);


$data2=json_decode($result,true);
echo $data2['status_code'];
}
else if($pV==4)
{
	$total4=$price1+$price2+$price3+$price4;
	$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://apiv2.shiprocket.in/v1/external/orders/create');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \"order_id\": \"".$orderid."\", \"pickup_code\": \"Primary\", \"order_date\": \"".$datee."\", \"channel_id\": \"7825\", \"billing_customer_name\": \"'".$name."'\", \"billing_last_name\": \"'".$lname."'\", \"billing_address\": \"'".$adds."'\", \"billing_address_2\": \"'".$adds."'\", \"billing_city\": \"'".$city."'\", \"billing_state\": \"'".$state."'\", \"billing_country\": \"India\", \"billing_pincode\": \"'".$pincode."'\", \"billing_email\": \"'".$mail."'\", \"billing_phone\": \"'".$Mob."'\", \"shipping_is_billing\": true, \"shipping_customer_name\": \"'".$name."'\", \"shipping_last_name\": \"'".$lname."'\", \"shipping_address\": \"'".$adds."'\", \"shipping_address_2\": \"'".$adds."'\", \"shipping_city\": \"'".$city."'\", \"shipping_country\": \"India\", \"shipping_pincode\": \"'".$pincode."'\", \"shipping_state\": \"'".$state."'\", \"shipping_email\": \"'".$mail."\", \"shipping_phone\": \"'".$Mob."'\", \"order_items\": [ { \"sku\": \"'".$skucode1."'\", \"name\": \"'".$prod1."'\", \"units\": '".$qty1."', \"selling_price\": '".$price1."', \"discount\": 0, \"HSN\": \"string\" },{ \"sku\": \"'".$skucode2."'\", \"name\": \"'".$prod2."'\", \"units\": '".$qty2."', \"selling_price\": '".$price2."', \"discount\": 0, \"HSN\": \"string\" },{ \"sku\": \"'".$skucode3."'\", \"name\": \"'".$prod3."'\", \"units\": '".$qty3."', \"selling_price\": '".$price3."', \"discount\": 0, \"HSN\": \"string\" },{ \"sku\": \"'".$skucode4."'\", \"name\": \"'".$prod4."'\", \"units\": '".$qty4."', \"selling_price\": '".$price4."', \"discount\": 0, \"HSN\": \"string\" } ], \"payment_method\": \"COD\", \"shipping_charges\": \"'".$total4."'\", \"giftwrap_charges\": \"0\", \"transaction_charges\": \"0\", \"total_discount\": \"0\", \"sub_total\": 0, \"length\":'".$length."', \"breadth\": '".$base."', \"height\": '".$height."', \"weight\": '".$weight2."'}");
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = 'Accept: application/json';
$headers[] = 'Authorization: Bearer '.$token;
$headers[] = 'Content-Type: application/json';


curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);


$data2=json_decode($result,true);
echo $data2['status_code'];
}
else if($pV==5)
{
	$total5=$price1+$price2+$price3+$price4+$price5;
	$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://apiv2.shiprocket.in/v1/external/orders/create');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \"order_id\": \"".$orderid."\", \"pickup_code\": \"Primary\", \"order_date\": \"".$datee."\", \"channel_id\": \"7825\", \"billing_customer_name\": \"'".$name."'\", \"billing_last_name\": \"'".$lname."'\", \"billing_address\": \"'".$adds."'\", \"billing_address_2\": \"'".$adds."'\", \"billing_city\": \"'".$city."'\", \"billing_state\": \"'".$state."'\", \"billing_country\": \"India\", \"billing_pincode\": \"'".$pincode."'\", \"billing_email\": \"'".$mail."'\", \"billing_phone\": \"'".$Mob."'\", \"shipping_is_billing\": true, \"shipping_customer_name\": \"'".$name."'\", \"shipping_last_name\": \"'".$lname."'\", \"shipping_address\": \"'".$adds."'\", \"shipping_address_2\": \"'".$adds."'\", \"shipping_city\": \"'".$city."'\", \"shipping_country\": \"India\", \"shipping_pincode\": \"'".$pincode."'\", \"shipping_state\": \"'".$state."'\", \"shipping_email\": \"'".$mail."\", \"shipping_phone\": \"'".$Mob."'\", \"order_items\": [ { \"sku\": \"'".$skucode1."'\", \"name\": \"'".$prod1."'\", \"units\": '".$qty1."', \"selling_price\": '".$price1."', \"discount\": 0, \"HSN\": \"string\" },{ \"sku\": \"'".$skucode2."'\", \"name\": \"'".$prod2."'\", \"units\": '".$qty2."', \"selling_price\": '".$price2."', \"discount\": 0, \"HSN\": \"string\" },{ \"sku\": \"'".$skucode3."'\", \"name\": \"'".$prod3."'\", \"units\": '".$qty3."', \"selling_price\": '".$price3."', \"discount\": 0, \"HSN\": \"string\" },{ \"sku\": \"'".$skucode4."'\", \"name\": \"'".$prod4."'\", \"units\": '".$qty4."', \"selling_price\": '".$price4."', \"discount\": 0, \"HSN\": \"string\" },{ \"sku\": \"'".$skucode5."'\", \"name\": \"'".$prod5."'\", \"units\": '".$qty5."', \"selling_price\": '".$price5."', \"discount\": 0, \"HSN\": \"string\" } ], \"payment_method\": \"COD\", \"shipping_charges\": \"'".$total5."'\", \"giftwrap_charges\": \"0\", \"transaction_charges\": \"0\", \"total_discount\": \"0\", \"sub_total\": 0, \"length\":'".$length."', \"breadth\": '".$base."', \"height\": '".$height."', \"weight\": '".$weight2."'}");
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = 'Accept: application/json';
$headers[] = 'Authorization: Bearer '.$token;
$headers[] = 'Content-Type: application/json';


curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);


$data2=json_decode($result,true);
echo $data2['status_code'];
}
