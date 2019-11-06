// JavaScript Document
function saveComment(srr)
{
	alert(srr);
	var cmt=$("#"+srr).val();
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
			alert("Your comment saved on this order");
			
		}
	};
	xmlhttp.open("GET","saveComment.php?srr="+srr+'&cmt='+cmt,true);
	xmlhttp.send();
}