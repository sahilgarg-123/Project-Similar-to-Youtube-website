<!DOCTYPE html>
<html>
<?php
include("connect.php");
?>
<head>
  <script type="text/javascript" src="editor/ed.js"></script>
  
<!--<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=hmj5wmc3u49zbs29zpa584l5kaml1l4wvmt6o9k9u0k3uzci"></script>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script> -->

    
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="css/all-skins.min.css">

  <link rel="stylesheet" href="css/bootstrap-tagsinput.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
<!--
function ValidateForm1(theForm)
{
   var regexp;
 regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ0-9-@#$-_]*$/;
   if (!regexp.test(theForm.video_id.value))
   {
      alert("Enter Video Id");
      theForm.video_id.focus();
      return false;
   }
   if (theForm.video_id.value == "")
   {
      alert("Enter Video Id");
      theForm.video_id.focus();
      return false;
   }
   if (theForm.video_id.value.length < 6)
   {
      alert("Enter Video Id");
      theForm.video_id.focus();
      return false;
   }
   if (theForm.video_id.value.length > 30)
   {
      alert("Enter Video Id");
      theForm.video_id.focus();
      return false;
   }

   if (theForm.video_title.value == "")
   {
      alert("Enter Video Title");
      theForm.video_title.focus();
      return false;
   }
   if (theForm.video_title.value.length < 5)
   {
      alert("Enter Video Title");
      theForm.video_title.focus();
      return false;
   }
   if (theForm.video_title.value.length > 300)
   {
      alert("Enter Video Title");
      theForm.video_title.focus();
      return false;
   }



   if (theForm.video_desc.value == "")
   {
      alert("Enter video description");
      theForm.video_desc.focus();
      return false;
   }
   if (theForm.video_desc.value.length < 10)
   {
      alert("Enter video description");
      theForm.video_desc.focus();
      return false;
   }
   if (theForm.video_desc.value.length > 5000)
   {
      alert("Enter video description");
      theForm.video_desc.focus();
      return false;
   }
   regexp = /(http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
   if (!regexp.test(theForm.vimage_url.value))
   {
      alert("Enter video url");
      theForm.vimage_url.focus();
      return false;
   }
   if (theForm.vimage_url.value == "")
   {
      alert("Enter video url");
      theForm.vimage_url.focus();
      return false;
   }
   if (theForm.vimage_url.value.length < 5)
   {
      alert("Enter video url");
      theForm.vimage_url.focus();
      return false;
   }
   if (theForm.vimage_url.value.length > 200)
   {
      alert("Enter video url");
      theForm.vimage_url.focus();
      return false;
   }
   if(theForm.video_cat.selectedIndex < 0)
   {
	   alert("Enter video category");
	   theForm.video_cat.focus();
	   return false;
   }
    if(theForm.video_cat.selectedIndex == 0)
   {
	   alert("Enter video category");
	   theForm.video_cat.focus();
	   return false;
   }
     if(theForm.video_subcat.selectedIndex < 0)
   {
	   alert("Enter video Sub category");
	   theForm.video_subcat.focus();
	   return false;
   }
    if(theForm.video_subcat.selectedIndex == 0)
   {
	   alert("Enter video Sub category");
	   theForm.video_subcat.focus();
	   return false;
   }
	return true; 
   
}

//-->
</script>
<script>
function saveVideo()
{
		var videoid=$("#video_id").val();
		var vtitle=$("#video_title").val();
		var vdesc=$("#video_desc").val();
		var vsubcat=$("#video_subcat").val();
		var vcat=$("#video_cat").val();
		var Vimg=$("#vimage_url").val();
		
		
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } 
  xmlhttp.onreadystatechange=function() 
   {
    if (this.readyState==4 && this.status==200) 
	{
      alert("Your video is Live Now on website"); 
	}
  };
  xmlhttp.open("GET","insertVideos.php?videoid="+videoid+'&vtitle='+vtitle+'&vdesc='+vdesc+'&vsubcat='+vsubcat+'&vcat='+vcat+'&Vimg='+Vimg,true);
  xmlhttp.send();
}

</script>
<script>
function changeSubcat(videoCatt)
{

	if(videoCatt=="")
	{
	}
	else
	{
	
	 if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } 
  xmlhttp.onreadystatechange=function() 
   {
    if (this.readyState==4 && this.status==200) 
	{
     document.getElementById("subdata").innerHTML=this.responseText;
	}
  };
  xmlhttp.open("POST","selectSubcat.php?catt="+videoCatt,true);
  xmlhttp.send();
	}
}
</script>

<script src="js/validateSeo.js"></script>
<script src="js/saveSeoTag.js"></script>
<script src="js/changeSeoSubcat.js"></script>
<script src="js/changeVideoid.js"></script>
<script src="js/deleteVideo.js"></script>
<script src="js/updateVideos.js"></script>
<script src="js/findTags.js"></script>

  
</head>




