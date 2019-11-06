// JavaScript Document
function removeSubcat()
{
	var catt=$("#rcat1").val();
	var subcatt=$("#rcat2").val()
	
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
			alert("Related Subcategory and Category has been removed by you");
		}
	};
	xmlhttp.open("GET","removesubcat.php?catt="+catt+'&subcatt='+subcatt,true);
	xmlhttp.send();
	
}