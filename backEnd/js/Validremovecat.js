// JavaScript Document

function ValidateForm3(theForm)
{
   var regexp;
if (theForm.rcat.selectedIndex < 0)
{
   alert("Select category to remove");
   theForm.rcat.focus();
   return false;
}
if (theForm.rcat.selectedIndex == 0)
{
   alert("Select category to remove");
   theForm.rcat.focus();
   return false;
}
   rmainCat();
}

