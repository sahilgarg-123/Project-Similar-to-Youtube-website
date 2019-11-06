<!DOCTYPE html>
<!-- saved from url=(0082)file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/html/registration.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Prabhu Bhakti : Signup users</title>

    <!-- Bootstrap -->
    <link href="./signUp_files/bootstrap.css" rel="stylesheet">
    <link href="./signUp_files/style.css" rel="stylesheet">
    <link href="./signUp_files/font-awesome.css" rel="stylesheet">
    <link href="./signUp_files/owl.carousel.css" rel="stylesheet">
    <link href="./signUp_files/owl.theme.default.css" rel="stylesheet">
    <link href="./signUp_files/css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   <script src="newJs/validateLogin.js"></script>
    
    
  </head>
  <body>
  
    <div class="wrapper">

      <section class="login">
        <div class="container">
          <div class="col-md-6 col-md-offset-3 col-sm-6 col-xs-12">
            <form name="Form1" id="Form1" onSubmit="return ValidateForm1(this)">
              <h2>Registration</h2>
              <div class="form-group">
                
                <input type="text" id="name" name="name" class="form-control" placeholder="Name">
              </div>
              <div class="form-group">
               
                <input type="number" id="mob" name="mob" maxlength="10" class="form-control" placeholder="Mobile No">
              </div>
           
                <div class="form-group">
               
                <input type="text" id="codee" name="codee" class="form-control" placeholder="Enter Code">
              </div>
             
              <div class="form-group">
               
                <input type="Password" id="pwd" name="pwd" class="form-control" placeholder="Password">
              </div>
              <div class="form-group">
               
                <input type="password" id="cpwd" name="cpwd" class="form-control" placeholder="Confirm Password">
              </div>
               
              <div class="form-group">
               
                <input type="submit"  value="Signup" class="btn">
              </div>
              <div class="form-group" style="margin-bottom:40px">
               
                <a href="loginUser.php">Already registed ?</a>
              </div>
             
              
          </form>
          </div>
        </div>
      </section>

    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./signUp_files/jquery.min.js.download"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./signUp_files/bootstrap.js.download"></script>
    <script src="./signUp_files/owl.carousel.js.download"></script>


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