// JavaScript Document
function ValidateForm3(theForm)
{
	if(theForm.newTags.selectedIndex < 0)
   {
	   alert("Choose New Tag");
	   theForm.newTags.focus();
	   return false;
   }
    if(theForm.newTags.selectedIndex == 0)
   {
	   alert("Choose New Tag");
	   theForm.newTags.focus();
	   return false;
   }
       if(theForm.catt.selectedIndex < 0)
   {
	   alert("Choose Category");
	   theForm.catt.focus();
	   return false;
   }
    if(theForm.catt.selectedIndex == 0)
   {
	   alert("Choose Category");
	   theForm.catt.focus();
	   return false;
   }
        if(theForm.subcatt.selectedIndex < 0)
   {
	   alert("Choose Subcategory");
	   theForm.subcatt.focus();
	   return false;
   }
    if(theForm.subcatt.selectedIndex == 0)
   {
	   alert("Choose Subcategory");
	   theForm.subcatt.focus();
	   return false;
   }
       if(theForm.videoID.selectedIndex < 0)
   {
	   alert("Choose Videos");
	   theForm.videoID.focus();
	   return false;
   }
    if(theForm.videoID.selectedIndex == 0)
   {
	   alert("Choose Videos");
	   theForm.videoID.focus();
	   return false;
   }
   joinTag();
}