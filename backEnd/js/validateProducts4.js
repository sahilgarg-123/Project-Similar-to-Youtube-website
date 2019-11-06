// JavaScript Document

function ValidateForm3(theForm)
{
   var regexp;
 

   if (theForm.pname.value == "")
   {
      alert("Enter Product Title");
      theForm.pname.focus();
      return false;
   }
   if (theForm.pname.value.length < 5)
   {
      alert("Enter Product Title");
      theForm.pname.focus();
      return false;
   }
   if (theForm.pname.value.length > 300)
   {
      alert("Enter Product Title");
      theForm.pname.focus();
      return false;
   }
   
   
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(theForm.mrp.value))
   {
      alert("Enter MRP for product");
      theForm.mrp.focus();
      return false;
   }
   if (theForm.mrp.value == "")
   {
      alert("Enter MRP for product");
      theForm.mrp.focus();
      return false;
   }
   if (theForm.mrp.value.length < 2)
   {
      alert("Enter MRP for product");
      theForm.mrp.focus();
      return false;
   }
   if (theForm.mrp.value.length > 5)
   {
      alert("MRP of product exceed limit");
      theForm.mrp.focus();
      return false;
   }

     regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(theForm.sprice.value))
   {
      alert("Enter sale price for product");
      theForm.sprice.focus();
      return false;
   }
   if (theForm.sprice.value == "")
   {
      alert("Enter sale price for product");
      theForm.sprice.focus();
      return false;
   }
   if (theForm.sprice.value.length < 2)
   {
      alert("Enter sale price for product");
      theForm.sprice.focus();
      return false;
   }
   if (theForm.sprice.value.length > 5)
   {
      alert("Sale price of product exceed limit");
      theForm.sprice.focus();
      return false;
   }
   
   


   if (theForm.pdesc.value == "")
   {
      alert("Enter Product description");
      theForm.pdesc.focus();
      return false;
   }
   if (theForm.pdesc.value.length < 10)
   {
      alert("Enter Product description");
      theForm.pdesc.focus();
      return false;
   }
   if (theForm.pdesc.value.length > 4000)
   {
      alert("Enter Product description");
      theForm.pdesc.focus();
      return false;
   }
   regexp = /(http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
   if (!regexp.test(theForm.purl.value))
   {
      alert("Enter product image url");
      theForm.purl.focus();
      return false;
   }
   if (theForm.purl.value == "")
   {
      alert("Enter product image url");
      theForm.purl.focus();
      return false;
   }
   if (theForm.purl.value.length < 5)
   {
      alert("Enter product image url");
      theForm.purl.focus();
      return false;
   }
   if (theForm.purl.value.length > 200)
   {
      alert("Enter product image url");
      theForm.purl.focus();
      return false;
   }
   if(theForm.pcat.selectedIndex < 0)
   {
	   alert("Enter product category");
	   theForm.pcat.focus();
	   return false;
   }
    if(theForm.pcat.selectedIndex == 0)
   {
	   alert("Enter product category");
	   theForm.pcat.focus();
	   return false;
   }
     if(theForm.addsubcat.selectedIndex < 0)
   {
	   alert("Enter product Sub category");
	   theForm.addsubcat.focus();
	   return false;
   }
    if(theForm.addsubcat.selectedIndex == 0)
   {
	   alert("Enter product Sub category");
	   theForm.addsubcat.focus();
	   return false;
   }
	//savePupdate(); 
   
}
