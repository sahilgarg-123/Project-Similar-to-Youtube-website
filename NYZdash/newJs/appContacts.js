// JavaScript Document
function appContacts(Data)
{
	var val1=$("#mobb").val();
	
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
			document.getElementById("table").innerHTML=this.responseText;
		}
	};
	xmlhttp.open("GET","appContacts.php?Data="+Data+'&val1='+val1,true);
	xmlhttp.send();
	
}