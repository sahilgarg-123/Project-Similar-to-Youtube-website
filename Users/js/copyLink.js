// JavaScript Document
function copyLink(srr)
{
	$("#"+srr).css('visibility','visible');
	var copyText=$("#"+srr).select();	
	document.execCommand("copy");
	alert("Link Copied !");
	$("#"+srr).css('visibility','hidden');
}