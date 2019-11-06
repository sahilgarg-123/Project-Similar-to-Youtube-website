// JavaScript Document
function ValidateForm1(theForm)
{
 var regexp;
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
   return true;
}