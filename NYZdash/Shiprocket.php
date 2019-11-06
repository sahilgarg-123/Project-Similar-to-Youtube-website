
<?php
$headers[]='Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjY5MjIyLCJpc3MiOiJodHRwczpcL1wvYXBpdjIuc2hpcHJvY2tldC5pblwvdjFcL2V4dGVybmFsXC9hdXRoXC9sb2dpbiIsImlhdCI6MTU0OTAwMzMzMywiZXhwIjoxNTQ5ODY3MzMzLCJuYmYiOjE1NDkwMDMzMzMsImp0aSI6ImFmZWJiMzJkOTcwZTk4NmYyMDZmYTBlZGE5YmUzMzY1In0.KLGoHZnieB4eziqcDcyA4GzfL0rBX8Ja0ArUztZsypE';
$url="https://apiv2.shiprocket.in/v1/external/orders?page=1&per_page=100&sort=ASC&sort_by=id&to=01%2F10%2F2019&from=01%2F10%2F2019&filter=cod";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_HTTPHEADER,$headers );
$result = curl_exec($curl);
curl_close($curl);
$data=json_decode($result, true);
for($i=0;$i<=10;$i++)
{
print_r("Order_id :".$data['data'][$i]['id']);
print_r("<br>");
print_r("Channel_id :".$data['data'][$i]['channel_id']);
print_r("<br>");
print_r("Channel_ Name :".$data['data'][$i]['channel_name']);
print_r("<br>");
print_r("base_channel_code :".$data['data'][$i]['base_channel_code']);
print_r("<br>");
print_r("Customer Name :".$data['data'][$i]['customer_name']);
print_r("<br>");
print_r("Customer_email :".$data['data'][$i]['customer_email']);
print_r("<br>");
print_r("Customer Phone :".$data['data'][$i]['customer_phone']);
print_r("<br>");
print_r("Total :".$data['data'][$i]['total']);
print_r("<br>");
print_r("SLA :".$data['data'][$i]['sla']);
print_r("<br>");
print_r("<br>");
print_r("<br>");
}
?>