// JavaScript Document
function choosePayM(payout,sessionid,uid)
{
	var name1=$("#name1").val();
	var phone=$("#phone").val();
	var email=$("#email").val();
	var address=$("#address").val();
	var city=$("#city").val();
	var state=$("#state").val();
	var Pincode=$("#Pincode").val();
	
	
	
   var regexp;
   regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f]*$/;
   if (!regexp.test(name1))
   {
      alert("Enter Name");
      $("#name1").focus();
      return false;
   }
   if (name1 == "")
   {
      alert("Enter Name");
      $("#nam1e").focus();
      return false;
   }
   if (name1.length < 3)
   {
      alert("Invalid Name");
      $("#name1").focus();
      return false;
   }
   if (name1.length > 30)
   {
      alert("Invalid Name");
      $("#name1").focus();
      return false;
   }
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(phone))
   {
      alert("Enter Mobile Number");
      $("#phone").focus();
      return false;
   }
   if (phone == "")
   {
      alert("Enter Mobile Number");
      $("#phone").focus();
      return false;
   }
   if (phone.length < 10)
   {
      alert("Enter Mobile Number");
      $("#phone").focus();
      return false;
   }
   if (phone.length > 10)
   {
      alert("Enter Mobile Number");
      $("#phone").focus();
      return false;
   }
   regexp = /^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i;
   if (!regexp.test(email))
   {
      alert("Enter Email Id");
      $("#email").focus();
      return false;
   }
   if (email == "")
   {
      alert("Enter Email Id");
      $("#email").focus();
      return false;
   }
   if (email.length < 10)
   {
      alert("Enter Email Id");
      $("#email").focus();
      return false;
   }
   if (email.length > 60)
   {
      alert("Enter Email Id");
      $("#email").focus();
      return false;
   }
   regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f0-9-#,.'"-_]*$/;
   if (!regexp.test(address))
   {
      alert("Enter Address");
      $("#address").focus();
      return false;
   }
   if (address == "")
   {
      alert("Enter Address");
      $("#address").focus();
      return false;
   }
   if (address.length < 10)
   {
      alert("Enter Address");
      $("#address").focus();
      return false;
   }
   if (address.length > 120)
   {
      alert("Enter Address");
      $("#address").focus();
      return false;
   }
   regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f]*$/;
   if (!regexp.test(city))
   {
      alert("Enter City");
      $("#city").focus();
      return false;
   }
   if (city == "")
   {
      alert("Enter City");
      $("#city").focus();
      return false;
   }
   if (city.length < 3)
   {
      alert("Enter City");
      $("#city").focus();
      return false;
   }
   if (city.length > 30)
   {
      alert("Enter City");
      $("#city").focus();
      return false;
   }
   regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f]*$/;
   if (!regexp.test(state))
   {
      alert("Enter State");
      $("#state").focus();
      return false;
   }
   if (state == "")
   {
      alert("Enter State");
      $("#state").focus();
      return false;
   }
   if (state.length < 3)
   {
      alert("Enter State");
      $("#state").focus();
      return false;
   }
   if (state.length > 30)
   {
      alert("Enter State");
      $("#state").focus();
      return false;
   }

   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(Pincode))
   {
      alert("Enter Pincode");
      $("#Pincode").focus();
      return false;
   }
   if (Pincode == "")
   {
      alert("Enter Pincode");
      $("#Pincode").focus();
      return false;
   }
   if (Pincode.length < 6)
   {
      alert("Enter Pincode");
      $("#Pincode").focus();
      return false;
   }
   if (Pincode.length > 12)
   {
      alert("Enter Pincode");
      $("#Pincode").focus();
      return false;
   }
   self.location=("payment_method.php?name="+name1+'&phone='+phone+'&email='+email+'&address='+address+'&city='+city+'&state='+state+'&Pincode='+Pincode+'&val='+payout+'&user='+sessionid+'&uid='+uid);

}