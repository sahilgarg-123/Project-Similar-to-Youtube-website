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
  
   regexp = /^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i;
   if (!regexp.test(theForm.mail.value))
   {
      alert("Enter email id");
      theForm.mail.focus();
      return false;
   }
   if (theForm.mail.value == "")
   {
      alert("Enter email id");
      theForm.mail.focus();
      return false;
   }
   if (theForm.mail.value.length < 8)
   {
      alert("Enter email id");
      theForm.mail.focus();
      return false;
   }
   if (theForm.mail.value.length > 100)
   {
      alert("Enter email id");
      theForm.mail.focus();
      return false;
   }
   regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f0-9--|_.,%@#\']*$/;
   if (!regexp.test(theForm.adds.value))
   {
      alert("Enter Address");
      theForm.adds.focus();
      return false;
   }
   if (theForm.adds.value == "")
   {
      alert("Enter Address");
      theForm.adds.focus();
      return false;
   }
   if (theForm.adds.value.length < 3)
   {
      alert("Enter Address");
      theForm.adds.focus();
      return false;
   }
   if (theForm.adds.value.length > 300)
   {
      alert("Enter Address");
      theForm.adds.focus();
      return false;
   }
   regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ0-9-@#$%\/.,-_]*$/;
   if (!regexp.test(theForm.pwd.value))
   {
      alert("Enter Password");
      theForm.pwd.focus();
      return false;
   }
   if (theForm.pwd.value == "")
   {
      alert("Enter Password");
      theForm.pwd.focus();
      return false;
   }
   if (theForm.pwd.value.length < 6)
   {
      alert("Enter Password");
      theForm.pwd.focus();
      return false;
   }
   if (theForm.pwd.value.length > 40)
   {
      alert("Enter Password");
      theForm.pwd.focus();
      return false;
   }
   regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ0-9-@#$%\/.,-_]*$/;
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
   if (theForm.cpwd.value.length > 40)
   {
      alert("Confirm Password");
      theForm.cpwd.focus();
      return false;
   }
   if (theForm.cpwd.value != theForm.pwd.value)
   {
      alert("Password not matched");
      theForm.cpwd.focus();
      return false;
   }
   registerUser();
}
