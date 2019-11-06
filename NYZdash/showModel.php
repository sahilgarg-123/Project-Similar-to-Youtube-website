<?php
include("connect.php");
$sr=$_GET['sr'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="container" style="overflow:scroll; height:600px" >
    <div class="row card" style="border-color:#3C0; border:groove">
    
   <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 min-wid">
       <div class="vl"></div>
     </div>
       <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
       <?php
	   $sql="SELECT * FROM `saleProduct` WHERE sr='".$sr."'";
	   $rs=mysqli_query($conn,$sql);
	   while($row=mysqli_fetch_array($rs))
	   {
	   
	   ?>
       <div class="form-group">
         <input type="number" class="form-control" maxlength="10" id="orderid" placeholder="Enter Order ID" title="Enter Order ID" name="orderid">
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
         <input type="text" class="form-control" id="state" placeholder="Enter State" title="Enter State" name="state" value="<?php echo $row['state']; ?>">
       </div>  
          
     </div>
     
     <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3">
     
       <div class="form-group">
         <input type="email" class="form-control" id="email" placeholder="Enter email" title="Enter email" name="email" value="<?php echo $row['email']; ?>">
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
         <input type="number" class="form-control" id="pincode" title="Enter Pincode" placeholder="Enter pincode" name="pincode">
       </div>
     <?php
	   }
	 
	 ?>
     </div>    
     <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3">
       <div class="form-group">
         <input type="text" class="form-control" id="weight2" name="weight_b">
       </div>
        <div class="form-group">
         <label class="form-check-label" for="weight">Dimensions</label>
         <input type="text" class="form-control" id="length" name="length" placeholder="Length in CM" value="21">
         <input type="text" class="form-control" id="base" name="base" placeholder="Base in CM" value="15">
         <input type="text" class="form-control" id="height" name="height" placeholder="Height in CM" value="6">
       </div>
         
       
     </div>  
    
   </div>
   
   
   
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
       <button type="submit" class="btn btn-success pull-right" onclick="return ValidateForm1()">Submit</button>
     </div>
 </div>
  </div>
</div>
</body>
</html>