// JavaScript Document
function ValidateForm1(theForm)
{
   var regexp;
    regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(theForm.mobb.value))
   {
      alert("Enter your 10 digit registered mobile no");
      theForm.mobb.focus();
      return false;
   }
   if (theForm.mobb.value == "")
   {
      alert("Enter your 10 digit registered mobile no");
      theForm.mobb.focus();
      return false;
   }
   if (theForm.mobb.value.length < 10)
   {
      alert("Enter your 10 digit registered mobile no");
      theForm.mobb.focus();
      return false;
   }
   if (theForm.mobb.value.length > 10)
   {
      alert("Enter your 10 digit registered mobile no");
      theForm.mobb.focus();
      return false;
   }
   regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f0-9-@#$%,.'/]*$/;
   if (!regexp.test(theForm.msgg.value))
   {
      alert("Enter feedback, Can't blank");
      theForm.msgg.focus();
      return false;
   }
   if (theForm.msgg.value == "")
   {
      alert("Enter feedback, Can't blank");
      theForm.msgg.focus();
      return false;
   }
   if (theForm.msgg.value.length < 3)
   {
      alert("Enter feedback, Can't blank");
      theForm.msgg.focus();
      return false;
   }
   if (theForm.msgg.value.length > 220)
   {
      alert("Enter feedback, Can't blank");
      theForm.msgg.focus();
      return false;
   }
  
   saveFeedB();
}
//-->
