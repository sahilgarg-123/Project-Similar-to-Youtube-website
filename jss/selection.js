// JavaScript Document
function selection(selText)
{
	if(selText=="cash")
	{
		
		document.getElementById("walletradio").checked=false;
		document.getElementById("cardradio").checked=false;
	}
	else if(selText=="wallet")
	{
		document.getElementById("cashradio").checked=false;
		document.getElementById("cardradio").checked=false;
	}
	else if(selText=="card")
	{
		document.getElementById("cashradio").checked=false;
		document.getElementById("walletradio").checked=false;
	}
}