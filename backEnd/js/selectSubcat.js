// JavaScript Document
function selectSubcat()
{
	var catt=$("#pcat").val();
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
		document.getElementById("subcat1").innerHTML=this.responseText;
	}
};
xmlhttp.open("GET","selectSubcatt.php?cat="+catt,true);
xmlhttp.send();
}