// JavaScript Document
function savePtags()
{
	var tags=$("#seotag").val();
	var sr=$("#seop").val();
	var catt=$("#seocat").val();
	var subcat=$("#pseosubcat").val();
	alert(tags);
	
	
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
		alert("Your SEO tags spplied successfully !");
	}
};

xmlhttp.open("GET","savePtags.php?tags="+tags+'&sr='+sr+'&catt='+catt+'&subcat='+subcat,true);
xmlhttp.send();

}