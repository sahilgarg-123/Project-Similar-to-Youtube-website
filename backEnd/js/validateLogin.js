// JavaScript Document
function ValidateForm1(theForm)
{
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
   regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ0-9-@#$%.,\']*$/;
   if (!regexp.test(theForm.pwd.value))
   {
      alert("Please enter password");
      theForm.pwd.focus();
      return false;
   }
   if (theForm.pwd.value == "")
   {
      alert("Please enter password");
      theForm.pwd.focus();
      return false;
   }
   if (theForm.pwd.value.length < 6)
   {
      alert("Please enter password");
      theForm.pwd.focus();
      return false;
   }
   if (theForm.pwd.value.length > 50)
   {
      alert("Please enter password");
      theForm.pwd.focus();
      return false;
   }
  
}
