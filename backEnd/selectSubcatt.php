<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="form-group">
                <label class="control-label col-sm-3"> Sub Category</label>
                <div class="col-sm-9">
                <select class="form-control" id="addsubcat" id="addsubcat">
                  <option selected="select" value="">Select Sub Category</option>
                  <?php
				  include("connect.php");
				  $cat=$_GET['cat'];
				  $sql="SELECT * FROM `videocat` WHERE cat='".$cat."'";
				  $result=mysqli_query($conn,$sql);
				  while($row=mysqli_fetch_array($result))
				  {				
				  ?>
                  <option value="<?php echo $row['subcat']; ?>"><?php echo $row['subcat']; ?></option>
                  <?php
				  }
				  ?>
                 
                </select>
                </div>
              </div>
</body>
</html>