<?php
session_start();
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="yIEkykqEH3";
If (isset($_POST["additionalCharges"])) {
$additionalCharges=$_POST["additionalCharges"];
$retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
} else {
$retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
}
$hash = hash("sha512", $retHashSeq);
if ($hash != $posted_hash) {
echo "Invalid Transaction. Please try again";
} else {
// now delete data from addtolist

$sql3="DELETE FROM `addtolist` WHERE sessionid='".$_SESSION['mob']."'";
$rs3=mysqli_query($conn,$sql3);
$sql4="UPDATE `saleProduct` SET `payment`='Approved' WHERE `sessionid`='".$_SESSION['mob']."'";
$rs4=mysqli_query($conn,$sql4);
echo '<script>window.location.href="thankyou_shopping.php?txnid='+$txnid+'";</script>';
}
?>