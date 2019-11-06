// JavaScript Document
function plusQty(sku,sessionid,qtyy,ops)
{
	if(ops=='add')
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
			
			self.location=("your_cart.php");
		}
	};
	xmlhttp.open("GET","plusQty.php?sku="+sku+'&sessionid='+sessionid+'&qtyy='+qtyy+'&ops='+ops,true);
	xmlhttp.send();
	}
	else if(ops=='minus')
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
			
			self.location=("your_cart.php");
		}
	};
	xmlhttp.open("GET","plusQty.php?sku="+sku+'&sessionid='+sessionid+'&qtyy='+qtyy+'&ops='+ops,true);
	xmlhttp.send();
	}
	
}