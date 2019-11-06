// JavaScript Document
function registerUser()
{
	var user=$("#name").val();
	var Mobile=$("#mob").val();
	var state=$("#city").val();
	var IMEI=$("#imei").val();
	alert(user);
	alert(Mobile);
	alert(state);
	alert(IMEI);
	
	if(window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function()
	{
		if(this.readyState==4 && this.status==200)
		{
			if(this.responseText=="Done")
			{
				alert("Registered");
				self.location=("otp.php");
			
			}
		}
	};
	xmlhttp.open("GET","API2/mobile_new_user_create.php?id="+Mobile+'&name='+user+'&IMEI='+IMEI+'&state='+state,true);
	xmlhttp.send();
}