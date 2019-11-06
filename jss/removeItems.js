// JavaScript Document
function removeItems(srr){
	
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
	xmlhttp.open("GET","removeItem.php?sr="+srr,true);
	xmlhttp.send();
	
}