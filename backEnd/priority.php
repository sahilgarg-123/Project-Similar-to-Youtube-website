<!DOCTYPE html>
<!-- saved from url=(0049)file:///D:/jyoti/video-dashboard/set-priorty.html -->
<html style="height: auto; min-height: 100%;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="./priority_files/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./priority_files/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./priority_files/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="./priority_files/all-skins.min.css">

  <link rel="stylesheet" href="./priority_files/bootstrap-tagsinput.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="./priority_files/css">
  <?php
  $pri_cat=$_GET['cat'];
  
  ?>
  <!-- JavaScript Query -->
  <script src="js/updateP.js"></script>
  <script src="js/callMe.js"></script>
  <script src="js/changeTagsubcat.js"></script>
  <script src="js/changeTagvideos.js"></script>
  <script src="js/joinTag.js"></script>
  <script src="js/validateNewtags.js"></script>
  
</head>
<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
<div class="wrapper" style="height: auto; min-height: 100%;">

  <header class="main-header">
    <!-- Logo -->
    <a href="file:///D:/jyoti/video-dashboard/index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>B</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Prabhu</b>BHAKTI</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#">
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#">
                      <div class="pull-left">
                        <img src="file:///D:/jyoti/video-dashboard/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#">
                      <div class="pull-left">
                        <img src="file:///D:/jyoti/video-dashboard/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#">
                      <div class="pull-left">
                        <img src="file:///D:/jyoti/video-dashboard/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#">
                      <div class="pull-left">
                        <img src="file:///D:/jyoti/video-dashboard/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="file:///D:/jyoti/video-dashboard/set-priorty.html#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="file:///D:/jyoti/video-dashboard/set-priorty.html#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#" class="dropdown-toggle" data-toggle="dropdown">              
              <span class="hidden-xs">Alexander Pierce <i class="fa fa-caret-down"></i></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                
                <div class="text-center">
                  <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#" class="btn btn-default btn-flat">Sign out</a>
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
      <ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
          <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#">
            <i class="fa fa-video-camera"></i> <span>Video</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_new_video.php"><i class="fa fa-circle-o"></i> Add New Video</a></li>
            <li><a href="add_remove_video.php"><i class="fa fa-circle-o"></i> Add / Remove</a></li>
            <li class="active"><a href="priority.php"><i class="fa fa-circle-o"></i> Set Priority</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#">
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
          <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#">
            <i class="fa fa-share-alt"></i> <span>Social Sharing</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="file:///D:/jyoti/video-dashboard/set-priorty.html#.html"><i class="fa fa-circle-o"></i> Add New Sharing</a></li>
            <li><a href="file:///D:/jyoti/video-dashboard/set-priorty.html#.html"><i class="fa fa-circle-o"></i> Set Priority</a></li>
          </ul>
        </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 459px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="file:///D:/jyoti/video-dashboard/set-priorty.html#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="form-group">
                <label class="control-label col-sm-3"> Category</label>
                <div class="col-sm-4">
                <select class="form-control" id="video_cat" name="video_cat" onChange="changeSubcat(this.value)">
                  <option value="" selected>Select Category</option>
                  <?php
				  include("connect.php");
				  $catsql="SELECT * FROM `videocat`";
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
                <div class="col-sm-4">
                <button class="btn btn-facebook" onClick="callMe()">Display</button>
                </div>
                
              </div>
            <br><br>  
      <div class="row">
        <div class="priority">
        <?php
		include("connect.php");
		$searchVideo="SELECT * FROM `videos` WHERE video_cat='".$pri_cat."'";
		$svResult=mysqli_query($conn,$searchVideo);
		while($svRow=mysqli_fetch_array($svResult))
		{
			
		?>
          <div class="col-md-2 col-sm-6 col-xs-12">
            <div class="sub-part">
              <figure><img src="<?php echo $svRow['thumbnail']; ?>" class="img-responsive"></figure>
              <h3>Level - <?php if($svRow['priority']==0)
			  {
				  echo "LOW";
			  }
			  else
			  {
				  echo "HIGH";
			  }?>
              </h3>
              <h4><a href="" class="set" onClick="updateP('<?php echo $svRow['videoid'];?>',<?php echo $svRow['priority']; ?>)">Priorty</a> <a href="file:///D:/jyoti/video-dashboard/set-priorty.html#" class="remove">For Future</a> </h4>
            </div>
          </div>
          <?php
		}
		  ?>
        
        </div>
      </div>
      <!-- /.row -->

    </section>
    
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="form-group">
                <label class="control-label col-sm-3">Received Tags Control Panel</label>                
              </div>
            <br><br>  
      <div class="row">
        <div class="priority">
      
          <div class="col-md-2 col-sm-6 col-xs-12">
            <div class="sub-part">
            <form name="Form3" id="Form3" onSubmit="return ValidateForm3(this)"
              <figure><h6 class="img-responsive">
            <select id="newTags" name="newTags" style="width:150px">
            <option value="" selected>Choose New Tags</option>
                          <?php
		include("connect.php");
		$searchVideo="SELECT * FROM `newTags`";
		$svResult=mysqli_query($conn,$searchVideo);
		while($svRow=mysqli_fetch_array($svResult))
		{
			
		?>
            <option value="<?php echo $svRow['tag']; ?>"><?php echo $svRow['tag']; ?></option>
            <?php
		}
			?>
            </select>
              </h6></figure>
              <h6><select id="catt" name="catt" onChange="changeTagsubcat()" style="width:150px">
              <option value="" selected>Choose Category</option>
              <?php  
			  $tagsql="SELECT * FROM `formalCat`";
			  $tagrs=mysqli_query($conn,$tagsql);
			  while($tagrow=mysqli_fetch_array($tagrs))
			  {
			  ?>
              <option value="<?php echo $tagrow['cat']; ?>"><?php echo $tagrow['cat']; ?></option>
              <?php
			  }
			  ?>
              </select>
              </h6>
              <div id="insertSubcat"></div>
              <div id="insertvideoid"></div>
              <h4><button class="set" style="background-color:#F90; border:hidden">Link Tag</button> <a href="" class="remove">For Future</a> </h4>
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
    <strong>Copyright © 2019</strong> All rights
    reserved.
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="./priority_files/jquery.min.js.download"></script>
<!-- Bootstrap 3.3.7 -->
<script src="./priority_files/bootstrap.min.js.download"></script>
<!-- AdminLTE App -->
<script src="./priority_files/adminlte.min.js.download"></script>

<script src="./priority_files/bootstrap-tagsinput.min.js.download"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="./priority_files/typeahead.bundle.min.js.download"></script>



</body></html>