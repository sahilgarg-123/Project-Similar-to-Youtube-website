// JavaScript Document
function changeTagvideos()
{
	var subcatt=$("#subcatt").val();
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
			document.getElementById("insertvideoid").innerHTML=this.responseText;
		}
	};
	
	xmlhttp.open("GET","changeTagvideos.php?subcatt="+subcatt,true);
	xmlhttp.send();
}