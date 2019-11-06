<?php
require_once 'vendor/autoload.php';
$ProviderShiprocket       = new \Shiprocket\Provider\Shiprocket('thebhakti.com@gmail.com', 'Square@101');
$ShiprocketOrders         = new \Shiprocket\ShiprocketOrders($ProviderShiprocket);
$ShiprocketServiceability = new \Shiprocket\ShiprocketServiceability($ProviderShiprocket);
print_r($ShiprocketServiceability->checkOnOrderID(2119114));
die;
print(json_encode($ShiprocketOrders->get(5091)->getData(), JSON_PRETTY_PRINT));
?>