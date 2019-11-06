// JavaScript Document
function deleteVideo(videoID)
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
			alert("Selected video record removed from the server");
		}
	};
	xmlhttp.open("GET","deleteVideo.php?videoID="+videoID,true);
	xmlhttp.send();
}