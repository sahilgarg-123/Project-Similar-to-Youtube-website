
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/changeVideoid.js"></script>
</head>

<body>

   <select class="form-control" name="seoSubcat" id="seoSubcat" onChange="changeVideoid()">
                  <option value="" selected>Select Sub Category</option>
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
                

</body>
</html>