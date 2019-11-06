// JavaScript Document
function loginME()
{
	var mob=$("#mob").val();
	var pwd=$("#pwd").val();
	var urlData=$("#urlData").val();
	
	
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
		}
	};
	xmlhttp.open("GET","loginUserr.php?mob="+mob+'&pwd='+pwd,true);
	xmlhttp.send();
}