// JavaScript Document
function findTags()
{
	var videoID=$("#videoID").val();
	
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
		document.getElementById("tagsFound").innerHTML=this.responseText;
	}
};
xmlhttp.open("GET","findTag.php?videoID="+videoID,true);
xmlhttp.send();
}
