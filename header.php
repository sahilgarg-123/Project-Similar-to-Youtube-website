<?php
$useragent = $_SERVER['HTTP_USER_AGENT'];
$iPod = stripos($useragent, "iPod");
$iPad = stripos($useragent, "iPad");
$iPhone = stripos($useragent, "iPhone");
$Android = stripos($useragent, "Android");
$iOS = stripos($useragent, "iOS");
//-- You can add billion devices
@$DEVICE = ($iPod||$iPad||$iPhone||$Android||$iOS||$webOS||$Blackberry||$IEMobile||$OperaMini);

?>

<?php if (!$DEVICE) { ?>

  <!DOCTYPE html>
  <?php
  include("connect.php");
  include('includes/desktop_config.php');
  $videoi=$_GET['videoid'];
  $sql41="SELECT * FROM `videos` WHERE videoid='".$videoi."'";
  $rs41=mysqli_query($conn,$sql41);
  $check41=mysqli_num_rows($rs41);
  if($check41>0)
  {
	  $videoid=$videoi;
  while($row41=mysqli_fetch_array($rs41))
  {
	  $cat=$row41['video_cat'];
	  $subcat=$row41['vsubcat'];
  }
  }
  else if($videoi=="")
  {
  }
  else
  {
	  echo '<script>alert("We detected that you have entered a wrong videoid from third party");</script>';
  }
  @$searchid=$_GET['search'];
  include("analytics.php");
  ?>
  <style type="text/css">
  body{
  background:#fff;
  font-family: 'Lato', sans-serif; color:#000 !important;
  }
  </style>
     <!-- Likes and Views -->
  <?php
  $rs=0;
  $sql10="SELECT COUNT(1) FROM `views` WHERE videoid='".$videoid."'";
  $rs=mysqli_query($conn,$sql10);
  $row10=mysqli_fetch_row($rs);
  if($row10[0]==1)
  {
  $sqlview="SELECT * FROM `views` WHERE videoid='".$videoid."'";
  $viewR=mysqli_query($conn,$sqlview);
  while($viewRow=mysqli_fetch_array($viewR))
  {
  	$count=$viewRow['view']+1;
  	$addview="UPDATE `views` SET view='".$count."' WHERE videoid='".$videoid."'";
  	$Rview=mysqli_query($conn,$addview);
  }
  }
  else
  {
  	$sql12 = "INSERT INTO `views` (videoid, view) VALUES ('".$videoid."', '1')";
  	$result12=mysqli_query($conn,$sql12);
  }
  ?>
  <!-- Reflect search Box-->
  <?php
  if($searchid=="")
  {
  }
  else
  {
  	echo '<script>window.location.href="videoListiNg.php?search='.$searchid.'";</script>';
  }

  ?>
  <!-- Likes and Views update complete-->
  <html lang="en">
     <head>
     <link rel="canonical" href="https://www.prabhubhakti.com/mytube.php?videoid=<?php echo $videoid; ?>" />

     <script src="js/adjust.js"></script>
     <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130918515-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-130918515-1');
  </script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php
        $sqlTitle="SELECT * FROM `videos` WHERE videoid='".$videoid."'";
  	  $rtitle=mysqli_query($conn,$sqlTitle);
  	  while($rowTitl=mysqli_fetch_array($rtitle))
  	  {
  		  echo $rowTitl['videoT'];
  		  ?>
            <img src="<?php echo $rowTitl['thumbnail']; ?>" style="visibility:hidden"></img>
            <?php
  	  }
  	  ?></title>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/saveCmnt.js"></script>
        <script src="js/loadMore.js"></script>
        <script src="js/addLikes.js"></script>
         <script src="jss/onload.js"></script>





         <script>
		window.onload=function()
		{
			loadDesc('<?php echo $videoid; ?>',1);

		};
		 </script>
     </head>
     <body>
        <div class="wrapper">
           <header>
  <div class="top-header">
     <div class="container">
        <div class="col-md-4 col-sm-6 col-xs-12 left">
           <img src="images/prabhuBhakti.png">
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 center">
           <form>
              <input type="text" name="search" placeholder="Search.." required>
           </form>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 right">
           <a href="#"><i class="fa fa-facebook"></i></a>
           <a href="https://www.youtube.com/channel/UC7yIuCsQ78bAfKnpgBZpKLg"><i class="fa fa-youtube"></i></a>
           <a href="your_cart.php" title="Your cart items">
						<span style="position:relative"><span style="position:absolute; right:5px; color:#000; background-color:#FFF; border-radius:60%; padding-left:4px; padding-right:4px; margin-top:2px;"><?php include("sort_code/loadCart.php"); ?></span><i class="fa fa-shopping-cart" style="color:#fff;font-size:2.2rem;"></i></span></a>
        </div>
     </div>
  </div>
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
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Astrology <span class="caret"></span></a>
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
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mythology <span class="caret"></span></a>
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
                              <a href="videoListiNg.php?search=puranik">
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
                              <a href="videoListiNg.php?search=puranic">
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
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">God <span class="caret"></span></a>
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
                              <li><a href="videoListiNg.php?search=krishna">Krishna</a></li>
                              <li><a href="videoListiNg.php?search=luxmi">Luxmi</a></li>
                              <li><a href="videoListiNg.php?search=ganesha">Ganesha</a></li>
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


<?php } else { ?>
  <!DOCTYPE html>
  <?php
  include("connect.php");
  $videoid=$_GET['videoid'];
  $cat=$_GET['cat'];
  $subcat=$_GET['subcat'];
  @$searchid=$_GET['search'];
  include("analytics.php");
  include('includes/mobile_config.php');
  ?>
  <style type="text/css">
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
  	width:39rem;
  -webkit-transition: all .5s;
  	-moz-transition: all .5s;
  	transition: all .5s;
  }
  input[type=search]:focus {
  	width:39rem;
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
  	padding-left: 22px;
  	color: transparent;
  	cursor: pointer;
  }
  #demo-2 input[type=search]:hover {
  	background-color: #fff;
  }
  #demo-2 input[type=search]:focus {
  	width:39rem;
  	padding-left: 40px;
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
  body{
  background:#fff;
  font-family: 'Lato', sans-serif; color:#000 !important;
  }
  </style>
     <!-- Likes and Views -->
     <?php include("myTubeconfig.php"); ?>
  <?php
  $rs=0;
  $sql10="SELECT COUNT(1) FROM `views` WHERE videoid='".$videoid."'";
  $rs=mysqli_query($conn,$sql10);
  $row10=mysqli_fetch_row($rs);
  if($row10[0]==1)
  {
  $sqlview="SELECT * FROM `views` WHERE videoid='".$videoid."'";
  $viewR=mysqli_query($conn,$sqlview);
  while($viewRow=mysqli_fetch_array($viewR))
  {
  	$count=$viewRow['view']+1;
  	$addview="UPDATE `views` SET view='".$count."' WHERE videoid='".$videoid."'";
  	$Rview=mysqli_query($conn,$addview);
  }
  }
  else
  {
  	$sql12 = "INSERT INTO `views` (videoid, view) VALUES ('".$videoid."', '1')";
  	$result12=mysqli_query($conn,$sql12);
  }
  ?>
  <!-- Reflect search Box-->
  <?php
  if($searchid=="")
  {
  }
  else
  {
  	echo '<script>window.location.href="videoListiNg.php?search='.$searchid.'";</script>';
  }

  ?>
  <!-- Likes and Views update complete-->
  <html lang="en">
     <head>





     <link rel="canonical" href="<?php echo $cananical.$videoid; ?>" />

     <script src="js/adjust.js"></script>
     <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130918515-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-130918515-1');
  </script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php
        $sqlTitle="SELECT * FROM `videos` WHERE videoid='".$videoid."'";
  	  $rtitle=mysqli_query($conn,$sqlTitle);
  	  while($rowTitl=mysqli_fetch_array($rtitle))
  	  {
  		  echo $rowTitl['videoT'];
  		  ?>
            <img src="<?php echo $rowTitl['thumbnail']; ?>" style="visibility:hidden"></img>
            <?php
  	  }
  	  ?></title>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/saveCmnt.js"></script>
        <script src="js/loadMore.js"></script>
        <script src="js/addLikes.js"></script>
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
.top_footer_bottom_text .f-b-tx {
    color: #000 !important;
    font-size: 1.2rem;
    margin-left: 4.5rem !important;
    margin-right: 0rem !important;
}
.top-footer_mobile span img {
    margin: 0rem 0rem;
    margin-left: 5.1rem !important;
    width:30px;
    height:30px;
}
        </style>
     </head>
     <body>
        
          
          <!--   Apps download links disable in android  -->
          <?php
		  include("connect.php");
		  if($_GET['MOBS']=="")
		  {
			  ?>
              <div class="top_banner_image">
			   <a href="https://play.google.com/store/apps/details?id=com.thebhakti">
              <img src="images/icons/top_banner.png" class=".i-amphtml-layout-size-defined .i-amphtml-fill-content .i-amphtml-replaced-content, .i-amphtml-screen-reader amphtml-fill-content">
            </a>
            </div>
            <div class="top-header top_header_mobile">
             <div class="container">
                <div class="col-md-4 col-sm-6 col-xs-12 left">
                  <span><i class="fa fa-bars" style="color:#FF7E01;font-size:2.2rem;margin-left:-2rem;margin-top: 2.3rem;"></i></span>
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
          
          <div class="container-fluid">
  <?php echo $mobile_top_slider; ?>
  </div>
            <?php
		  }
		  else
		  {
			 ?>
             <div class="top-header top_header_mobile" style="margin-top:0px !important">
             <div class="container">
                <div class="col-md-4 col-sm-6 col-xs-12 left">
                  <span><i class="fa fa-bars" style="color:#FF7E01;font-size:2.2rem;margin-left:-2rem;margin-top: 2.3rem;"></i></span>
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
          <div class="container-fluid">
  <?php echo $mobile_top_slider; ?>
  </div>
             <?php
		  }
		  ?>
           
          
          
  
  </br></br></br></br></br>
       </div>


<?php } ?>
