<?php include ('index_header.php'); ?>

<?php if(!$DEVICE) { ?>
<!DOCTYPE html>
<?php
include("connect.php");
$searchid=$_GET['search'];
if($_SERVER['HTTP_HOST']=="prabhubhakti.com")
{
	echo '<script>window.location.assign("https://www.prabhubhakti.com");</script>';

}

include("analytics.php");

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
<!--  active users check
<script>
setInterval(function(){
activeUser('');
},3000);
</script> -->
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
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <!--Search videos internal searching alogo-->
    <?php
if($searchid=="")
{
}
else
{
	echo '<script>window.location.href="videoListiNg.php?search='.$searchid.'";</script>';
}

?>
  </head>
  <body>

    <div class="wrapper">
      <header>
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
            <a href="#"><i class="fa fa-shopping-cart"></i></a>
            <br><br>
            <span><a href="loginUser.php?urlRD=">Login/Signup</a></span>
          </div>
        </div>
        </div>
        <div class="clearfix"></div>
        <div class="bottom-header">

          <nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown"><a href="videoListiNg.php?search=astrology" class="dropdown-toggle" data-toggle="dropdown">Astrology <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <div class="container">
            <li class="col-md-3 col-sm-6 col-xs-12">
              <div class="left">
                <a href="videoListiNg.php?search=astrology">
                      <div class="img-wrp">
                          <img src="images/astrology.jpg" alt="" class="image">
                          <div class="overlay">
                              <div class="text">Astrology</div>
                          </div>
                      </div>
                  </a>
                </div>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-12">
              <div class="left">
                <a href="videoListiNg.php?search=rashifal">
                      <div class="img-wrp">
                          <img src="images/rashifal.jpg" alt="" class="image">
                          <div class="overlay">
                              <div class="text">Rashifal</div>
                          </div>
                      </div>
                  </a>
              </div>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-12">
              <div class="left">
                <a href="videoListiNg.php?search=palmistry">
                      <div class="img-wrp">
                          <img src="images/palmistry.jpg" alt="" class="image">
                          <div class="overlay">
                             <div class="text">Palmistry</div>
                          </div>
                      </div>
                  </a>
              </div>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-12">
              <div class="left">
                <a href="videoListiNg.php?search=vastu">
                      <div class="img-wrp">
                          <img src="images/vastu.jpg" alt="" class="image">
                          <div class="overlay">
                          <div class="text">Vastu</div>
                          </div>
                      </div>
                  </a>
              </div>
            </li>
          </div>
          </ul>
        </li>
        <li class="dropdown"><a href="videoListiNg.php?search=pauranik" class="dropdown-toggle" data-toggle="dropdown">Mythology <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <div class="container">
            <li class="col-md-3 col-sm-6 col-xs-12">
              <div class="left">
                <a href="videoListiNg.php?search=mahabharat">
                      <div class="img-wrp">
                          <img src="images/mahabharat.jpg"  class="image">
                          <div class="overlay">
                              <div class="text">Mahabharat</div>
                          </div>
                      </div>
                  </a>
              </div>
              </li>

            <li class="col-md-3 col-sm-6 col-xs-12">
              <div class="left">
                <a href="videoListiNg.php?search=ramayan">
                      <div class="img-wrp">
                          <img src="images/ramayan.jpg"  class="image">
                          <div class="overlay">
                              <div class="text">Ramayan</div>
                          </div>
                      </div>
                  </a>
              </div>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-12">
              <div class="left">
                 <a href="videoListiNg.php?search=upnishad">
                      <div class="img-wrp">
                          <img src="images/upnishad.jpg"  class="image">
                          <div class="overlay">
                             <div class="text">Upnishad</div>
                          </div>
                      </div>
                  </a>
              </div>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-12">
              <div class="left">
                <a href="videoListiNg.php?search=Puranic">
                      <div class="img-wrp">
                          <img src="images/puranic-katha.jpg"  class="image">
                          <div class="overlay">
                          <div class="text">Puranic katha</div>
                          </div>
                      </div>
                  </a>
              </div>
            </li>
          </div>
          </ul>
        </li>
        <li class="dropdown"><a href="ganesha" class="dropdown-toggle" data-toggle="dropdown">God <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <div class="container">
            <li class="col-md-3 col-sm-6 col-xs-12">
              <div class="left">
                <a href="videoListiNg.php?search=astrology">
                      <div class="img-wrp">
                          <img src="images/krishna-leela.jpg"  class="image">
                          <div class="overlay">
                              <div class="text">Astrology</div>
                          </div>
                      </div>
                  </a>
              </div>
              </li>

            <li class="col-md-3 col-sm-6 col-xs-12">
              <ul class="menu">
                <li><a href="videoListiNg.php?search=shiv">Shiv</a></li>
                <li><a href="videoListiNg.php?search=hanuman">Hanuman</a></li>
                <li><a href="videoListiNg.php?search=shani">Shani</a></li>
                <li><a href="videoListiNg.php?search=durga">Durga</a></li>
              </ul>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-12">
              <div class="left">
                <a href="videoListiNg.php?search=vastu">
                      <div class="img-wrp">
                          <img src="images/krishna-leela.jpg"  class="image">
                          <div class="overlay">
                          <div class="text">Vastu</div>
                          </div>
                      </div>
                  </a>
              </div>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-12">
              <ul class="menu">
                <li><a href="videoListiNg.php?search=vishnu">Vishnu</a></li>
                <li><a href="videoListiNg.php?search=krishan">Krishna</a></li>
                <li><a href="videoListiNg.php?search=lakshmi">Lukshmi</a></li>
                <li><a href="videoListiNg.php?search=ganesh">Ganesha</a></li>
              </ul>
            </li>
          </div>
          </ul>
        </li>
        <li><a href="shopMe.php">Shop</a></li>
        <li><a href="liveTV.php">Temple</a></li>
      </ul>

    </div>
  </div>
</nav>
        </div>



      </header>


      <section class="slider">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/1.jpg">
    </div>

    <div class="item">
      <img src="images/2.jpg">
    </div>

    <div class="item">
      <img src="images/3.jpg">
    </div>
  </div>


  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 </section>



<section class="latest-videos">
<div class="container">
  <h2>Latest Videos</h2>
<div id="owl-demo" class="owl-carousel owl-theme">
<?php
$sql="SELECT * FROM `videos` ORDER BY `sr` DESC LIMIT 10";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
?>
  <div class="item"><h1><a href="mytube.php?videoid=<?php echo $row['videoid']; ?>"><img src="<?php echo $row['thumbnail'];?>"> <span><?php echo $row['videoT'];?></span></a></h1></div>
  <?php
}
?>
</div>
</div>
</section>


