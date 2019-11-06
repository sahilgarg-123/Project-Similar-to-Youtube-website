// JavaScript Document
function ValidateForm1(theForm)
{
	
	 var name1=$("#name").val();
	var mob1=$("#mob").val();
	var codee1=$("#codee").val();
	var pwd1=$("#pwd").val();
	
   var regexp;
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
   if (theForm.name.value.length > 20)
   {
      alert("Enter Name");
      theForm.name.focus();
      return false;
   }
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(theForm.mob.value))
   {
      alert("Enter 10 digit mobile No");
      theForm.mob.focus();
      return false;
   }
   if (theForm.mob.value == "")
   {
      alert("Enter 10 digit mobile No");
      theForm.mob.focus();
      return false;
   }
   if (theForm.mob.value.length < 10)
   {
      alert("Enter 10 digit mobile No");
      theForm.mob.focus();
      return false;
   }
   if (theForm.mob.value.length > 10)
   {
      alert("Enter 10 digit mobile No");
      theForm.mob.focus();
      return false;
   }
   regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f0-9-]*$/;
   if (!regexp.test(theForm.codee.value))
   {
      alert("Enter Official secrate code");
      theForm.codee.focus();
      return false;
   }
   if (theForm.codee.value == "")
   {
      alert("Enter Official secrate code");
      theForm.codee.focus();
      return false;
   }
    if (theForm.codee.value != "DREAM")
   {
      alert("Enter incorrect Official secrate code");
      theForm.codee.focus();
      return false;
   }
   if (theForm.codee.value.length < 5)
   {
      alert("Enter Official secrate code");
      theForm.codee.focus();
      return false;
   }
   if (theForm.codee.value.length > 6)
   {
      alert("Enter Official secrate code");
      theForm.codee.focus();
      return false;
   }
   regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f0-9-@#$!]*$/;
   if (!regexp.test(theForm.pwd.value))
   {
      alert("Enter password");
      theForm.pwd.focus();
      return false;
   }
   if (theForm.pwd.value == "")
   {
      alert("Enter password");
      theForm.pwd.focus();
      return false;
   }
   if (theForm.pwd.value.length < 6)
   {
      alert("Enter password");
      theForm.pwd.focus();
      return false;
   }
   if (theForm.pwd.value.length > 15)
   {
      alert("Enter password");
      theForm.pwd.focus();
      return false;
   }
   regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ0-9-@#$!]*$/;
   if (!regexp.test(theForm.cpwd.value))
   {
      alert("Confirm Password");
      theForm.cpwd.focus();
      return false;
   }
   if (theForm.cpwd.value == "")
   {
      alert("Confirm Password");
      theForm.cpwd.focus();
      return false;
   }
   if (theForm.cpwd.value.length < 6)
   {
      alert("Confirm Password");
      theForm.cpwd.focus();
      return false;
   }
   if (theForm.cpwd.value.length > 15)
   {
      alert("Confirm Password");
      theForm.cpwd.focus();
      return false;
   }
 if (theForm.cpwd.value != theForm.pwd.value)
   {
      alert("password dont match");
      theForm.cpwd.focus();
      return false;
   }
   
   if(window.XMLHttpRequest)
   {
	   xmlhttp=new XMLHttpRequest();
   }
   else
   {
	   xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
   xmlhttp.onreadystatechange=function()
   {
	   if(this.readyState==4 && this.status==200)
	   {
		  if(this.responseText=="already")
		  {
			  alert("You are already registered");
			  self.location=("loginUser.php");
		  }
		  else
		  {
			  alert("You are successfully registered");
			  self.location=("loginUser.php");
		  }
	   }
   };
   xmlhttp.open("GET","register.php?name="+name1+'&mob='+mob1+'&pwd='+pwd1,true);
   xmlhttp.send();
  
}