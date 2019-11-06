// JavaScript Document
function saveFeedB()
{
	var mobb=$("#mobb").val();
	var msgg=$("#msgg").val();
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
			var status=this.responseText;
			if(status=="done")
			{
				alert("Your feedback is successfully submitted | Our operational team make a review on your feedback with in a while");
				self.location=("feedBack.php");
				$("#mobb").focus();
			}
			else
			{
				alert("You entered a wrong mobile no | Try with your registered mobile no");
				self.location=("feedBack.php");
				$("#mobb").focus();
			}
		}
	};
	xmlhttp.open("GET","insertFeedback.php?mobb="+mobb+'&msgg='+msgg,true);
	xmlhttp.send();
	
}