<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>B</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Prabhu</b>BHAKTI</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Leave Feedback if you are not comfort</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Leave Feedback if you are not comfort</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Leave Feedback if you are not comfort</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Leave Feedback if you are not comfort</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Leave Feedback if you are not comfort</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">              
              <span class="hidden-xs">Alexander Pierce <i class="fa fa-caret-down"></i></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <p>
                  Mr. Pradeep kumar Sheoran - Web Developer
                  <small>Member since Dec. 2018</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                
                <div class="text-center">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-video-camera"></i> <span>Video</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="add_new_video.php"><i class="fa fa-circle-o"></i> Add New Video</a></li>
            <li><a href="add_remove_video.php"><i class="fa fa-circle-o"></i> Add / Remove</a></li>
            <li><a href="priority.php"><i class="fa fa-circle-o"></i> Set Priority</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-image-o"></i> <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="add_new_image.php"><i class="fa fa-circle-o"></i> Add New Product</a></li>
            <li><a href="add_remove_image.php"><i class="fa fa-circle-o"></i> Add / Remove</a></li>
            <li><a href="priorityp.php"><i class="fa fa-circle-o"></i> Set Priority</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share-alt"></i> <span>Social Sharing</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#.html"><i class="fa fa-circle-o"></i> Add New Sharing</a></li>
            <li><a href="#.html"><i class="fa fa-circle-o"></i> Set Priority</a></li>
          </ul>
        </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="form">
          
          <?php
		  $upvideoID=$_GET['upvideoID'];
		  if($upvideoID=="")
		  {
			  ?>
              <form id="Form1" name="Form1" method="post" action="insertVideos.php" onsubmit="return ValidateForm1(this)" enctype="multipart/form-data">
              <h2><i class="fa fa-video-camera"></i> Video Form</h2>
              <div class="form-group">
                <label class="control-label col-sm-3">Enter id</label>
                <div class="col-sm-9">
                <input type="text" id="video_id" name="video_id" class="form-control" placeholder="Enter id">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3"> Title</label>
                <div class="col-sm-9">
                <input type="text" id="video_title" name="video_title" class="form-control" placeholder="Title">
                </div>
              </div>
              <div class="form-group">
              
                <label class="control-label col-sm-3"> Description</label>
                <div class="col-sm-9">
                <script>edToolbar('video_desc'); </script> 
                <textarea placeholder="description" id="video_desc" name="video_desc" class="form-control"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3"> Category</label>
                <div class="col-sm-9">
                <select class="form-control" id="video_cat" name="video_cat" onChange="changeSubcat(this.value)">
                  <option value="" selected>Select Category</option>
                  <?php
				  $catsql="SELECT * FROM `formalCat`";
				  $resultcat=mysqli_query($conn,$catsql);
				  while($catRow=mysqli_fetch_array($resultcat))
				  {
				  ?>
                  <option value="<?php echo $catRow['cat']; ?>"><?php echo $catRow['cat']; ?></option>
                  <?php
				  }
				  ?>
                </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3"> Sub Category</label>
                <div class="col-sm-9" id="subCat">
                <div id="subdata"></div>
                
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3">Thumbnail</label>
                <div class="col-sm-9">
                <input type="text" id="vimage_url" name="vimage_url" class="form-control" placeholder="url">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3"> &nbsp;</label>
                <div class="col-sm-9">
                <input type="submit" value="submit">
                </div>
              </div>
              
            </form>
              <?php
		  }
		  else
		  {
			  $upsql="SELECT * FROM `videos` WHERE videoid='".$upvideoID."'";
			  $upresult=mysqli_query($conn,$upsql);
			 while($uprow=mysqli_fetch_array($upresult))
			 {
			  ?>
              <form id="Form1" name="Form1" action="insertVideos.php" method="post" onsubmit="return ValidateForm1(this)" enctype="multipart/form-data">
              <h2><i class="fa fa-video-camera"></i> Video Form</h2>
              <div class="form-group">
                <label class="control-label col-sm-3">Enter id</label>
                <div class="col-sm-9">
                <input type="text" id="video_id" name="video_id" class="form-control" placeholder="Enter id" value="<?php echo $uprow['videoid']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3"> Title</label>
                <div class="col-sm-9">
                <input type="text" id="video_title" name="video_title" class="form-control" placeholder="Title" value="<?php echo $uprow['videoT']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3"> Description</label>
                <div class="col-sm-9">
                <script>edToolbar('video_desc'); </script>
                <textarea placeholder="description" id="video_desc" name="video_desc" class="form-control"><?php echo $uprow['video_desc']; ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3"> Category</label>
                <div class="col-sm-9">
                <select class="form-control" id="video_cat" name="video_cat" onChange="changeSubcat(this.value)">
                  <option value="" selected>Select Category</option>
                  <?php
				  $catsql="SELECT * FROM `formalCat`";
				  $resultcat=mysqli_query($conn,$catsql);
				  while($catRow=mysqli_fetch_array($resultcat))
				  {
				  ?>
                  <option value="<?php echo $catRow['cat']; ?>"><?php echo $catRow['cat']; ?></option>
                  <?php
				  }
				  ?>
                </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3"> Sub Category</label>
                <div class="col-sm-9" id="subCat">
                <div id="subdata"></div>
                
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3">Thumbnail</label>
                <div class="col-sm-9">
                <input type="text" id="vimage_url" name="vimage_url" class="form-control" placeholder="url" value="<?php echo $uprow['thumbnail']; ?>"><img src="<?php echo $uprow['thumbnail']; ?>" style="height:80px; width:80px"></img>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3"> &nbsp;</label>
                <div class="col-sm-9">
                <input type="submit" value="submit">
                </div>
              </div>
              
            </form>
              <?php
			 }
		  }
		  ?>
          
            
            
            
            
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="seo">
            <form name="Form2" id="Form2" onsubmit="return ValidateForm2(this)">
            
            
              <h2><i class="fa fa-yoast"></i> Apply SEO</h2>
            <div class="form-group">
                <label class="control-label col-sm-3">Enter Tag</label>
                <div class="col-sm-9">
                <input type="text" name="seotag" maxlength="400" id="seotag" value data-role="tagsinput" class="form-control" placeholder="Enter Tag" />
                </div>
              </div>
             
              <div class="form-group">
                <label class="control-label col-sm-3"> Category</label>
                <div class="col-sm-9">
                <select class="form-control" name="seoCat" id="seoCat" onChange="changeSeoSubcat(this.value)">
                  <option value="" selected>Select Category</option>
                  <?Php
				  $seoCats="SELECT * FROM `formalCat`";
				  $seoResult=mysqli_query($conn,$seoCats);
				  while($seoRow=mysqli_fetch_array($seoResult))
				  {
				  ?>
                  <option value="<?php echo $seoRow['cat'];  ?>"><?php echo $seoRow['cat'];  ?></option>
                 <?php  
				  }
				 ?>
                </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3"> Sub Category</label>
                <div class="col-sm-9">
                
             <div name="subcat1" id="subcat1"></div>
              </div>
				</div>
                <div class="form-group">
                <label class="control-label col-sm-3">Video ID</label>
                <div class="col-sm-9">
                
             <div name="videoid1" id="videoid1"></div>
              </div>
				</div>
                
                <div class="form-group">
                <label class="control-label col-sm-3">Tags Found</label>
                <div class="col-sm-9">
                
             <div name="tagsFound" id="tagsFound"></div>
              </div>
				</div>
              <div class="form-group">
                <label class="control-label col-sm-3"> &nbsp;</label>
                <div class="col-sm-9">
                <input type="submit" value="Save">
                </div>
              </div>
            </form>
            </div>
        </div>
        
        
        
        <div class="col-md-12 col-sm-6 col-xs-12">
        <a href="https://wordtohtml.net" target="new"><button class="btn btn-facebook">HTML Editor</button></a>
          <div class="table">
          <div class="table-responsive" style="height:800px; overflow:scroll">
                <table class="table no-margin">
                 <thead> 
                  <tr>
                    <th>Sr</th>
                    <th>Video ID</th>
                    <th>Title</th>
                    <th>Cat</th>
                    <th>Priority</th>
                    <th>Edit</th>
                    <th>Live</th>
                    <th>DELETE</th>
                  </tr>
                 </thead>
                  <tbody>
                  <?php 
				  include("connect.php");
				  $sqltable="SELECT * FROM `videos`";
				  $rtable=mysqli_query($conn,$sqltable);
				  while($tablerow=mysqli_fetch_array($rtable))
				  {
				  ?><tr>
              		<td><?php echo $tablerow['sr']; ?></td>
                    <td><?php echo $tablerow['videoid']; ?></td>
                    <td><?php echo $tablerow['videoT']; ?></td>
                    <td><?php echo $tablerow['video_cat']; ?></td>
                    <td><?php echo $tablerow['priority']; ?></td>
                       <td><a href="http://prabhubhakti.com/mytube.php?videoid=<?php echo $tablerow['videoid']; ?>"><button type="button" class="btn-dropbox">Live</button></a></td>
                    <td><button type="button" class="btn-dropbox" onClick="updateVideos('<?php echo $tablerow['videoid']; ?>')">Update</button></td>
                    <td><img src="images/delete.png" onClick="deleteVideo('<?php echo $tablerow['videoid']; ?>')"></img></td>
                    </tr>
                 <?php
				  }
				 ?>
                 
                  </tbody>
                </table>
              </div>
            </div>
        </div>
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>PrabhuBhakti</b>
    </div>
    <strong>Copyright &copy; 2019</strong> All rights
    reserved.
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>

<script src="js/bootstrap-tagsinput.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>

</body>
</html>
