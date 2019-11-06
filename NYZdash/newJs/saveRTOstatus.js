// JavaScript Document
function saveRTOstatus(orderID)
{
	var data=$("#rtoStatus").val();
	
	if(data=="")
	{
		alert("Choose a right option for status");
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
			alert("Your status has been saved on Prabhu Bhakti");
		}
	};
	xmlhttp.open("GET","saveRTOstatus.php?orderID="+orderID+'&data='+data,true);
	xmlhttp.send();
	}
	
}