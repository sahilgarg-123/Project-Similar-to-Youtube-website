// JavaScript Document
function loadOrder()
{
	var dateTo=$("#dateto").val();
	var dateFrom=$("#datefrom").val();
	
	if(dateTo=="" && dateFrom=="")
	{
		alert("Can't Blank Date");
	}
	else
	{
		if(dateTo<dateFrom)
		{
		alert("Incorrect Date !! Date From must be greater than Date To");
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
			document.getElementById("table").innerHTML=this.responseText;
		}
	};
	xmlhttp.open("GET","loadOrder.php?dateto="+dateTo+'&datefrom='+dateFrom,true);
	xmlhttp.send();
	}
	}
}