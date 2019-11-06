<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<select class="form-control" id="video_subcat" name="video_subcat">
                  <option selected>Select Sub Category</option>
                    <?php
					include("connect.php");
					$subCat=$_GET['catt'];
				  $catsql="SELECT * FROM `videocat` WHERE cat='".$subCat."'";
				  $resultcat=mysqli_query($conn,$catsql);
				  while($catRow=mysqli_fetch_array($resultcat))
				  {
				  ?>
                  <option value="<?php echo $catRow['subcat']; ?>"><?php echo $catRow['subcat']; ?></option>
                  <?php
				  }
				  ?>
                </select>
</body>
</html>