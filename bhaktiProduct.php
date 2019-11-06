<?php
include("connect.php");
// pid is product id and uid is user id
if($_GET['pid']=="" && $_GET['uid']=="")
{
}
else
{
	// insert product details
	$pid=$_GET['pid'];
	$uid=$_GET['uid'];
	$datee=date("Y-m-d");
	$saveHits="INSERT INTO `hitsofusers`(`userid`,`productid`,`ipp`,datee) VALUES ('".$uid."','".$pid."','".$_SERVER['REMOTE_ADDR']."','".$datee."')";
	$savers=mysqli_query($conn,$saveHits);
	
}
?>

<!DOCTYPE html>
<!-- saved from url=(0078)file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title></title>
      <!-- Bootstrap -->
      <link href="./bhaktiProduct_files/bootstrap.css" rel="stylesheet">
      <link href="./bhaktiProduct_files/style.css" rel="stylesheet">
      <link href="./bhaktiProduct_files/font-awesome.css" rel="stylesheet">
      <link href="./bhaktiProduct_files/owl.carousel.css" rel="stylesheet">
      <link href="./bhaktiProduct_files/owl.theme.default.css" rel="stylesheet">
      <link href="./bhaktiProduct_files/css" rel="stylesheet">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <div class="wrapper">
         <header>
            <div class="top-header">
               <div class="container">
                  <div class="col-md-4 col-sm-6 col-xs-12 left">
                     <img src="./bhaktiProduct_files/logo.png">
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12 center">
                     <form>
                        <input type="text" name="search" placeholder="Search..">            
                     </form>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12 right">
                     <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#"><i class="fa fa-facebook"></i></a>
                     <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#"><i class="fa fa-twitter"></i></a>
                     <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#"><i class="fa fa-linkedin"></i></a>
                     <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#"><i class="fa fa-youtube"></i></a>
                     <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#"><i class="fa fa-shopping-cart"></i></a>
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
                           <li class="dropdown">
                              <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#" class="dropdown-toggle" data-toggle="dropdown">Astrology <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <div class="container">
                                    <li class="col-md-3 col-sm-6 col-xs-12">
                                       <div class="left">
                                          <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#.html">
                                             <div class="img-wrp">
                                                <img src="./bhaktiProduct_files/astrology.jpg" alt="" class="image">
                                                <div class="overlay">
                                                   <div class="text">Astrology</div>
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                    </li>
                                    <li class="col-md-3 col-sm-6 col-xs-12">
                                       <div class="left">
                                          <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/about.html">
                                             <div class="img-wrp">
                                                <img src="./bhaktiProduct_files/rashifal.jpg" alt="" class="image">
                                                <div class="overlay">
                                                   <div class="text">Rashifal</div>
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                    </li>
                                    <li class="col-md-3 col-sm-6 col-xs-12">
                                       <div class="left">
                                          <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/about.html">
                                             <div class="img-wrp">
                                                <img src="./bhaktiProduct_files/palmistry.jpg" alt="" class="image">
                                                <div class="overlay">
                                                   <div class="text">Palmistry</div>
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                    </li>
                                    <li class="col-md-3 col-sm-6 col-xs-12">
                                       <div class="left">
                                          <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/about.html">
                                             <div class="img-wrp">
                                                <img src="./bhaktiProduct_files/vastu.jpg" alt="" class="image">
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
                              <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#" class="dropdown-toggle" data-toggle="dropdown">Mythology <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <div class="container">
                                    <li class="col-md-3 col-sm-6 col-xs-12">
                                       <div class="left">
                                          <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/about.html">
                                             <div class="img-wrp">
                                                <img src="./bhaktiProduct_files/mahabharat.jpg" class="image">
                                                <div class="overlay">
                                                   <div class="text">Mahabharat</div>
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                    </li>
                                    <li class="col-md-3 col-sm-6 col-xs-12">
                                       <div class="left">
                                          <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/about.html">
                                             <div class="img-wrp">
                                                <img src="./bhaktiProduct_files/ramayan.jpg" class="image">
                                                <div class="overlay">
                                                   <div class="text">Ramayan</div>
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                    </li>
                                    <li class="col-md-3 col-sm-6 col-xs-12">
                                       <div class="left">
                                          <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/about.html">
                                             <div class="img-wrp">
                                                <img src="./bhaktiProduct_files/upnishad.jpg" class="image">
                                                <div class="overlay">
                                                   <div class="text">Upnishad</div>
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                    </li>
                                    <li class="col-md-3 col-sm-6 col-xs-12">
                                       <div class="left">
                                          <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/about.html">
                                             <div class="img-wrp">
                                                <img src="./bhaktiProduct_files/puranic-katha.jpg" class="image">
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
                              <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#" class="dropdown-toggle" data-toggle="dropdown">God <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <div class="container">
                                    <li class="col-md-3 col-sm-6 col-xs-12">
                                       <div class="left">
                                          <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/about.html">
                                             <div class="img-wrp">
                                                <img src="./bhaktiProduct_files/krishna-leela.jpg" class="image">
                                                <div class="overlay">
                                                   <div class="text">Astrology</div>
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                    </li>
                                    <li class="col-md-3 col-sm-6 col-xs-12">
                                       <ul class="menu">
                                          <li><a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#">Shiv</a></li>
                                          <li><a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#">Hanuman</a></li>
                                          <li><a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#">Shani</a></li>
                                          <li><a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#">Durga</a></li>
                                       </ul>
                                    </li>
                                    <li class="col-md-3 col-sm-6 col-xs-12">
                                       <div class="left">
                                          <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/about.html">
                                             <div class="img-wrp">
                                                <img src="./bhaktiProduct_files/krishna-leela.jpg" class="image">
                                                <div class="overlay">
                                                   <div class="text">Vastu</div>
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                    </li>
                                    <li class="col-md-3 col-sm-6 col-xs-12">
                                       <ul class="menu">
                                          <li><a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#">Vishnu</a></li>
                                          <li><a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#">Krishna</a></li>
                                          <li><a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#">Luxmi</a></li>
                                          <li><a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#">Ganesha</a></li>
                                       </ul>
                                    </li>
                                 </div>
                              </ul>
                           </li>
                           <li><a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#">Shop</a></li>
                           <li><a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#">Temple</a></li>
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </header>
         <section class="youtube">
            <div class="container">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="http://www.thepujamart.com/media/catalog/product/cache/1/image/1200x1200/9df78eab33525d08d6e5fb8d27136e95/y/e/yellow_kodaia_2.jpg" alt="Image" style="width:800px; height:400px">
          <div class="carousel-caption">
            <h3>Rs 500 onward</h3>
            <p>Kodiya</p>
          </div>      
        </div>

        <div class="item">
          <img src="https://resize.khabarindiatv.com/centered/newbucket/715_540/2016/05/kodiya-1462691079.jpg" style="width:800px; height:400px" alt="Image">
          <div class="carousel-caption">
            <h3>Rs 500 onward</h3>
            <p>Kodiya</p>
          </div>      
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-sm-4">
   <h3><strong>Kodiya</strong></h3>
   <h4><strong>Price <&nbsp;><&nbsp;>  Rs. 500</strong><font size="-1">onwards*</font></h4>
    <div class="well">
       <p>Upcoming Events..</p>
    </div>
    <div class="well">
       <p>Visit Our Blog</p>
    </div>
  </div>
