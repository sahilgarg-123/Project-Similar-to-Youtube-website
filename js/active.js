// JavaScript Document
function activeUser(ipp)
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
			
		}
	};
	xmlhttp.open("GET","active.php?ipp="+ipp,true);
	xmlhttp.send();
}