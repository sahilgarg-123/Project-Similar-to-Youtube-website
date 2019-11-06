// JavaScript Document
function newOrders(status)
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
		document.getElementById("table").innerHTML=this.responseText;
	}
};
xmlhttp.open("GET","newTable.php?status="+status,true);
xmlhttp.send();
}