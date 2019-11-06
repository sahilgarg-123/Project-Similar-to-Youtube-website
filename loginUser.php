<?php
if($_GET['urlRD']=="")
{
	$urlData="Users/index.php";
}
else
{
	$urlData=$_GET['urlRD'];
}
?>
<!DOCTYPE html>
<!-- saved from url=(0075)file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/login.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Prabhu Bhakti user login panel</title>

    <!-- Bootstrap -->
    <link href="./loginUser_files/bootstrap.css" rel="stylesheet">
    <link href="./loginUser_files/style.css" rel="stylesheet">
    <link href="./loginUser_files/font-awesome.css" rel="stylesheet">
    <link href="./loginUser_files/owl.carousel.css" rel="stylesheet">
    <link href="./loginUser_files/owl.theme.default.css" rel="stylesheet">
    <link href="./loginUser_files/css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="jss/validateLogin.js"></script>
    
    
    
    
  </head>
  <body>
  
    <div class="wrapper">

      <section class="login">
        <div class="container">
          <div class="col-md-6 col-md-offset-3 col-sm-6 col-xs-12">
            <form name="Form1" id="Form1" action="loginUserr.php" method="POST" onSubmit="return ValidateForm1(this)">
              <h2>Login</h2>
              <div class="form-group">
                
                <input type="number" class="form-control" id="mob" name="mob" placeholder="Mobile Number">
              </div>
              <div class="form-group">
                
                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
              </div>
              <input type="text" style="display:none" id="urlData" name="urlData" value="<?php echo $urlData; ?>">
              <div class="form-group">
               
                <input type="submit" value="Login" class="btn">
              </div>
              
          </form>
          <a href="signUp.php"><h4>New User ?</h4></a>
          </div>
        </div>
      </section>

    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./loginUser_files/jquery.min.js.download"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./loginUser_files/bootstrap.js.download"></script>
    <script src="./loginUser_files/owl.carousel.js.download"></script>


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

  
</body></html>