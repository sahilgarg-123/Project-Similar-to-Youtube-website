// JavaScript Document

function ValidateForm2(theForm)
{
   var regexp;
if (theForm.newCat.selectedIndex < 0)
{
   alert("Choose Related Category First");
   theForm.newCat.focus();
   return false;
}
if (theForm.newCat.selectedIndex == 0)
{
   alert("Choose Related Category First");
   theForm.newCat.focus();
   return false;
}
   regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f0-9-#$@-_]*$/;
   if (!regexp.test(theForm.newSubcat.value))
   {
      alert("Enter Subcategory");
      theForm.newSubcat.focus();
      return false;
   }
   if (theForm.newSubcat.value == "")
   {
      alert("Enter Subcategory");
      theForm.newSubcat.focus();
      return false;
   }
   if (theForm.newSubcat.value.length < 3)
   {
      alert("Enter Subcategory");
      theForm.newSubcat.focus();
      return false;
   }
   if (theForm.newSubcat.value.length > 60)
   {
      alert("Enter Subcategory");
      theForm.newSubcat.focus();
      return false;
   }
  saveNewsubCat();
}
