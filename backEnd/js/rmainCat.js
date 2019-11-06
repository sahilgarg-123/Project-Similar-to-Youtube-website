// JavaScript Document
function rmainCat()
{
	var catt=$("#rcat").val();
	if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } 
  xmlhttp.onreadystatechange=function() 
   {
    if (this.readyState==4 && this.status==200) 
	{
      alert("Category has been remove, please Refresh to check"); 
	}
  };
  xmlhttp.open("GET","rmaincat.php?catt="+catt,true);
  xmlhttp.send();	
}