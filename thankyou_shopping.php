<?php include ('index_header.php'); ?>
<?php
include("connect.php");
// prod_type have sr value of product
$orderid=$_GET['txnid'];


 ?>
<?php if(!$DEVICE) { ?>




<?php } else { ?>
  <!DOCTYPE html>
  <?php
  include("connect.php");
  include("analytics.php");
  ?>

  <html lang="en">
    <head>
    <!-- Add Additional JS Library files -->
    <script src="jss/rDir.js"></script>
    <script src="jss/trackMe.js"></script>
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
      <link href="css/thankyou.css" rel="stylesheet">
      <link href="css/font-awesome.css" rel="stylesheet">
      <link href="css/search_icon.css" rel="stylesheet">
      <link href="css/owl.carousel.css" rel="stylesheet">
      <link href="css/owl.theme.default.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">

      <!--  Attach Additional JS  -->
    

    </head>
    <body>

      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 than_ord">
            <h2 class="col_grn">THANKYOU<h2>
            <h4>FOR YOUR ORDER</h4>
          </div>
        </div>
<?php 

$sql="SELECT * FROM `saleProduct` WHERE `orderid`='".$orderid."' && `datee`='".date('m/d/Y')."'";
$rs=mysqli_query($conn,$sql);
$check=mysqli_num_rows($rs);
if($check>0)
{
while($row1=mysqli_fetch_array($rs))
{
	

	$date=$row1['datee'];
	
}
}
else
{
	echo '<script>window.location.href="Users/index.php";</script>';
}
 ?>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 than_ord">
          
            <span class="sh_cl">Order Number:</span><span class="sh_cl"><?php echo $orderid; ?></span>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 del_icon">
            <img src="images/icons/delivery.png">
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 than_ord">
            <h3 class="col_grn">ESTIMATED DELIVERY</h3>
            <h4 class="ln-ht"><?php $timestamp=time()-86400;
									$date1=strtotime("+5 day",$timestamp);
									echo date('M d, Y',$date1) ?></h4>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 than_ord">
            <button class="btn btn-info" onClick="trackMe()">TRACK YOUR ORDER HERE</button>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 than_ord">
            <h5>OR</h5>
          </div>
        </div>

      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 than_ord">
            <button class="btn btn-success btn_cont_sh" onClick="rDir()">Continue Shopping</button>
          </div>
        </div>
      </div>

    </body>
    </html>
<?php } ?>
