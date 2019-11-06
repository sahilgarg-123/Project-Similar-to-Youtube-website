// JavaScript Document
function ValidateForm2(theForm)
{
   var regexp;
     regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f0-9-@#$-_!|]*$/;
   if (!regexp.test(theForm.seotag.value))
   {
      alert("Enter seo tag first");
      theForm.seotag.focus();
      return false;
   }
   if (theForm.seotag.value == "")
   {
      alert("Enter seo can not be null");
      theForm.seotag.focus();
      return false;
   }
   if (theForm.seotag.value.length < 2)
   {
      alert("SEO tag length must greater than 2 words");
      theForm.seotag.focus();
      return false;
   }
   if (theForm.seotag.value.length > 220)
   {
      alert("SEO tags are too much long");
      theForm.seotag.focus();
      return false;
   }
if (theForm.seoCat.selectedIndex < 0)
{
   alert("Select category");
   theForm.seoCat.focus();
   return false;
}
if (theForm.seoCat.selectedIndex == 0)
{
   alert("Select category");
   theForm.seoCat.focus();
   return false;
}
if (theForm.seoSubcat.selectedIndex < 0)
{
   alert("Please Select Subcategory");
   theForm.seoSubcat.focus();
   return false;
}
if (theForm.seoSubcat.selectedIndex == 0)
{
   alert("Please Select Subcategory");
   theForm.seoSubcat.focus();
   return false;
}
if (theForm.videoID.selectedIndex < 0)
{
   alert("Please Select video ID");
   theForm.videoID.focus();
   return false;
}
if (theForm.videoID.selectedIndex == 0)
{
   alert("Please Select video ID");
   theForm.videoID.focus();
   return false;
}

   SaveSeoTag();
   
}

