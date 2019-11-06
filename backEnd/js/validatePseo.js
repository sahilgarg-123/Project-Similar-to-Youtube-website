// JavaScript Document
function ValidateForm2(theForm)
{
	var regexp;
   regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f0-9-#$@&%,-_]*$/;
   if (!regexp.test(theForm.seotag.value))
   {
      alert("Enter tags");
      theForm.seotag.focus();
      return false;
   }
   if (theForm.seotag.value == "")
   {
      alert("Enter tags");
      theForm.seotag.focus();
      return false;
   }
   if (theForm.seotag.value.length < 2)
   {
      alert("Enter tags");
      theForm.seotag.focus();
      return false;
   }
   if (theForm.seotag.value.length > 50)
   {
      alert("Enter tags");
      theForm.seotag.focus();
      return false;
   }

	 if(theForm.seop.selectedIndex < 0)
   {
	   alert("Choose Products");
	   theForm.seop.focus();
	   return false;
   }
    if(theForm.seop.selectedIndex == 0)
   {
	   alert("Choose Products");
	   theForm.seop.focus();
	   return false;
   }
    if(theForm.seocat.selectedIndex < 0)
   {
	   alert("Select category for the seo implementation");
	   theForm.seocat.focus();
	   return false;
   }
    if(theForm.seocat.selectedIndex == 0)
   {
	   alert("Select category for the seo implementation");
	   theForm.seocat.focus();
	   return false;
   }
     if(theForm.pseosubcat.selectedIndex < 0)
   {
	   alert("Select subcategory");
	   theForm.pseosubcat.focus();
	   return false;
   }
    if(theForm.pseosubcat.selectedIndex == 0)
   {
	   alert("Select subcategory");
	   theForm.pseosubcat.focus();
	   return false;
   }
   savePtags();
}