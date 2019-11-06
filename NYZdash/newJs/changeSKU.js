// JavaScript Document
function changeSKU1()
{
	var value1=$("#prod1").val();
	if(value1=="")
	{
		alert("Choose correct Product");
	}
	else
	{
	
	if(window.XMLHttpRequest)
{
	xmlhttp=new XMLHttpRequest();
}
else
{
	xmlhttp=new ActiveXObjects("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
	if(this.readyState==4 && this.status==200)
	{
		document.getElementById("skucode1").value=this.responseText;
	}
};
xmlhttp.open("GET","changeSKU.php?value="+value1,true);
xmlhttp.send();
	}
	
}
function changeSKU2()
{
		var value1=$("#prod2").val();
	if(value1=="")
	{
		alert("Choose correct Product");
	}
	else
	{
	if(window.XMLHttpRequest)
{
	xmlhttp=new XMLHttpRequest();
}
else
{
	xmlhttp=new ActiveXObjects("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
	if(this.readyState==4 && this.status==200)
	{
		document.getElementById("skucode2").value=this.responseText;
	}
};
xmlhttp.open("GET","changeSKU.php?value="+value1,true);
xmlhttp.send();
	
	}
	
}
function changeSKU3()
{
		var value1=$("#prod3").val();
	if(value1=="")
	{
		alert("Choose correct Product");
	}
	else
	{
	if(window.XMLHttpRequest)
{
	xmlhttp=new XMLHttpRequest();
}
else
{
	xmlhttp=new ActiveXObjects("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
	if(this.readyState==4 && this.status==200)
	{
		document.getElementById("skucode3").value=this.responseText;
	}
};
xmlhttp.open("GET","changeSKU.php?value="+value1,true);
xmlhttp.send();
	
	}
	
}
function changeSKU4()
{
	var value1=$("#prod4").val();
	if(value1=="")
	{
		alert("Choose correct Product");
	}
	else
	{
	if(window.XMLHttpRequest)
{
	xmlhttp=new XMLHttpRequest();
}
else
{
	xmlhttp=new ActiveXObjects("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
	if(this.readyState==4 && this.status==200)
	{
		document.getElementById("skucode4").value=this.responseText;
	}
};
xmlhttp.open("GET","changeSKU.php?value="+value1,true);
xmlhttp.send();
	
	}
	
}
function changeSKU5()
{
		var value1=$("#prod5").val();
	if(value1=="")
	{
		alert("Choose correct Product");
	}
	else
	{
	if(window.XMLHttpRequest)
{
	xmlhttp=new XMLHttpRequest();
}
else
{
	xmlhttp=new ActiveXObjects("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
	if(this.readyState==4 && this.status==200)
	{
		document.getElementById("skucode5").value=this.responseText;
	}
};
xmlhttp.open("GET","changeSKU.php?value="+value1,true);
xmlhttp.send();
	
	}
	
}
