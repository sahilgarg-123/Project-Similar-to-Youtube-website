// JavaScript Document
function saveProducts()
{
	var pname=$("#pname").val();
	var skucode=$("#skucode").val();
	var pdesc=$("#pdesc").val();
	var pcat=$("#pcat").val();
	var subcat=$("#addsubcat").val();
	var url=$("#purl").val();
	var mrp=$("#mrp").val();
	var sprice=$("#sprice").val();
	
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
			alert("New Product Added to Product List");
		}
	};
	xmlhttp.open("GET","saveProducts.php?name="+pname+'&desc='+pdesc+'&cat='+pcat+'&subcat='+subcat+'&url='+url+'&mrp='+mrp+'&sprice='+sprice+'&sku='+skucode,true);
	xmlhttp.send();	
}

	