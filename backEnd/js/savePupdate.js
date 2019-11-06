// JavaScript Document
function savePupdate()
{
	var pname=$("#pname").val();
	var srr=$("#psr").val();
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
			alert("Product updated Successfully !");
		}
	};
	xmlhttp.open("GET","updateProd.php?name="+pname+'&desc='+pdesc+'&cat='+pcat+'&subcat='+subcat+'&url='+url+'&mrp='+mrp+'&sprice='+sprice+'&srr='+srr,true);
	xmlhttp.send();	
}

	