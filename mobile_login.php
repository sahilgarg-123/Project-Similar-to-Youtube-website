<?php include ('index_header.php'); ?>

<?php if(!$DEVICE) { ?>

<?php } else { ?>
<!DOCTYPE html>
<?php
include("connect.php");
include("analytics.php");
// url redirect from where user came here
$urlData=$_GET['urlRD'];
?>

<html lang="en">
  <head>
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
    <link href="css/mobile_login.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
    
     <script src="jss/validateSignup.js"></script>
    <script src="jss/registerUser.js"></script>
    <script src="jss/validateLogin.js"></script>
    
    
    
    
  </head>
  <body>
    <div class="wrapper" id="main_header">
      <div class="top-header top_header_mobile">
         <div class="container">
            <div class="col-md-4 col-sm-6 col-xs-12 left">
              <span><i class="fa fa-bars" style="color:#FF7E01;font-size:2.2rem;margin-left:-14rem;margin-top: 2.3rem;"></i></span>
               <a href="#"><img src="images/prabhuBhakti.png"></a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 center">
               <form class="sear_form_inpi">
                  <input type="text" name="search" placeholder="Search.." required>
                  <!-- <span><i class="fa fa-search" aria-hidden="true" style="color:#000;font-size:2.2rem;margin-right:10px;"></i></span> -->
                  <span><i class="fa fa-shopping-cart" style="color:#000;font-size:2.2rem;"></i></span>
               </form>
            </div>

         </div>
      </div>
    </div>
    <div class="row login_ban_wrap">
      <div class="login_banner_image">
        <img src="images/1.jpg" class=".i-amphtml-layout-size-defined .i-amphtml-fill-content .i-amphtml-replaced-content, .i-amphtml-screen-reader amphtml-fill-content">
      </div>
    </div>

<div class="row">
  <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
    <div id="exTab1">
      <ul  class="nav nav-pills">
			<li class="active">
        <a class="log_h_tex" href="#1a" data-toggle="tab">
          <h4>Welcome</h4>
          <h5>Login</h5>
        </a>
			</li>
			<li>
        <a class="log_h_tex" href="#2a" data-toggle="tab">
          <h4>New Users?</h4>
          <h5>Register</h5>
        </a>
			</li>
		</ul>
    <hr class="horizontal_line m_hr_li">

			<div class="tab-content clearfix">
			  <div class="tab-pane active" id="1a">
              <form method="POST" enctype="multipart/form-data" class="m_login_form" action="loginUserr.php">
                <div class="form-group">
                  <input type="number" maxlength="10" class="form-control" id="mob" name="mob" placeholder="Mobile Number">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
                </div>
                <input type="text" style="display:none" id="urlData" name="urlData" value="<?php echo $urlData; ?>">
                <div class="form-group btn_center">
                  <button type="submit" class="btn btn-warning btn_size">Login</button>
                </div>
                <div class="checkbox" style="text-align:center;">
                  <label style="color:#FF3A1F;font-size:1.5rem;">Forgot Password?</label>
                </div>
              </form>
				</div>
				<div class="tab-pane" id="2a">
          <!-- register -->
          <form action="#" method="post"  class="m_login_form" onSubmit="return ValidateForm1(this)">
            <div class="form-group">
              <input type="text" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="form-group">
              <input type="number" class="form-control" id="mob" name="mob" maxlength="10" placeholder="Mobile">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="mail" name="mail" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="city" name="city" placeholder="City">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="state" name="state" placeholder="State">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="cpwd" name="cpwd" placeholder="Confirm Password">
            </div>
            <div class="form-group btn_center">
              <button type="submit" class="btn btn-warning btn_size">Register</button>
            </div>
          </form>
				</div>
			</div>
  </div>
</div>
</div>

<div class="row">
  <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 m_l_pol">
    By Signing in you are agreeing to term of use </br>
    & Privacy Policy of Prabhu Bhakti !
  </div>
</div>

<div class="row">
  <div class="container-fluid padding-0">
  <footer class="detail-action-bar flex justify-end fixed-tool-bar">
  	 <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
  		 <div class="top-footer_mobile">
  			 <span><img src="images/icons/home_icon.png"></span>
  			 <span><img src="images/icons/icon_video.png"></span>
  			 <span><img src="images/icons/icon_shop.png"></span>
  			 <span><img src="images/icons/icon_chat.png"></span>
  			 <div class="top_footer_bottom_text">
  				 <span class="f-b-tx">Home</span>
  				 <span class="f-b-tx">Videos</span>
  				 <span class="f-b-tx">Product</span>
  				 <span class="f-b-tx">Chat</span>
  			 </div>
  		 </div>
  		 </div>
  </footer>
  </div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
  </html>


<?php } ?>
