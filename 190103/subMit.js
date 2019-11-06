// JavaScript Document
function ValidateForm1(theForm)
{
	
   var regexp;
   regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f0-9-]*$/;
   if (!regexp.test(theForm.pBname.value))
   {
      alert("Enter Name");
      theForm.pBname.focus();
      return false;
   }
   if (theForm.pBname.value == "")
   {
      alert("Enter Name");
      theForm.pBname.focus();
      return false;
   }
   if (theForm.pBname.value.length < 3)
   {
      alert("Enter Name");
      theForm.pBname.focus();
      return false;
   }
   if (theForm.pBname.value.length > 10)
   {
      alert("Enter Name");
      theForm.pBname.focus();
      return false;
   }
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(theForm.pBmob.value))
   {
      alert("Enter 10 digit mobile no");
      theForm.pBmob.focus();
      return false;
   }
   if (theForm.pBmob.value == "")
   {
      alert("Enter 10 digit mobile no");
      theForm.pBmob.focus();
      return false;
   }
   if (theForm.pBmob.value.length < 10)
   {
      alert("Enter 10 digit mobile no");
      theForm.pBmob.focus();
      return false;
   }
   if (theForm.pBmob.value.length > 10)
   {
      alert("Enter 10 digit mobile no");
      theForm.pBmob.focus();
      return false;
   }
 regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(theForm.pBqtyy.value))
   {
      alert("Enter Quantity of Products");
      theForm.pBqtyy.focus();
      return false;
   }
   if (theForm.pBqtyy.value == "")
   {
      alert("Enter Quantity of Products");
      theForm.pBqtyy.focus();
      return false;
   }
   if (theForm.pBqtyy.value.length < 1)
   {
      alert("Enter Quantity of Products");
      theForm.pBqtyy.focus();
      return false;
   }
   if (theForm.pBqtyy.value.length > 2)
   {
      alert("Enter Quantity of Products");
      theForm.pBqtyy.focus();
      return false;
   }

    regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f0-9-#$-_,.]*$/;
   if (!regexp.test(theForm.pBadds.value))
   {
      alert("Enter delivery address");
      theForm.pBadds.focus();
      return false;
   }
   if (theForm.pBadds.value == "")
   {
      alert("Enter delivery address");
      theForm.pBadds.focus();
      return false;
   }
   if (theForm.pBadds.value.length < 6)
   {
      alert("Enter delivery address");
      theForm.pBadds.focus();
      return false;
   }
   if (theForm.pBadds.value.length > 100)
   {
      alert("Enter delivery address");
      theForm.pBadds.focus();
      return false;
   }
   regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f-]*$/;
   if (!regexp.test(theForm.pBcity.value))
   {
      alert("Enter your city");
      theForm.pBcity.focus();
      return false;
   }
   if (theForm.pBcity.value == "")
   {
      alert("Enter your city");
      theForm.pBcity.focus();
      return false;
   }
   if (theForm.pBcity.value.length < 3)
   {
      alert("Enter your city");
      theForm.pBcity.focus();
      return false;
   }
   if (theForm.pBcity.value.length > 20)
   {
      alert("Enter your city");
      theForm.pBcity.focus();
      return false;
   }
      regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f-]*$/;
   if (!regexp.test(theForm.pBstate.value))
   {
      alert("Enter your state");
      theForm.pBstate.focus();
      return false;
   }
   if (theForm.pBstate.value == "")
   {
      alert("Enter your state");
      theForm.pBstate.focus();
      return false;
   }
   if (theForm.pBstate.value.length < 3)
   {
      alert("Enter your state");
      theForm.pBstate.focus();
      return false;
   }
   if (theForm.pBstate.value.length > 20)
   {
      alert("Enter your state");
      theForm.pBstate.focus();
      return false;
   }
regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(theForm.pBpin.value))
   {
      alert("Enter your pincode");
      theForm.pBpin.focus();
      return false;
   }
   if (theForm.pBpin.value == "")
   {
      alert("Enter your pincode");
      theForm.pBpin.focus();
      return false;
   }
   if (theForm.pBpin.value.length < 5)
   {
      alert("Enter your pincode");
      theForm.pBpin.focus();
      return false;
   }
   if (theForm.pBpin.value.length > 10)
   {
      alert("Enter your pincode");
      theForm.pBpin.focus();
      return false;
   }

saveOrder();
}
function saveOrder()
{
	var name=$("#pBname").val()
	var mob=$("#pBmob").val();
	var qtyy=$("#pBqtyy").val();
	var adds=$("#pBadds").val();
	var city=$("#pBcity").val();
	var state=$("#pBstate").val();
	var pincode=$("#pBpin").val();
	var product=$("#pBproduct").val();
	var price=$("#pBprice").val();
	
	if(window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			alert("Your Order has been submitted");
		}
	};
	xmlhttp.open("GET","https://www.prabhubhakti.com/190103/insertOrders.php?pBname="+name+'&pBmob='+mob+'&pBqtyy='+qtyy+'&pBadds='+adds+'&pBcity='+city+'&pBstate='+state+'&pBpin='+pincode+'&pBproduct='+product+'&pBprice='+price,true);
	xmlhttp.send();
}