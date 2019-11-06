// JavaScript Document
function addCat()
{
	var catname=$("#catName").val();
	
	
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
      alert("You have Created a New Tag Successfully "); 
	}
  };
  xmlhttp.open("GET","addcatt.php?catt="+catname,true);
  xmlhttp.send();
}