<?php include ('index_header.php'); ?>
<?php session_start() ?>
<?php if(!$DEVICE) { ?>

	
<?php } else { ?>
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
      <link href="css/product.css" rel="stylesheet">
			<link href="css/mobile_index.css" rel="stylesheet">
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
input {
	outline: none;
}
input[type=search] {
	-webkit-appearance: textfield;
	-webkit-box-sizing: content-box;
	font-family: inherit;
	font-size: 100%;
}
input::-webkit-search-decoration,
input::-webkit-search-cancel-button {
	display: none;
}


input[type=search] {
	background: #fff url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;
	border: solid 1px #fff;
	padding: 9px 10px 9px 32px;
	width:24rem;
-webkit-transition: all .5s;
	-moz-transition: all .5s;
	transition: all .5s;
}
input[type=search]:focus {
	width:24rem;
	background-color: #fff;
	border-color: #fff;

	-webkit-box-shadow: 0 0 5px #fff;
	-moz-box-shadow: 0 0 5px #fff;
	box-shadow: 0 0 5px #fff;
}


input:-moz-placeholder {
	color: #999;
}
input::-webkit-input-placeholder {
	color: #999;
}
#demo-2 input[type=search] {
	width: 15px;
	padding-left: 10px;
	color: transparent;
	cursor: pointer;
}
#demo-2 input[type=search]:hover {
	background-color: #fff;
}
#demo-2 input[type=search]:focus {
	width:24rem;
	padding-left: 32px;
	color: #000;
	background-color: #fff;
	cursor: auto;
}
#demo-2 input:-moz-placeholder {
	color: transparent;
}
#demo-2 input::-webkit-input-placeholder {
	color: transparent;
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
									 <span><i class="fa fa-shopping-cart" style="color:#000;font-size:2.2rem;"><?php
                                     include("sort_code/loadCart.php");
									 ?></i></span>
								 </form>
							 </div>

						</div>
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

<div class="prod_cat">
<div class="row">
		<a href="product_cat.php?prod_type=Puja Product&lowp=&Hp=&pop=" target="_self"><div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
       <img src="images/puja.png" class="img-circle" alt="Cinque Terre">
       <center><span class="prod_cart_t">Puja</span></center>
    </div></a>
    
    <a href="product_cat.php?prod_type=Astrology Product&lowp=&Hp=&pop=" target="_self">
    <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
       <img src="images/astro.png" class="img-circle" alt="Cinque Terre">
       <center><span class="prod_cart_t">Astrology</span></center>
    </div></a>
    
    <a href="product_cat.php?prod_type=Vastu Product&lowp=&Hp=&pop=" target="_self">
    <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
       <img src="images/vastu.png" class="img-circle" alt="Cinque Terre">
       <center><span class="prod_cart_t">Vastu</span></center>
    </div></a>
    
    <a href="product_cat.php?prod_type=Yantra Product&lowp=&Hp=&pop=" target="_self">
    <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
       <img src="images/yantra.png" class="img-circle" alt="Cinque Terre">
       <center><span class="prod_cart_t">Yantra</span></center>
    </div>
    </a>
    
  </div>
  <div class="row">
  <a href="product_cat.php?prod_type=Shiva Product&lowp=&Hp=&pop=" target="_self">
    <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
       <img src="images/shiva.jpg" class="img-circle" alt="Cinque Terre">
       <center><span class="prod_cart_t">Shiva</span></center>
    </div>
    </a>
    
    <a href="product_cat.php?prod_type=Hanuman Product&lowp=&Hp=&pop=" target="_self">
    <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
       <img src="images/hanuman.jpg" class="img-circle" alt="Cinque Terre">
       <center><span class="prod_cart_t">Hanuman</span></center>
    </div>
    </a>
    <a href="product_cat.php?prod_type=Shani Product&lowp=&Hp=&pop=" target="_self">
    <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
       <img src="images/shani.jpg" class="img-circle" alt="Cinque Terre">
       <center><span class="prod_cart_t">Shani</span></center>
    </div>
    </a>
    
    <a href="product_cat.php?prod_type=Lakshmi Product&lowp=&Hp=&pop=" target="_self">
    <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
       <img src="images/laxmi.jpg" class="img-circle" alt="Cinque Terre">
       <center><span class="prod_cart_t">Lakshmi</span></center>
    </div>
    </a>
    
</div>
<div class="row">
<a href="product_cat.php?prod_type=Ganesha Product&lowp=&Hp=&pop=" target="_self">
    <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
       <img src="images/ganesha.jpg" class="img-circle" alt="Cinque Terre">
       <center><span class="prod_cart_t">Ganesha</span></center>
    </div>
    </a>
    
    <a href="product_cat.php?prod_type=Mala Products&lowp=&Hp=&pop=" target="_self">
    <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
       <img src="images/mala.png" class="img-circle" alt="Cinque Terre">
       <center><span class="prod_cart_t">Mala</span></center>
    </div>
    </a>

    
</div>
</div>


<div class="row">
	<div class="col-md-12 col-xs-12 col-sm-12">
		<section class="mobile_l_v_head">
			Popular Category
		</section>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-xs-12 col-sm-12">
		<section class="latest-videos m_l_v">
			<div id="owl-demo" class="owl-carousel owl-theme">
				<?php
				$sql="SELECT * FROM `product` ORDER BY `view` DESC LIMIT 20";
				$result=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($result))
		{
			?>
		  <div class="item mobile_item pop_cat">
				<h1>
					<a href="prod_desc.php?prod_type=<?php echo $row['sr']; ?>">
						<img class="mobile_thumbnail" src="<?php echo $row['url'];?>">
						<p class="video_title">
							<?php echo $row['name'];?>
						</p>
                        <p class="video_title">
							<?php echo "Rs.".$row['mrp'];?>
						</p>
					</a>
				</h1>
        <p>RS 200</p>
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
			Best Seller
		</section>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-xs-12 col-sm-12">
		<section class="latest-videos latest-videos m_l_v">
		<div id="owl-demo1" class="owl-carousel owl-theme">
		<?php

		$sql1="SELECT * FROM `product` ORDER BY `priority` DESC LIMIT 20";
		$result1=mysqli_query($conn,$sql1);
		while($row1=mysqli_fetch_array($result1))
		{
		?>
		  <div class="item mobile_item b_sl">
					<a href="prod_desc.php?prod_type=<?php echo $row1['sr']; ?>">
						<img class="mobile_thumbnail" src="<?php echo $row1['url'];?>">
						 <p class="video_title"><?php echo $row1['name'];?></p>
                         <p class="video_title"><?php echo "Rs. ".$row1['mrp'];?></p>
					 </a>
           <p>RS 200</p>
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
			Latest Products
		</section>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-xs-12 col-sm-12">
		<section class="latest-videos m_l_v l p_l_i">
			<div id="owl-demo3" class="owl-carousel owl-theme">
			  <?php

			
			$sql22="SELECT * FROM `product` ORDER BY `sr` DESC LIMIT 20";
			$rs2=mysqli_query($conn,$sql22);
			while($rrow2=mysqli_fetch_array($rs2))
			{
			?>
			  <div class="item mobile_item footer_i_t">
					<h1>
						<a href="prod_desc.php?prod_type=<?php echo $rrow2['sr']; ?>">
							<img class="mobile_thumbnail" src="<?php echo $rrow2['url'];?>">
							<p class="video_title">
								<?php echo $rrow2['name'];?>
							</p>
                            <p class="video_title">
								<?php echo "Rs. ".$rrow2['mrp'];?>
							</p>
						</a>
					</h1>
          <p>RS 200</p>
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