<section class="latest-videos">
<div class="container">
  <h2>Trending Videos</h2>
<div id="owl-demo1" class="owl-carousel owl-theme">
<?php
$sql1="SELECT * FROM `videos` ORDER BY `priority`";
$result1=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($result1))
{
?>
  <div class="item"><h1><a href="mytube.php?videoid=<?php echo $row1['videoid']; ?>"><img src="<?php echo $row1['thumbnail'];?>"> <span><?php echo $row1['videoT'];?></span></a></h1></div>
   <?php
}
  ?>
</div>
</div>
</section>


<section class="latest-videos">
<div class="container">
  <h2>Best Seller</h2>
<div id="owl-demo2" class="owl-carousel owl-theme">
<?php
$sql2="SELECT * FROM `product` ORDER BY `view` DESC LIMIT 15";
$result2=mysqli_query($conn,$sql2);
while($row2=mysqli_fetch_array($result2))
{
?>
  <div class="item"><h1><a href="prod_desc.php?prod_type=<?php echo $row2['sr']; ?>"><img src="<?php echo $row2['url'];?>"> <span><?php echo $row2['name'];?></span><cite><h5><?php echo "Rs. ".$row2['sprice'];?></h5></cite></a></h1></div>
   <?php
}
  ?>
</div>
</div>
</section>




<section class="latest-videos">
<div class="container">
  <h2>Popular Videos</h2>
<div id="owl-demo3" class="owl-carousel owl-theme">
  <?php
$sql4="SELECT * FROM `views` ORDER  BY `view` DESC LIMIT 15";
$result4=mysqli_query($conn,$sql4);
while($row4=mysqli_fetch_array($result4))
{
$sql22="SELECT * FROM `videos` WHERE `videoid`='".$row4['videoid']."'";
$rs2=mysqli_query($conn,$sql22);
while($rrow2=mysqli_fetch_array($rs2))
{
?>
  <div class="item"><h1><a href="mytube.php?videoid=<?php echo $rrow2['videoid']; ?>"><img src="<?php echo $rrow2['thumbnail'];?>"> <span><?php echo $rrow2['videoT'];?></span></a></h1></div>
   <?php
}
}
  ?>
  </div>
