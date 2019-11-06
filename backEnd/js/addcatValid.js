// JavaScript Document

function ValidateForm1(theForm)
{
   var regexp;
   regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f0-9-#$@?]*$/;
   if (!regexp.test(theForm.catName.value))
   {
      alert("Enter Category Name");
      theForm.catName.focus();
      return false;
   }
   if (theForm.catName.value == "")
   {
      alert("Enter Category Name");
      theForm.catName.focus();
      return false;
   }
   if (theForm.catName.value.length < 2)
   {
      alert("Enter Category Name");
      theForm.catName.focus();
      return false;
   }
   if (theForm.catName.value.length > 80)
   {
      alert("Enter Category Name");
      theForm.catName.focus();
      return false;
   }
addCat();
}

