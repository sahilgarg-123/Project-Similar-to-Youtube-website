<?php include ('index_header.php'); ?>

<?php if(!$DEVICE) { ?>

  <!DOCTYPE html>
  <?php
  include("connect.php");
  include("analytics.php");
  include('includes/desktop_config.php');
  $total=0;
session_start();
if($_SESSION['mob']=="")
{
	echo '<script>alert("Your session has been expired"); window.location.href="../loginUser.php??urlRD=your_cart.php";</script>';
}
  ?>

  <html lang="en">
    <head>
    <!--  Attach Js files  -->
    <script src="jss/plusQty.js"></script>
    <script src="jss/payMethod.js"></script>
    <script src="jss/removeItems.js"></script>
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
      <link href="css/your_cart.css" rel="stylesheet">
      <link href="css/font-awesome.css" rel="stylesheet">
      <link href="css/owl.carousel.css" rel="stylesheet">
      <link href="css/owl.theme.default.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
    </head>
    <body>
      <!--start of header -->
      <div class="top-header">
	      <div class="container">
	      <div class="col-md-4 col-sm-6 col-xs-12 left">
	        <img src="images/logo.png">
	      </div>
	      <div class="col-md-4 col-sm-6 col-xs-12 center">
	        <form>
	        <input type="text" name="search" id="search" placeholder="Search.." required>
	      </form>
	      </div>
	      <div class="col-md-4 col-sm-6 col-xs-12 right">
	        <a href="#"><i class="fa fa-facebook"></i></a>
	        <a href="#"><i class="fa fa-twitter"></i></a>
	        <a href="#"><i class="fa fa-linkedin"></i></a>
	        <a href="#"><i class="fa fa-youtube"></i></a>
	        <a href="your_cart.php"><span><i class="fa fa-shopping-cart" style="color:#000;font-size:2.2rem;"><?php
	                          include("sort_code/loadCart.php");
	        ?></i></span></a>
	        <br><br>
	        <span><a href="loginUser.php?urlRD=">Login/Signup</a></span>
	      </div>
	    </div>
	    </div>
			 <?php echo $desktop_top_header; ?>
			<!-- end of header -->
    <div class="container">
     <div class="your_cart_order">
       <div class="row">
           <?php
		 $sql2="SELECT * FROM `addtolist` WHERE `sessionid`='".$_SESSION['mob']."'";
		 $rs2=mysqli_query($conn,$sql2);
		 while($row2=mysqli_fetch_array($rs2))
		 {
			 $uid=$row2['uid'];

		    $sql3="SELECT * FROM `product` WHERE `skucode`='".$row2['skucode']."'";
			 $rs3=mysqli_query($conn,$sql3);
			 while($row3=mysqli_fetch_array($rs3))
			 {
		 ?>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 inner_order_wrap top_prod_wrap">

           <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3 prod_image">

               <img src="<?php echo $row3['url']; ?>"  class="image">

           </div>
           <div class="col-lg-5 col-md-5 col-xs-5 col-sm-5 prod_detail">
             <h4><?php echo $row3['name']; ?></h4>
            <!--  <h5>2.5 feet Tall</h5>  -->
             <p></p>

           </div>
           <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
             <p class="rounded_icon"><i class="fa fa-plus icon_col_pay" aria-hidden="true" onClick="plusQty('<?php echo $row2['skucode']; ?>',<?php echo $_SESSION['mob']; ?>,<?php echo $row2['qtyy']; ?>,'add')"></i></p>
             <p class="col_des"><?php echo $row2['qtyy']; ?></p>
             <p class="rounded_icon"><i class="fa fa-minus icon_col_pay" aria-hidden="true" onClick="plusQty('<?php echo $row2['skucode']; ?>',<?php echo $_SESSION['mob']; ?>,<?php echo $row2['qtyy']; ?>,'minus')"></i></p>
           </div>
           <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
             <p><i class="fa fa-trash icon_col_pay" aria-hidden="true" onClick="removeItems(<?php echo $row2['sr']; ?>)"></i></p>
             <p class="col_des"><?php echo "Rs. ".$row3['sprice']*$row2['qtyy']; ?></p>
           </div>

         </div>
           <?php
			 }
		 }
		   ?>
       </div>

       <div class="row">
         <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12 inner_order_wrap sub_total_wrap">
           <span>Subtotal</span><span style="float:right;">
		   <?php
		 $sql2="SELECT * FROM `addtolist` WHERE `sessionid`='".$_SESSION['mob']."'";
		 $rs2=mysqli_query($conn,$sql2);
		 while($row2=mysqli_fetch_array($rs2))
		 {

		    $sql3="SELECT * FROM `product` WHERE `skucode`='".$row2['skucode']."'";
			 $rs3=mysqli_query($conn,$sql3);
			 while($row3=mysqli_fetch_array($rs3))
			 {
				 $total=($row3['sprice']*$row2['qtyy'])+$total;

			 }

		 }
		  echo "Rs. ".$total;
		 ?>
         </span>
         </div>
       </div>

       <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 prod_coupon_code">
           <form>
             <span>
               <input class="form-control form_wid" type="text" name="Coupon" id="coupon" placeholder="Gift card or discount code" required>
               <button class="btn btn-success col-md-3 pull-right" id="apply">Apply Coupon</button>
             </span>
           </form>
         </div>
       </div>

       <div class="row">
         <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 del_type bg_col">
           <span class="line_h">Delivery Type</span>
           <span class="del_type line_h">Normal</span>
           <span class="line_h" style="float:right;">Free</span>
         </div>
       </div>

       <div class="row">
         <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 bottom_wrap bg_col">
           <span class="line_h">Total</span>
           <span class="line_h" style="float:right;"><?php echo "Rs. ".$total; ?></span>
         </div>
       </div>

     </div>
        <div class="form-group btn-checkout">
          <button type="submit" class="btn btn-warning btn_payment_confirmation" onClick="payMethod(<?php echo $_SESSION['mob']; ?>,<?php echo $total; ?>,'<?php echo $uid; ?>')">
            CONTINUE TO CHECKOUT
          </button>
        </div>
    </div>

    <div class="container-fluid">
    	<div class="row">
    		<?php echo $desktop_footer; ?>
    	</div>
    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
     </div>
    </body>
</html>

<?php } else { ?>

  <!DOCTYPE html>
  <?php
  include("connect.php");
  include("analytics.php");
  $total=0;
session_start();
if($_SESSION['mob']=="")
{
	echo '<script>alert("Your session has been expired"); window.location.href="../loginUser.php??urlRD=your_cart.php";</script>';
}
  ?>

  <html lang="en">
    <head>
    <!--  Attach Js files  -->
    <script src="jss/plusQty.js"></script>
    <script src="jss/payMethod.js"></script>
    <script src="jss/removeItems.js"></script>
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
      <link href="css/your_cart.css" rel="stylesheet">
      <link href="css/font-awesome.css" rel="stylesheet">
      <link href="css/owl.carousel.css" rel="stylesheet">
      <link href="css/owl.theme.default.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
    </head>
    <body>
    <div class="container-fluid">
     <div class="your_cart_order">
       <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <span class="t_sp">Your Cart</span>
         </div>
       </div>
       <div class="row">
           <?php
		 $sql2="SELECT * FROM `addtolist` WHERE `sessionid`='".$_SESSION['mob']."'";
		 $rs2=mysqli_query($conn,$sql2);
		 while($row2=mysqli_fetch_array($rs2))
		 {
			 $uid=$row2['uid'];

		    $sql3="SELECT * FROM `product` WHERE `skucode`='".$row2['skucode']."'";
			 $rs3=mysqli_query($conn,$sql3);
			 while($row3=mysqli_fetch_array($rs3))
			 {
		 ?>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 inner_order_wrap top_prod_wrap">

           <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3 prod_image">

		   ?>
               <img src="<?php echo $row3['url']; ?>"  class="image">

           </div>
           <div class="col-lg-5 col-md-5 col-xs-5 col-sm-5 prod_detail">
             <h4><?php echo $row3['name']; ?></h4>
            <!--  <h5>2.5 feet Tall</h5>  -->
             <p></p>

           </div>
           <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
             <p class="rounded_icon"><i class="fa fa-plus icon_col_pay" aria-hidden="true" onClick="plusQty('<?php echo $row2['skucode']; ?>',<?php echo $_SESSION['mob']; ?>,<?php echo $row2['qtyy']; ?>,'add')"></i></p>
             <p><?php echo $row2['qtyy']; ?></p>
             <p class="rounded_icon"><i class="fa fa-minus icon_col_pay" aria-hidden="true" onClick="plusQty('<?php echo $row2['skucode']; ?>',<?php echo $_SESSION['mob']; ?>,<?php echo $row2['qtyy']; ?>,'minus')"></i></p>
           </div>
           <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
             <p><i class="fa fa-trash icon_col_pay" aria-hidden="true" onClick="removeItems(<?php echo $row2['sr']; ?>)"></i></p>
             <p><?php echo "Rs. ".$row3['sprice']*$row2['qtyy']; ?></p>
           </div>

         </div>
           <?php
			 }
		 }
		   ?>
       </div>

       <div class="row">
         <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12 inner_order_wrap sub_total_wrap">
           <span>Subtotal</span><span style="float:right;">
		   <?php
		 $sql2="SELECT * FROM `addtolist` WHERE `sessionid`='".$_SESSION['mob']."'";
		 $rs2=mysqli_query($conn,$sql2);
		 while($row2=mysqli_fetch_array($rs2))
		 {

		    $sql3="SELECT * FROM `product` WHERE `skucode`='".$row2['skucode']."'";
			 $rs3=mysqli_query($conn,$sql3);
			 while($row3=mysqli_fetch_array($rs3))
			 {
				 $total=($row3['sprice']*$row2['qtyy'])+$total;

			 }

		 }
		  echo "Rs. ".$total;
		 ?>
         </span>
         </div>
       </div>

       <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 prod_coupon_code">
           <form>
             <input class="form-control col-md-2" type="text" name="Coupon" id="coupon" placeholder="Gift card or discount code" required>
             <button class="btn btn-default col-md-3" id="apply">Apply Coupon</button>
           </form>
         </div>
       </div>

       <div class="row">
         <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
           <span class="line_h">Delivery Type</span>
           <span class="del_type line_h">Normal</span>
           <span class="line_h" style="float:right;">Free</span>
         </div>
       </div>

       <div class="row">
         <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 bottom_wrap">
           <span class="line_h">Total</span>
           <span class="line_h" style="float:right;"><?php echo "Rs. ".$total; ?></span>
         </div>
       </div>

     </div>
        <div class="form-group btn-checkout">
          <button type="submit" class="btn btn-warning btn_payment_confirmation" onClick="payMethod(<?php echo $_SESSION['mob']; ?>,<?php echo $total; ?>,'<?php echo $uid; ?>')">
            CONTINUE TO CHECKOUT
          </button>
        </div>
    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
     </div>
    </body>
</html>
<?php } ?>
