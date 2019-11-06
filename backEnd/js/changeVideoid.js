// JavaScript Document
function changeVideoid()
{
	var subcat=$("#seoSubcat").val();
	
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
			document.getElementById("videoid1").innerHTML=this.responseText;
		}
	};
	xmlhttp.open("GET","changeVideoid.php?subcat="+subcat,true);
	xmlhttp.send();
	
}