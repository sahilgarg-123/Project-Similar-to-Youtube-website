<?php
include("connect.php");
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
include("session.php");

?>
<!DOCTYPE html>
<!-- saved from url=(0096)file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/product-dashboard/current-list.html# -->
<html style="height: auto; min-height: 100%;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="./index_files/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./index_files/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./index_files/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="./index_files/all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="./index_files/css">


  <style>
.one{background:#c52735; color:#fff;text-align: center;}
.one a{ color:#fff; font-size:15px;padding:5px 10px; display: inline-block;  }
.one a .fa{margin-right:2px;}
.one.pending{background:#fe8c19;}
.one.ship{background:#828081;}
.one.confirmed{background:#017a8b;}
.one.delivered{background:#02ba38;}




.col-xs-5th-1, .col-xs-5th-2, .col-xs-5th-3, .col-xs-5th-4 {
  float: left;
}

.col-xs-5th-5 {
  float: left;
  width: 100%;
}

.col-xs-5th-4 {
  width: 80%;
}

.col-xs-5th-3 {
  width: 60%;
}

.col-xs-5th-2 {
  width: 40%;
}

.col-xs-5th-1 {
  width: 20%;
}

.col-xs-5th-pull-5 {
  right: 100%;
}

.col-xs-5th-pull-4 {
  right: 80%;
}

.col-xs-5th-pull-3 {
  right: 60%;
}

.col-xs-5th-pull-2 {
  right: 40%;
}

.col-xs-5th-pull-1 {
  right: 20%;
}

.col-xs-5th-pull-0 {
  right: auto;
}

.col-xs-5th-push-5 {
  left: 100%;
}

.col-xs-5th-push-4 {
  left: 80%;
}

.col-xs-5th-push-3 {
  left: 60%;
}

.col-xs-5th-push-2 {
  left: 40%;
}

.col-xs-5th-push-1 {
  left: 20%;
}

.col-xs-5th-push-0 {
  left: auto;
}

.col-xs-5th-offset-5 {
  margin-left: 100%;
}

.col-xs-5th-offset-4 {
  margin-left: 80%;
}

.col-xs-5th-offset-3 {
  margin-left: 60%;
}

.col-xs-5th-offset-2 {
  margin-left: 40%;
}

.col-xs-5th-offset-1 {
  margin-left: 20%;
}

.col-xs-5th-offset-0 {
  margin-left: 0%;
}

@media (min-width: 768px) {
  .col-sm-5th-1, .col-sm-5th-2, .col-sm-5th-3, .col-sm-5th-4 {
    float: left;
  }

  .col-sm-5th-5 {
    float: left;
    width: 100%;
  }

  .col-sm-5th-4 {
    width: 80%;
  }

  .col-sm-5th-3 {
    width: 60%;
  }

  .col-sm-5th-2 {
    width: 40%;
  }

  .col-sm-5th-1 {
    width: 20%;
  }

  .col-sm-5th-pull-5 {
    right: 100%;
  }

  .col-sm-5th-pull-4 {
    right: 80%;
  }

  .col-sm-5th-pull-3 {
    right: 60%;
  }

  .col-sm-5th-pull-2 {
    right: 40%;
  }

  .col-sm-5th-pull-1 {
    right: 20%;
  }

  .col-sm-5th-pull-0 {
    right: auto;
  }

  .col-sm-5th-push-5 {
    left: 100%;
  }

  .col-sm-5th-push-4 {
    left: 80%;
  }

  .col-sm-5th-push-3 {
    left: 60%;
  }

  .col-sm-5th-push-2 {
    left: 40%;
  }

  .col-sm-5th-push-1 {
    left: 20%;
  }

  .col-sm-5th-push-0 {
    left: auto;
  }

  .col-sm-5th-offset-5 {
    margin-left: 100%;
  }

  .col-sm-5th-offset-4 {
    margin-left: 80%;
  }

  .col-sm-5th-offset-3 {
    margin-left: 60%;
  }

  .col-sm-5th-offset-2 {
    margin-left: 40%;
  }

  .col-sm-5th-offset-1 {
    margin-left: 20%;
  }

  .col-sm-5th-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 992px) {
  .col-md-5th-1, .col-md-5th-2, .col-md-5th-3, .col-md-5th-4 {
    float: left;
  }

  .col-md-5th-5 {
    float: left;
    width: 100%;
  }

  .col-md-5th-4 {
    width: 80%;
  }

  .col-md-5th-3 {
    width: 60%;
  }

  .col-md-5th-2 {
    width: 40%;
  }

  .col-md-5th-1 {
    width: 20%;
  }

  .col-md-5th-pull-5 {
    right: 100%;
  }

  .col-md-5th-pull-4 {
    right: 80%;
  }

  .col-md-5th-pull-3 {
    right: 60%;
  }

  .col-md-5th-pull-2 {
    right: 40%;
  }

  .col-md-5th-pull-1 {
    right: 20%;
  }

  .col-md-5th-pull-0 {
    right: auto;
  }

  .col-md-5th-push-5 {
    left: 100%;
  }

  .col-md-5th-push-4 {
    left: 80%;
  }

  .col-md-5th-push-3 {
    left: 60%;
  }

  .col-md-5th-push-2 {
    left: 40%;
  }

  .col-md-5th-push-1 {
    left: 20%;
  }

  .col-md-5th-push-0 {
    left: auto;
  }

  .col-md-5th-offset-5 {
    margin-left: 100%;
  }

  .col-md-5th-offset-4 {
    margin-left: 80%;
  }

  .col-md-5th-offset-3 {
    margin-left: 60%;
  }

  .col-md-5th-offset-2 {
    margin-left: 40%;
  }

  .col-md-5th-offset-1 {
    margin-left: 20%;
  }

  .col-md-5th-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 1200px) {
  .col-lg-5th-1, .col-lg-5th-2, .col-lg-5th-3, .col-lg-5th-4 {
    float: left;
  }

  .col-lg-5th-5 {
    float: left;
    width: 100%;
  }

  .col-lg-5th-4 {
    width: 80%;
  }

  .col-lg-5th-3 {
    width: 60%;
  }

  .col-lg-5th-2 {
    width: 40%;
  }

  .col-lg-5th-1 {
    width: 20%;
  }

  .col-lg-5th-pull-5 {
    right: 100%;
  }

  .col-lg-5th-pull-4 {
    right: 80%;
  }

  .col-lg-5th-pull-3 {
    right: 60%;
  }

  .col-lg-5th-pull-2 {
    right: 40%;
  }

  .col-lg-5th-pull-1 {
    right: 20%;
  }

  .col-lg-5th-pull-0 {
    right: auto;
  }

  .col-lg-5th-push-5 {
    left: 100%;
  }

  .col-lg-5th-push-4 {
    left: 80%;
  }

  .col-lg-5th-push-3 {
    left: 60%;
  }

  .col-lg-5th-push-2 {
    left: 40%;
  }

  .col-lg-5th-push-1 {
    left: 20%;
  }

  .col-lg-5th-push-0 {
    left: auto;
  }

  .col-lg-5th-offset-5 {
    margin-left: 100%;
  }

  .col-lg-5th-offset-4 {
    margin-left: 80%;
  }

  .col-lg-5th-offset-3 {
    margin-left: 60%;
  }

  .col-lg-5th-offset-2 {
    margin-left: 40%;
  }

  .col-lg-5th-offset-1 {
    margin-left: 20%;
  }

  .col-lg-5th-offset-0 {
    margin-left: 0%;
  }
}
  </style>
   <style type="text/css">
  .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  margin-top: 4rem;
  padding:10px;
}
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.vl {
  border-left: 1px solid #aaa;;
  height:23rem;
  min-height: auto;
}
.min-wid{
  width:2.333% !important;
}
  </style>

<script src="newJs/new.js"></script>
<script src="newJs/saveStatus.js"></script>
<script src="newJs/saveComment.js"></script>
<script src="newJs/downloadExcel.js"></script>
<script src="newJs/showModel.js"></script>
<script src="newJs/addNew.js"?></script>
<script src="newJs/changeSKU.js"></script>
<script src="newJs/changePrice.js"></script>
<script src="newJs/close1.js"></script>
<script src="newJs/validateModel.js"></script>




<!-- Start Model CSS -->
<style>


/* The Modal (background) */


/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
 
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto; /* 15% from the top and centered */
  padding: 10px;
  border: 1px solid #888;
  width: 100%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
	
  color: #aaa;
  float: right;
  font-size: 22px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
<!-- Ends Model CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
<div class="wrapper" style="height: auto; min-height: 100%;">

  <header class="main-header">
    <!-- Logo -->
    <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/product-dashboard/index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>B</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Prabhu</b>BHAKTI</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/product-dashboard/current-list.html#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->          
          <li class="dropdown messages-menu">
            <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/product-dashboard/current-list.html#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/product-dashboard/current-list.html#">
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/product-dashboard/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/product-dashboard/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/product-dashboard/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/product-dashboard/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
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
              <li class="footer"><a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/product-dashboard/current-list.html#">See All Messages</a></li>
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
            <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/product-dashboard/current-list.html#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/product-dashboard/current-list.html#">
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
                    <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/product-dashboard/current-list.html#">
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
                    <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/product-dashboard/current-list.html#">
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
                    <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/product-dashboard/current-list.html#">
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
                <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/product-dashboard/current-list.html#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/product-dashboard/current-list.html#" class="dropdown-toggle" data-toggle="dropdown">              
              <span class="hidden-xs">Alexander Pierce <i class="fa fa-caret-down"></i></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <p>
                  Mr. Pradeep kumar sheoran(+919306488494) - Web Developer
                  <small>Member since Nov. 2018</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                
                <div class="text-center">
                  <a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/product-dashboard/current-list.html#" class="btn btn-default btn-flat">Sign out</a>
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
        <li class="treeview active menu-open">
          <a href="index.php">
            <i class="fa fa-product-hunt"></i> <span>Product Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu active">
            <li class="active"><a href="index.php"><i class="fa fa-circle-o"></i>Current List</a></li>
            <li><a href="allOrders.php"><i class="fa fa-circle-o"></i>All Orders(SR)</a></li>
            <li><a href="rtoReturn.php"><i class="fa fa-circle-o"></i>RTO Return Status</a></li>
            <li><a href="report.php"><i class="fa fa-circle-o"></i>App Contacts</a></li>
          </ul>
        </li>
        <li class="treeview active menu-open">
          <a href="index.php">
            <i class="fa fa-product-hunt"></i> <span>Trafiic Analyzer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu active">
            <li class="active"><a href="analyzer.php"><i class="fa fa-circle-o"></i>Traffic Reports</a></li>           
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 476px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="file:///C:/Users/Inn/Documents/Received%20Files/jyoti/jyoti/product-dashboard/current-list.html#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    
<script type="application/javascript">
var cbsr=$("#clickbtnsr").val();
<?php
$show=$_COOKIE['cookie_name'];

?>
</script>

 
    <!-- Main content -->
    <section class="content">
     <!-- Model for create order -->
      <div class="row">		
        <div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
 

    <div class="container" style="overflow:scroll; height:600px" >
    <div class="row card" style="border-color:#3C0; border:groove">
   
       <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
        <?php
	   $sql="SELECT * FROM `saleProduct` WHERE sr='".$show."'";
	   $rs=mysqli_query($conn,$sql);
	   while($row=mysqli_fetch_array($rs))
	   {
	   
	   ?>
       <div class="form-group">
         <input type="number" class="form-control" maxlength="10" id="orderid" placeholder="Enter Order ID" title="Enter Order ID" name="orderid" value="<?php echo $row['orderid']; ?>">
       </div>
      
       <div class="form-group">
         <input type="text" class="form-control" id="name" placeholder="Enter Name" title="Enter Name" name="name" value="<?php echo $row['client']; ?>">
       </div>
         <div class="form-group">
         <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" title="Enter Last Name" name="lname">
       </div>
       <div class="form-group">
         <input type="text" class="form-control" id="Mob" placeholder="Enter Mobile Number" title="Enter Mobile Number" name="Mob" value="<?php echo $row['clientMob']; ?>">
       </div>
        <div class="form-group">
         <input type="text" class="form-control" id="state" placeholder="Enter State" title="Enter State" name="state" value="<?php echo $row['clientMob']; ?>">
       </div>  
       <?php
	   }
	   ?>        
     </div>
     <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 min-wid">
       <div class="vl"></div>
     </div>
     <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3">
        <?php
	   $sql="SELECT * FROM `saleProduct` WHERE sr='".$show."'";
	   $rs=mysqli_query($conn,$sql);
	   while($row=mysqli_fetch_array($rs))
	   {
	   
	   ?>
       <div class="form-group">
         <input type="text" class="form-control" id="email" placeholder="Enter email" title="Enter email" name="email" value="<?php echo $row['email']; ?>">
       </div>
       <div class="form-group">
         <input type="text" class="form-control" id="city" name="city" placeholder="Enter City" title="Enter user city" value="<?php echo $row['city']; ?>">
       </div>
        <div class="form-group">
         <input type="text" class="form-control" id="padds" name="padds" title="Pickup Address" value="Primary(House no 765, Basement)">
       </div>      
        <div class="form-group">
         <input type="text" class="form-control" id="adds" placeholder="Enter Address" title="Enter Address" name="adds" value="<?php echo $row['address']; ?>">
       </div>
       <div class="form-group">
         <input type="number" class="form-control" id="pincode" title="Enter Pincode" placeholder="Enter pincode" name="pincode" value="<?php echo $row['pincode']; ?>">
       </div>
       <input type="text" id="srr" style="display:none" value="<?php echo $row['sr']; ?>">
     <?php
	   }
	 
	 ?>
     </div>    
     <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3">
       <div class="form-group">
         <input type="text" class="form-control" placeholder="Weight" id="weight2" name="weight_b" value="0.5">
       </div>
        <div class="form-group">
         <label class="form-check-label" for="weight">Dimensions</label>
         <input type="text" class="form-control" id="length" name="length" placeholder="Length in CM" value="21">
         <input type="text" class="form-control" id="base" name="base" placeholder="Base in CM" value="15">
         <input type="text" class="form-control" id="height" name="height" placeholder="Height in CM" value="6">
       </div>
         
       
     </div>  
    
   </div>
   
   
   <br>
    <div id="ibox1"></div>
    <div id="ibox2"></div>
    <div id="ibox3"></div>
    <div id="ibox4"></div>
    <div id="ibox5"></div>
       <input type="number" id="value1" style="display:none" value="0">
               <div class="form-group">
         <button id="addNew" onClick="addNew(1)">+ Add New Product</button>
       </div>
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       <button type="submit" class="btn btn-success pull-right" onClick="return ValidateForm1()">Submit</button>
     </div>
 </div>
 

  </div>
</div>
     <!-- Model for create order closed here -->   
        <input type="text" id="clickbtnsr" style="display:none">
        
    <div class="col-md-5th-1 col-sm-4" onClick="newOrders('NEW')"><div class="one"><i class="fa fa-file"></i> New (<?php
	$newSql="SELECT COUNT(*) FROM `saleProduct` WHERE status='NEW'";
	$rsnew=mysqli_query($conn,$newSql);
	$chNew=mysqli_fetch_row($rsnew);
	echo $chNew[0];
	 ?>)</div></div>
    <div class="col-md-5th-1 col-sm-4" onClick="newOrders('PENDING')"><div class="one pending"><i class="fa fa-clock-o"></i> Pending (<?php
	$pSql="SELECT COUNT(*) FROM `saleProduct` WHERE status='PENDING'";
	$rsp=mysqli_query($conn,$pSql);
	$chp=mysqli_fetch_row($rsp);
	echo $chp[0];
	 ?>)</div></div>
    <div class="col-md-5th-1 col-sm-4" onClick="newOrders('READY')"><div class="one ship"><i class="fa fa-shopping-bag"></i> Ready to ship (<?php
	$rSql="SELECT COUNT(*) FROM `saleProduct` WHERE status='READY'";
	$rsr=mysqli_query($conn,$rSql);
	$chr=mysqli_fetch_row($rsr);
	echo $chr[0];
	 ?>)</div></div>
    <div class="col-md-5th-1 col-sm-4" onClick="newOrders('CONFIRM')"><div class="one confirmed"><i class="fa fa-check"></i> Confirmed (<?php
	$cSql="SELECT COUNT(*) FROM `saleProduct` WHERE status='CONFIRM'";
	$rsc=mysqli_query($conn,$cSql);
	$chc=mysqli_fetch_row($rsc);
	echo $chc[0];
	 ?>)</div></div>
    <div class="col-md-5th-1 col-sm-4" onClick="newOrders('DEL')"><div class="one delivered"><i class="fa fa-truck"></i> Delivered (<?php
	$dSql="SELECT COUNT(*) FROM `saleProduct` WHERE status='DEL'";
	$rsd=mysqli_query($conn,$dSql);
	$chd=mysqli_fetch_row($rsd);
	echo $chd[0];
	 ?>)</div></div>

      </div>
      <!-- /.row 2 -->
      <br>
         <div class="row">
    <div class="col-md-5th-1 col-sm-4" onClick="newOrders('RTO CONFIRM')"><div class="one"><i class="fa fa-file"></i> RTO Confirmed (<?php
	$newSql="SELECT COUNT(*) FROM `saleProduct` WHERE status='RTO CONFIRM'";
	$rsnew=mysqli_query($conn,$newSql);
	$chNew=mysqli_fetch_row($rsnew);
	echo $chNew[0];
	 ?>)</div></div>
     
      <div class="col-md-5th-1 col-sm-4" onClick="newOrders('RTO PENDING')"><div class="one delivered"><i class="fa fa-file"></i> RTO PENDING (<?php
	$newSql="SELECT COUNT(*) FROM `saleProduct` WHERE status='RTO PENDING'";
	$rsnew=mysqli_query($conn,$newSql);
	$chNew=mysqli_fetch_row($rsnew);
	echo $chNew[0];
	 ?>)</div></div>
     
     <div class="col-md-5th-1 col-sm-4" onClick="newOrders('RTO CONFIRM')"><div class="one" onClick="showModel(1)"><i class="fa fa-file"></i>Create Manual Order</div></div>
   
  
   

      </div>
      
      
      

<div style="overflow:scroll; height:500px">
<div id="table"></div>
</div>


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
<script src="./index_files/jquery.min.js.download"></script>
<!-- Bootstrap 3.3.7 -->
<script src="./index_files/bootstrap.min.js.download"></script>
<!-- AdminLTE App -->
<script src="./index_files/adminlte.min.js.download"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->



</body></html>