// JavaScript Document
function OTP(theForm)
{
	
   var regexp;
   regexp = /^[-+]?\d*\.?\d*$/;
   if (!regexp.test(theForm.otp.value))
   {
      alert("कृपया अपना 6 अंको का  mobile OTP डाले");
      theForm.otp.focus();
      return false;
   }
   if (theForm.otp.value == "")
   {
      alert("कृपया आप OTP को खाली न छोड़े");
      theForm.otp.focus();
      return false;
   }
   if (theForm.otp.value.length < 6)
   {
      alert("कृपया आप ने 6 अंको से कम का OTP डाला है ");
      theForm.otp.focus();
      return false;
   }
   if (theForm.otp.value.length > 6)
   {
      alert("कृपया आप 6 अंको से ज्यादा का OTP  नहीं डाल सकते ");
      theForm.otp.focus();
      return false;
   }
   return true;
}

