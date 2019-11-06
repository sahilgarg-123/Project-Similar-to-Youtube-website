// JavaScript Document
function loadDesc(vid,val)
{
	if(val==1)
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
		document.getElementById("loadDescme").innerHTML=this.responseText;
	}
};
xmlhttp.open("GET","loadDesc.php?vid="+vid+'&val='+val,true);
xmlhttp.send();
	}
	else if(val==2)
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
		document.getElementById("loadDescme").innerHTML=this.responseText;
	}
};
xmlhttp.open("GET","loadDesc.php?vid="+vid+'&val='+val,true);
xmlhttp.send();
	}
	else if(val==3)
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
		document.getElementById("loadDescme").innerHTML=this.responseText;
	}
};
xmlhttp.open("GET","loadDesc.php?vid="+vid+'&val='+val,true);
xmlhttp.send();
	}
}