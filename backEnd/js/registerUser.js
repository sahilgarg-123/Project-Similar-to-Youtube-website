// JavaScript Document
function registerUser()
{
	var name=$("#name").val();
	var mob=$("#mob").val();
	var mail=$("#mail").val();
	var adds=$("#adds").val();
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
			else
			{
				alert("Dear user you are successfully Registered");
				self.location="loginUser.php";
			}
		}
	};
	xmlhttp.open("GET","registerUser.php?name="+name+'&mob='+mob+'&mail='+mail+'&adds='+adds+'&pwd='+pwd,true);
	xmlhttp.send();
}