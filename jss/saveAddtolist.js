// JavaScript Document
function saveAddtolist(sku,qtyy,prod_type,session,srr,uid)
{
	if(srr=="c1")
	{
		if(session=="")
		{
		self.location=("../loginUser.php?urlRD=prod_desc.php?prod_type="+prod_type+'&uid='+uid);
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
			
  				 self.location=("your_cart.php");
			}
			};
			xmlhttp.open("GET","saveAddtolist.php?sku="+sku+'&qtyy='+qtyy+'&mob='+session+'&uid='+uid,true);
			xmlhttp.send();
			}
		}
	else if(srr=="b1")
	{
		if(session=="")
		{
		self.location=("../loginUser.php?urlRD=prod_desc.php?prod_type="+prod_type+'&uid='+uid);
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
			document.getElementById("toast").style.display="block";
			$("#toast").val('Added to Cart');
			
 				 setTimeout(function(){ document.getElementById("toast").style.display="none";
  				 self.location=("prod_desc.php?prod_type="+prod_type+'&uid='+uid); }, 2000);
			}
			};
			xmlhttp.open("GET","saveAddtolist.php?sku="+sku+'&qtyy='+qtyy+'&mob='+session+'&uid='+uid,true);
			xmlhttp.send();
			}
		}
	else
	{
	
	if(session=="")
	{
		self.location=("../loginUser.php?urlRD=product_cat.php?prod_type="+prod_type+'&uid='+uid);
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
			document.getElementById(srr).style.color="red";
			document.getElementById("toast").style.display="block";
			$("#toast").val('Added to Cart');
			
  setTimeout(function(){ document.getElementById("toast").style.display="none";
  self.location=("product_cat.php?prod_type="+prod_type+'&uid='+uid); }, 2000);
		}
	};
	xmlhttp.open("GET","saveAddtolist.php?sku="+sku+'&qtyy='+qtyy+'&mob='+session+'&uid='+uid,true);
	xmlhttp.send();
	}
	}
}