// JavaScript Document
function joinTag(subb,vid)
{
	
   
   
	var tagg=$("#newTags").val();
	var catt=$("#catt").val();
	var subcatt=$("#subcatt").val();
	var videoid=$("#videoID").val();
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
			alert("Your new tag connected to a gived Video and Category successfully ! Refresh to see reflected result !");
		}
	};
	
	xmlhttp.open("GET","joinTag.php?tagg="+tagg+'&catt='+catt+'&subcatt='+subcatt+'&videoid='+videoid,true);
	xmlhttp.send();	
   
}