</div>
</section>


<!-- products -->
<section class="latest-videos popular-videos">
<div class="container">
  <h2>Popular Product</h2>
<div id="owl-demo4" class="owl-carousel owl-theme">
<?php
$sql4="SELECT * FROM `product` ORDER BY `sr` DESC";
$result4=mysqli_query($conn,$sql4);
while($row4=mysqli_fetch_array($result4))
{
?>
  <div class="item"><h1><a href="prod_desc.php?prod_type=<?php echo $row4['sr']; ?>"><img src="<?php echo $row4['url'];?>">
  <mark>Rs. <?php echo $row4['sprice']; ?> <cite>Rs. <span><?php echo $row4['mrp']; ?></span></cite> <blockquote class="pull-right"><?php echo intval((1-($row4['sprice']/$row4['mrp']))*100)."% Off"; ?></blockquote></mark> <span><?php echo $row4['name'];?></span></a></h1></div>
   <?php
}
  ?>
</div>
</div>
</section>


<section class="advertisement">
  <div class="container"></div>
</section>


<footer>
  <div class="top-footer">
    <div class="container">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <h2>Quick Links</h2>
        <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Disclaimer</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms & Conditions</a></li>
          <li><a href="#">Shipping Policy</a></li>
          <li><a href="#">Return, Refund and Cancellation Policy </a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <h2>WE ARE USING SAFE PAYMENTS</h2>
        <ul class="payment">
        <li><img src="images/payment-1.png"></li>
        <li><img src="images/payment-2.png"></li>
        <li><img src="images/payment-3.png"></li>
        <li><img src="images/payment-4.png"></li>
      </ul>
        <h3>Secured By:</h3>
        <ul class="payment">
        <li><img src="images/payment-5.png"></li>
        <li><img src="images/payment-6.png"></li>
      </ul>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <h2>Contact Detail</h2>
        <ul class="address">
         <li><i class="fa fa-map"></i> <span>765, Golf Course Road, Gurgaon 122009 </span></li>
         <li><i class="fa fa-envelope"></i> <span><a href="mailto:thebhakti.com@gmail.com">thebhakti.com@gmail.com</a></span></li>
         <li><i class="fa fa-mobile"></i> <span>9999-47-4433</span></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="bottom-footer">
  <div class="container">
<p>Copyright &copy; 2017. All Rights Reserved.</p>
  </div>
  </div>
</footer>



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
<input type="hidden" id="latestVideos">
  </body>
</html>