</div>
<hr>
</div>
         </section>
         <footer>
            <div class="top-footer">
               <div class="container">
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <h2>Quick Links</h2>
                     <ul>
                        <li><a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#">About Us</a></li>
                        <li><a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#">Disclaimer</a></li>
                        <li><a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#">Privacy Policy</a></li>
                        <li><a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#">Terms &amp; Conditions</a></li>
                        <li><a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#">Shipping Policy</a></li>
                        <li><a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/you-tube.html#">Return, Refund and Cancellation Policy </a></li>
                     </ul>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <h2>WE ARE USING SAFE PAYMENTS</h2>
                     <ul class="payment">
                        <li><img src="./bhaktiProduct_files/payment-1.png"></li>
                        <li><img src="./bhaktiProduct_files/payment-2.png"></li>
                        <li><img src="./bhaktiProduct_files/payment-3.png"></li>
                        <li><img src="./bhaktiProduct_files/payment-4.png"></li>
                     </ul>
                     <h3>Secured By:</h3>
                     <ul class="payment">
                        <li><img src="./bhaktiProduct_files/payment-5.png"></li>
                        <li><img src="./bhaktiProduct_files/payment-6.png"></li>
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
                  <p>Copyright © 2017. All Rights Reserved.</p>
               </div>
            </div>
         </footer>
      </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="./bhaktiProduct_files/jquery.min.js.download"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="./bhaktiProduct_files/bootstrap.js.download"></script>
      <script src="./bhaktiProduct_files/owl.carousel.js.download"></script>
      <script>
         $(document).ready(function() {
                           
         var owl = $("#owl-demo5");
         
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
   
</body></html>