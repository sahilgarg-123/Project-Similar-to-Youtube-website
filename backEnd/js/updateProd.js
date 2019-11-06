// JavaScript Document
function updateP(videoID,plvl){
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
			alert("You have changed priority of this video || Refresh to check reflected changes on the page");
		}
	};
	xmlhttp.open("GET","updatePRO.php?sr="+videoID+'&prio='+plvl,true);
	xmlhttp.send();
}