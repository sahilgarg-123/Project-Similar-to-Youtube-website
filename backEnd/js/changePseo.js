// JavaScript Document
function changePseo()
{
	var catt=$("#seocat").val();
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
			document.getElementById("psubcatseo").innerHTML=this.responseText;
		}
	};
	xmlhttp.open("GET","changePseo.php?cat="+catt,true);
	xmlhttp.send();
}