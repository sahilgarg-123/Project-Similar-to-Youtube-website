// JavaScript Document
function filter()
{
	
	
	if(window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObjects("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			alert("Wait a while Data Filtering processing.");
		}
	};
	xmlhttp.open("GET","filter.php",true);
	xmlhttp.send();
	
}