<?php } else { ?>
	<!DOCTYPE html>
	<?php
	include("connect.php");
	@$searchid=$_GET['search'];
	if($_SERVER['HTTP_HOST']=="prabhubhakti.com")
	{
		echo '<script>window.location.assign("https://www.prabhubhakti.com");</script>';

	}

	include("analytics.php");

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
	<!--  active users check
	<script>
	setInterval(function(){
	activeUser('');
	},3000);
	</script> -->
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
			<link href="css/mobile_index.css" rel="stylesheet">
			<link href="css/search_icon.css" rel="stylesheet">
	    <link href="css/font-awesome.css" rel="stylesheet">
	    <link href="css/owl.carousel.css" rel="stylesheet">
	    <link href="css/owl.theme.default.css" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	        <!--Search videos internal searching alogo-->
	    <?php
	if($searchid=="")
	{
	}
	else
	{
		echo '<script>window.location.href="videoListiNg.php?search='.$searchid.'";</script>';
	}

	?>
	<style type="text/css">
	.top-header .center input[type="text"] {
    width: 14rem;
    border: solid 2px #000;
    color: #000;
    padding: 0.4rem;
    font-size: 14px;
    margin-top: -6.1px;
    border-radius: 18px;
    background: url(../images/search-icon.png) right center no-repeat;
    height: 28px;
}
	.latest-videos .owl-carousel .owl-nav.disabled {
    display: none !important;
    top: -60px;
    right: 10px;
    position: absolute;
}
.slider .carousel-control.left {
    background: none;
    display: none;
}
.slider .carousel-control.right {
    background: none;
    display: none;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2,
 .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4,
 .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6,
 .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8,
 .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10,
  .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
    position: relative;
    min-height: 1px;
    padding-right: 0px;
    padding-left: 0px;
}
	</style>
	  </head>
		<body>
			 <div class="wrapper" id="main_header">
				 <div class="top_banner_image">
					 <a href="https://play.google.com/store/apps/details?id=com.thebhakti">
						 <img src="images/icons/top_banner.png" class=".i-amphtml-layout-size-defined .i-amphtml-fill-content .i-amphtml-replaced-content, .i-amphtml-screen-reader amphtml-fill-content">
					 </a>
				 </div>
				 <div class="top-header top_header_mobile">
						<div class="container-fluid">
							 <div class="col-md-4 col-sm-6 col-xs-12 left">
								 <span><i class="fa fa-bars" style="color:#FF7E01;font-size:2.2rem;margin-left:-14rem;margin-top: 2.3rem;"></i></span>
									<a href="#"><img src="images/prabhuBhakti.png"></a>
							 </div>
							 <div class="col-md-4 col-sm-6 col-xs-12 center">
								 <form id="demo-2" class="sear_form_inpi">
									 <input type="search" name="search" placeholder="Search.." required>
									 <span><i class="fa fa-shopping-cart" style="color:#000;font-size:2.2rem;"></i></span>
								 </form>
							 </div>

						</div>
				 </div>
					<header>
 <div class="container-fluid">
	 <nav class="nav-L5onzh">
		<div class="pc-wrap relative">
			<div id="exTab1">
			<ul  class="nav nav-pills inner-3980SK">
				<li class="cate-1xuqR9 active-2M2GTP"><a href="index.php">Home</a></li>
				<li class="cate-1xuqR9"><a href="videoListiNg.php?search=astrology">Astrolgoy</a></li>
				<li class="cate-1xuqR9"><a href="videoListiNg.php?search=rashifal">Rashifal</a></li>
				<li class="cate-1xuqR9"><a href="videoListiNg.php?search=vastu" data-toggle="tab">Vastu</a></li>
				<li class="cate-1xuqR9"><a href="videoListiNg.php?search=mahabharat" data-toggle="tab">Mahabharat</a></li>
				<li class="cate-1xuqR9"><a href="videoListiNg.php?search=ramayan" data-toggle="tab">Ramayan</a></li>
				<li class="cate-1xuqR9"><a href="videoListiNg.php?search=upnishad" data-toggle="tab">Upnishad</a></li>
				<li class="cate-1xuqR9"><a href="videoListiNg.php?search=puranic" data-toggle="tab">Puranic KAtha</a></li>
				<li class="cate-1xuqR9"><a href="videoListiNg.php?search=shiv" data-toggle="tab">Shiv</a></li>
				<li class="cate-1xuqR9"><a href="videoListiNg.php?search=hanuman" data-toggle="tab">Hanuman</a></li>
				<li class="cate-1xuqR9"><a href="videoListiNg.php?search=shani" data-toggle="tab">Shani</a></li>
				<li class="cate-1xuqR9"><a href="videoListiNg.php?search=durga" data-toggle="tab">Durga</a></li>
				<li class="cate-1xuqR9"><a href="videoListiNg.php?search=vishnu" data-toggle="tab">Vishnu</a></li>
				<li class="cate-1xuqR9"><a href="videoListiNg.php?search=krishan" data-toggle="tab">Krishna</a></li>
				<li class="cate-1xuqR9"><a href="videoListiNg.php?search=lakshmi" data-toggle="tab">Lakshmi</a></li>
				<li class="cate-1xuqR9"><a href="videoListiNg.php?search=ganesh" data-toggle="tab">Ganesha</a></li>
				<li class="cate-1xuqR9"><a href="shopMe.php" data-toggle="tab">Shop</a></li>
				<li class="cate-1xuqR9"><a href="liveTV.php" data-toggle="tab">Temple</a></li>
					</ul>
				</div>
			</div>
			</nav>
	 </header>
 </div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
	  <section class="slider mobile_slider">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="images/1.jpg">
					</div>
					<div class="item">
						<img src="images/2.jpg">
					</div>
					<div class="item">
						<img src="images/3.jpg">
					</div>
				</div>
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</section>
	</div>
</div>


<div class="row">
	<div class="col-md-12 col-xs-12 col-sm-12">
		<section class="kundali_bN">
	        <img src="images/2.jpg" class=".i-amphtml-layout-size-defined .i-amphtml-fill-content .i-amphtml-replaced-content, .i-amphtml-screen-reader amphtml-fill-content">
		</section>
	</div>
</div>


<div class="row">
	<div class="col-md-12 col-xs-12 col-sm-12">
		<section class="mobile_l_v_head">
			Latest Videos
		</section>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-xs-12 col-sm-12">
		<section class="latest-videos m_l_v">
			<div id="owl-demo" class="owl-carousel owl-theme">
				<?php
				$sql="SELECT * FROM `videos` ORDER BY `sr` DESC LIMIT 10";
				$result=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($result))
		{
			?>
		  <div class="item mobile_item">
				<h1>
					<a href="mytube.php?videoid=<?php echo $row['videoid']; ?>">
						<img class="mobile_thumbnail" src="<?php echo $row['thumbnail'];?>">
						<p class="video_title">
							<?php echo $row['videoT'];?>
						</p>
					</a>
				</h1>
			</div>
		  <?php
		}
		?>
		</div>
		</section>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-xs-12 col-sm-12">
		<section class="mobile_l_v_head">
			Trending Videos
		</section>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-xs-12 col-sm-12">
		<section class="latest-videos latest-videos m_l_v">
		<div id="owl-demo1" class="owl-carousel owl-theme">
		<?php

		$sql1="SELECT * FROM `videos` ORDER BY `priority` Desc limit 10";
		$result1=mysqli_query($conn,$sql1);
		while($row1=mysqli_fetch_array($result1))
		{
		?>
		  <div class="item mobile_item">
					<a href="mytube.php?videoid=<?php echo $row1['videoid']; ?>">
						<img class="mobile_thumbnail" src="<?php echo $row1['thumbnail'];?>">
						 <p class="video_title"><?php echo $row1['videoT'];?></p>
					 </a>
			 </div>
		   <?php
		}
		  ?>
		</div>

		</section>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-xs-12 col-sm-12">
		<section class="mobile_l_v_head">
			Popular Videos
		</section>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-xs-12 col-sm-12">
		<section class="latest-videos m_l_v">
			<div id="owl-demo3" class="owl-carousel owl-theme">
			  <?php

			$sql4="SELECT * FROM `views` ORDER  BY `view` DESC LIMIT 15";
			$result4=mysqli_query($conn,$sql4);
			while($row4=mysqli_fetch_array($result4))
			{
			$sql22="SELECT * FROM `videos` WHERE `videoid`='".$row4['videoid']."'";
			$rs2=mysqli_query($conn,$sql22);
			while($rrow2=mysqli_fetch_array($rs2))
			{
			?>
			  <div class="item mobile_item">
					<h1>
						<a href="mytube.php?videoid=<?php echo $rrow2['videoid']; ?>">
							<img class="mobile_thumbnail" src="<?php echo $rrow2['thumbnail'];?>">
							<p class="video_title">
								<?php echo $rrow2['videoT'];?>
							</p>
						</a>
					</h1>
				</div>

			   <?php
			}
			}
			  ?>

			</div>
		</section>
	</div>
