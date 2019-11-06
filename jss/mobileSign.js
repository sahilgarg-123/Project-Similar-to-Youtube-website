// JavaScript Document
function ValidateForm1(theForm)
{
	 regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f]*$/;
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
   if (theForm.name.value.length > 40)
   {
      alert("Enter Name");
      theForm.name.focus();
      return false;
   }
   
   var regexp;
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(theForm.mob.value))
   {
      alert("Enter Mobile Number");
      theForm.mob.focus();
      return false;
   }
   if (theForm.mob.value == "")
   {
      alert("Enter Mobile Number");
      theForm.mob.focus();
      return false;
   }
   if (theForm.mob.value.length < 10)
   {
      alert("Enter Mobile Number");
      theForm.mob.focus();
      return false;
   }
   if (theForm.mob.value.length > 10)
   {
      alert("Enter Mobile Number");
      theForm.mob.focus();
      return false;
   }
  
   
    regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f]*$/;
   if (!regexp.test(theForm.city.value))
   {
      alert("Enter City");
      theForm.city.focus();
      return false;
   }
   if (theForm.city.value == "")
   {
      alert("Enter City");
      theForm.city.focus();
      return false;
   }
   if (theForm.city.value.length < 3)
   {
      alert("Enter City");
      theForm.city.focus();
      return false;
   }
   if (theForm.city.value.length > 40)
   {
      alert("Enter City");
      theForm.city.focus();
      return false;
   }  
   function registerUser()
{
	var user=$("#name").val();
	var Mobile=$("#mob").val();
	var state=$("#city").val();
	var IMEI=$("#imei").val();
	alert(user);
	alert(Mobile);
	alert(state);
	alert(IMEI);
	
	if(window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function()
	{
		if(this.readyState==4 && this.status==200)
		{
			if(this.responseText=="Done")
			{
				alert("Registered");
				self.location=("otp.php");
			
			}
		}
	};
	xmlhttp.open("GET","mobile_new_user_create.php?id="+Mobile+'&name='+user+'&IMEI='+IMEI+'&state='+state,true);
	xmlhttp.send();
}
}
