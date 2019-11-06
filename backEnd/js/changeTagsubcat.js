// JavaScript Document
function changeTagsubcat()
{
	var catt=$("#catt").val();
	
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
			document.getElementById("insertSubcat").innerHTML=this.responseText;
		}
	};
	
	xmlhttp.open("GET","changeTagsubcat.php?catt="+catt,true);
	xmlhttp.send();
	
}