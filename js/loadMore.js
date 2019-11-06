// JavaScript Document
// JavaScript Document
       
function loadMore(videoId2)
{	

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
		
 document.getElementById("loadmore").innerHTML=this.responseText; 
		
    }
  };
  xmlhttp.open("GET","loadMore.php?videoId="+videoId2,true);
  xmlhttp.send();
}
