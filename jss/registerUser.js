// JavaScript Document
function registerUser()
{
	var name=$("#name").val();
	var mob=$("#mob").val();
	var mail=$("#mail").val();
	var city=$("#city").val();
	var state=$("#state").val();
	var pwd=$("#pwd").val();
	
	
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
			if(this.responseText=="already")
			{
				alert("Dear user you are already registered");
			}
			else if(this.responseText=="Done")
			{
				alert("You are successfully registered");
				self.location="loginUser.php";
			}
		}
	};
	xmlhttp.open("GET","registerUser.php?name="+name+'&mob='+mob+'&mail='+mail+'&city='+city+'&state='+state+'&pwd='+pwd,true);
	xmlhttp.send();
}