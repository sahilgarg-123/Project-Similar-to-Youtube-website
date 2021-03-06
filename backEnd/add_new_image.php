<!DOCTYPE html>
<html>
<head>
<?php
include("connect.php");

?>
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
  
  <script src="js/selectSubcat.js"></script>
  <script src="js/validateProducts.js"></script>
  <script src="js/saveProducts.js"></script>
  <script src="js/changePseo.js"></script>
  <script src="js/suggestTags.js"></script>
  <script src="js/validatePseo.js"></script>
  <script src="js/savePtags.js"></script>
  <script src="js/pDelete.js"></script>
  <script src="js/updatePro.js"></script>
  <script src="js/validateProducts4.js"></script>
  <script src="js/savePupdate.js"></script>
  
  
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
                  Mr. pradeep Kumar Sheoran - Web Developer
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
        <li class="treeview">
          <a href="#">
            <i class="fa fa-video-camera"></i> <span>Video</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_new_video.php"><i class="fa fa-circle-o"></i> Add New Video</a></li>
            <li><a href="add_remove_video.php"><i class="fa fa-circle-o"></i> Add / Remove</a></li>
            <li><a href="#.html"><i class="fa fa-circle-o"></i> Set Priority</a></li>
          </ul>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-file-image-o"></i> <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu active">
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
	  include("connect.php");
	  $pSrr=$_GET['p1API'];
	  
	  if($pSrr=="")
	  {
	  ?>
            <form name="Form1" action="saveProducts.php" method="POST" id="Form1" onSubmit="return ValidateForm1(this)" enctype="multipart/form-data">
              <h2><i class="fa fa-video-camera"></i> Product Form</h2>
              <div class="form-group">
                <label class="control-label col-sm-3">Product Name</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="pname" id="pname" placeholder="Product Name">
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-sm-3">Product Name</label>
                 <div class="col-sm-9">
                <input type="text" class="form-control" name="skucode" id="skucode" placeholder="SKU Code">
                </div>
                </div>
              
              <div class="form-group">
                <label class="control-label col-sm-3">Product MRP</label>
                <div class="col-sm-9">
                <input type="number" maxlength="5" class="form-control" name="mrp" id="mrp" placeholder="Product MRP">
                </div>
               
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3">Sale Price</label>
                <div class="col-sm-9">
                <input type="number" maxlength="5" class="form-control" name="sprice" id="sprice" placeholder="Product Sale Price">
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-sm-3"> Description</label>
                <div class="col-sm-9">
                <textarea placeholder="description" name="pdesc" id="pdesc" class="form-control"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3"> Category</label>
                <div class="col-sm-9">
                <select class="form-control" name="pcat" id="pcat" onChange="selectSubcat()">
                  <option selected="select" value="">Select Category</option>
                  <?php  
				  $sql="SELECT * FROM `formalCat`";
				  $result=mysqli_query($conn,$sql);
				  while($row=mysqli_fetch_array($result))
				  {
				  ?>
                  <option value="<?php echo $row['cat']; ?>"><?php echo $row['cat']; ?></option>
               <?php
				  }
				  ?>
                </select>
                </div>
              </div>
              <div name="subcat1" id="subcat1"></div>
              <div class="form-group">
                <label class="control-label col-sm-3">Image Url</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="purl" id="purl" placeholder="Product Image URL">
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
		  $upSql="SELECT * FROM `product` WHERE sr='".$pSrr."'";
		  $upR=mysqli_query($conn,$upSql);
		  while($upRow=mysqli_fetch_array($upR))
		  {
		  ?>
          
          <form name="Form3" id="Form3" enctype="multipart/form-data" action="updatemyproducts.php" method="POST" onSubmit="return ValidateForm3(this)">
              <h2><i class="fa fa-video-camera"></i> Product Form</h2>
              <div class="form-group">
                <label class="control-label col-sm-3">Product Name</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="pname" id="pname" placeholder="Product Name" value="<?php echo $upRow['name']; ?>">
                <input type="hidden" class="form-control" name="psr" id="psr" placeholder="Product Name" value="<?php echo $upRow['sr']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3">Product MRP</label>
                <div class="col-sm-9">
                <input type="number" maxlength="5" class="form-control" name="mrp" id="mrp" placeholder="Product MRP" value="<?php echo $upRow['mrp']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3">Sale Price</label>
                <div class="col-sm-9">
                <input type="number" maxlength="5" class="form-control" name="sprice" id="sprice" placeholder="Product Sale Price" value="<?php echo $upRow['sprice']; ?>">
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-sm-3"> Description</label>
                <div class="col-sm-9">
                <textarea placeholder="description" name="pdesc" id="pdesc" class="form-control"><?php echo $upRow['pdesc']; ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3"> Category</label>
                <div class="col-sm-9">
                <select class="form-control" name="pcat" id="pcat" onChange="selectSubcat()">
                  <option selected="select" value="">Select Category</option>
                  <?php  
				  $sql="SELECT * FROM `formalCat`";
				  $result=mysqli_query($conn,$sql);
				  while($row=mysqli_fetch_array($result))
				  {
				  ?>
                  <option value="<?php echo $row['cat']; ?>"><?php echo $row['cat']; ?></option>
               <?php
				  }
				  ?>
                </select>
                </div>
              </div>
              <div name="subcat1" id="subcat1"></div>
              <div class="form-group">
                <label class="control-label col-sm-3">Image Url</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="purl" id="purl" placeholder="Product Image URL" value="<?php echo $upRow['url']; ?>">
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
            <form name="Form2" id="Form2" onSubmit="return ValidateForm2(this)">
              <h2><i class="fa fa-yoast"></i> Apply SEO</h2>
            <div class="form-group">
                <label class="control-label col-sm-3">Enter Tag</label>
                <div class="col-sm-9">
                <input type="text" name="seotag" id="seotag" value="" data-role="tagsinput" class="form-control" />
                </div>
              </div>
             
             <div class="form-group">
                <label class="control-label col-sm-3">Choose Product</label>
                <div class="col-sm-9">
                <select class="form-control" id="seop" name="seop" onChange="suggestTags()">
                  <option value="" selected>Select Category</option>
                  <?php
				  $seosql="SELECT * FROM `product`";
				  $seoR=mysqli_query($conn,$seosql);
				  while($seoRaw=mysqli_fetch_array($seoR))
				  {
				  ?>
                  <option value="<?php echo $seoRaw['sr']; ?>"><?php echo $seoRaw['name']; ?></option>
                  <?php
				  }
				  ?>
                </select>
                </div>
              </div>
             
              <div class="form-group">
                <label class="control-label col-sm-3">Category</label>
                <div class="col-sm-9">
                <select class="form-control" id="seocat" name="seocat" onChange="changePseo()">
                  <option value="" selected>Select Category</option>
                  <?php
				  $seosql="SELECT * FROM `formalCat`";
				  $seoR=mysqli_query($conn,$seosql);
				  while($seoRaw=mysqli_fetch_array($seoR))
				  {
				  ?>
                  <option value="<?php echo $seoRaw['cat']; ?>"><?php echo $seoRaw['cat']; ?></option>
                  <?php
				  }
				  ?>
                </select>
                </div>
              </div>

              <div id="psubcatseo"></div><br>
              <div id="relatedtag"></div>

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
          <div class="table">
          <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Sr.</th>
                    <th>Products</th>
                    <th>MRP</th>
                    <th>Sale Pr.</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Live</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
				  $tablesql="SELECT * FROM `product`";
				  $Tselect=mysqli_query($conn,$tablesql);
				  while($Trow=mysqli_fetch_array($Tselect))
				  {
				  ?>
                  <tr>
                    <td><?php echo $Trow['sr']; ?></td>
                    <td><?php echo $Trow['name']; ?></td>
                    <td><?php echo $Trow['mrp']; ?></td>
                    <td><?php echo $Trow['sprice']; ?></td>
                     <td><img src="<?php echo $Trow['url']; ?>" style="width:40px; height:20px"></img></td>
                     <td><button class="btn-dropbox" onClick="updateP(<?php echo $Trow['sr']; ?>)">Update</button></td>
                     <td><a href="../prod_desc.php?prod_type=<?php echo $Trow['sr']; ?>"><button class="btn-dropbox">Live</button></a></td>
                    <td><img src="images/delete.png" onClick="pDelete(<?php echo $Trow['sr']; ?>)"></img></td>
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
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="js/bootstrap-tagsinput.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>

</body>
</html>
