// JavaScript Document
function OTTP(ottp)
{
alert(ottp);
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
		alert(this.responseText);
	}
};
xmlhttp.open("GET","sendotp.php?ottp="+ottp,true);
xmlhttp.send();
}
