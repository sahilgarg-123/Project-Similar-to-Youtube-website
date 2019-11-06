<?php
$orderid="122311122";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://apiv2.shiprocket.in/v1/external/orders/create');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \"order_id\": \"'".$orderid."'\", \"pickup_code\": \"Primary\", \"order_date\": \"2019-1-15 18:11\", \"channel_id\": \"126023\", \"billing_customer_name\": \"Uttam\", \"billing_last_name\": \"Singh\", \"billing_address\": \"plot no 512\", \"billing_address_2\": \"plot no 512\", \"billing_city\": \"Gurgaon\", \"billing_state\": \"Haryana\", \"billing_country\": \"India\", \"billing_pincode\": \"122009\", \"billing_email\": \"aksz88@rediffmail.com\", \"billing_phone\": \"9306488494\", \"shipping_is_billing\": true, \"shipping_customer_name\": \"Uttam\", \"shipping_last_name\": \"Singh\", \"shipping_address\": \"Plot no 512\", \"shipping_address_2\": \"plot no 512\", \"shipping_city\": \"Gurgaon\", \"shipping_country\": \"India\", \"shipping_pincode\": \"122009\", \"shipping_state\": \"Haryana\", \"shipping_email\": \"aksz88@rediffmail.com\", \"shipping_phone\": \"9306488494\", \"order_items\": [ { \"sku\": \"thebhakti014\", \"name\": \"Kamal Gatta Mala\", \"units\": 1, \"selling_price\": 500, \"discount\": 0, \"HSN\": \"string\" } ], \"payment_method\": \"COD\", \"shipping_charges\": \"100\", \"giftwrap_charges\": \"0\", \"transaction_charges\": \"0\", \"total_discount\": \"0\", \"sub_total\": 0, \"length\":21, \"breadth\": 15, \"height\": 12, \"weight\": 0.8}");
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = 'Accept: application/json';
$headers[] = 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjY5MjIyLCJpc3MiOiJodHRwczpcL1wvYXBpdjIuc2hpcHJvY2tldC5pblwvdjFcL2V4dGVybmFsXC9hdXRoXC9sb2dpbiIsImlhdCI6MTU0NzExODMyMCwiZXhwIjoxNTQ3OTgyMzIwLCJuYmYiOjE1NDcxMTgzMjAsImp0aSI6IjY4YWZmZTNiYWQ2N2YwYjM2N2JjYzBhYTdkMTA0ZWE2In0.GMG63USBcu3f7ABradQJsjj8aEIexFc2atAGmYN7Kxw';
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
?>