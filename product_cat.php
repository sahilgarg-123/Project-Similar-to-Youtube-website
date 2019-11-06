<?php include ('index_header.php');
session_start();
?>

<?php if(!$DEVICE) { ?>
  <!DOCTYPE html>
  <?php
  include("connect.php");
  include('includes/desktop_config.php');
  include("analytics.php");
  $uid="Prabhu Bhakti";
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
      <link href="css/prod_cat.css" rel="stylesheet">
      <link href="css/search_icon.css" rel="stylesheet">
      <link href="css/font-awesome.css" rel="stylesheet">
      <link href="css/owl.carousel.css" rel="stylesheet">
      <link href="css/owl.theme.default.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


      <!--  Add external JS library  -->
      <script src="jss/saveWishlist.js"></script>
      <script src="jss/deleteWishlist.js"></script>
      <script src="jss/saveAddtolist.js"></script>
      <script src="jss/deleteAddtolist.js"></script>
      <script src="jss/sortData.js"></script>


    </head>
    <body>
    <!--  Toast  -->
    <div class="wrapper">
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
						<span style="position:relative"><span style="position:absolute; right:5px; color:#000; background-color:#FFF; border-radius:60%; padding-left:4px; padding-right:4px; margin-top:2px;"><?php include("sort_code/loadCart.php"); ?></span><i class="fa fa-shopping-cart" style="color:#fff;font-size:2.2rem;"></i></span></a>
	        <br><br>
	        <span><a href="loginUser.php?urlRD=">Login/Signup</a></span>
	      </div>
	    </div>
	    </div>
    <!--start of header -->
     <?php echo $desktop_top_header;
     ?>
    <!-- end of header -->




   <div class="container" style="background-color:#f2f2f2;">
    <div class="row">
    <div class="col-xs-12 r-fil_prod">
      <div class="col-sm-1 col-lg-1 col-md-1 col-xs-1">
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle sortPopup__title t-center" type="button" data-toggle="dropdown">SORT BY
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li class="sortPopupRadio" id="sortranking-desc" name="sort-content" value="ranking-desc" onClick="sortData(1)">
                <a class="sortPopup__label " onClick="sortData(1)" href="#">Popularity</a>
              </li>
              <li class="sortPopupRadio" id="sortprice-desc" name="sort-content" value="price-desc" onClick="sortData(2)">
                <a class="sortPopup__label " onClick="sortData(2)" href="#">Highest Priced First</a>
              </li>
              <li class="sortPopupRadio" id="sortprice-asc" name="sort-content" value="price-asc" onClick="sortData(3)">
                <a class="sortPopup__label " onClick="sortData(3)" href="#">Lowest Priced First</a>
              </li>
            </ul>
          </div>
      </div>
      <div class="col-sm-1 col-lg-1 col-md-1 col-xs-1">
        <div class="dropdown">
          <button id="fil_id_sh" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Filter
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><div class="tab-pane active" id="cat">
                <ul class="list-group">
                <?php
          $sql21="SELECT * FROM `prodcat`";
          $rs21=mysqli_query($conn,$sql21);
          while($row21=mysqli_fetch_array($rs21))
          {
          ?>
                <a href="product_cat.php?prod_type=<?php echo $row21['prodcatt']; ?>"><li class="list-group-item d-flex justify-content-between align-items-center">
                   <?php echo $row21['prodcatt']; ?>
                  <span class="badge badge-primary badge-pill"><?php
            $sql22="SELECT * FROM `product` WHERE cat='".$row21['prodcatt']."'";
            $rs22=mysqli_query($conn,$sql22);
            $check22=mysqli_num_rows($rs22);
            echo $check22;
            ?></span>
                </li></a>
               <?php
          }
           ?>
              </ul>
              </div></li>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
     <!-- Sliding image on the basis of category of products -->
                    <?php
					$pop=$_GET['pop'];
					$Hp=$_GET['Hp'];
					$lowp=$_GET['lowp'];
					$prod_type=$_GET['prod_type'];
					if($pop=="" && $Hp=="" && $lowp=="")
					{
					$srs=0;
					$prodSql="SELECT * FROM `product` WHERE cat='".$_GET['prod_type']."'";
					$prodRs=mysqli_query($conn,$prodSql);
					while($prodRow=mysqli_fetch_array($prodRs))
					{
					?>
      <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
        <div class="prod_d_f">
        <div class="prod_image">
          <a class="prod-pro-img-wrap" href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>">
                    <img class="b-lazy b-loaded" src="<?php echo $prodRow['url']; ?>" alt="<?php echo $prodRow['name']; ?>">
          </a>
        </div>
        <div class="prod_r_d prod_dt_wr">
          <div class="prod_dt_wr_tl">
            <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>"><?php echo $prodRow['name']; ?></a>
          </div>
          <div class="prod_dt_wr_at col-prod-orange">
            <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>"></a>
          </div>
          <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>">
            <div class="prod-pro-price">
              <span class="prod-pro-price-new"><?php echo "Rs.".$prodRow['mrp']; ?></span>
              <span class="prod-pro-price-old"><?php echo "Rs.".$prodRow['mrp']; ?></span>
            </div>
           <!--  <div class="prod-pro-sv-txt">Save Rs.1,670(56% off)</div>  -->
          </a>
        </div>
        <div class="prod_foot_d prod-card-footer">
          <div class="prod-card-footer-tab">
          <?php
		  // check item is in wishlist or not
		  $sql1="SELECT * FROM `wishlist` WHERE skucode='".$prodRow['skucode']."' && sessionid='".$_SESSION['mob']."'";
		  $rs1=mysqli_query($conn,$sql1);
		  $check1=mysqli_num_rows($rs1);
		  if($check1>0)
		  {
		  ?>
          <i class="fa fa-heart" title="Add to Wishlist" id="<?php echo $prodRow['sr']; ?>" style="margin-top:10px; color:#F00; font-size:25px" onClick="deleteWishlist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>',<?php echo $prodRow['sr']; ?>)"></i>

           <?php
		  }
		  else
		  {
		   ?>

            <i class="fa fa-heart" title="Add to Wishlist" id="<?php echo $prodRow['sr']; ?>" style="color:#000; margin-top:10px; font-size:25px" onClick="saveWishlist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>',<?php echo $prodRow['sr']; ?>)"></i>

           <?php
		  }
		   ?>
          </div>
          <div class="prod-card-footer-tab">
           <?php
		  // check item is in wishlist or not
		  $sql2="SELECT * FROM `addtolist` WHERE skucode='".$prodRow['skucode']."' && sessionid='".$_SESSION['mob']."'";
		  $rs2=mysqli_query($conn,$sql2);
		  $check2=mysqli_num_rows($rs2);
		  if($check2>0)
		  {

		  ?>
          <i class="fa fa-cart-plus" style="font-size:25px; color:#F00; margin-top:10px" id="<?php echo $prodRow['sr']."a"; ?>" onClick="deleteAddtolist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>','<?php echo $prodRow['sr']."a"; ?>')"></i>
            <?php
		  }
		  else
		  {
		   ?>
               <i class="fa fa-cart-plus" style="font-size:25px; color:#000; margin-top:10px" id="<?php echo $prodRow['sr']."a"; ?>" onClick="saveAddtolist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>','<?php echo $prodRow['sr']."a"; ?>','<?php echo $uid; ?>')"></i>
             <?php
		  }
		   ?>

          </div>
        </div>
      </div>
      </div>
      <?php
					}
					}
					else if($Hp=="" && $lowp=="" && $prod_type=="")
					{
					$srs=0;
					$prodSql="SELECT * FROM `product` ORDER BY priority DESC";
					$prodRs=mysqli_query($conn,$prodSql);
					while($prodRow=mysqli_fetch_array($prodRs))
					{
	  ?>
      <div class="col-md-6 col-xs-6 col-xs-6 col-lg-6">
        <div class="prod_d_f">
        <div class="prod_image">
          <a class="prod-pro-img-wrap" href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>">
                    <img class="b-lazy b-loaded" src="<?php echo $prodRow['url']; ?>" alt="<?php echo $prodRow['name']; ?>">
          </a>
        </div>
        <div class="prod_r_d prod_dt_wr">
          <div class="prod_dt_wr_tl">
            <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>"><?php echo $prodRow['name']; ?></a>
          </div>
          <div class="prod_dt_wr_at col-prod-orange">
            <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>">by Prabhu Bhakti sansthan</a>
          </div>
          <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>">
            <div class="prod-pro-price">
              <span class="prod-pro-price-new"><?php echo "Rs.".$prodRow['mrp']; ?></span>
              <span class="prod-pro-price-old"><?php echo "Rs.".$prodRow['mrp']; ?></span>
            </div>
           <!--  <div class="prod-pro-sv-txt">Save Rs.1,670(56% off)</div>  -->
          </a>
        </div>
        <div class="prod_foot_d prod-card-footer">
          <div class="prod-card-footer-tab">
          <?php
		  // check item is in wishlist or not
		  $sql1="SELECT * FROM `wishlist` WHERE skucode='".$prodRow['skucode']."' && sessionid='".$_SESSION['mob']."'";
		  $rs1=mysqli_query($conn,$sql1);
		  $check1=mysqli_num_rows($rs1);
		  if($check1>0)
		  {
		  ?>
          <i class="fa fa-heart" title="Add to Wishlist" id="<?php echo $prodRow['sr']; ?>" style="margin-top:10px; color:#F00; font-size:25px" onClick="deleteWishlist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>',<?php echo $prodRow['sr']; ?>)"></i>

           <?php
		  }
		  else
		  {
		   ?>

            <i class="fa fa-heart" title="Add to Wishlist" id="<?php echo $prodRow['sr']; ?>" style="color:#000; margin-top:10px; font-size:25px" onClick="saveWishlist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>',<?php echo $prodRow['sr']; ?>)"></i>

           <?php
		  }
		   ?>
          </div>
          <div class="prod-card-footer-tab">
           <?php
		  // check item is in wishlist or not
		  $sql2="SELECT * FROM `addtolist` WHERE skucode='".$prodRow['skucode']."' && sessionid='".$_SESSION['mob']."'";
		  $rs2=mysqli_query($conn,$sql2);
		  $check2=mysqli_num_rows($rs2);
		  if($check2>0)
		  {

		  ?>
          <i class="fa fa-cart-plus" style="font-size:25px; color:#F00; margin-top:10px" id="<?php echo $prodRow['sr']."a"; ?>" onClick="deleteAddtolist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>','<?php echo $prodRow['sr']."a"; ?>')"></i>
            <?php
		  }
		  else
		  {
		   ?>
               <i class="fa fa-cart-plus" style="font-size:25px; color:#000; margin-top:10px" id="<?php echo $prodRow['sr']."a"; ?>" onClick="saveAddtolist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>','<?php echo $prodRow['sr']."a"; ?>','<?php echo $uid; ?>')"></i>
             <?php
		  }
		   ?>

          </div>
        </div>
      </div>
      </div>
      <?php
					}
					}
						else if($pop=="" && $lowp=="" && $prod_type=="")
					{
					$srs=0;
					$prodSql="SELECT * FROM `product` ORDER BY sprice DESC";
					$prodRs=mysqli_query($conn,$prodSql);
					while($prodRow=mysqli_fetch_array($prodRs))
					{
	  ?>
      <div class="col-md-6 col-xs-6 col-xs-6 col-lg-6">
        <div class="prod_d_f">
        <div class="prod_image">
          <a class="prod-pro-img-wrap" href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>">
                    <img class="b-lazy b-loaded" src="<?php echo $prodRow['url']; ?>" alt="<?php echo $prodRow['name']; ?>">
          </a>
        </div>
        <div class="prod_r_d prod_dt_wr">
          <div class="prod_dt_wr_tl">
            <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>"><?php echo $prodRow['name']; ?></a>
          </div>
          <div class="prod_dt_wr_at col-prod-orange">
            <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>">by Prabhu Bhakti sansthan</a>
          </div>
          <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>">
            <div class="prod-pro-price">
              <span class="prod-pro-price-new"><?php echo "Rs.".$prodRow['mrp']; ?></span>
              <span class="prod-pro-price-old"><?php echo "Rs.".$prodRow['mrp']; ?></span>
            </div>
           <!--  <div class="prod-pro-sv-txt">Save Rs.1,670(56% off)</div>  -->
          </a>
        </div>
        <div class="prod_foot_d prod-card-footer">
          <div class="prod-card-footer-tab">
          <?php
		  // check item is in wishlist or not
		  $sql1="SELECT * FROM `wishlist` WHERE skucode='".$prodRow['skucode']."' && sessionid='".$_SESSION['mob']."'";
		  $rs1=mysqli_query($conn,$sql1);
		  $check1=mysqli_num_rows($rs1);
		  if($check1>0)
		  {
		  ?>
          <i class="fa fa-heart" title="Add to Wishlist" id="<?php echo $prodRow['sr']; ?>" style="margin-top:10px; color:#F00; font-size:25px" onClick="deleteWishlist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>',<?php echo $prodRow['sr']; ?>)"></i>

           <?php
		  }
		  else
		  {
		   ?>

            <i class="fa fa-heart" title="Add to Wishlist" id="<?php echo $prodRow['sr']; ?>" style="color:#000; margin-top:10px; font-size:25px" onClick="saveWishlist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>',<?php echo $prodRow['sr']; ?>)"></i>

           <?php
		  }
		   ?>
          </div>
          <div class="prod-card-footer-tab">
           <?php
		  // check item is in wishlist or not
		  $sql2="SELECT * FROM `addtolist` WHERE skucode='".$prodRow['skucode']."' && sessionid='".$_SESSION['mob']."'";
		  $rs2=mysqli_query($conn,$sql2);
		  $check2=mysqli_num_rows($rs2);
		  if($check2>0)
		  {

		  ?>
          <i class="fa fa-cart-plus" style="font-size:25px; color:#F00; margin-top:10px" id="<?php echo $prodRow['sr']."a"; ?>" onClick="deleteAddtolist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>','<?php echo $prodRow['sr']."a"; ?>')"></i>
            <?php
		  }
		  else
		  {
		   ?>
               <i class="fa fa-cart-plus" style="font-size:25px; color:#000; margin-top:10px" id="<?php echo $prodRow['sr']."a"; ?>" onClick="saveAddtolist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>','<?php echo $prodRow['sr']."a"; ?>','<?php echo $uid; ?>')"></i>
             <?php
		  }
		   ?>

          </div>
        </div>
      </div>
      </div>
      <?php
					}}
						else if($Hp=="" && $pop=="" && $prod_type=="")
					{
					$srs=0;
					$prodSql="SELECT * FROM `product` ORDER BY sprice ASC";
					$prodRs=mysqli_query($conn,$prodSql);
					while($prodRow=mysqli_fetch_array($prodRs))
					{

	  ?>
       <div class="col-md-6 col-xs-6 col-xs-6 col-lg-6">
        <div class="prod_d_f">
        <div class="prod_image">
          <a class="prod-pro-img-wrap" href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>">
                    <img class="b-lazy b-loaded" src="<?php echo $prodRow['url']; ?>" alt="<?php echo $prodRow['name']; ?>">
          </a>
        </div>
        <div class="prod_r_d prod_dt_wr">
          <div class="prod_dt_wr_tl">
            <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>"><?php echo $prodRow['name']; ?></a>
          </div>
          <div class="prod_dt_wr_at col-prod-orange">
            <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>"></a>
          </div>
          <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>">
            <div class="prod-pro-price">
              <span class="prod-pro-price-new"><?php echo "Rs.".$prodRow['mrp']; ?></span>
              <span class="prod-pro-price-old"><?php echo "Rs.".$prodRow['mrp']; ?></span>
            </div>
           <!--  <div class="prod-pro-sv-txt">Save Rs.1,670(56% off)</div>  -->
          </a>
        </div>
        <div class="prod_foot_d prod-card-footer">
          <div class="prod-card-footer-tab">
          <?php
		  // check item is in wishlist or not
		  $sql1="SELECT * FROM `wishlist` WHERE skucode='".$prodRow['skucode']."' && sessionid='".$_SESSION['mob']."'";
		  $rs1=mysqli_query($conn,$sql1);
		  $check1=mysqli_num_rows($rs1);
		  if($check1>0)
		  {
		  ?>
          <i class="fa fa-heart" title="Add to Wishlist" id="<?php echo $prodRow['sr']; ?>" style="margin-top:10px; color:#F00; font-size:25px" onClick="deleteWishlist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>',<?php echo $prodRow['sr']; ?>)"></i>

           <?php
		  }
		  else
		  {
		   ?>

            <i class="fa fa-heart" title="Add to Wishlist" id="<?php echo $prodRow['sr']; ?>" style="color:#000; margin-top:10px; font-size:25px" onClick="saveWishlist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>',<?php echo $prodRow['sr']; ?>)"></i>

           <?php
		  }
		   ?>
          </div>
          <div class="prod-card-footer-tab">
           <?php
		  // check item is in wishlist or not
		  $sql2="SELECT * FROM `addtolist` WHERE skucode='".$prodRow['skucode']."' && sessionid='".$_SESSION['mob']."'";
		  $rs2=mysqli_query($conn,$sql2);
		  $check2=mysqli_num_rows($rs2);
		  if($check2>0)
		  {

		  ?>
          <i class="fa fa-cart-plus" style="font-size:25px; color:#F00; margin-top:10px" id="<?php echo $prodRow['sr']."a"; ?>" onClick="deleteAddtolist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>','<?php echo $prodRow['sr']."a"; ?>')"></i>
            <?php
		  }
		  else
		  {
		   ?>
               <i class="fa fa-cart-plus" style="font-size:25px; color:#000; margin-top:10px" id="<?php echo $prodRow['sr']."a"; ?>" onClick="saveAddtolist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>','<?php echo $prodRow['sr']."a"; ?>','<?php echo $uid; ?>')"></i>
             <?php
		  }
		   ?>

          </div>
        </div>
      </div>
      </div>
      <?php
					}}
	  ?>
    </div>
  </div>



    <!-- filter box -->

    <div class="container-fluid">
    	<div class="row">
    		<?php echo $desktop_footer; ?>
    	</div>
    </div>
<!-- Bootstrap core JavaScript
      ================================================== -->
  	<!-- Placed at the end of the document so the pages load faster -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>



<?php include('search-icon.php'); ?>

  <script>
  $(document).ready(function(){
    $("#fil_id_sh").click(function(){
      $("#inner_filter_box").show();
      $("#out_main_wrap").hide();
    });
    $("#go_back_ic").click(function(){
      $("#inner_filter_box").hide();
      $("#out_main_wrap").show();
    });


    $("#on_search").click(function(){
      $("#inner_filter_box").hide();
      $("#out_main_wrap").hide();
      $("#search_result").show();
    });
  });
  </script>
    </body>
    </html>
<?php } else { ?>
  <!DOCTYPE html>
  <?php
  include("connect.php");
  include("analytics.php");
  $uid="Prabhu Bhakti";
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
      <link href="css/prod_cat.css" rel="stylesheet">
      <link href="css/search_icon.css" rel="stylesheet">
      <link href="css/font-awesome.css" rel="stylesheet">
      <link href="css/owl.carousel.css" rel="stylesheet">
      <link href="css/owl.theme.default.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


      <!--  Add external JS library  -->
      <script src="jss/saveWishlist.js"></script>
      <script src="jss/deleteWishlist.js"></script>
      <script src="jss/saveAddtolist.js"></script>
      <script src="jss/deleteAddtolist.js"></script>
      <script src="jss/sortData.js"></script>


    </head>
    <body>
    <!--  Toast  -->

      <div class="outside_main_wrap" id="out_main_wrap">
      <div class="row">
      <div class="wrapper" id="main_header">
        <div class="top-header top_header_mobile">
           <div class="container-fluid">
              <div class="col-md-4 col-sm-6 col-xs-12 left">
                <span><i class="fa fa-angle-left" style="color:#FF7E01;font-size:4.5rem;margin-left:-14rem;margin-top: 0.9rem;"></i></span>



                 <a href="#"><img src="images/prabhuBhakti.png"></a>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 center">
                <form id="demo-2" class="sear_form_inpi">
                  <input  id="on_search" type="search" name="search" placeholder="Search.." required>
                 <a href="your_cart.php" title="Your cart items"><span style="position:relative"><span style="position:absolute; left:12px; color:#FFF; background-color:#000; border-radius:80%; padding-left:5px; padding-right:5px; margin-top:1px;"><?php include("sort_code/loadCart.php"); ?></span><i class="fa fa-shopping-cart" style="color:#000;font-size:2.2rem;"></i></span></a>
                </form>
              </div>
           </div>
        </div>
      </div>
    </div>





    <div class="row">
    <div class="col-xs-12 r-fil_prod">
      <div class="col-sm-6 col-lg-6 col-md-6 col-xs-6">
        <span id="sor_id_sh"  style="color:#000;">Sort
          <i class="fa fa-sort" style="color:#000;" aria-hidden="true"></i>
        </span>
      </div>
      <div class="col-sm-6 col-lg-6 col-md-6 col-xs-6">
        <span id="fil_id_sh" style="color:#000;">Filter <i class="fa fa-filter" style="color:#000;" aria-hidden="true"></i></span>
      </div>
      <center> <input type="text" id="toast" value="Hello" style="border:hidden; background-color:#999; text-align:center; width:200px; height:50px; display:none; font-size:20px; opacity:50%; border-radius:20"></center>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
      <div id="sh_sort" class="sortPopup" style="display:none;">
          <p class="sortPopup__title t-center">SORT BY <span><i id="close_btn" class="fa fa-times" style="color:#000;font-size:3rem;float:right;margin-top:-2rem;"></i></span></p>
                      <div class="sortPopup__option">
              <div class="radio">
                 <input type="radio" class="sortPopupRadio" id="sortranking-desc" name="sort-content" value="ranking-desc" onClick="sortData(1)">
                  <label for="sortranking-desc" class="sortPopup__label " onClick="sortData(1)"> Popularity</label>
              </div>
          </div>
                      <div class="sortPopup__option">
              <div class="radio">
                  <input type="radio" class="sortPopupRadio" id="sortprice-desc" name="sort-content" value="price-desc" onClick="sortData(2)">
                  <label for="sortprice-desc" class="sortPopup__label " onClick="sortData(2)"> Highest Priced First</label>
              </div>
          </div>
                      <div class="sortPopup__option">
              <div class="radio">
                  <input type="radio" class="sortPopupRadio" id="sortprice-asc" name="sort-content" value="price-asc" onClick="sortData(3)">
                  <label for="sortprice-asc" class="sortPopup__label " onClick="sortData(3)"> Lowest Priced First</label>
              </div>
          </div>
                      <br>
                      <br>
                      <br>
               </div>
    </div>
  </div>

  <script type="text/javascript">
  $("#sor_id_sh").click(function(){
    $("#sh_sort").show();
    $(".prod_d_f").css("opacity" , "0.1");
    $(".top_header_mobile").css("opacity" , "0.1");
    $(".r-fil_prod").css("opacity" , "0.1");
  });
  $("#close_btn").click(function(){
    $("#sh_sort").hide();
    $(".prod_d_f").css("opacity" , "1");
    $(".top_header_mobile").css("opacity" , "1");
    $(".r-fil_prod").css("opacity" , "1");
  });
  </script>


    <div class="row">
     <!-- Sliding image on the basis of category of products -->
                    <?php
					$pop=$_GET['pop'];
					$Hp=$_GET['Hp'];
					$lowp=$_GET['lowp'];
					$prod_type=$_GET['prod_type'];
					if($pop=="" && $Hp=="" && $lowp=="")
					{
					$srs=0;
					$prodSql="SELECT * FROM `product` WHERE cat='".$_GET['prod_type']."'";
					$prodRs=mysqli_query($conn,$prodSql);
					while($prodRow=mysqli_fetch_array($prodRs))
					{
					?>
      <div class="col-md-6 col-xs-6 col-xs-6 col-lg-6">
        <div class="prod_d_f">
        <div class="prod_image">
          <a class="prod-pro-img-wrap" href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>">
                    <img class="b-lazy b-loaded" src="<?php echo $prodRow['url']; ?>" alt="<?php echo $prodRow['name']; ?>">
          </a>
        </div>
        <div class="prod_r_d prod_dt_wr">
          <div class="prod_dt_wr_tl">
            <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>"><?php echo $prodRow['name']; ?></a>
          </div>
          <div class="prod_dt_wr_at col-prod-orange">
            <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>">by Prabhu Bhakti sansthan</a>
          </div>
          <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>">
            <div class="prod-pro-price">
              <span class="prod-pro-price-new"><?php echo "Rs.".$prodRow['mrp']; ?></span>
              <span class="prod-pro-price-old"><?php echo "Rs.".$prodRow['mrp']; ?></span>
            </div>
           <!--  <div class="prod-pro-sv-txt">Save Rs.1,670(56% off)</div>  -->
          </a>
        </div>
        <div class="prod_foot_d prod-card-footer">
          <div class="prod-card-footer-tab">
          <?php
		  // check item is in wishlist or not
		  $sql1="SELECT * FROM `wishlist` WHERE skucode='".$prodRow['skucode']."' && sessionid='".$_SESSION['mob']."'";
		  $rs1=mysqli_query($conn,$sql1);
		  $check1=mysqli_num_rows($rs1);
		  if($check1>0)
		  {
		  ?>
          <i class="fa fa-heart" title="Add to Wishlist" id="<?php echo $prodRow['sr']; ?>" style="margin-top:10px; color:#F00; font-size:25px" onClick="deleteWishlist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>',<?php echo $prodRow['sr']; ?>)"></i>

           <?php
		  }
		  else
		  {
		   ?>

            <i class="fa fa-heart" title="Add to Wishlist" id="<?php echo $prodRow['sr']; ?>" style="color:#000; margin-top:10px; font-size:25px" onClick="saveWishlist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>',<?php echo $prodRow['sr']; ?>)"></i>

           <?php
		  }
		   ?>
          </div>
          <div class="prod-card-footer-tab">
           <?php
		  // check item is in wishlist or not
		  $sql2="SELECT * FROM `addtolist` WHERE skucode='".$prodRow['skucode']."' && sessionid='".$_SESSION['mob']."'";
		  $rs2=mysqli_query($conn,$sql2);
		  $check2=mysqli_num_rows($rs2);
		  if($check2>0)
		  {

		  ?>
          <i class="fa fa-cart-plus" style="font-size:25px; color:#F00; margin-top:10px" id="<?php echo $prodRow['sr']."a"; ?>" onClick="deleteAddtolist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>','<?php echo $prodRow['sr']."a"; ?>')"></i>
            <?php
		  }
		  else
		  {
		   ?>
               <i class="fa fa-cart-plus" style="font-size:25px; color:#000; margin-top:10px" id="<?php echo $prodRow['sr']."a"; ?>" onClick="saveAddtolist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>','<?php echo $prodRow['sr']."a"; ?>','<?php echo $uid; ?>')"></i>
             <?php
		  }
		   ?>

          </div>
        </div>
      </div>
      </div>
      <?php
					}
					}
					else if($Hp=="" && $lowp=="" && $prod_type=="")
					{
					$srs=0;
					$prodSql="SELECT * FROM `product` ORDER BY priority DESC";
					$prodRs=mysqli_query($conn,$prodSql);
					while($prodRow=mysqli_fetch_array($prodRs))
					{
	  ?>
      <div class="col-md-6 col-xs-6 col-xs-6 col-lg-6">
        <div class="prod_d_f">
        <div class="prod_image">
          <a class="prod-pro-img-wrap" href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>">
                    <img class="b-lazy b-loaded" src="<?php echo $prodRow['url']; ?>" alt="<?php echo $prodRow['name']; ?>">
          </a>
        </div>
        <div class="prod_r_d prod_dt_wr">
          <div class="prod_dt_wr_tl">
            <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>"><?php echo $prodRow['name']; ?></a>
          </div>
          <div class="prod_dt_wr_at col-prod-orange">
            <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>"></a>
          </div>
          <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>">
            <div class="prod-pro-price">
              <span class="prod-pro-price-new"><?php echo "Rs.".$prodRow['mrp']; ?></span>
              <span class="prod-pro-price-old"><?php echo "Rs.".$prodRow['mrp']; ?></span>
            </div>
           <!--  <div class="prod-pro-sv-txt">Save Rs.1,670(56% off)</div>  -->
          </a>
        </div>
        <div class="prod_foot_d prod-card-footer">
          <div class="prod-card-footer-tab">
          <?php
		  // check item is in wishlist or not
		  $sql1="SELECT * FROM `wishlist` WHERE skucode='".$prodRow['skucode']."' && sessionid='".$_SESSION['mob']."'";
		  $rs1=mysqli_query($conn,$sql1);
		  $check1=mysqli_num_rows($rs1);
		  if($check1>0)
		  {
		  ?>
          <i class="fa fa-heart" title="Add to Wishlist" id="<?php echo $prodRow['sr']; ?>" style="margin-top:10px; color:#F00; font-size:25px" onClick="deleteWishlist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>',<?php echo $prodRow['sr']; ?>)"></i>

           <?php
		  }
		  else
		  {
		   ?>

            <i class="fa fa-heart" title="Add to Wishlist" id="<?php echo $prodRow['sr']; ?>" style="color:#000; margin-top:10px; font-size:25px" onClick="saveWishlist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>',<?php echo $prodRow['sr']; ?>)"></i>

           <?php
		  }
		   ?>
          </div>
          <div class="prod-card-footer-tab">
           <?php
		  // check item is in wishlist or not
		  $sql2="SELECT * FROM `addtolist` WHERE skucode='".$prodRow['skucode']."' && sessionid='".$_SESSION['mob']."'";
		  $rs2=mysqli_query($conn,$sql2);
		  $check2=mysqli_num_rows($rs2);
		  if($check2>0)
		  {

		  ?>
          <i class="fa fa-cart-plus" style="font-size:25px; color:#F00; margin-top:10px" id="<?php echo $prodRow['sr']."a"; ?>" onClick="deleteAddtolist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>','<?php echo $prodRow['sr']."a"; ?>')"></i>
            <?php
		  }
		  else
		  {
		   ?>
               <i class="fa fa-cart-plus" style="font-size:25px; color:#000; margin-top:10px" id="<?php echo $prodRow['sr']."a"; ?>" onClick="saveAddtolist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>','<?php echo $prodRow['sr']."a"; ?>','<?php echo $uid; ?>')"></i>
             <?php
		  }
		   ?>

          </div>
        </div>
      </div>
      </div>
      <?php
					}
					}
						else if($pop=="" && $lowp=="" && $prod_type=="")
					{
					$srs=0;
					$prodSql="SELECT * FROM `product` ORDER BY sprice DESC";
					$prodRs=mysqli_query($conn,$prodSql);
					while($prodRow=mysqli_fetch_array($prodRs))
					{
	  ?>
      <div class="col-md-6 col-xs-6 col-xs-6 col-lg-6">
        <div class="prod_d_f">
        <div class="prod_image">
          <a class="prod-pro-img-wrap" href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>">
                    <img class="b-lazy b-loaded" src="<?php echo $prodRow['url']; ?>" alt="<?php echo $prodRow['name']; ?>">
          </a>
        </div>
        <div class="prod_r_d prod_dt_wr">
          <div class="prod_dt_wr_tl">
            <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>"><?php echo $prodRow['name']; ?></a>
          </div>
          <div class="prod_dt_wr_at col-prod-orange">
            <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>">by Prabhu Bhakti sansthan</a>
          </div>
          <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>">
            <div class="prod-pro-price">
              <span class="prod-pro-price-new"><?php echo "Rs.".$prodRow['mrp']; ?></span>
              <span class="prod-pro-price-old"><?php echo "Rs.".$prodRow['mrp']; ?></span>
            </div>
           <!--  <div class="prod-pro-sv-txt">Save Rs.1,670(56% off)</div>  -->
          </a>
        </div>
        <div class="prod_foot_d prod-card-footer">
          <div class="prod-card-footer-tab">
          <?php
		  // check item is in wishlist or not
		  $sql1="SELECT * FROM `wishlist` WHERE skucode='".$prodRow['skucode']."' && sessionid='".$_SESSION['mob']."'";
		  $rs1=mysqli_query($conn,$sql1);
		  $check1=mysqli_num_rows($rs1);
		  if($check1>0)
		  {
		  ?>
          <i class="fa fa-heart" title="Add to Wishlist" id="<?php echo $prodRow['sr']; ?>" style="margin-top:10px; color:#F00; font-size:25px" onClick="deleteWishlist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>',<?php echo $prodRow['sr']; ?>)"></i>

           <?php
		  }
		  else
		  {
		   ?>

            <i class="fa fa-heart" title="Add to Wishlist" id="<?php echo $prodRow['sr']; ?>" style="color:#000; margin-top:10px; font-size:25px" onClick="saveWishlist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>',<?php echo $prodRow['sr']; ?>)"></i>

           <?php
		  }
		   ?>
          </div>
          <div class="prod-card-footer-tab">
           <?php
		  // check item is in wishlist or not
		  $sql2="SELECT * FROM `addtolist` WHERE skucode='".$prodRow['skucode']."' && sessionid='".$_SESSION['mob']."'";
		  $rs2=mysqli_query($conn,$sql2);
		  $check2=mysqli_num_rows($rs2);
		  if($check2>0)
		  {

		  ?>
          <i class="fa fa-cart-plus" style="font-size:25px; color:#F00; margin-top:10px" id="<?php echo $prodRow['sr']."a"; ?>" onClick="deleteAddtolist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>','<?php echo $prodRow['sr']."a"; ?>')"></i>
            <?php
		  }
		  else
		  {
		   ?>
               <i class="fa fa-cart-plus" style="font-size:25px; color:#000; margin-top:10px" id="<?php echo $prodRow['sr']."a"; ?>" onClick="saveAddtolist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>','<?php echo $prodRow['sr']."a"; ?>','<?php echo $uid; ?>')"></i>
             <?php
		  }
		   ?>

          </div>
        </div>
      </div>
      </div>
      <?php
					}}
						else if($Hp=="" && $pop=="" && $prod_type=="")
					{
					$srs=0;
					$prodSql="SELECT * FROM `product` ORDER BY sprice ASC";
					$prodRs=mysqli_query($conn,$prodSql);
					while($prodRow=mysqli_fetch_array($prodRs))
					{

	  ?>
       <div class="col-md-6 col-xs-6 col-xs-6 col-lg-6">
        <div class="prod_d_f">
        <div class="prod_image">
          <a class="prod-pro-img-wrap" href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>">
                    <img class="b-lazy b-loaded" src="<?php echo $prodRow['url']; ?>" alt="<?php echo $prodRow['name']; ?>">
          </a>
        </div>
        <div class="prod_r_d prod_dt_wr">
          <div class="prod_dt_wr_tl">
            <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>"><?php echo $prodRow['name']; ?></a>
          </div>
          <div class="prod_dt_wr_at col-prod-orange">
            <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>">by Prabhu Bhakti sansthan</a>
          </div>
          <a href="prod_desc.php?prod_type=<?php echo $prodRow['sr']; ?>">
            <div class="prod-pro-price">
              <span class="prod-pro-price-new"><?php echo "Rs.".$prodRow['mrp']; ?></span>
              <span class="prod-pro-price-old"><?php echo "Rs.".$prodRow['mrp']; ?></span>
            </div>
           <!--  <div class="prod-pro-sv-txt">Save Rs.1,670(56% off)</div>  -->
          </a>
        </div>
        <div class="prod_foot_d prod-card-footer">
          <div class="prod-card-footer-tab">
          <?php
		  // check item is in wishlist or not
		  $sql1="SELECT * FROM `wishlist` WHERE skucode='".$prodRow['skucode']."' && sessionid='".$_SESSION['mob']."'";
		  $rs1=mysqli_query($conn,$sql1);
		  $check1=mysqli_num_rows($rs1);
		  if($check1>0)
		  {
		  ?>
          <i class="fa fa-heart" title="Add to Wishlist" id="<?php echo $prodRow['sr']; ?>" style="margin-top:10px; color:#F00; font-size:25px" onClick="deleteWishlist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>',<?php echo $prodRow['sr']; ?>)"></i>

           <?php
		  }
		  else
		  {
		   ?>

            <i class="fa fa-heart" title="Add to Wishlist" id="<?php echo $prodRow['sr']; ?>" style="color:#000; margin-top:10px; font-size:25px" onClick="saveWishlist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>',<?php echo $prodRow['sr']; ?>)"></i>

           <?php
		  }
		   ?>
          </div>
          <div class="prod-card-footer-tab">
           <?php
		  // check item is in wishlist or not
		  $sql2="SELECT * FROM `addtolist` WHERE skucode='".$prodRow['skucode']."' && sessionid='".$_SESSION['mob']."'";
		  $rs2=mysqli_query($conn,$sql2);
		  $check2=mysqli_num_rows($rs2);
		  if($check2>0)
		  {

		  ?>
          <i class="fa fa-cart-plus" style="font-size:25px; color:#F00; margin-top:10px" id="<?php echo $prodRow['sr']."a"; ?>" onClick="deleteAddtolist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>','<?php echo $prodRow['sr']."a"; ?>')"></i>
            <?php
		  }
		  else
		  {
		   ?>
               <i class="fa fa-cart-plus" style="font-size:25px; color:#000; margin-top:10px" id="<?php echo $prodRow['sr']."a"; ?>" onClick="saveAddtolist('<?php echo $prodRow['skucode']; ?>',1,'<?php echo $_GET['prod_type'];?>','<?php echo $_SESSION['mob']; ?>','<?php echo $prodRow['sr']."a"; ?>','<?php echo $uid; ?>')"></i>
             <?php
		  }
		   ?>

          </div>
        </div>
      </div>
      </div>
      <?php
					}}
	  ?>
    </div>



    <!-- filter box -->

    <div class="container-fluid padding-0">
    <footer class="detail-action-bar flex justify-end fixed-tool-bar">
    	 <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
    		 <div class="top-footer_mobile">
    			 <span><img src="images/icons/home_icon.png"></span>
    			 <span><img src="images/icons/icon_video.png"></span>
    			 <span><img src="images/icons/icon_shop.png"></span>
    			 <span><img src="images/icons/icon_chat.png"></span>
    			 <div class="top_footer_bottom_text">
    				<a href="product.php" target="_self"> <span class="f-b-tx">Home</span></a>
    				 <span class="f-b-tx">Videos</span>
    				<a href="product.php" target="_self"> <span class="f-b-tx">Product</span></a>
    				 <span class="f-b-tx">Chat</span>
    			 </div>
    		 </div>
    		 </div>
    </footer>
    </div>

  </div>
  <!-- end of main outside box -->


  <div class="filter_box" id="inner_filter_box" style="display:none;">
  <div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 top_header_filter">
      <span style="color:#000;font-size:1.8rem">
        <i class="fa fa-angle-left" id="go_back_ic" style="font-size:3rem;cursor:pointer;float: left;color: #1D3B48;margin-right: 1rem;margin-top: -0.3rem;"></i>
        Filter
      </span>
      <span style="color:#000;font-size:1.8rem;float:right">Reset All</span>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
      <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
      <div id="exTab1">
        <ul  class="nav nav-pills">
          <li class="active">
            <a  href="#cat" data-toggle="tab">Categories</a>
          </li>
         <!-- <li>
            <a href="#brands" data-toggle="tab">Branding</a>
          </li>
          <li>
            <a href="#price" data-toggle="tab">Price</a>
          </li>
          <li>
            <a href="#p_mat" data-toggle="tab">Primary Material</a>
          </li>
          <li>
            <a href="#xpress_ship" data-toggle="tab">Xpress Ship</a>
          </li> -->
        </ul>
      </div>
    </div>
      <div class="col-lg-8 col-sm-8 col-xs-8 col-md-8 filter_prod_cat">
  			<div class="tab-content clearfix">
  			  <div class="tab-pane active" id="cat">
            <ul class="list-group">
            <?php
			$sql21="SELECT * FROM `prodcat`";
			$rs21=mysqli_query($conn,$sql21);
			while($row21=mysqli_fetch_array($rs21))
			{
			?>
            <a href="product_cat.php?prod_type=<?php echo $row21['prodcatt']; ?>"><li class="list-group-item d-flex justify-content-between align-items-center">
               <?php echo $row21['prodcatt']; ?>
              <span class="badge badge-primary badge-pill"><?php
			  $sql22="SELECT * FROM `product` WHERE cat='".$row21['prodcatt']."'";
			  $rs22=mysqli_query($conn,$sql22);
			  $check22=mysqli_num_rows($rs22);
			  echo $check22;
			  ?></span>
            </li></a>
           <?php
			}
		   ?>
          </ul>
  				</div>
  				<div class="tab-pane" id="brands">
            <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
               PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
               PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
               PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
               PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">1</span>
            </li>
          </ul>
  				</div>
          <div class="tab-pane" id="price">
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Rs 400 - Rs 500
                <span class="badge badge-primary badge-pill">14</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Rs 400 - Rs 500
                <span class="badge badge-primary badge-pill">2</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Rs 400 - Rs 500
                <span class="badge badge-primary badge-pill">1</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Rs 400 - Rs 500
                <span class="badge badge-primary badge-pill">14</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Rs 400 - Rs 500
                <span class="badge badge-primary badge-pill">2</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Rs 400 - Rs 500
                <span class="badge badge-primary badge-pill">1</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Rs 400 - Rs 500
                <span class="badge badge-primary badge-pill">14</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Rs 400 - Rs 500
                <span class="badge badge-primary badge-pill">2</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Rs 400 - Rs 500
                <span class="badge badge-primary badge-pill">1</span>
              </li>
            </ul>
  				</div>
          <div class="tab-pane" id="p_mat">
            <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
               PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
               PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
               PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
               PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              PrabhuBhakti Locket
              <span class="badge badge-primary badge-pill">1</span>
            </li>
          </ul>
  				</div>
            <div class="tab-pane" id="xpress_ship">
              <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                 Yes
                <span class="badge badge-primary badge-pill">14</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                 No
                <span class="badge badge-primary badge-pill">2</span>
              </li>
            </ul>
  				</div>
  			</div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 filter_btn_default">
       <a href="product_cat.php?prod_type=<?php echo $prod_type; ?>" target="_self"> <button class="col-lg-6 col-md-6 col-sm-6 col-xs-6 btn btn-default filter-btn-close">Close</button></a>
        <a href="product_cat.php?prod_type=<?php echo $prod_type; ?>" target="_self"><button class="col-lg-6 col-md-6 col-sm-6 col-xs-6 btn btn-danger filter-btn-apply">Apply</button></a>
    </div>
  </div>

  <!-- Bootstrap core JavaScript
      ================================================== -->
  	<!-- Placed at the end of the document so the pages load faster -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  </div>

<?php include('search-icon.php'); ?>

  <script>
  $(document).ready(function(){
    $("#fil_id_sh").click(function(){
      $("#inner_filter_box").show();
      $("#out_main_wrap").hide();
    });
    $("#go_back_ic").click(function(){
      $("#inner_filter_box").hide();
      $("#out_main_wrap").show();
    });


    $("#on_search").click(function(){
      $("#inner_filter_box").hide();
      $("#out_main_wrap").hide();
      $("#search_result").show();
    });
  });
  </script>
    </body>
    </html>
<?php } ?>
