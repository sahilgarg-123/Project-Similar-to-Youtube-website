// JavaScript Document
function addNew(one)
{
			
			var count=parseInt($("#value1").val());
			var sum=count+one;
			$("#value1").val(sum);
			
	
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
			if(sum==1)
			{
			document.getElementById("ibox1").innerHTML=this.responseText;
			}
			else if(sum==2)
			{
				document.getElementById("ibox2").innerHTML=this.responseText;
			}
			else if(sum==3)
			{
				document.getElementById("ibox3").innerHTML=this.responseText;
			}
			else if(sum==4)
			{
				document.getElementById("ibox4").innerHTML=this.responseText;
			}
			else if(sum==5)
			{
				document.getElementById("ibox5").innerHTML=this.responseText;
			}
		}
	};
	xmlhttp.open("GET","addNew.php?sum="+sum,true);
	xmlhttp.send();
	
}
