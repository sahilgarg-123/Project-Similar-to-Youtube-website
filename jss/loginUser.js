// JavaScript Document
function loginUser(){
	var mob=$("#mob").val();
	var pass=$("#pwd").val();
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
		if(responseText=="not")
		{
			alert("You are not registered to to signup page");
		}
		else if(responseText=="wrong")
		{
			alert("Wrong credential");
		}
		else if(responseText=="success")
		{
			alert("Successfully Login");
		}
	}
};
xmlhttp.open("GET","loginUserr.php?mob="+mob+'&pass='+pass,true);
xmlhttp.send();


}