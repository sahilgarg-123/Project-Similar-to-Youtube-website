<?php include ('index_header.php'); ?>

<?php if(!$DEVICE) { ?>


<?php
include("connect.php");
include("analytics.php");
include('includes/desktop_config.php');
$searchid=$_GET['search'];
?>

<!DOCTYPE html>
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


<link rel="canonical" href="https://www.prabhubhakti.com/videoListiNg.php?search=<?php echo $searchid; ?>" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Prabhu Bhakti</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
      <!-- Gpot search result from intent and implement into the page to search the particular record -->


  </head>
  <body>

    <div class="wrapper">
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
			 <?php echo $desktop_top_header;
			 ?>
			<!-- end of header -->

<section class="listing">
 <div class="container">
  <div class="block">


		<?php
		if($searchid=="")
		{
				?>
				<h2 style="margin-top:15rem;">Unable to find your search</h2>
           		<?php
		}
		else
		{


				$checkSqL="SELECT COUNT(1) FROM `videoseo` WHERE tag='".$searchid."'";
			$chRs=mysqli_query($conn,$checkSqL);
			$FTH=mysqli_fetch_row($chRs);

			if($FTH[0] >= 1)
					{
						$sql="SELECT * FROM `videoseo` where tag='".$searchid."'";
				$vid_subcat="";

				$result=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($result))
					{
						$vid_ID=$row['videoID'];
						$sql2="SELECT * FROM `videos` WHERE videoid='".$vid_ID."'";
						$result2=mysqli_query($conn,$sql2);
						while($row2=mysqli_fetch_array($result2))
							{
							?>

                  				 <div class="block-sub">
        						<figure class="col-md-4 col-sm-6 col-xs-12 left">
          						<a href="mytube.php?videoid=<?php echo $row2['videoid']; ?>"><img src="<?php echo $row2['thumbnail']; ?>" style="width:350px; height:170px"></a>
        						</figure>
        						<div class="col-md-8 col-sm-6 col-xs-12">
          						<h4><a href="mytube.php?videoid=<?php echo $row2['videoid']; ?>"><?php echo $row2['videoT']; ?></a></h4>
          						<p><a href="mytube.php?videoid=<?php echo $row2['videoid']; ?>"><?php echo substr($row2['video_desc'],0,600); ?><div style="display:none"><?php echo $row2['video_desc']; ?></div></a></p>
       							 </div>
      								</div>

               				 <?php
							}

				}
					}

					// close main if
						else
					{
					$ch1sql="SELECT * FROM `newTag` WHERE tag='".$searchid."'";
					$ch1rs=mysqli_query($conn,$ch1sql);
					$ch1row=mysqli_fetch_row($ch1rs);
					if($ch1row >=1)
					{
					}
					else
					{
					$not_match="INSERT INTO `newTags` (`tag`,`ipp`,`date`) VALUES ('".$searchid."','".$_SERVER['REMOTE_ADDR']."','".date("Y-m-d")."')";
					$not_match_R=mysqli_query($conn,$not_match);
					}
					// if tag not found then break search tag in small piece and then search
				$breakedTag=explode(" ",$searchid);
				for($x = 0; $x < count($breakedTag); $x++)
							{

								$sql="SELECT * FROM `videoseo` where tag='".$breakedTag[$x]."'";


				$result=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($result))
					{
						$vid_ID=$row['videoID'];
						$sql2="SELECT * FROM `videos` WHERE videoid='".$vid_ID."'";
						$result2=mysqli_query($conn,$sql2);
						while($row2=mysqli_fetch_array($result2))
							{
							?>

                  				 <div class="block-sub">
        						<figure class="col-md-4 col-sm-6 col-xs-12 left">
          						<a href="mytube.php?videoid=<?php echo $row2['videoid']; ?>"><img src="<?php echo $row2['thumbnail']; ?>"></a>
        						</figure>
        						<div class="col-md-8 col-sm-6 col-xs-12">
          						<h2><a href="mytube.php?videoid=<?php echo $row2['videoid']; ?>"><?php echo $row2['videoT']; ?></a></h2>
          						<p><a href="mytube.php?videoid=<?php echo $row2['videoid']; ?>"><?php echo $row2['video_desc']; ?></a></p>
       							 </div>
      								</div>

               				 <?php
							}

				}


							}}

		}
		?>
   </div></div>

</section>

 <?php echo $desktop_footer; ?>



    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/owl.carousel.js"></script>

  </body>
</html>