</div>

<!-- products -->
<div class="row">
	<div class="col-md-12 col-xs-12 col-sm-12">
		<section class="mobile_l_v_head">
			Popular Products
		</section>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-xs-12 col-sm-12">
		<section class="latest-videos m_l_v">
			<div id="owl-demo4" class="owl-carousel owl-theme">
			<?php
			$sql3="SELECT * FROM `product` ORDER BY `priority` ";
			$result3=mysqli_query($conn,$sql3);
			while($row3=mysqli_fetch_array($result3))
			{
			?>
				<div class="item mobile_item">
					<h1>
						<a href="prod_desc.php?prod_type=<?php echo $row3['sr']; ?>">
							<img class="mobile_thumbnail" src="<?php echo $row3['url'];?>">
				      <mark class="c_font">Rs. <?php echo $row3['sprice']; ?>
								 <cite class="c_font">Rs. <span class="c_font"><?php echo $row3['mrp']; ?></span></cite>
								 <blockquote class="pull-right c_font"><?php echo intval((1-($row3['sprice']/$row3['mrp']))*100)."% Off"; ?></blockquote></mark>
								 <span class="c_font"><?php echo $row3['name'];?></span></a>
							 </h1>
						 </div>
				 <?php
			}
				?>
			</div>
		</section>
	</div>
</div>



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
<input type="hidden" id="latestVideos">
</body>
</html>

<?php } ?>
