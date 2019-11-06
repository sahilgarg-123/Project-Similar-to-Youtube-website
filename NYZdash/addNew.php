<?php
include("connect.php");
$sum=$_GET['sum'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if($sum==1)
{	
?>
<div class="row" id="div1">
<div class="col-sm-3">
  <div class="form-group">
         <select id="prod1" name="prod1" onchange="changeSKU1()">
         <option value="">Select Product</option>
         <?php
		 $sql="SELECT * FROM `product`";
		 $result=mysqli_query($conn,$sql);
		 while($row=mysqli_fetch_array($result))
		 {
		 ?>
         
         <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
         <?php
		 }
        ?>
         </select>
       </div>
       </div>
       <div class="col-sm-3">
  <div class="form-group">
         <input type="text" class="form-control" id="skucode1" name="skucode1" placeholder="Enter SKU code" title="Enter SKU code">
       </div>
       </div>
        <div class="col-sm-2">
  <div class="form-group">
         <input type="text" class="form-control" id="qty1" name="qty1" placeholder="Enter Quantity" title="Enter Quantity">
       </div>
       </div>
           <div class="col-sm-3">
  <div class="form-group">
         <input type="text" class="form-control" id="price1" name="price1" title="After Qty click here" placeholder="Enter Price" title="Enter Price" onclick="changePrice1(1)">
       </div>
       </div>
       <div class="col-sm-1">
  <div class="form-group">
         <Button type="button" class="btn btn-alert" id="close1" name="close1" title="close"title="Close" onclick="close1(1)">X</Button>
       </div>
       </div>
       </div>
       <?php
}
else if($sum==2)
{
	   ?>
       <div class="row" id="div2">
<div class="col-sm-3">
  <div class="form-group">
             <select id="prod2" name="prod2" onchange="changeSKU2()">
             <option value="">Select Product</option>
         <?php
		 $sql="SELECT * FROM `product`";
		 $result=mysqli_query($conn,$sql);
		 while($row=mysqli_fetch_array($result))
		 {
		 ?>
         
         <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
         <?php
		 }
        ?>
         </select>
       </div>
       </div>
       <div class="col-sm-3">
  <div class="form-group">
         <input type="text" class="form-control" id="skucode2" name="skucode2" placeholder="Enter SKU code" title="Enter SKU code">
       </div>
       </div>
        <div class="col-sm-2">
  <div class="form-group">
         <input type="text" class="form-control" id="qty2" name="qty2" placeholder="Enter Quantity" title="Enter Quantity">
       </div>
       </div>
           <div class="col-sm-3">
  <div class="form-group">
         <input type="text" class="form-control" id="price2" name="price2" title="After Qty click here" placeholder="Enter Price" title="Enter Price" onclick="changePrice1(2)">
       </div>
       </div>
        <div class="col-sm-1">
  <div class="form-group">
         <Button type="button" class="btn btn-alert" id="close2" name="close2" title="close"title="Close" onclick="close1(2)">X</Button>
       </div>
       </div>
       </div>
       <?php
}
else if($sum==3)
{
	   ?>
       <div class="row" id="div3">
<div class="col-sm-3">
  <div class="form-group">
             <select id="prod3" name="prod3" onchange="changeSKU3()">
             <option value="">Select Product</option>
         <?php
		 $sql="SELECT * FROM `product`";
		 $result=mysqli_query($conn,$sql);
		 while($row=mysqli_fetch_array($result))
		 {
		 ?>
         
         <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
         <?php
		 }
        ?>
         </select>
       </div>
       </div>
       <div class="col-sm-3">
  <div class="form-group">
         <input type="text" class="form-control" id="skucode3" name="skucode3" placeholder="Enter SKU code" title="Enter SKU code">
       </div>
       </div>
        <div class="col-sm-2">
  <div class="form-group">
         <input type="text" class="form-control" id="qty3" name="qty3" placeholder="Enter Quantity" title="Enter Quantity">
       </div>
       </div>
           <div class="col-sm-3">
  <div class="form-group">
         <input type="text" class="form-control" id="price3" name="price3" title="After Qty click here" placeholder="Enter Price" title="Enter Price" onclick="changePrice1(3)">
       </div>
       </div>
        <div class="col-sm-1">
  <div class="form-group">
         <Button type="button" class="btn btn-alert" id="close3" name="close3" title="close"title="Close" onclick="close1(3)">X</Button>
       </div>
       </div>
       </div>
       <?php
}
else if($sum==4)
{
	   ?>
       <div class="row" id="div4">
<div class="col-sm-3">
  <div class="form-group">
             <select id="prod4" name="prod4" onchange="changeSKU4()">
             <option value="">Select Product</option>
         <?php
		 $sql="SELECT * FROM `product`";
		 $result=mysqli_query($conn,$sql);
		 while($row=mysqli_fetch_array($result))
		 {
		 ?>
         
         <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
         <?php
		 }
        ?>
         </select>
       </div>
       </div>
       <div class="col-sm-3">
  <div class="form-group">
         <input type="text" class="form-control" id="skucode4" name="skucode4" placeholder="Enter SKU code" title="Enter SKU code">
       </div>
       </div>
        <div class="col-sm-2">
  <div class="form-group">
         <input type="text" class="form-control" id="qty4" name="qty4" placeholder="Enter Quantity" title="Enter Quantity">
       </div>
       </div>
           <div class="col-sm-3">
  <div class="form-group">
         <input type="text" class="form-control" id="price4" name="price4" title="After Qty click here" placeholder="Enter Price" title="Enter Price" onclick="changePrice1(4)">
       </div>
       </div>
        <div class="col-sm-1">
  <div class="form-group">
         <Button type="button" class="btn btn-alert" id="close4" name="close4" title="close"title="Close" onclick="close1(4)">X</Button>
       </div>
       </div>
       </div>
       <?php
}
else if($sum==5)
{
	   ?>
       <div class="row" id="div5">
<div class="col-sm-3">
  <div class="form-group">
             <select id="prod5" name="prod5" onchange="changeSKU5()">
             <option value="">Select Product</option>
         <?php
		 $sql="SELECT * FROM `product`";
		 $result=mysqli_query($conn,$sql);
		 while($row=mysqli_fetch_array($result))
		 {
		 ?>
         
         <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
         <?php
		 }
        ?>
         </select>
       </div>
       </div>
       <div class="col-sm-3">
  <div class="form-group">
         <input type="text" class="form-control" id="skucode5" name="skucode5" placeholder="Enter SKU code" title="Enter SKU code">
       </div>
       </div>
        <div class="col-sm-2">
  <div class="form-group">
         <input type="text" class="form-control" id="qty5" name="qty5" placeholder="Enter Quantity" title="Enter Quantity">
       </div>
       </div>
           <div class="col-sm-3">
  <div class="form-group">
         <input type="text" class="form-control" id="price5" name="price5" placeholder="Enter Price" title="After Qty click here" onclick="changePrice1(5)">
       </div>
       </div>
        <div class="col-sm-1">
  <div class="form-group">
         <Button type="button" class="btn btn-alert" id="close5" name="close5" title="close"title="Close" onclick="close1(5)">X</Button>
       </div>
       </div>
       </div>
       <?php
}
	   ?>
</body>
</html>