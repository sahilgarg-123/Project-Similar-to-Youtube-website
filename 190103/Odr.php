<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
<!--
function ValidateForm1(theForm)
{
   var regexp;
   regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f0-9-]*$/;
   if (!regexp.test(theForm.name.value))
   {
      alert("Enter Name");
      theForm.name.focus();
      return false;
   }
   if (theForm.name.value == "")
   {
      alert("Enter Name");
      theForm.name.focus();
      return false;
   }
   if (theForm.name.value.length < 3)
   {
      alert("Enter Name");
      theForm.name.focus();
      return false;
   }
   if (theForm.name.value.length > 10)
   {
      alert("Enter Name");
      theForm.name.focus();
      return false;
   }
   return true;
}
//-->
</script>

</head>

<body>
<form  id="Form1" name="Form1"  onSubmit="return ValidateForm1(this)">
 
  <div class='form-group'>
       <input type="text" name="name" id="name" placeholder="Enter name" class="form-control">
       </div>
  <div class='form-group'>
       <input type="text" name="phone" maxlength="10" id="phone" placeholder="Enter phone" class="form-control"> 
       
    </div>   
  
  <div class='form-group'>
       <input type="email" name="email" id="email" placeholder="Enter Email" class="form-control">
       </div>
        <div class='form-group'>
           <input type="hidden" name="order" id="order" placeholder="Order" class="form-control">
        </div>
  <div class='form-group'>
  
       <input type="text" name="address" id="address" placeholder="Enter your address" class="form-control">
  </div>
  
   <div class='form-group'>
       <input type="text" name="city" id="city" placeholder="Enter city" class="form-control">
 </div>
  <div class='form-group'>
       <input type="text" name="state" id="state" placeholder="Enter state" class="form-control">
  </div>
   <div class='form-group'>
        <input type="number" name="pincode" id="pincode" placeholder="Enter pincode" class="form-control">
  </div>
   <div class='form-group'>
        <input type="hidden" name="orderfrom" id="orderfrom" class="form-control" value="The Bhakti">
  </div>
   <div class='form-group'>
        <input type="hidden" name="price" id="price" class="form-control" value="500">
  </div>
   <div class='form-group'>
        <input type="hidden" name="skucode" id="skucode" class="form-control" value="thebhakti051">
  </div>
   <div class='form-group'>
        <input type="hidden" name="utm_source" id="utm_source" class="form-control" value="<?php echo $utm_source; ?>">
  </div>
   <div class='form-group'>
        <input type="hidden" name="utm_campaign" id="utm_campaign" class="form-control" value="<?php echo $utm_campaign; ?>">
  </div>
   <div class='form-group'>
        <input type="hidden" name="utm_content" id="utm_content" class="form-control" value="<?php echo $utm_content; ?>">
  </div>
   <div class='form-group'>
  
  <button type="submit" name="submit" class="btn-btn-primary" value="अभी आर्डर करे.." />
  अभी आर्डर करे..</div>

</form>
</body>
</html>