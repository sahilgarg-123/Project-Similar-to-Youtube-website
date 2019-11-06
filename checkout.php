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
    <!--  added external JS  -->
    <script src="jss/choosePayM.js"></script>
    
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
         <span style="float:left;"><i class="fa fa-angle-left" onclick="goBack()" style="color:#919191;font-size:4rem;cursor:pointer"></i></span>
         <span style="color:#000;font-size:2.5rem;text-align:center;">Checkout</span>
       </div>
       <div id="exTab1">
         <ul  class="nav nav-pills">
           <li class="active">
             <a  href="#1a" data-toggle="tab">Shipping</a>
           </li>
           <li>
             <a href="https://www.prabhubhakti.com/payment_method.php">Payment</a>
           </li>
         </ul>
			<div class="tab-content clearfix">
			  <div class="tab-pane active" id="1a">
          <div id="exTab2" class="container-fluid">
            <hr class="hr_l_ch">
            <ul class="nav nav-tabs">
              <li class="active">
                <a  href="#1" data-toggle="tab">New Address</a>
              </li>
              <li>
                <a href="#2" data-toggle="tab">Saved Address</a>
              </li>
            </ul>
            <div class="tab-content ">
              <div class="tab-pane active" id="1">
                <div class="row">
                  <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                    <?php
					
					$sql1="SELECT * FROM `users` WHERE mob='".$user."'";
					$rs1=mysqli_query($conn,$sql1);
					while($row1=mysqli_fetch_array($rs1))
					{
					?>
                      <div class="form-group">
                        <input type="text" class="form-control form_styl" id="name1" placeholder="Name" name="name1" value="<?php echo $row1['name']; ?>">
                      </div>
                      <div class="form-group">
                        <input type="number" maxlength="10" class="form-control form_styl" id="phone" placeholder="Phone" name="phone" value="<?php echo $row1['mob']; ?>">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control form_styl" id="email" placeholder="Email" name="email" value="<?php echo $row1['mail']; ?>">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form_styl" id="address" placeholder="Address" name="address">
                      </div>
                        <div class="form-group col-md-6 col-lg-6 col-sm-6 col-xs-6 for_sep left_sep">
                          <label for="city">City:</label>
                          <input type="text" class="form-control" id="city" name="city" value="<?php echo $row1['cityy']; ?>">
                        </div>

                        <div class="form-group col-md-6 col-lg-6 col-sm-6 col-xs-6 for_sep">
                          <label for="state">State:</label>
                          <input type="text" class="form-control" id="state" name="state" value="<?php echo $row1['statee']; ?>">
                        </div>

                        <div class="form-group col-md-6 col-lg-6 col-sm-6 col-xs-6 for_sep left_sep">
                          <label for="country">Country:</label>
                           <input type="text" class="form-control" id="country" name="country" value="INDIA" disabled>
                        </div>

                        <div class="form-group col-md-6 col-lg-6 col-sm-6 col-xs-6 for_sep">
                          <label for="zipcode">Pincode:</label>
                          <input type="number" class="form-control" id="Pincode" name="Pincode">
                        </div>
                        <?php
					}
						?>
                      <button type="submit" class="btn btn-warning btn-payment" onClick="choosePayM(<?php echo $value; ?>,<?php echo $user; ?>,'<?php echo $uid; ?>')">
                        CONTINUE TO PAYMENT <i class="fa fa-arrow-right pull-right" aria-hidden="true" style="font-size:18px;"></i>
                      </button>
                 
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="2">
                <!-- saved Address -->
              </div>
            </div>
          </div>
				</div>
			</div>
  </div>

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