<?php } else { ?>
  <?php
  include("connect.php");
  include("analytics.php");
  include('includes/mobile_config.php');
  $searchid=$_GET['search'];
  ?>

  <!DOCTYPE html>
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


  <link rel="canonical" href="https://www.prabhubhakti.com/videoListiNg.php?search=<?php echo $searchid; ?>" />
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Prabhu Bhakti</title>

      <!-- Bootstrap -->
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/mobile.css" rel="stylesheet">
      <link href="css/videoListing.css" rel="stylesheet">
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
        <!-- Gpot search result from intent and implement into the page to search the particular record -->

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
    </head>
    <body>
      <div class="wrapper" id="main_header">
        <div class="top_banner_image">
          <a href="https://play.google.com/store/apps/details?id=com.thebhakti">
            <img src="images/icons/top_banner.png" class=".i-amphtml-layout-size-defined .i-amphtml-fill-content .i-amphtml-replaced-content, .i-amphtml-screen-reader amphtml-fill-content">
          </a>
        </div>
        <div class="top-header top_header_mobile">
           <div class="container">
              <div class="col-md-4 col-sm-6 col-xs-12 left">
                <span><i class="fa fa-bars" style="color:#FF7E01;font-size:2.2rem;margin-left:-1rem;margin-top: 2.3rem;"></i></span>
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
<div class="container-fluid">
  <?php echo $mobile_top_slider; ?>
</div>
     </div>

  <section class="listing">
   <div class="container">
    <div class="block">


  		<?php
  		if($searchid=="")
  		{
  				?>
  				<h5>unable to find your search</h5>
             		<?php
  		}
  		else
  		{


  				$checkSqL="SELECT COUNT(1) FROM `videoseo` WHERE tag='".$searchid."'";
  			$chRs=mysqli_query($conn,$checkSqL);
  			$FTH=mysqli_fetch_row($chRs);

  			if($FTH[0] >= 1)
  					{
  						$sql="SELECT * FROM `videoseo` where tag='".$searchid."'";
  				$vid_subcat="";

  				$result=mysqli_query($conn,$sql);
  				while($row=mysqli_fetch_array($result))
  					{
  						$vid_ID=$row['videoID'];
  						$sql2="SELECT * FROM `videos` WHERE videoid='".$vid_ID."'";
  						$result2=mysqli_query($conn,$sql2);
  						while($row2=mysqli_fetch_array($result2))
  							{
  							?>

                    				 <div class="block-sub">
          						<figure class="col-md-4 col-sm-7 col-xs-7 left">
            						<a href="mytube.php?videoid=<?php echo $row2['videoid']; ?>"><img class="img_list" src="<?php echo $row2['thumbnail']; ?>"></a>
          						</figure>
          						<div class="col-md-8 col-sm-5 col-xs-5">
            						<h4 class="vid_head"><a class="list_title" href="mytube.php?videoid=<?php echo $row2['videoid']; ?>"><?php echo $row2['videoT']; ?>"</a></h4>
            						
         							 </div>
        								</div>

                 				 <?php
  							}

  				}
  					}

  					// close main if
  						else
  					{
  					$ch1sql="SELECT * FROM `newTag` WHERE tag='".$searchid."'";
  					$ch1rs=mysqli_query($conn,$ch1sql);
  					$ch1row=mysqli_fetch_row($ch1rs);
  					if($ch1row >=1)
  					{
  					}
  					else
  					{
  					$not_match="INSERT INTO `newTags` (`tag`,`ipp`,`date`) VALUES ('".$searchid."','".$_SERVER['REMOTE_ADDR']."','".date("Y-m-d")."')";
  					$not_match_R=mysqli_query($conn,$not_match);
  					}
  					// if tag not found then break search tag in small piece and then search
  				$breakedTag=explode(" ",$searchid);
  				for($x = 0; $x < count($breakedTag); $x++)
  							{

  								$sql="SELECT * FROM `videoseo` where tag='".$breakedTag[$x]."'";


  				$result=mysqli_query($conn,$sql);
  				while($row=mysqli_fetch_array($result))
  					{
  						$vid_ID=$row['videoID'];
  						$sql2="SELECT * FROM `videos` WHERE videoid='".$vid_ID."'";
  						$result2=mysqli_query($conn,$sql2);
  						while($row2=mysqli_fetch_array($result2))
  							{
  							?>

                    				 <div class="block-sub">
          						<figure class="col-sm-7 col-xs-7 left">
            						<a href="mytube.php?videoid=<?php echo $row2['videoid']; ?>"><img class="img_list" src="<?php echo $row2['thumbnail']; ?>"></a>
          						</figure>
          						<div class="col-sm-5 col-xs-5">
            						<h4 class="vid_head"><a class="list_title" href="mytube.php?videoid=<?php echo $row2['videoid']; ?>" ><?php echo $row2['videoT']; ?></a></h4>
            					
         							 </div>
        								</div>

                 				 <?php
  							}

  				}


  							}}

  		}
  		?>
     </div></div>

  </section>
  <div class="container-fluid padding-0">
    <?php echo $mobile_footer; ?>
          </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.js"></script>
      <script src="js/owl.carousel.js"></script>

    </body>
  </html>
<?php } ?>
