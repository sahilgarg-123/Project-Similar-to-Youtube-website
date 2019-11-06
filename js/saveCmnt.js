// JavaScript Document
       
function saveComment(videoId,user)
{	

	var cmdBox=$("#cmtTxt").val();
	
	if(cmdBox=="")
		{
			alert("You can't leave blank comment Box");
		}
		else
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
		
     alert("Comment Saved");
	 $("#cmtTxt").val('');
		
    }
  };
  xmlhttp.open("GET","insertComment.php?videoId="+videoId+"&cmt="+cmdBox+"&user="+user,true);
  xmlhttp.send();
}
}
