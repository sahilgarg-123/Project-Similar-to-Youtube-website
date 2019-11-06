// JavaScript Document
function pDelete(srr)
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
		alert("Your product has been removed from database ! Refresh the page to check relivent results");
	}
};
xmlhttp.open("GET","pDelete.php?srr="+srr,true);
xmlhttp.send();
}