<?php include ('index_header.php'); ?>

<?php if(!$DEVICE) { ?>

<?php } else { ?>

  <!DOCTYPE html>
  <?php
  include("connect.php");
  include("analytics.php");
    // Recieve intenets
  $user=$_GET['user'];
  $value=$_GET['val'];
  $name=$_GET['name'];
  $phone=$_GET['phone'];
  $email=$_GET['email'];
 $address=$_GET['address'];
 $city=$_GET['city'];
 $state=$_GET['state'];
 $Pincode=$_GET['Pincode'];
 $uid=$_GET['uid'];  
 
  // session start
  session_start();
  if($_SESSION['mob']=="")
{
	echo '<script>alert("Your session has been expired"); window.location.href="../loginUser.php??urlRD=checkout.php?user='.$user.'&val='.$value.'&uid='.$uid.'";</script>';
}
 
  ?>

  <html lang="en">
    <head>
    <!-- Added External JS -->
<script src="jss/finalPayout.js"></script>
<script src="jss/selection.js"></script>    
    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130918515-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-130918515-1');
  </script>
  <script src="js/active.js"></script>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-2388041157489194",
      enable_page_level_ads: true
    });
  </script>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name=”Prabhu Bhakti - Devotional Portal - One stop solution for all your spiritual needs” content=”Live Temple Darshan, Bhajan, Aarti, Chalisa, Puja Paath. Consult with our expert astrologers about your Horoscope and get Kundali report. Buy unique puja items, gemstone according to your horoscope.”>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Prabhu Bhakti : A portal of indian astrology services</title>

      <!-- Bootstrap -->
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/mobile.css" rel="stylesheet">
      <link href="css/checkout.css" rel="stylesheet">
      <link href="css/font-awesome.css" rel="stylesheet">
      <link href="css/owl.carousel.css" rel="stylesheet">
      <link href="css/owl.theme.default.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
    </head>
    <body>
     <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c_t_1">
         <span style="float:left;"><i class="fa fa-angle-left" onclick="goBack()" style="color:#919191;font-size:4rem;cursor:pointer;"></i></span>
         <span style="color:#000;font-size:2.5rem;text-align:center;">Checkout</span>
       </div>
       <div id="exTab1">
         <ul  class="nav nav-pills">
           <li>
             <a  href="https://www.prabhubhakti.com/checkout.php">Shipping</a>
           </li>
           <li class="active">
             <a href="">Payment</a>
           </li>
         </ul>
       </div>
     </div>
     <div class="check_payment_method">
     <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 payment_method_inner_check">
         <span class="color_payment_op"><i class="fa fa-money icon_col_pay"></i></span>
         <span class="color_payment_op">Cash On Delivery</span>
         <span class="radio color_payment_op" style="float:right">
             <label><input class="radio_button" type="radio" name="cashradio" id="cashradio" onChange="selection('cash')"></label>
         </span>
       </div>
     </div>
     <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 payment_method_inner_check">
         <span class="color_payment_op"><i class="fa fa-tablet icon_col_pay" data-fa-transform="rotate--90"></i></span>
         <span class="color_payment_op">E-wallet</span>
         <span class="radio color_payment_op" style="float:right">
             <label><input class="radio_button" type="radio" name="walletradio" id="walletradio" onChange="selection('wallet')"></label>
         </span>
       </div>
     </div>
     <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 payment_method_inner_check">
         <span class="color_payment_op"><i class="fa fa-credit-card icon_col_pay"></i></span>
         <span class="color_payment_op">Credit Card</span>
         <span class="radio color_payment_op" style="float:right">
             <label><input class="radio_button" type="radio" name="cardradio" id="cardradio" onChange="selection('card')" ></label>
         </span>
       </div>
     </div>
     <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 payment_method_inner_check">
         <span class="color_payment_op">Total Amount<span>
         <span class="color_payment_op" style="float:right;"><i class="fa fa-rupee icon_col_pay"></i><?php echo $value; ?></span>
       </div>
     </div>
   </div>
       <div class="form-group foot_button">
       
         <button type="submit" class="btn btn-warning btn_payment_confirmation" onClick="finalPayout('<?php echo $user; ?>',<?php echo $value; ?>,'<?php echo $name; ?>',<?php echo $phone; ?>,'<?php echo $email; ?>','<?php echo $address; ?>','<?php echo $city; ?>','<?php echo $state; ?>',<?php echo $Pincode; ?>,'<?php echo $uid; ?>',<?php echo $_SESSION['mob']; ?>)">
           CONTINUE TO PAYMENT <i class="fa fa-arrow-right pull-right" aria-hidden="true" style="font-size:18px;"></i>
         </button>
       </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
     </div>
    </body>
</html>
<script type="text/javascript">
function goBack() {
  window.history.back();
}
</script>
<?php } ?>
