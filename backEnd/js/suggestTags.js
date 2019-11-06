// JavaScript Document
function suggestTags()
{
	var product=$("#seop").val();
	
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
		document.getElementById("relatedtag").innerHTML=this.responseText;
	}
};

xmlhttp.open("GET","suggestTags.php?product="+product,true);
xmlhttp.send();
}