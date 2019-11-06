// JavaScript Document
function downloadExcel(status)
{

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
			alert("Downloading Report");
		}
	};
	xmlhttp.open("GET","downloadExcel.php?status="+status,true);
	xmlhttp.send();
	
}