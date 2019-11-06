// JavaScript Document
function changePrice1(data)
{
	if(data==1)
	{
var sku1=$("#skucode1").val();
var qty1=$("#qty1").val();
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
		document.getElementById("price1").value=this.responseText;
	}
};
xmlhttp.open("GET","changePrice.php?sku1="+sku1+'&qty1='+qty1+'&data='+data,true);
xmlhttp.send();
	}
	else if(data==2)
	{
		var sku1=$("#skucode2").val();
var qty1=$("#qty2").val();
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
		document.getElementById("price2").value=this.responseText;
	}
};
xmlhttp.open("GET","changePrice.php?sku1="+sku1+'&qty1='+qty1+'&data='+data,true);
xmlhttp.send();
	}
	else if(data==3)
	{
		var sku1=$("#skucode3").val();
var qty1=$("#qty3").val();
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
		document.getElementById("price3").value=this.responseText;
	}
};
xmlhttp.open("GET","changePrice.php?sku1="+sku1+'&qty1='+qty1+'&data='+data,true);
xmlhttp.send();
	}
	else if(data==4)
	{
		var sku1=$("#skucode4").val();
var qty1=$("#qty4").val();
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
		document.getElementById("price4").value=this.responseText;
	}
};
xmlhttp.open("GET","changePrice.php?sku1="+sku1+'&qty1='+qty1+'&data='+data,true);
xmlhttp.send();
	}
	else if(data==5)
	{
		var sku1=$("#skucode5").val();
var qty1=$("#qty5").val();
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
		document.getElementById("price5").value=this.responseText;
	}
};
xmlhttp.open("GET","changePrice.php?sku1="+sku1+'&qty1='+qty1+'&data='+data,true);
xmlhttp.send();
	}
	
}