<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
<?php
include("connect.php");
$catt=$_GET['catt'];
?>
 <div class="form-group">
                <label class="control-label col-sm-3"> Choose SubCategory</label>
                <div class="col-sm-9">
                <select class="form-control" id="rcat2" name="rcat2">
                  <option selected="" selected>Select SubCategory</option>
                  <?php
				  $csql="SELECT * FROM `videocat` WHERE cat='".$catt."'";
				  $cresult=mysqli_query($conn,$csql);
				  while($crow=mysqli_fetch_array($cresult))
				  {
				  ?>
                  <option value="<?php echo $crow['subcat']; ?>"><?php echo $crow['subcat']; ?></option>
                  <?php
				  }
				  ?>
                 
                </select>
                </div>
              </div>


</body>
</html>