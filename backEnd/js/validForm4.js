// JavaScript Document
function ValidateForm4(theForm)
{
	   var regexp;
if (theForm.rcat1.selectedIndex < 0)
{
   alert("Select category to remove");
   theForm.rcat.focus();
   return false;
}
if (theForm.rcat1.selectedIndex == 0)
{
   alert("Select category to remove");
   theForm.rcat.focus();
   return false;
}
if (theForm.rcat2.selectedIndex < 0)
{
   alert("Select related category");
   theForm.rcat2.focus();
   return false;
}
if (theForm.rcat2.selectedIndex == 0)
{
   alert("Select related category");
   theForm.rcat2.focus();
   return false;
}
   removeSubcat();
}
