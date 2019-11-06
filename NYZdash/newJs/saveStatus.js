// JavaScript Document
function saveStatus(srr)
{
	var newStatus=$("#status").val();
	if(newStatus=="")
	{
		
		alert("Please choose a valid option for Status");
	}
	else
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
			alert("You change the status of Order");
		}
	};
	xmlhttp.open("GET","saveStatus.php?newStatus="+newStatus+'&srr='+srr,true);
	xmlhttp.send();
	}
	
}