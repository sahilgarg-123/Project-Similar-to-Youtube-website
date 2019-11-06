<?php

$user=$_GET['user'];
$value=$_GET['value'];
$name=$_GET['name'];
$phone=$_GET['phone'];
$email=$_GET['email'];
$address=$_GET['address'];
$city=$_GET['city'];
$state=$_GET['state'];
$Pincode=$_GET['Pincode'];
$uid=$_GET['uid'];
$sessionid=$_GET['sessionid'];
// check date format to table saleProduct
$txnid1=date('Ymd').mt_rand(1000,9999);




include("connect.php");
$sql1="SELECT * FROM `addtolist` WHERE sessionid='".$user."'";
$rs1=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($rs1))
{
$sql2="SELECT * FROM `product` WHERE skucode='".$row1['skucode']."'";
$rs2=mysqli_query($conn,$sql2);
while($row2=mysqli_fetch_array($rs2))
{
		$sql="INSERT INTO `saleProduct`(`user`, `product`, `price`, `client`, `clientMob`, `datee`, `orderid`, `skucode`, `status`, `payment`, `address`, `qtyy`,`sessionid`,`email`,`city`,`state`,`pincode`) VALUES ('".$uid."','".$row2['name']."','".$row1['qtyy']*$row2['sprice']."','".$name."','".$phone."','".date('m/d/Y')."','".$txnid1."','".$row2['skucode']."','NEW','Pending','".$address."','".$row1['qtyy']."','".$sessionid."','".$email."','".$city."','".$state."','".$Pincode."')";
		$rs=mysqli_query($conn,$sql);
		
			$sql4="INSERT INTO `topusers`(`user`, `product`, `price`, `client`, `clientMob`, `datee`, `orderid`, `skucode`, `status`, `payment`, `address`, `qtyy`,`sessionid`,`email`,`city`,`state`,`pincode`) VALUES ('".$uid."','".$row2['name']."','".$row1['qtyy']*$row2['sprice']."','".$name."','".$phone."','".date('m/d/Y')."','".$orderid."','".$row2['skucode']."','NEW','Pending','".$address."','".$row1['qtyy']."','".$sessionid."','".$email."','".$city."','".$state."','".$Pincode."')";
		$rs4=mysqli_query($conn,$sql4);
}

}

// Merchant key here as provided by Payu
$MERCHANT_KEY = "dmUXYj";
// Merchant Salt as provided by Payu
$SALT = "5la57Y5k";
// Change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://secure.payu.in";
$action = '';
$posted = array();
if(!empty($_POST)) {
foreach($_POST as $key => $value) {
$posted[$key] = $value;
}
}
$formError = 0;
if(empty($posted['txnid'])) {
// Generate random transaction id
$txnid=$txnid1;
} else {
$txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
if(
empty($posted['key'])
|| empty($posted['txnid'])
|| empty($posted['amount'])
|| empty($posted['firstname'])
|| empty($posted['email'])
|| empty($posted['phone'])
|| empty($posted['productinfo'])
|| empty($posted['surl'])
|| empty($posted['furl'])
|| empty($posted['service_provider'])
) {
$formError = 1;
} else {
//$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
$hashVarsSeq = explode('|', $hashSequence);
$hash_string = '';
foreach($hashVarsSeq as $hash_var) {
$hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
$hash_string .= '|';
}
$hash_string .= $SALT;
$hash = strtolower(hash('sha512', $hash_string));
$action = $PAYU_BASE_URL . '/_payment';
}
} elseif(!empty($posted['hash'])) {
$hash = $posted['hash'];
$action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>
<head>
<script>
var hash = '<?php echo $hash ?>';
function submitForm() {
if(hash == '') {
return;
}
var payuForm = document.forms.payuForm;
payuForm.submit();
}
</script>
</head>
<body onLoad="submitForm()">
<center><h2>Prabhu Bhakti Payment System </h2>
<h5>Powered by PayUMoney Payments co. systems </h5></center>
<br/>
<?php if($formError) { ?>
<center><span style="color:red">Please fill all mandatory fields.</span></center>
<br/>
<br/>
<?php } ?>
<form action="<?php echo $action; ?>" method="post" name="payuForm">
<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
<input type="hidden" name="hash" value="<?php echo $hash ?>"/>
<input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
<center>
<table>
<tr>
<td><center><b>Click to Proceed</b></center></td>
</tr>
<tr>

<td><input type="hidden" name="amount" value="<?php echo $_GET['value']; ?>" /></td>

<td><input type="hidden" name="firstname" id="firstname" value="<?php echo $_GET['name']; ?>" /></td>
</tr>
<tr>

<td><input type="hidden" name="email" id="email" value="<?php if($_GET['email']=="")
{
	echo "thebhakti@gmail.com";
}
else
{
	echo $_GET['email']; 
}
?>" /></td>

<td><input type="hidden" name="phone" value="<?php echo $_GET['phone']; ?>" /></td>
</tr>
<tr>

<td colspan="3"><textarea name="productinfo" style="display:none">Prabhu Bhakti Products</textarea></td>
</tr>
<tr>

<td colspan="3"><input name="surl" type="hidden" value="http://prabhubhakti.com/success.php" size="64" /></td>
</tr>
<tr>

<td colspan="3"><input name="furl" type="hidden" value="http://prabhubhakti.com/failure.php" size="64" /></td>
</tr>
<tr>
<td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
</tr>
<tr>
<?php if(!$hash) { ?>
<td colspan="4"><input type="submit" value="Proceed..." /></td>
<?php } ?>
</tr>
</table>
</center>
</form>
</body>
</html>