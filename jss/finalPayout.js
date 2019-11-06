// JavaScript Document
function finalPayout(user,value,name,phone,email,address,city,state,Pincode,uid,sessionid)
{
if(document.getElementById("cashradio").checked)
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
			self.location=("thankyou_shopping.php?txnid="+this.responseText);
		}
	};
	xmlhttp.open("GET","cod.php?user="+user+'&value='+value+'&name='+name+'&phone='+phone+'&email='+email+'&address='+address+'&city='+city+'&state='+state+'&Pincode='+Pincode+'&uid='+uid+'&sessionid='+sessionid,true);
	xmlhttp.send();
}
else if(document.getElementById("walletradio").checked)
{
	self.location=("payuMoney.php?user="+user+'&value='+value+'&name='+name+'&phone='+phone+'&email='+email+'&address='+address+'&city='+city+'&state='+state+'&Pincode='+Pincode+'&uid='+uid+'&sessionid='+sessionid);
}
else if(document.getElementById("cardradio").checked)
{
	self.location=("payuMoney.php?user="+user+'&value='+value+'&name='+name+'&phone='+phone+'&email='+email+'&address='+address+'&city='+city+'&state='+state+'&Pincode='+Pincode+'&uid='+uid+'&sessionid='+sessionid);
}
}