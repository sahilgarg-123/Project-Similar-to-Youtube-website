<?php include ('index_header.php'); ?>
<?php
include("connect.php");
// prod_type have sr value of product
$prod_type=$_GET['prod_type'];
if($_GET['uid']=="")
{
	$uid="PrabhBhakti";
}
else
{
	$uid=$_GET['uid'];
}

session_start();
 ?>
<?php if(!$DEVICE) { ?>
	<!DOCTYPE html>
  <?php
  include("connect.php");
  include("analytics.php");
  // product view counter
  include("product_view_counter.php");
	include('includes/desktop_config.php');
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
      <link href="css/prod_desc.css" rel="stylesheet">
      <link href="css/font-awesome.css" rel="stylesheet">
      <link href="css/search_icon.css" rel="stylesheet">
      <link href="css/owl.carousel.css" rel="stylesheet">
      <link href="css/owl.theme.default.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">

      <!--  Attach Additional JS  -->
      <script src="jss/saveAddtolist.js"></script>

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
	        <a href="#"><i class="fa fa-youtube"></i></a>
	        <a href="your_cart.php" title="Your cart items">
						<span style="position:relative"><span style="position:absolute; right:5px; color:#000; background-color:#FFF; border-radius:60%; padding-left:4px; padding-right:4px; margin-top:2px;"><?php include("sort_code/loadCart.php"); ?></span>
							<i class="fa fa-shopping-cart" style="color:#fff;font-size:2.2rem;"></i></span></a>
	        <br><br>
	        <span><a href="loginUser.php?urlRD=prod_desc.php">Login/Signup</a></span>
	      </div>
	    </div>
	    </div>
			 <?php echo $desktop_top_header;
			 ?>
			<!-- end of header -->

     <div class="container" style="background-color:#eee;">
      <div class="row">
      	<div class="col-md-12 col-sm-12 col-xs-12 prod_desc_banner">
      	  <section class="slider Prod_desc_slider">
      			<div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
      				<!-- Wrapper for slides -->
      				<div class="carousel-inner">
                    <!-- Sliding image on the basis of sr of products -->

                    <?php
					$srs=0;
					$prodSql="SELECT * FROM `product` WHERE sr='".$_GET['prod_type']."'";
					$prodRs=mysqli_query($conn,$prodSql);
					while($prodRow=mysqli_fetch_array($prodRs))
					{
						$srs=$srs+1;
						if($srs==1)
						{
					?>

      					<div class="item active">
                         <center> <input type="text" id="toast" value="Hello" style="border:hidden; background-color:#999; text-align:center; width:200px; height:50px; display:none; font-size:20px; opacity:50%; border-radius:20"></center>
      						<img src="<?php echo $prodRow['url']; ?>">
      					</div>
                        <?php
						} else {
						?>

      					<div class="item">
      						<img src="<?php echo $prodRow['url']; ?>">
      					</div>
                        <?php
						}
					}
					?>
      				</div>
      			</div>
      		</section>
      	</div>
      </div>

      <div class="row">
      <?php
	  $proSql="SELECT * FROM `product` WHERE sr='".$_GET['prod_type']."'";
	  $proRs=mysqli_query($conn,$proSql);
	  while($proRow=mysqli_fetch_array($proRs))
	  {
		  $skucode=$proRow['skucode'];
	  ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prod_det_title">
          <h5><?php echo $proRow['name']; ?></h5>
          <span style="color:#FF7601;font-size:2rem;" class="in_sp_tx"><?php echo "Rs.".$proRow['sprice']; ?></span>
          <span>
            <span>
              <span style="text-decoration:line-through;text-decoration-color:#FD0000;text-underline-position: right under;font-size:2rem;"><?php echo "Rs.".$proRow['mrp']; ?></span>
              <span style="color:#FF2E19">(<?php
              echo intval((1-($proRow['sprice']/$proRow['mrp']))*100)."% Off";

			  ?>)</span>
            </span>
          </span>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prod_detail_desc">
         <!-- <h4><span>Dimension- 5cm*2cm*3cm</span></h4>
          <h4><span>Weight- 35gram</span></h4>
          <h4><span>Material-Gold Plated Chain</span></h4> -->
        </div>
      </div>
<?php
	  }
	  ?>

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prod_video_desc">
        <!-- Skucode based we will search product video , product skucode will be tag in seo for video id  -->
		<?php
		$sql1="SELECT * FROM `videoseo` WHERE tag='".$skucode."'";
		$rs1=mysqli_query($conn,$sql1);
		while($row1=mysqli_fetch_array($rs1))
		{
		?>
            <iframe width="345px" height="200px" src="https://www.youtube.com/embed/<?php echo $row1['videoID']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <?php
		}
		?>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prod_video_detdesc">
        <?php
		  $proSql1="SELECT * FROM `product` WHERE sr='".$_GET['prod_type']."'";
	  $proRs1=mysqli_query($conn,$proSql);
	  while($proRow1=mysqli_fetch_array($proRs1))
	  {
		?>
           <p><?php echo $proRow1['pdesc']; ?></p>

        </div>
      </div>

      <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 prod_cart">
            <button class="btn btn-default btn-dimension" onClick="saveAddtolist('<?php echo $proRow1['skucode']; ?>',1,'<?php echo $proRow1['sr']; ?>','<?php echo $_SESSION['mob']; ?>','b1','<?php echo $uid; ?>')">Add To Cart</button>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 prod_buy">
            <button class="btn btn-warning btn-dimension" onClick="saveAddtolist('<?php echo $proRow1['skucode']; ?>',1,'<?php echo $proRow1['sr']; ?>','<?php echo $_SESSION['mob']; ?>','c1','<?php echo $uid; ?>')">Buy Now</button>
          </div>
      </div>
	   <?php
	  }
	  ?>
	</div>

		<div class="container-fluid">
			<div class="row">
				<?php echo $desktop_footer; ?>
			</div>
		</div>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.js"></script>
      <script src="js/owl.carousel.js"></script>


      <script>

      	$(document).ready(function() {

      var owl = $("#owl-demo");

      owl.owlCarousel({
      	items : 4, //10 items above 1000px browser width
      	itemsDesktop : [1000,5], //5 items between 1000px and 901px
      	itemsDesktopSmall : [900,3], // betweem 900px and 601px
      	itemsTablet: [600,2], //2 items between 600 and 0
      	itemsMobile : false,
      	navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
      	 // itemsMobile disabled - inherit from itemsTablet option
      });

      // Custom Navigation Events
      $(".next").click(function(){
      owl.trigger('owl.next');
      })
      $(".prev").click(function(){
      owl.trigger('owl.prev');
      })


      var owl = $("#owl-demo1");

      owl.owlCarousel({
      	items : 4, //10 items above 1000px browser width
      	itemsDesktop : [1000,5], //5 items between 1000px and 901px
      	itemsDesktopSmall : [900,3], // betweem 900px and 601px
      	itemsTablet: [600,2], //2 items between 600 and 0
      	itemsMobile : false,
      	navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
      	 // itemsMobile disabled - inherit from itemsTablet option
      });

      // Custom Navigation Events
      $(".next").click(function(){
      owl.trigger('owl.next');
      })
      $(".prev").click(function(){
      owl.trigger('owl.prev');
      })


      var owl = $("#owl-demo2");

      owl.owlCarousel({
      	items : 5, //10 items above 1000px browser width
      	itemsDesktop : [1000,5], //5 items between 1000px and 901px
      	itemsDesktopSmall : [900,3], // betweem 900px and 601px
      	itemsTablet: [600,2], //2 items between 600 and 0
      	itemsMobile : false,
      	navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
      	 // itemsMobile disabled - inherit from itemsTablet option
      });

      // Custom Navigation Events
      $(".next").click(function(){
      owl.trigger('owl.next');
      })
      $(".prev").click(function(){
      owl.trigger('owl.prev');
      })


      var owl = $("#owl-demo3");

      owl.owlCarousel({
      	items : 4, //10 items above 1000px browser width
      	itemsDesktop : [1000,5], //5 items between 1000px and 901px
      	itemsDesktopSmall : [900,3], // betweem 900px and 601px
      	itemsTablet: [600,2], //2 items between 600 and 0
      	itemsMobile : false,
      	navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
      	 // itemsMobile disabled - inherit from itemsTablet option
      });

      // Custom Navigation Events
      $(".next").click(function(){
      owl.trigger('owl.next');
      })
      $(".prev").click(function(){
      owl.trigger('owl.prev');
      })

      var owl = $("#owl-demo4");

      owl.owlCarousel({
      	items : 4, //10 items above 1000px browser width
      	itemsDesktop : [1000,5], //5 items between 1000px and 901px
      	itemsDesktopSmall : [900,3], // betweem 900px and 601px
      	itemsTablet: [600,2], //2 items between 600px and 481px
      	itemsMobile : [480,1],//2 items between 480px and 0
      	navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
      	 // itemsMobile disabled - inherit from itemsTablet option
      });

      // Custom Navigation Events
      $(".next").click(function(){
      owl.trigger('owl.next');
      })
      $(".prev").click(function(){
      owl.trigger('owl.prev');
      })

      });

      </script>

    </body>
    </html>
<?php } else { ?>
  <!DOCTYPE html>
  <?php
  include("connect.php");
  include("analytics.php");
  // product view counter
  include("product_view_counter.php");
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
      <link href="css/prod_desc.css" rel="stylesheet">
      <link href="css/font-awesome.css" rel="stylesheet">
      <link href="css/search_icon.css" rel="stylesheet">
      <link href="css/owl.carousel.css" rel="stylesheet">
      <link href="css/owl.theme.default.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">

      <!--  Attach Additional JS  -->
      <script src="jss/saveAddtolist.js"></script>

    </head>
    <body>
      <div class="row">
      <div class="wrapper" id="main_header">
        <div class="top-header top_header_mobile">
           <div class="container-fluid">
              <div class="col-md-4 col-sm-6 col-xs-12 left">
                <span><i class="fa fa-bars" style="color:#FF7E01;font-size:2.2rem;margin-left:-14rem;margin-top: 2.3rem;"></i></span>
                 <a href="#"><img src="images/prabhuBhakti.png"></a>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 center">
                <form id="demo-2" class="sear_form_inpi">
                  <input type="search" name="search" placeholder="Search.." required>
                  <a href="your_cart.php" title="Your cart items"><span style="position:relative"><span style="position:absolute; left:12px; color:#FFF; background-color:#000; border-radius:80%; padding-left:5px; padding-right:5px; margin-top:1px;"><?php include("sort_code/loadCart.php"); ?></span><i class="fa fa-shopping-cart" style="color:#000;font-size:2.2rem;"></i></span></a>
                </form>
              </div>

           </div>
        </div>
      </div>
    </div>

      <div class="row">
      	<div class="col-md-12 col-sm-12 col-xs-12 prod_desc_banner">
      	  <section class="slider Prod_desc_slider">
      			<div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
      				<!-- Wrapper for slides -->
      				<div class="carousel-inner">
                    <!-- Sliding image on the basis of sr of products -->

                    <?php
					$srs=0;
					$prodSql="SELECT * FROM `product` WHERE sr='".$_GET['prod_type']."'";
					$prodRs=mysqli_query($conn,$prodSql);
					while($prodRow=mysqli_fetch_array($prodRs))
					{
						$srs=$srs+1;
						if($srs==1)
						{
					?>

      					<div class="item active">
                         <center> <input type="text" id="toast" value="Hello" style="border:hidden; background-color:#999; text-align:center; width:200px; height:50px; display:none; font-size:20px; opacity:50%; border-radius:20"></center>
      						<img src="<?php echo $prodRow['url']; ?>">
      					</div>
                        <?php
						} else {
						?>

      					<div class="item">
      						<img src="<?php echo $prodRow['url']; ?>">
      					</div>
                        <?php
						}
					}
					?>
      				</div>
      			</div>
      		</section>
      	</div>
      </div>


      <div class="row">
      <?php
	  $proSql="SELECT * FROM `product` WHERE sr='".$_GET['prod_type']."'";
	  $proRs=mysqli_query($conn,$proSql);
	  while($proRow=mysqli_fetch_array($proRs))
	  {
		  $skucode=$proRow['skucode'];
	  ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prod_det_title">
          <h5><?php echo $proRow['name']; ?></h5>
          <span style="color:#FF7601;font-size:2rem;" class="in_sp_tx"><?php echo "Rs.".$proRow['sprice']; ?></span>
          <span>
            <span>
              <span style="text-decoration:line-through;text-decoration-color:#FD0000;text-underline-position: right under;font-size:2rem;"><?php echo "Rs.".$proRow['mrp']; ?></span>
              <span style="color:#FF2E19">(<?php
              echo intval((1-($proRow['sprice']/$proRow['mrp']))*100)."% Off";

			  ?>)</span>
            </span>
          </span>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prod_detail_desc">
         <!-- <h4><span>Dimension- 5cm*2cm*3cm</span></h4>
          <h4><span>Weight- 35gram</span></h4>
          <h4><span>Material-Gold Plated Chain</span></h4> -->
        </div>
      </div>
<?php
	  }
	  ?>

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prod_video_desc">
        <!-- Skucode based we will search product video , product skucode will be tag in seo for video id  -->
		<?php
		$sql1="SELECT * FROM `videoseo` WHERE tag='".$skucode."'";
		$rs1=mysqli_query($conn,$sql1);
		while($row1=mysqli_fetch_array($rs1))
		{
		?>
            <iframe width="345px" height="200px" src="https://www.youtube.com/embed/<?php echo $row1['videoID']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <?php
		}
		?>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prod_video_detdesc">
        <?php
		  $proSql1="SELECT * FROM `product` WHERE sr='".$_GET['prod_type']."'";
	  $proRs1=mysqli_query($conn,$proSql);
	  while($proRow1=mysqli_fetch_array($proRs1))
	  {
		?>
           <p><?php echo $proRow1['pdesc']; ?></p>

        </div>
      </div>

      <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 prod_cart prod_top">
            <button class="btn btn-default btn-dimension" onClick="saveAddtolist('<?php echo $proRow1['skucode']; ?>',1,'<?php echo $proRow1['sr']; ?>','<?php echo $_SESSION['mob']; ?>','b1','<?php echo $uid; ?>')">Add To Cart</button>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 prod_buy prod_top">
            <button class="btn btn-warning btn-dimension" onClick="saveAddtolist('<?php echo $proRow1['skucode']; ?>',1,'<?php echo $proRow1['sr']; ?>','<?php echo $_SESSION['mob']; ?>','c1','<?php echo $uid; ?>')">Buy Now</button>
          </div>
      </div>

			<div class="container-fluid">
				<div class="row">
					<?php echo $desktop_footer; ?>
				</div>
			</div>
	   <?php
	  }
	  ?>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.js"></script>
      <script src="js/owl.carousel.js"></script>


      <script>

      	$(document).ready(function() {

      var owl = $("#owl-demo");

      owl.owlCarousel({
      	items : 4, //10 items above 1000px browser width
      	itemsDesktop : [1000,5], //5 items between 1000px and 901px
      	itemsDesktopSmall : [900,3], // betweem 900px and 601px
      	itemsTablet: [600,2], //2 items between 600 and 0
      	itemsMobile : false,
      	navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
      	 // itemsMobile disabled - inherit from itemsTablet option
      });

      // Custom Navigation Events
      $(".next").click(function(){
      owl.trigger('owl.next');
      })
      $(".prev").click(function(){
      owl.trigger('owl.prev');
      })


      var owl = $("#owl-demo1");

      owl.owlCarousel({
      	items : 4, //10 items above 1000px browser width
      	itemsDesktop : [1000,5], //5 items between 1000px and 901px
      	itemsDesktopSmall : [900,3], // betweem 900px and 601px
      	itemsTablet: [600,2], //2 items between 600 and 0
      	itemsMobile : false,
      	navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
      	 // itemsMobile disabled - inherit from itemsTablet option
      });

      // Custom Navigation Events
      $(".next").click(function(){
      owl.trigger('owl.next');
      })
      $(".prev").click(function(){
      owl.trigger('owl.prev');
      })


      var owl = $("#owl-demo2");

      owl.owlCarousel({
      	items : 5, //10 items above 1000px browser width
      	itemsDesktop : [1000,5], //5 items between 1000px and 901px
      	itemsDesktopSmall : [900,3], // betweem 900px and 601px
      	itemsTablet: [600,2], //2 items between 600 and 0
      	itemsMobile : false,
      	navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
      	 // itemsMobile disabled - inherit from itemsTablet option
      });

      // Custom Navigation Events
      $(".next").click(function(){
      owl.trigger('owl.next');
      })
      $(".prev").click(function(){
      owl.trigger('owl.prev');
      })


      var owl = $("#owl-demo3");

      owl.owlCarousel({
      	items : 4, //10 items above 1000px browser width
      	itemsDesktop : [1000,5], //5 items between 1000px and 901px
      	itemsDesktopSmall : [900,3], // betweem 900px and 601px
      	itemsTablet: [600,2], //2 items between 600 and 0
      	itemsMobile : false,
      	navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
      	 // itemsMobile disabled - inherit from itemsTablet option
      });

      // Custom Navigation Events
      $(".next").click(function(){
      owl.trigger('owl.next');
      })
      $(".prev").click(function(){
      owl.trigger('owl.prev');
      })

      var owl = $("#owl-demo4");

      owl.owlCarousel({
      	items : 4, //10 items above 1000px browser width
      	itemsDesktop : [1000,5], //5 items between 1000px and 901px
      	itemsDesktopSmall : [900,3], // betweem 900px and 601px
      	itemsTablet: [600,2], //2 items between 600px and 481px
      	itemsMobile : [480,1],//2 items between 480px and 0
      	navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
      	 // itemsMobile disabled - inherit from itemsTablet option
      });

      // Custom Navigation Events
      $(".next").click(function(){
      owl.trigger('owl.next');
      })
      $(".prev").click(function(){
      owl.trigger('owl.prev');
      })

      });

      </script>

    </body>
    </html>
<?php } ?>
